<?php
$hide_navigation = true;
require_once("header.php");
?>

<main>
  <section class="amobic-waitlist-hero">
    <div class="amobic-waitlist-bg"></div>
    <div class="amobic-waitlist-overlay"></div>

    <div class="container">
      <a href="index.php" class="amobic-waitlist-logo" aria-label="Amobic Homes">
        <img src="assets/img/logo/amobic-logo-white-full.png" alt="Amobic Homes">
      </a>

      <div class="amobic-waitlist-hero-grid">
        <div class="amobic-waitlist-copy wow animate__fadeInUp">

          <h1>Cape Town's Most Anticipated Property & Lifestyle Platform</h1>

          <p>
            Be first. Early property owners and partners get guaranteed priority
            placement and reduced fees for Year 1.
          </p>

          <div class="amobic-waitlist-actions">
            <a href="#property-owner-waitlist" class="amobic-waitlist-primary">
              List Your Property
              <i class="bi bi-arrow-right"></i>
            </a>

            <a href="#partner-waitlist" class="amobic-waitlist-secondary">
              Partner With Us
            </a>
          </div>

          <div class="amobic-waitlist-proof">
            <i class="bi bi-shield-check"></i>
            <span>
              Already trusted by property owners in Atlantic Seaboard, Sea Point
              and Green Point.
            </span>
          </div>
        </div>

        <div class="amobic-waitlist-card wow animate__fadeInUp">
          <div class="amobic-waitlist-card-top">
            <span>Priority Access</span>
            <strong>Year 1</strong>
          </div>

          <h2>Join before the city-wide launch</h2>
          <p>
            Secure early visibility for your property, restaurant, spa, tour,
            or curated experience.
          </p>

          <div class="amobic-waitlist-card-list">
            <div>
              <i class="bi bi-stars"></i>
              <span>Reduced early partner fees</span>
            </div>
            <div>
              <i class="bi bi-geo-alt"></i>
              <span>Priority placement in Cape Town areas</span>
            </div>
            <div>
              <i class="bi bi-graph-up-arrow"></i>
              <span>Launch marketing exposure</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="amobic-waitlist-section" id="property-owner-waitlist">
    <div class="container">
      <div class="amobic-waitlist-section-head text-center">
        <span>Property Owner CTA</span>
        <h2>List Your Property — Join the Waiting List</h2>
        <p>
          Designed for owners, landlords, developers, and managers who want early
          access to Amobic's Cape Town property marketplace.
        </p>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-10">
          <form action="success.php" method="post" class="amobic-waitlist-form">
            <input type="hidden" name="waitlist_type" value="property_owner">

            <div class="row g-4">
              <div class="col-md-6">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your full name" required>
              </div>

              <div class="col-md-6">
                <label>Email</label>
                <input type="email" name="email" placeholder="you@example.com" required>
              </div>

              <div class="col-md-4">
                <label>Property Type</label>
                <select name="property_type" required>
                  <option value="">Select type</option>
                  <option value="apartment">Apartment</option>
                  <option value="house">House</option>
                  <option value="villa">Villa</option>
                  <option value="guest_house">Guest House</option>
                  <option value="portfolio">Property Portfolio</option>
                </select>
              </div>

              <div class="col-md-4">
                <label>Area</label>
                <input type="text" name="area" placeholder="Sea Point, Camps Bay..." required>
              </div>

              <div class="col-md-4">
                <label>Number of Units</label>
                <input type="number" name="number_of_units" min="1" placeholder="1" required>
              </div>

              <div class="col-12">
                <button type="submit" class="amobic-waitlist-submit">
                  Join Property Owner Waitlist
                  <i class="bi bi-arrow-right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="amobic-waitlist-section amobic-waitlist-partner-section" id="partner-waitlist">
    <div class="container">
      <div class="amobic-waitlist-split">
        <div class="amobic-waitlist-partner-copy">
          <span>Partner CTA</span>
          <h2>Partner Your Restaurant, Spa, or Experience</h2>
          <p>
            Connect with premium guests before they arrive. We are onboarding
            trusted lifestyle partners across Cape Town ahead of launch.
          </p>

          <div class="amobic-waitlist-mini-grid">
            <div>
              <strong>01</strong>
              <p>Restaurants and cafes</p>
            </div>
            <div>
              <strong>02</strong>
              <p>Spas and wellness studios</p>
            </div>
            <div>
              <strong>03</strong>
              <p>Tours and experiences</p>
            </div>
          </div>
        </div>

        <form action="success.php" method="post" class="amobic-waitlist-form amobic-waitlist-partner-form">
          <input type="hidden" name="waitlist_type" value="lifestyle_partner">

          <div class="amobic-waitlist-form-title">
            <h3>Apply as a launch partner</h3>
            <p>Tell us where you fit into the Amobic guest experience.</p>
          </div>

          <label>Business Name</label>
          <input type="text" name="business_name" placeholder="Your business name" required>

          <label>Email</label>
          <input type="email" name="email" placeholder="partner@example.com" required>

          <label>Category</label>
          <select name="category" required>
            <option value="">Select category</option>
            <option value="restaurant">Restaurant</option>
            <option value="spa">Spa</option>
            <option value="wellness">Wellness</option>
            <option value="experience">Experience</option>
            <option value="transport">Transport</option>
          </select>

          <label>Location</label>
          <input type="text" name="location" placeholder="Atlantic Seaboard, Green Point..." required>

          <button type="submit" class="amobic-waitlist-submit">
            Join Partner Waitlist
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require_once("footer.php"); ?>
