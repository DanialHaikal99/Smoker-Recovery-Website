<?php
	session_start();
    include ("checksession.php");
include ("dbconnect.php");{
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
     <style>
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="indexsocialsupp.php"><img src="assets/img/wings2.png"  alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="indexsocialsupp.php">Home</a></li>
            <li><a href="#contact">Utilization History</a></li>
          <li><a href="#about">About Us</a></li>
                      <li><a href="#team">Team</a></li>
             <li class="menu-has-children"><a href="">Smoker Details</a>
              
            <ul>
              <li class="menu-has-children"><a href="listofsmokersmenusocialsupp.php">List Of Smokers</a></li>
            </ul>
          </li>
                <li class="menu-has-children"><a href="personaldetailsocialsupp.php">Personal Detail</a>  
                 <ul>
              <li><a href="personaldetailsocialsupp.php">Personal Info</a></li>
                     <li><a href="personaldetail2socialsupp.php">Login Info</a></li>
                </ul></li>
          <li><a href="logout.php">Log Out</a></li>
          <li><a ><?php echo $_SESSION['user_username'] ?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
        
        
        
        
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
     <h1>Welcome <?php echo $_SESSION['user_username'] ?></h1>
      <h2>You are doing a great job! Keep supporting our friends in need.</h2>
      <a href="#about" class="btn-get-started">Learn More</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

      <!-- ======= Contact Section ======= -->
   <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Utilization History</h3>
        </div>
          <br/><br/>
          <table id="customers" style="margin-left:50px;">
          <tr>
<th>No.</th>
<th>User Id</th>
<th>User Name</th>
<th>Login Time</th>
</tr>
          <?php 
    
    $query=mysqli_query($conn,"select * from userlog where  userId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
          
          

<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['userId'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['loginTime'];?></td>
 
</tr>
<tr>
<?php $cnt=$cnt+1;
} 


} 
?>
    </tr>
</table>
      </div>

   
    </section><!-- End Contact Section -->
      
    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About Us</h2>
            <p>
              Our website offers  a system that benefits a smoker to gradually quit smoking. One step at a time. It ranges in opportunities for smokers to quit smoking, to work as a medical practitioner to monitor smokers and even to support smokers as social supporters 
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa fa-medkit"></i></div>
              <h4 class="title"><a href="">No drugs or medicine used in the process</a></h4>
              <p class="description">We take pride in able to provide a platform that does not use any medical prescriptions . All natural and slowly but surely till you as a smoker quit smoking.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Easy-To-Use System </a></h4>
              <p class="description">Our system is easy to use, in hopes for a user-friendly system from us to you.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">One-Step-At-A-Time</a></h4>
              <p class="description">We emphasize this a lot because our programme for the smokers are slow and at the pace of the smoker. We adjust based on the medical practitioners supervision, so every data is carefully checked.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">These are facts of smokers in Malaysia that we gathered</p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">22.8</span>
            <p><b>Percent Of Malaysians are smokers</b> (Source[2015]:The Ministry Of Health Of Malaysia)</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">43</span>
            <p><b>Percent Of Men smoked cigarettes</b>(Source[2015]:The Ministry Of Health Of Malaysia)</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">85</span>
            <p><b>Percent of teenagers that smokes end up as cigarette addicts</b>(Source[2015]:The Ministry Of Health Of Malaysia)</p>
          </div>

             <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20</span>
            <p><b>Percent of teenagers smokes in our country</b>(Source[2015]:The Ministry Of Health Of Malaysia)</p>
          </div>
            
        </div>

      </div>
    </section><!-- End Facts Section -->
    

  
    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">This is the developers of our system</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/goodteam-9.png" alt=""></div>
              <h4>Fathul</h4>
              <span>Team Leader</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="assets/img/goodteam-2.png" alt=""></div>
              <h4>Ricky</h4>
              <span>Developer</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/goodteam-10.png" alt=""></div>
              <h4>Zaim</h4>
              <span>Developer</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="pic"><img src="assets/img/goodteam-4.png" alt=""></div>
              <h4>Danial</h4>
              <span>Lead Programmer</span>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->


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