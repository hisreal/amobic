<?php
$conn = new mysqli("localhost", "root", "", "amobic_homes");

if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}
?>