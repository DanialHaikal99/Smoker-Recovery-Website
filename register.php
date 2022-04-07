<?php
	include ('dbconnect.php');

if(isset($_POST['submit'])) {
	
	// removing ID coz it will be auto-incremented anyway
	// $id			= $_POST['id'];
	$pass1		= $_POST['pass1'];
	$pass2		= $_POST['pass2'];
	$name		= $_POST['name'];
	$address	= $_POST['address']; 
	$username	= $_POST['username'];
	$phone		= $_POST['phone'];
	$email		= $_POST['email'];
	//$pict		= addslashes(file_get_contents($_FILES['pict']['tmp_name']));
	
	// Note: Removing every picture vars to register.php since it is unnecessary and no use most of the time. 
	
	//sql statement to check if the users already exists
	$sql = "select * from wings_details where details_email = '$email'";
	$resultemail = mysqli_query($conn,$sql);
		
	$sqlname = "select * from wings_details where details_username = '$username'";
	$resultname = mysqli_query($conn,$sqlname);
	
	if ($pass1 != $pass2) 
	{
		//get num of rows resulted from the query then compare
		if(mysqli_num_rows($resultemail)!=0) 
		{
			
			if(mysqli_num_rows($resultname)!=0) 
			{
				echo "<div class ='box container'>
					<p>Error: Password	and Confirm Password is not the same.</p>
					<p>Error: User email already existed</p>
					<p>Error: Username already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			else
			{
				echo "<div class ='box container'>
					<p>Error: Password	and Confirm Password is not the same.</p>
					<p>Error: User email already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			
		}
		else if(mysqli_num_rows($resultname)!=0) 
		{
			echo "<div class ='box container'>
				<p>Error: Password	and Confirm Password is not the same.</p>
				<p>Error: Username already existed</p>
				<a href='registerform.php'>Go back</a>
				</div>";
		}
		else
		{
			echo "<div class ='box container'>
				<p>Error: Password	and Confirm Password is not the same.</p>
				<a href='registerform.php'>Go back</a>
				</div>";
		}
	}	
	else 
	{
		$password = $pass1;
		
		//get num of rows resulted from the query then compare
		if(mysqli_num_rows($resultemail)!=0) 
		{
			if(mysqli_num_rows($resultname)!=0) 
			{
				echo "<div class ='box container'>
					<p>Error: User email already existed</p>
					<p>Error: Username already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			else
			{
				echo "<div class ='box container'>
					<p>Error: User email already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			
		}
		else if(mysqli_num_rows($resultname)!=0) 
		{
			echo "<div class ='box container'>
				<p>Error: Username already existed</p>
				<a href='registerform.php'>Go back</a>
				</div>";
		}
		else
		{
			if ( $username == "" || $pass1 == "" || $pass2 == "" ||  $name == "" || $address == "" || $phone == "" || $email == "" ) {
				echo "<div class ='box container'>
					<p>Error: One or more fields are missing</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			} 
			else 
			{
				$query = "INSERT INTO wings_user(user_username, user_password, user_type) 
							VALUES ('$username', '$password', 'smoker')";
				$queryc = "INSERT INTO wings_details(details_username, details_name, details_address, details_phone, details_email, details_type)
							VALUES ('$username','$name','$address','$phone','$email', 'smoker')";
                
                $queryd = "INSERT INTO Wings_MedicationHis(MedicationHisUsername, MedicationHisName, MedicationHisDesc)VALUES ('$username','$name', 'Please Update Your Medication History Here!')";
                
                $querye = "INSERT INTO Wings_SmokingHis(SmokingHisUsername, SmokingHisName, SmokingHisDesc)VALUES ('$username','$name', 'Please Update Your Smoking History Here!')";
                
                $queryf = "INSERT INTO Wings_SmokingRep(SmokingRepUsername, SmokingRepName, SmokingRepDesc)VALUES ('$username','$name', 'Please Update Your Smoking Report Here!(Dont forget to update your smoking and medication history first to start and partake in the system or this update will be ignored.)')";
                
                $queryg = "INSERT INTO Wings_SmokerRep(SmokerRepUsername, SmokerRepName, SmokerRepDesc)VALUES ('$username','$name', 'Currently No Feedback From Medical Practitioner(Dont forget to update your smoking and medication history first to start and partake in the system)')";
                
                $queryh = "INSERT INTO Wings_Schedule(ScheduleUsername, ScheduleName , ScheduleDesc)VALUES ('$username','$name', 'No Schedule Yet(Please Update Your Smoking & Medication History First, then update the Smoking Report to get a schedule from our medical practitioners,thank you.)')";
                
				$inuser = mysqli_query($conn,$query);
				$incust = mysqli_query($conn,$queryc);
				$inmed = mysqli_query($conn,$queryd);
                $insmoking = mysqli_query($conn,$querye);
                $insmokingrep = mysqli_query($conn,$queryf);
                $insmokerrep = mysqli_query($conn,$queryg);
                $ins = mysqli_query($conn,$queryh);
                
				if(($inuser && $incust && $inmed && $insmoking && $insmokingrep && $insmokerrep)== FALSE){
					echo"Error : $query".$conn->error;
					echo"Error : $queryc".$conn->error;
                    echo"Error : $queryd".$conn->error;
                    echo"Error : $querye".$conn->error;
                    echo"Error : $queryf".$conn->error;
                    echo"Error : $queryg".$conn->error;
                    echo"Error : $queryh".$conn->error;
				}else{
				echo "<div class='box container'>
					<p>	<b>Registered Successfully</b></p>
					<a href='loginform.php'>Login</a>
					";
				}
                
                
                
			}
		
		}
	}
	

}
?>