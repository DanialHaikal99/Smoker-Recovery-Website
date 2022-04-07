<?php
	session_start();
    include ("checksession.php");
include ("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quit Smoking Social Support</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Regna - v2.1.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="indexadmin.php"><img src="assets/img/wings2.png"  alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="indexadmin.php">Home</a></li>
            <li><a href="indexadmin.php">Utilization History</a></li>
          <li><a href="indexadmin.php">About Us</a></li>
                      <li><a href="indexadmin.php">Team</a></li>
             <li class="menu-has-children"><a href="">User Details</a>
            <ul>
              <li class="menu-has-children"><a href="listofsmokersmenuadmin.php">List Of Smokers</a></li>
                 <li class="menu-has-children"><a href="listofsocialsuppsmenuadmin.php">List Of Social Supporters</a>
                     <li class="menu-has-children"><a href="listofmedicalpracsmenuadmin.php">List Of Medical Practitioners</a>
            </ul>
          </li>
            <li class="menu-has-children" ><a href="adduser.php">Add User</a>
            <ul>
                <li><a href="adduser.php">Add Smoker</a></li>
                <li><a href="addsocialsupp.php">Add Social Supporter</a></li>
                <li><a href="addmedicalprac.php">Add Medical Practitioner</a></li>
            </ul>
            </li>
          <li><a href="logout.php">Log Out</a></li>
          <li><a ><?php echo $_SESSION['user_username'] ?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->  
    </div>
  </header><!-- End Header -->

    
   
 <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
            <h3 class="cta-title">List Of Smokers In The System</h3>
            
        </div>
<h5 class="section-title" style="color:white;">From Recent To Oldest</h5>
          <p class="cta-text" style="color:yellow;">Please note that if you delete the user, the user will be deleted permanently in the system and the user will not be able to log-in.</p>
      </div>
   
    </section>
    
     <?php
          
       
    
                $sql = "select * from wings_user where user_type = 'smoker' order by user_id desc";
                 $result = mysqli_query($conn, $sql);
		         $count = mysqli_num_rows($result);

              
              
              
              
		// if no records are found
		if(mysqli_num_rows($result) == 0) 
		{
            
		?>
            
			<div><p>No Records Found</p></div>
            
		<?php
            
		} 
			
		else{
			// if got records found use looping to display the results
			while($row = mysqli_fetch_assoc($result)) {
	
			
          ?>
    <section id="call-to-action" >
      <div class="container" style="border: 2px dashed white;">
        <div class="row" data-aos="zoom-in">
            
          <div class="col-lg-9 text-center text-lg-left">
            <h4 class="cta-text"><?php echo $row['user_username']; ?></h4>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="viewsmokeradmin.php?code=<?php echo $row['user_username'];?> ">View Details</a>
              <a class="cta-btn align-middle" style="background-color:red;" href="deletesmoker.php?del=<?php echo $row['user_username'];?>  ">Delete User</a>
          </div>
            
        </div>

      </div>
   
    </section>
    
    
    
              <?php } }?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>