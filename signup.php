<?php require_once("header.php"); ?>
<main>
   <!-- BREADCRUMB SECTION START -->
        <div class="ul-breadcrumb">
            <div class="wow animate__fadeInUp">
                <h2 class="ul-breadcrumb-title">Onboarding Section...</h2>
                
            </div>
        </div>
        <!-- BREADCRUMB SECTION END -->

<section class="amobic-auth-section">
  <div class="amobic-auth-card">

    <div class="amobic-auth-header">

      <h1>Sign up or log in</h1>
      <p>Welcome to Amobic</p>
    </div>

    <form action="verify-code.php" method="get" class="amobic-auth-form">
      <div class="amobic-auth-group">
        <label>Email or phone number</label>
        <input type="text" name="login" placeholder="Enter email or phone number" required>
      </div>

      <button type="submit" class="amobic-auth-primary-btn">
        Continue
      </button>
    </form>

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


<?php require_once("footer.php"); ?>