<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        $propertyName = "Sand Cabin";
        $locationName = "Cape Town";
        $propertyType = "Luxury Cabin";
        $sleeps = "4 Guests";
        $priceFrom = "3500";
        $currency = "ZAR";
        $pageUrl = "https://www.amobic.com/property/sand-cabin";
        $imageUrl = "https://www.amobic.com/assets/img/property/sand-cabin-main.jpg";
        $metaTitle = "$propertyName in $locationName | $propertyType for $sleeps | Amobic";
        $metaDescription = "Book $propertyName, a curated $propertyType in $locationName for $sleeps. Enjoy refined interiors, prime location, seamless booking, and a memorable Amobic stay.";
    ?>

    <title><?php echo $metaTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Amobic">
    <link rel="canonical" href="<?php echo $pageUrl; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $metaTitle; ?>">
    <meta property="og:description" content="<?php echo $metaDescription; ?>">
    <meta property="og:image" content="<?php echo $imageUrl; ?>">
    <meta property="og:url" content="<?php echo $pageUrl; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Amobic">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $metaTitle; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $imageUrl; ?>">
       <link rel="icon" href="assets/img/images/favicon.png" type="image/png">

    <!-- libraries CSS -->
    <link rel="stylesheet" href="assets/icon/flaticon_real_estate.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="assets/vendor/animate-wow/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- custom CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime('assets/css/style.css');?>">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LodgingBusiness",
      "name": "<?php echo $propertyName; ?>",
      "description": "<?php echo $metaDescription; ?>",
      "url": "<?php echo $pageUrl; ?>",
      "image": "<?php echo $imageUrl; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?php echo $locationName; ?>",
        "addressCountry": "South Africa"
      },
      "priceRange": "<?php echo $currency . ' ' . $priceFrom; ?>",
      "brand": {
        "@type": "Brand",
        "name": "Amobic"
      },
      "amenityFeature": [
        {
          "@type": "LocationFeatureSpecification",
          "name": "Refined Interiors",
          "value": true
        },
        {
          "@type": "LocationFeatureSpecification",
          "name": "Prime Location",
          "value": true
        },
        {
          "@type": "LocationFeatureSpecification",
          "name": "Professional Management",
          "value": true
        }
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.amobic.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Properties",
          "item": "https://www.amobic.com/properties"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "<?php echo $propertyName; ?>",
          "item": "<?php echo $pageUrl; ?>"
        }
      ]
    }
    </script>
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- SIDEBAR SECTION START -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="index.html">
                    <img src="assets/img/logo/amobic-logo-dark-full.png" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block"></div>


        

    </div>
    <!-- SIDEBAR SECTION END -->

    <!-- SEARCH MODAL SECTION START -->
    <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div>
    <!-- SEARCH MODAL SECTION END -->

    <!-- HEADER SECTION START -->
    <header class="ul-header ul-header--home">
        <div class="ul-header-bottom">
            <div class="ul-header-bottom-wrapper">
                <!-- header left -->
                <div class="header-bottom-left">
                    <div class="logo-container">
                        <a href="index.html" class="d-inline-block"><img src="assets/img/logo/amobic-logo-white-full.png" alt="logo" class="logo"></a>
                    </div>
                </div>

                <!-- header nav -->
                <div class="ul-header-nav-wrapper">
                    <div class="to-go-to-sidebar-in-mobile">
                        <nav class="ul-header-nav">
                            <div class="has-sub-menu">
                                <a role="button">Home</a>

                                <div class="ul-header-submenu">
                                    <ul>
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="about.html">About</a>
                            <div class="has-sub-menu">
                                <a role="button">Property</a>

                                <div class="ul-header-submenu">
                                    <ul>
                                        <li><a href="projects.html">Properties</a></li>
                                        <li><a href="project-details.html">Property Details</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="has-sub-menu">
                                <a role="button">Pages</a>

                                <div class="ul-header-submenu">
                                    <ul>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="how-it-works.html">How it works Page</a></li>
                                        <li><a href="pricing.html">Pricing Page</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="has-sub-menu">
                                <a role="button">Blog</a>

                                <div class="ul-header-submenu">
                                    <ul>
                                        <li><a href="blog.html">Blogs</a></li>
                                        <li><a href="blog-2.html">Blog layout 2</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="contact.html">Contact</a>
                        </nav>
                    </div>
                </div>

                <!-- actions -->
                <div class="ul-header-actions">
                    <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
                    <button><i class="flaticon-user"></i></button>
                    <a href="#" class="add-property-btn d-xxs-none"><i class="flaticon-home"></i> Add Property</a>
                    <button class="ul-header-sidebar-opener d-lg-none">
                        <i class="flaticon-menu-button"></i>
                    </button>              
              </div>

                <!-- sidebar opener -->
                <div class="d-none">
                    <button class="ul-header-sidebar-opener"><i class="flaticon-menu-button"></i></button>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->