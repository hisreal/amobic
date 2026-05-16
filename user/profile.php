<?php require_once("header.php"); ?>


<div class="amobic-sidebar-overlay" id="sidebarOverlay"></div>

<main class="amobic-dashboard-main">

    <section class="amobic-profile-section">

        <div class="amobic-profile-card">
      
          <div class="amobic-profile-header">
      
            <div class="amobic-profile-avatar-wrap">
      
              <img
                src="../assets/img/logo/placeholder.jpg"
                alt="Profile"
                class="amobic-profile-avatar"
              >
      
              <label class="amobic-profile-upload">
                <input type="file" hidden>
                <i class="bi bi-camera"></i>
              </label>
      
            </div>
      
            <div class="amobic-profile-header-txt">
              <h3>Profile Settings</h3>
              <p>
                Manage your personal information and account details.
              </p>
            </div>
      
          </div>
      
      
          <form action="update-profile.php" method="post" class="amobic-profile-form">
      
            <div class="row ul-bs-row">
      
              <div class="col-md-4">
                <div class="amobic-profile-group">
                  <label>First Name</label>
                  <input type="text" name="first_name" value="John">
                </div>
              </div>
      
              <div class="col-md-4">
                <div class="amobic-profile-group">
                  <label>Last Name</label>
                  <input type="text" name="last_name" value="Doe">
                </div>
              </div>
      
              <div class="col-md-4">
                <div class="amobic-profile-group">
                  <label>Email Address</label>
                  <input type="email" name="email" value="john@example.com">
                </div>
              </div>
      
              <div class="col-md-4">
                <div class="amobic-profile-group">
                  <label>Phone Number</label>
                  <input type="text" name="phone" value="+234 800 000 0000">
                </div>
              </div>
      
              <div class="col-md-4">
                <div class="amobic-profile-group">
                  <label>Gender</label>
      
                  <select name="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
      
                </div>
              </div>
      
              <div class="col-md-4">
                <div class="amobic-profile-group">
                  <label>Date of Birth</label>
                  <input type="date" name="dob">
                </div>
              </div>

              <div class="col-md-4">
                <div class="amobic-profile-group">
                    <label>Preferred Currency</label>

                    <select name="preferred_currency" required>
                    <option value="USD">USD - US Dollar</option>
                    <option value="GBP">GBP - British Pound</option>
                    <option value="EUR">EUR - Euro</option>
                    <option value="NGN">NGN - Nigerian Naira</option>
                    <option value="ZAR">ZAR - South African Rand</option>
                    </select>
                </div>
                </div>

                <div class="col-md-4">
                <div class="amobic-profile-group">
                    <label>Preferred Language</label>

                    <select name="preferred_language" required>
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                    <option value="pt">Portuguese</option>
                    </select>
                </div>
                </div>

              <div class="col-12">
                <div class="amobic-profile-group">
                  <label>Bio</label>
      
                  <textarea
                    name="bio"
                    rows="5"
                    placeholder="Tell us about yourself..."
                  ></textarea>
      
                </div>
              </div>
      
            </div>
      
      
            <div class="amobic-profile-actions">
      
              <button type="submit" class="ul-btn">
                Save Changes
              </button>
      
            </div>
      
          </form>
      
        </div>
      
      </section>
    

</main>


<?php require_once("footer.php"); ?>