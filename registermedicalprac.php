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
    
    $qualification		= $_POST['qualification'];
    $yearofex		= $_POST['yearofex'];
    $reason	= $_POST['reason'];

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
					<a href='registerformsocialsupp'>Go back</a>
					</div>";
			}
			else
			{
				echo "<div class ='box container'>
					<p>Error: Password	and Confirm Password is not the same.</p>
					<p>Error: User email already existed</p>
					<a href='registerformsocialsupp.php'>Go back</a>
					</div>";
			}
			
		}
		else if(mysqli_num_rows($resultname)!=0) 
		{
			echo "<div class ='box container'>
				<p>Error: Password	and Confirm Password is not the same.</p>
				<p>Error: Username already existed</p>
				<a href='registerformsocialsupp.php'>Go back</a>
				</div>";
		}
		else
		{
			echo "<div class ='box container'>
				<p>Error: Password	and Confirm Password is not the same.</p>
				<a href='registerformsocialsupp.php'>Go back</a>
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
					<a href='registerformsocialsupp.php'>Go back</a>
					</div>";
			}
			else
			{
				echo "<div class ='box container'>
					<p>Error: User email already existed</p>
					<a href='registerformsocialsupp.php'>Go back</a>
					</div>";
			}
			
		}
		else if(mysqli_num_rows($resultname)!=0) 
		{
			echo "<div class ='box container'>
				<p>Error: Username already existed</p>
				<a href='registerformsocialsupp.php'>Go back</a>
				</div>";
		}
		else
		{
			if ( $username == "" || $pass1 == "" || $pass2 == "" ||  $name == "" || $address == "" || $phone == "" || $email == "" ) {
				echo "<div class ='box container'>
					<p>Error: One or more fields are missing</p>
					<a href='registerformsocialsupp.php'>Go back</a>
					</div>";
			} 
			else 
			{
				$query = "INSERT INTO wings_user(user_username, user_password, user_type) 
							VALUES ('$username', '$password', 'medicalprac')";
				$queryc = "INSERT INTO wings_details(details_username, details_name, details_address, details_phone, details_email , details_type)
							VALUES ('$username','$name','$address','$phone','$email', 'medicalprac')";
               
                $queryd = "INSERT INTO wings_medicalprac(medicalprac_qualification, medicalprac_yearofex, medicalprac_reason, medicalprac_username,medicalprac_name,medicalprac_phone,medicalprac_email)VALUES ('$qualification','$yearofex','$reason','$username','$name','$phone','$email')";
                
                
				$inuser = mysqli_query($conn,$query);
				$incust = mysqli_query($conn,$queryc);
                $inmed = mysqli_query($conn,$queryd);
				
				if(($inuser && $incust)== FALSE){
					echo"Error : $queryc".$conn->error;
					echo"Error : $queryc".$conn->error;
                    echo"Error : $queryd".$conn->error;
				}else{
				echo "<div class='box container'>
					<p>	Registered Successfully	</p>
					<a href='loginform.php'>Login</a>";
				}
			}
		
		}
	}
	

}
?>