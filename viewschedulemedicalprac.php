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
        <a href="indexmedicalprac.php"><img src="assets/img/wings2.png"  alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="indexmedicalprac.php">Home</a></li>
          <li><a href="indexmedicalprac.php">About Us</a></li>
                      <li><a href="indexmedicalprac.php">Team</a></li>
         <li class="menu-has-children"><a href="">Smoker Details</a>
              
            <ul>
              <li class="menu-has-children"><a href="listofsmokersmenumedicalprac.php">List Of Smokers</a></li>
            </ul>
          </li>
            <li class="menu-has-children"><a href="personaldetailmedicalprac.php">Personal Detail</a>  
                 <ul>
              <li><a href="personaldetailmedicalprac.php">Personal Info</a></li>
                  <li><a href="personaldetail2medicalprac.php">Occupation Info</a></li>
                     <li><a href="personaldetail3medicalprac.php">Login Info</a></li>
                </ul></li>    
          <li><a href="indexmedicalprac.php">Contact Us</a></li>
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
    
					$sql="select * from Wings_Schedule where ScheduleUsername='$code'";
					$resu=$conn->query($sql);
					if(empty(mysqli_num_rows($resu))){
						echo "session lost ERROR : $sql". $conn->error;
					}else{
						while($row=mysqli_fetch_assoc($resu)){
							$ScheduleID		= $row["ScheduleID"];
                            $ScheduleUsername	= $row["ScheduleUsername"];
							$ScheduleName	= $row["ScheduleName"];	
							$ScheduleDesc		= $row["ScheduleDesc"];					
						}
					}
          ?>
    
          
    
     <?php
          
          if(isset($_POST['submit'])) {
              if(isset($_POST['edit'])){ 
             $ScheduleID	= $_POST['edit'];
             $ScheduleDesc		= $_POST['smoke'];
              
              
            $sql="select * from Wings_Schedule where ScheduleID='$ScheduleID'";
		$resul=$conn->query($sql);
              
					$queryu ="update Wings_Schedule set ScheduleDesc=' $ScheduleDesc' where ScheduleID = '$ScheduleID' ";
					$inuser = mysqli_query($conn,$queryu);
				
              }
}
		?>
   <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action">
      <div class="container" style="border: 1px solid white;">
          <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title" style="color:white;">Smoker's Schedule</h3>
          </div>
          
          <hr style="border-top: 1px solid white;">
        <div class="row" data-aos="zoom-in">
            
          <div class="col-lg-9 text-center text-lg-left">
               <h5 class="cta-text" style="color:white;"><b>View Smoker Schedule</b></h5><br/>
              
            <h5 class="cta-text"><b>Username :</b><br/><br/><?php echo $ScheduleUsername; ?></h5><br/>
              <h5 class="cta-text"><b>Name :</b><br/><br/><?php echo  $ScheduleName; ?></h5><br/>
              <h5 class="cta-text"><b>Schedule :</b><br/><br/><?php echo  $ScheduleDesc; ?></h5><br/>
              
            
            </div>
             
            
            
      </div>
             <hr style="border-top: 1px solid white;">
          <div class="col-lg-9 text-center text-lg-left">
               <h5 class="cta-text" style="color:white;"><b>Edit Smoker Schedule</b></h5><br/>
              
           <form name="editsmokerreport" enctype="multipart/form-data" action="viewschedulemedicalprac.php?code=<?php echo $code;?>" method="post">
              <h5 class="cta-text"><b>Schedule</b><br/><br/><textarea  type="name" style="width:600px;height:200px;" class="form-control"  name="smoke" style="width:330px;border-color:black;"><?php echo  $ScheduleDesc; ?></textarea></h5><br/>
           
            <button class="cta-btn align-center" name="submit" type="submit"  style="margin-right:100px;background-color:black;">Submit</button>
        <input type="hidden" name="edit" value="<?php echo $ScheduleID; ?>" style="color:black;">
              </form>
              
            
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