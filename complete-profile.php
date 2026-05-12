<?php require_once("header2.php"); ?>

<section class="amobic-auth-section">
  <div class="amobic-auth-card">

    <div class="amobic-auth-header">
      <a href="index.html" class="amobic-auth-logo">
        <img src="assets/img/logo/amobic-logo-dark-full.png" alt="Amobic">
      </a>

      <h1>Complete your profile</h1>
      <p>Add your name and create a password.</p>
    </div>

   <form action="welcome.php" method="get" class="amobic-auth-form">

  <div class="amobic-auth-group">
    <label>Full name</label>
    <input type="text" name="full_name" placeholder="Enter your full name" required>
  </div>

  <div class="amobic-auth-row">

    <div class="amobic-auth-group">
      <label>Gender</label>

      <select name="gender" required>
        <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="prefer_not_to_say">Prefer not to say</option>
      </select>
    </div>

    <div class="amobic-auth-group">
      <label>Date of birth</label>
      <input type="date" name="dob" required>
    </div>

  </div>

  <div class="amobic-auth-group">
    <label>Password</label>

    <div class="amobic-password-field">
      <input type="password" name="password" id="password" placeholder="Create password" required>

      <button type="button" onclick="togglePassword('password', this)">
        <i class="bi bi-eye"></i>
      </button>
    </div>
  </div>

  <div class="amobic-auth-group">
    <label>Confirm password</label>

    <div class="amobic-password-field">
      <input type="password" name="confirm_password" id="confirmPassword" placeholder="Confirm password" required>

      <button type="button" onclick="togglePassword('confirmPassword', this)">
        <i class="bi bi-eye"></i>
      </button>
    </div>
  </div>

  <button type="submit" class="amobic-auth-primary-btn">
    Continue to Amobic
  </button>

</form>

  </div>
</section>





<?php require_once("footer2.php"); ?>