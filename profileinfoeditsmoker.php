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
        <a href="indexsmoker.php"><img src="assets/img/wings2.png"  alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="indexsmoker.php">Home</a></li>
          <li><a href="indexsmoker.php">About Us</a></li>
                      <li><a href="indexsmoker.php">Team</a></li>
         <li class="menu-has-children"><a href="">Smoker Details</a>
              
            <ul>
              <li class="menu-has-children"><a href="personaldetailsmoker.php">Personal Detail</a>  
                 <ul>
              <li><a href="personaldetailsmoker.php">Personal Info</a></li>
                     <li><a href="personaldetail2smoker.php">Login Info</a></li>
                </ul></li>
              <li class="menu-has-children"><a href="smokerschedulesmoker.php">Schedule</a></li>
                <li><a href="#">History</a>
                      <ul>
                  <li><a href="smokersmokinghistorysmoker.php">Smoking History</a></li>
                  <li><a href="smokersmedicationhistorysmoker.php">Medication History</a></li>
                </ul></li>
              <li><a href="smokerssmokingreportsmoker.php">Smoking Report</a></li>
              <li><a href="smokersmokerreportsmoker.php">Smoker Report</a></li>
              
            </ul>
          </li>
               
          <li><a href="indexsmoker.php">Contact Us</a></li>
          <li><a href="logout.php">Log Out</a></li>
          <li><a ><?php echo $_SESSION['user_username'] ?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->
<?php  	
					$sql="select * from wings_details where details_username='$session'";
					$resu=$conn->query($sql);
					if(empty(mysqli_num_rows($resu))){
						echo "session lost ERROR : $sql". $conn->error;
					}else{
						while($row=mysqli_fetch_assoc($resu)){
							$details_id		= $row["details_id"];
							$details_name	= $row["details_name"];	
                            $details_username	= $row["details_username"];
							$details_address		= $row["details_address"];	
							$details_phone	= $row["details_phone"];		
							$details_email		= $row["details_email"];					
						}
					}
          ?>
    
    <?php
          
          if(isset($_POST['submit'])) {
              if(isset($_POST['edit'])){ 
              $details_id			= $_POST['edit'];
              $details_username 	= $_POST['username'];
              $details_name 	= $_POST['name'];  
              $details_address 	= $_POST['address']; 
              $details_phone 	= $_POST['phone'];  
              $details_email 	= $_POST['email'];  
              
              
            $sql="select * from wings_details where details_id='$details_id'";
		$resul=$conn->query($sql);
              
					$queryu ="update wings_details set details_username='$details_username',details_name='$details_name',details_address='$details_address',details_phone='$details_phone',
                    details_email='$details_email' where details_id = '$details_id' ";
					$inuser = mysqli_query($conn,$queryu);
				
              }
}
		?>
   <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" style="border: 1px solid white;">
          <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title" style="color:white;">Personal Info</h3>
          </div>
          <form name="editprofile2" enctype="multipart/form-data" action="profileinfoeditsmoker.php" method="post">
           <div class="col-lg-3 cta-btn-container text-center">
               
            <button class="cta-btn align-center" name="submit" type="submit"  style="margin-right:120px;background-color:black;">Submit</button>
        
          </div>
          <hr style="border-top: 1px solid white;">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
              <h5 class="cta-text"><b>Name :</b><br/><br/></h5><input type="name" class="form-control" value="<?php echo $details_name; ?>" name="name" style="width:330px;border-color:black;"><br/>
              <h5 class="cta-text"><b>Address :</b><br/><br/></h5><input type="text" class="form-control" value="<?php echo $details_address; ?>" name="address" style="width:330px;border-color:black;"><br/>
              <h5 class="cta-text"><b>Phone :</b><br/><br/></h5><input type="phone"  class="form-control" value="<?php echo $details_phone; ?>" name="phone" style="width:330px;border-color:black;"><br/>
              <h5 class="cta-text"><b>Email :</b><br/><br/></h5><input type="email" class="form-control" value="<?php echo $details_email; ?>" name="email" style="width:330px;border-color:black;"><br/>
              <input type="hidden" name="edit" value="<?php echo $details_id; ?>" style="color:black;">
              <input type="hidden" name="username" value="<?php echo $details_username; ?>" style="color:black;">
              </form>
               </div>
          </div>
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