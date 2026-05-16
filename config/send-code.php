<?php

session_start();
require "dbh.php";

header("Content-Type: application/json");

function jsonResponse($status, $message, $redirect = null) {
    echo json_encode([
        "status" => $status,
        "message" => $message,
        "redirect" => $redirect
    ]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    jsonResponse("error", "Invalid request method.");
}


/* SIGNUP */
if (isset($_POST["signup"])) {

    $email = trim($_POST["email"]);

    if (empty($email)) {
        jsonResponse("error", "Email address is required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        jsonResponse("error", "Invalid email address.");
    }

    $code = rand(100000, 999999);
    $expires = date("Y-m-d H:i:s", strtotime("+10 minutes"));
    $_SESSION["test_verification_code"] = $code;
    $stmt = $conn->prepare("
        INSERT INTO amobic_users (email, verification_code, code_expires_at)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE
        verification_code = VALUES(verification_code),
        code_expires_at = VALUES(code_expires_at)
    ");

    $stmt->bind_param("sss", $email, $code, $expires);

    if (!$stmt->execute()) {
        jsonResponse("error", "Unable to create verification code.");
    }

    $_SESSION["pending_email"] = $email;

    /* =========================================
    EMAIL SENDING DISABLED TEMPORARILY
 ========================================= */
 
 /*
   Email sending is currently disabled.
 
   PHPMailer will be added later.
 
   For now, the verification code is created,
   saved in the database,
   and returned for testing.
 */
 
 /*
 $subject = "Your Amobic Verification Code";
 $message = "Your verification code is: " . $code;
 $headers = "From: no-reply@amobichomes.com";
 
 $mailSent = mail($email, $subject, $message, $headers);
 
 if (!$mailSent) {
     jsonResponse(
         "error",
         "Verification code created, but email could not be sent."
     );
 }
 */
 
 
 /* =========================================
    TEMPORARY DEVELOPMENT RESPONSE
 ========================================= */
 
 jsonResponse(
     "success",
     "Verification code created successfully. Test code: " . $code,
     "verify-code.php"
 );
}


/* VERIFY CODE */
if (isset($_POST["verification_code"])) {

    if (!isset($_SESSION["pending_email"])) {
        jsonResponse("error", "Session expired. Please start registration again.");
    }

    $email = $_SESSION["pending_email"];
    $code = trim($_POST["verification_code"]);

    if (empty($code)) {
        jsonResponse("error", "Verification code is required.");
    }

    if (!preg_match("/^[0-9]{6}$/", $code)) {
        jsonResponse("error", "Verification code must be 6 digits.");
    }

    $stmt = $conn->prepare("
        SELECT id FROM amobic_users
        WHERE email = ?
        AND verification_code = ?
        AND code_expires_at > NOW()
        LIMIT 1
    ");

    $stmt->bind_param("ss", $email, $code);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows !== 1) {
        jsonResponse("error", "Invalid or expired verification code.");
    }

    $update = $conn->prepare("
        UPDATE amobic_users
        SET email_verified = 1,
            verification_code = NULL,
            code_expires_at = NULL
        WHERE email = ?
    ");

    $update->bind_param("s", $email);

    if (!$update->execute()) {
        jsonResponse("error", "Unable to verify email.");
    }

    jsonResponse("success", "Email verified successfully.", "complete-profile.php");
}


/* SAVE USER PROFILE */
if (isset($_POST["save-user"])) {

    if (!isset($_SESSION["pending_email"])) {
        jsonResponse("error", "Session expired. Please start registration again.");
    }

    $email = $_SESSION["pending_email"];

    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $phone = trim($_POST["phone"]);
    $sex = trim($_POST["sex"]);
    $dob = trim($_POST["dob"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (
        empty($first_name) ||
        empty($last_name) ||
        empty($phone) ||
        empty($sex) ||
        empty($dob) ||
        empty($password) ||
        empty($confirm_password)
    ) {
        jsonResponse("error", "All fields are required.");
    }

    if ($password !== $confirm_password) {
        jsonResponse("error", "Password and confirm password do not match.");
    }

    if (strlen($password) < 8) {
        jsonResponse("error", "Password must be at least 8 characters.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("
        UPDATE amobic_users
        SET first_name = ?,
            last_name = ?,
            phone = ?,
            password = ?,
            sex = ?,
            dob = ?
        WHERE email = ?
        AND email_verified = 1
    ");

    $stmt->bind_param(
        "sssssss",
        $first_name,
        $last_name,
        $phone,
        $hashed_password,
        $sex,
        $dob,
        $email
    );

    if (!$stmt->execute()) {
        jsonResponse("error", "Something went wrong. Please try again.");
    }

    unset($_SESSION["pending_email"]);

    jsonResponse("success", "Profile completed successfully.", "login.php");
}


/* LOGIN USER */
if (isset($_POST["login-user"])) {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        jsonResponse("error", "Email and password are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        jsonResponse("error", "Please enter a valid email address.");
    }

    $stmt = $conn->prepare("
        SELECT id, first_name, last_name, email, password, email_verified
        FROM amobic_users
        WHERE email = ?
        LIMIT 1
    ");

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows !== 1) {
        jsonResponse("error", "Invalid email or password.");
    }

    $user = $result->fetch_assoc();

    if ($user["email_verified"] != 1) {
        jsonResponse("error", "Please verify your email before logging in.");
    }

    if (!password_verify($password, $user["password"])) {
        jsonResponse("error", "Invalid email or password.");
    }

    $_SESSION["guest_id"] = $user["id"];
    $_SESSION["guest_email"] = $user["email"];
    $_SESSION["guest_name"] = $user["first_name"] . " " . $user["last_name"];
    $_SESSION["logged_in"] = true;

    jsonResponse("success", "Login successful.", "user/dashboard.php");
}

jsonResponse("error", "No valid action found.");