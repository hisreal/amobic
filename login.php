<?php require_once("header2.php"); ?>

<section class="amobic-auth-section">
  <div class="amobic-auth-card">

    <div class="amobic-auth-header">
        <a href="index.html" class="amobic-auth-logo">
          <img src="assets/img/logo/amobic-logo-dark-full.png" alt="Amobic">
        </a>
      <h1>Log in</h1>
    </div>

    <form action="verify-code.php" method="get" class="amobic-auth-form">
      <div class="amobic-auth-group">
        <label>Email or phone number</label>
        <input type="text" name="login" placeholder="Enter email or phone number" required>
      </div>

       <div class="amobic-auth-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required>
      </div>

      <button type="submit" class="amobic-auth-primary-btn">
        Continue
      </button>
    </form>
   <div class="amobic-auth-footer">
    <p>
     You dont have an account?
      <a href="signup.php">Sign up</a>
    </p>
  </div>
    <div class="amobic-auth-divider">
      <span>or</span>
    </div>

    <div class="amobic-social-login">
      <button type="button">
        <i class="bi bi-google"></i>
        Continue with Google
      </button>

      <button type="button">
        <i class="bi bi-apple"></i>
        Continue with Apple
      </button>
    </div>

    <p class="amobic-auth-policy">
      By continuing, you agree to Amobic’s
      <a href="#">Terms of Service</a> and
      <a href="#">Privacy Policy</a>.
    </p>

  </div>
</section>


<?php require_once("footer2.php"); ?>