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
    

      <h1>Confirm your code</h1>
      <p>Enter the 6 digit code sent to your email or phone.</p>
    </div>

    <form action="complete-profile.php" method="get" class="amobic-auth-form">
      <div class="amobic-code-inputs">
        <input type="text" maxlength="1" required>
        <input type="text" maxlength="1" required>
        <input type="text" maxlength="1" required>
        <input type="text" maxlength="1" required>
        <input type="text" maxlength="1" required>
        <input type="text" maxlength="1" required>
      </div>

      <button type="submit" class="amobic-auth-primary-btn">
        Verify and Continue
      </button>
    </form>

    <p class="amobic-auth-policy">
      Did not get a code?
      <a href="#">Resend code</a>
    </p>

  </div>
</section>



<?php require_once("footer.php"); ?>