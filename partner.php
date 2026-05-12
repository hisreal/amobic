<?php require_once("header2.php"); ?>

<section class="amobic-auth-section">
  <div class="amobic-auth-card amobic-partner-card">

    <div class="amobic-auth-header">
      <a href="index.html" class="amobic-auth-logo">
        <img src="assets/img/logo/amobic-logo-dark-full.png" alt="Amobic Luxury Stays">
      </a>

      <h1>Become a Partner</h1>
      <p>Let Amobic help you manage, market, and grow your property income.</p>
    </div>

<form action="success.php" method="post" enctype="multipart/form-data" class="amobic-auth-form">
      <div class="amobic-auth-group">
        <label>Full name</label>
        <input type="text" name="full_name" placeholder="Enter your full name" required>
      </div>

      <div class="amobic-auth-row">
        <div class="amobic-auth-group">
          <label>Email address</label>
          <input type="email" name="email" placeholder="you@example.com" required>
        </div>

        <div class="amobic-auth-group">
          <label>Phone number</label>
          <input type="tel" name="phone" placeholder="+27" required>
        </div>
      </div>

      <div class="amobic-auth-group">
        <label>Property location</label>
        <input type="text" name="property_location" placeholder="Cape Town, Camps Bay, Sea Point" required>
      </div>

      <div class="amobic-auth-row">
        <div class="amobic-auth-group">
          <label>Property type</label>
          <select name="property_type" required>
            <option value="">Select type</option>
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
            <option value="villa">Villa</option>
            <option value="studio">Studio</option>
            <option value="cabin">Cabin</option>
          </select>
        </div>

        <div class="amobic-auth-group">
          <label>Bedrooms</label>
          <select name="bedrooms" required>
            <option value="">Select bedrooms</option>
            <option value="1">1 Bedroom</option>
            <option value="2">2 Bedrooms</option>
            <option value="3">3 Bedrooms</option>
            <option value="4+">4+ Bedrooms</option>
          </select>
        </div>
      </div>

      <div class="amobic-auth-group">
        <label>What do you need help with?</label>
        <select name="support_needed" required>
          <option value="">Select option</option>
          <option value="full_management">Full property management</option>
          <option value="listing_marketing">Listing and marketing</option>
          <option value="pricing_strategy">Pricing strategy</option>
          <option value="not_sure">I am not sure yet</option>
        </select>
      </div>

      <div class="amobic-auth-group">
        <label>Upload property photos</label>

        <label class="amobic-upload-box" id="uploadBox">
          <input type="file" name="property_images[]" id="propertyImages" multiple accept="image/*">

          <div class="amobic-upload-content">
            <i class="bi bi-cloud-arrow-up"></i>
            <h4>Upload property images</h4>
            <p>Add clear photos of the living room, bedrooms, bathrooms, kitchen, and outdoor spaces.</p>
            <span>PNG, JPG, WEBP • Multiple images allowed</span>
          </div>
        </label>

        <div class="amobic-image-preview" id="imagePreview"></div>
      </div>

      <div class="amobic-auth-group">
        <label>Message</label>
        <textarea name="message" placeholder="Tell us briefly about your property"></textarea>
      </div>

      <button type="submit" class="amobic-auth-primary-btn">
        Submit Partnership Request
      </button>

    </form>

    <p class="amobic-auth-policy">
      By submitting, you agree that Amobic may contact you about your property.
    </p>

  </div>
</section>

<?php require_once("footer2.php"); ?>