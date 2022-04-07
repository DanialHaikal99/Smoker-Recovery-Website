<?php
	session_start();
    include ("checksession.php");
include ("dbconnect.php");

$session = $_SESSION['user_username'];{
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
        <a href="indexsmoker.php"><img src="assets/img/wings2.png"  alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="indexsmoker.php">Home</a></li>
            <li><a href="#contact">Utilization History</a></li>
          <li><a href="#about">About Us</a></li>
                      <li><a href="#team">Team</a></li>
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
               
          <li><a href="logout.php">Log Out</a></li>
          <li><a ><?php echo $_SESSION['user_username'] ?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome back <?php echo $_SESSION['user_username'] ?></h1>
      <h2>Lets get started. Click learn more to finish your register in the system in order<br/> to begin your program with the advice of our medical practitioners.</h2>
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
            <h2 class="title">Steps to complete your registration</h2>
            <p>
              <b>After finishing these steps, you should be able to start partake in the system and receive schedules and start recording your smoking puffs and submit them as smoking reports in the system.</b>
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa fa-medkit"></i></div>
              <h4 class="title"><a href=""><b>Submit your medication history</b></a></h4>
              <p class="description"><b>This step is important in order for the medical practitioners in our system to give you advice on how to continue the process of quiting your smoking habits.</b></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-photo"></i></div>
                <h4 class="title"><a href=""><b>Submit your smoking history</b></a></h4>
              <p class="description"><b>This step is important in order for the medical practitioners in our system to give you advice based on your background of your smoking history and habits.</b></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href=""><b>You're good to go! (If you finish the steps above)</b></a></h4>
              <p class="description" ><b><span style="color:red;">Alert! </span>- Please Finish these two steps or you will not receive schedules and supervision from the medical practitioners.</b></p>
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