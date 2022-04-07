<?php session_start();

include("dbconnect.php");

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "" || $password == "") {
		echo "
			<div class ='box container'>
			<p>Either username or password field is empty.</p>
			<a href='loginform.php'>Go back</a>
			</div>";
	} else {
		$sqllogin ="SELECT * FROM " . $tableprefix . "user WHERE user_username='$username' AND user_password='$password'"
					or die("Could not execute the select query.");
		$results = mysqli_query($conn, $sqllogin);
		
		
				$data = mysqli_fetch_assoc($results);
				if ($data['user_type'] == 'admin') {

					$_SESSION["user_username"] = $username;
					$_SESSION["user_type"]  = "admin";
                    $_SESSION['id']=$data['user_id'];
                    
					header("location: indexadmin.php");	
                    
                
                    mysqli_query($conn,"insert into userlog(userId,username) values('".$_SESSION['id']."','".$_SESSION['user_username']."')");
                    
                    
				}else if($data["user_type"] == 'smoker'){
					$_SESSION["user_username"] = $username;
					$_SESSION["user_type"]  =  "smoker" ;
                    $_SESSION['id']=$data['user_id'];
					header("location: indexsmoker.php");
                    
                    mysqli_query($conn,"insert into userlog(userId,username) values('".$_SESSION['id']."','".$_SESSION['user_username']."')");
                
				}
        else if($data["user_type"] == 'socialsupp'){
					$_SESSION["user_username"] = $username;
					$_SESSION["user_type"]  =  "socialsupp" ;
            $_SESSION['id']=$data['user_id'];
					header("location: indexsocialsupp.php");
            
            mysqli_query($conn,"insert into userlog(userId,username) values('".$_SESSION['id']."','".$_SESSION['user_username']."')");
                
				}
        else if($data["user_type"] == 'medicalprac'){
					$_SESSION["user_username"] = $username;
					$_SESSION["user_type"]  =  "medicalprac" ;
                    $_SESSION['id']=$data['user_id'];
					header("location: indexmedicalprac.php");
                
            mysqli_query($conn,"insert into userlog(userId,username) values('".$_SESSION['id']."','".$_SESSION['user_username']."')");
            
				}
        
        
        else {
				echo"
					<div class ='box container'>
						<p>Invalid Usernames and Password.</p>
						<a href='loginform.php'>Go back</a>
					</div>";
			}
		
	
	}
}
?>