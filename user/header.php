<?php 
 require_once('session.php');
require_ONCE("../config/dbh.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  

    <title>Dashboard</title>
  
    <meta name="author" content="Amobic">
    <link rel="canonical" href="<?php echo $pageUrl; ?>">

    

   
       <link rel="icon" href="../assets/img/images/favicon.png" type="image/png">

    <!-- libraries CSS -->
    <link rel="stylesheet" href="../assets/icon/flaticon_real_estate.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/vendor/slim-select/slimselect.css">
    <link rel="stylesheet" href="../assets/vendor/animate-wow/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- custom CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo filemtime('../assets/css/style.css');?>">
    <!-- Structured Data -->
 
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <main>
      
<div class="amobic-auth-topbar">
  <button type="button" class="amobic-back-btn" onclick="history.back()">
    <i class="bi bi-arrow-left"></i>
  </button>
</div>


<div class="amobic-dashboard">

    <header class="amobic-dashboard-navbar">
      <div style="margin-bottom: -30px;" class="amobic-dashboard-logo">
      <a href="dashboard.php"  class="amobic-auth-logo">
        <img style="width: 50px" src="../assets/img/images/favicon.png" alt="Amobic">
      </a>
      </div>

      <nav class="amobic-desktop-nav">
        <a href="dashboard.php" class="active">My Bookings</a>
        <a href="saved-home.php">Save Homes</a>
        <a href="profile.php">My Profile</a>
        <a href="password.php">Change Password</a>
        <a href="logout.php">Logout</a>
      </nav>

      <div class="amobic-navbar-right">
        <a href="dashboard.php" class="amobic-switch-link">Switch to Landlord</a>

        <div class="amobic-user-avatar">
          A
        </div>

        <button class="amobic-mobile-menu-btn" id="openSidebar">
          <i class="bi bi-list"></i>
        </button>
      </div>
    </header>

    <aside class="amobic-mobile-sidebar" id="mobileSidebar">
      <div class="amobic-sidebar-head">
      <img style="width: 50px" src="../assets/img/images/favicon.png" alt="Amobic">

        <button id="closeSidebar">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <nav class="amobic-sidebar-menu">
        <a href="dashboard.php"  class="active"><i class="bi bi-calendar3"></i> My Bookings </a>
        <a href="saved-home.php"><i class="bi bi-house-door"></i> Saved Homes </a>
        <a href="profile.php"><i class="bi bi-person"></i> Profile</a>
        <a href="password.php"><i class="bi bi-lock"></i> Password</a>
        <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </nav>
    </aside>