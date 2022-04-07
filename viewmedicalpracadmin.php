<?php
	session_start();
    include ("checksession.php");
include ("dbconnect.php");

$session = $_SESSION['user_username'];
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


    
    
    <?php
		// write the codes to select the book info
		$code = $_REQUEST['code'];
		$result = mysqli_query($conn, "select * from wings_user WHERE user_username = '$code'");
		$count = mysqli_num_rows($result);

		// if no records are found
		if(mysqli_num_rows($result) == 0) 
		{
		?>
			<div><p>No Records Found</p></div>
		<?php
		} 
			else{
				$row = mysqli_fetch_assoc($result);
			
				}
		?>
    
    <?php  	
    
					$sql="select * from wings_details where details_username='$code'";
					$resu=$conn->query($sql);
					if(empty(mysqli_num_rows($resu))){
						echo "session lost ERROR : $sql". $conn->error;
					}else{
						while($row=mysqli_fetch_assoc($resu)){
							$details_id		= $row["details_id"];
                            $details_username	= $row["details_username"];
							$details_name	= $row["details_name"];	
							$details_address		= $row["details_address"];	
							$details_phone	= $row["details_phone"];		
							$details_email		= $row["details_email"];					
						}
					}
          ?>
    
    
   
    
    
   <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" style="border: 1px solid white;">
          <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title" style="color:white;">User Details</h3>
          </div>
           <div class="col-lg-3 cta-btn-container text-center">
             
          </div>
          <hr style="border-top: 1px solid white;">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h5 class="cta-text"><b>Username :</b><br/><br/><?php echo  $details_username; ?></h5><br/>
              <h5 class="cta-text"><b>Name :</b><br/><br/><?php echo  $details_name; ?></h5><br/>
              <h5 class="cta-text"><b>Address :</b><br/><br/><?php echo  $details_address; ?></h5><br/>
              <h5 class="cta-text"><b>Phone :</b><br/><br/><?php echo  $details_phone; ?></h5><br/>
              <h5 class="cta-text"><b>Email :</b><br/><br/><?php echo  $details_email; ?></h5><br/>
              <!--<h5 class="cta-text"><b> Your Qualification:</b><br/><br/><// text?php echo  $medicalprac_qualification; ?></h5> 
              <h5 class="cta-text"><b> Your Year Of Experience In The Medical Field:</b><br/><br/><// text?php echo  $medicalprac_yearofex; ?></h5>
              <h5 class="cta-text"><b> Your Reason Of Joining The System:</b><br/><br/><// text?php echo  $medicalprac_reason; ?></h5>
          </div>
        </div>-->

      </div>
    </section><!-- End Call To Action Section -->
   

  

  <main id="main">





    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <h4 class="section-description" >Contact Us Through our email</h4>
            <h4 class="section-description" >Email - danialhaikalon0@gmail.com</h4>
        </div>
      </div>

   
    </section><!-- End Contact Section -->

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