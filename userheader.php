<?php include 'connection.php' ;
extract($_GET);


?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="topnav">
		<a href="userhome.php">Home</a>
		<a href="user_register.php">Register</a>
		<a href="userview_category.php">View category</a>
		<a href="userview_bookings.php">View bookings</a>
		<a href="userview_food.php">View food</a>
		<a href="userview_foodbooking.php">View food bookings</a>
		<a href="usersend_complaints.php">Send complaints</a>
		<a href="usersend_enquery.php">Send enquery</a>
		<a href="userview_locker.php">View locker</a>
		<a href="userview_locker_request.php">View locker request</a>
		
		<a href="login.php">Logout</a>
	</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MeFamily Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Park Ticket Booking</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="userhome.php">Home</a></li>
          <!-- <li><a href="user_register.php">Register</a></li> -->
         <!--  <li><a href="events.html">Events</a></li>
          <li><a href="gallery.html">Gallery</a></li> -->
           <li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="userview_category.php">View category</a></li>
             <!--  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
             <li><a href="userview_bookings.php">View bookings</a></li>
              <li><a href="userview_food.php">view food</a></li>
              <li><a href="userview_foodbooking.php">View foodbookings</a>
              <li><a href="userview_locker.php">View locker</a>
              <li><a href="userview_locker_request.php">View locker request</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Send</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="usersend_complaints.php">send complaints</a></li>
             <!--  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="usersend_enquery.php">send enquery</a></li>
              <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          
          <li><a href="login.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 <!--  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
       <!--  <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)" width>
        </div> -->

        <!-- Slide 2 -->
       <!--  <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        </div> -->
<!-- 
        Slide 3 -->
       <!--  <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        </div>
 -->
     <!--  </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section> --> <!-- End Hero -->
  <style type="text/css">
    


    h3{
        color:white;
    }
   
</style>

 