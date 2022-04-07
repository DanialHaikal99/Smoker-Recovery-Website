<?php
    $conn = mysqli_connect('localhost', 'root', '', 'wings');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    if(isset($_GET['del'])){
	$vid = $_GET['del'];
	$sql = "delete from wings_user where user_username='$vid'";

	$result = $conn -> query($sql);
        
	if($result == false){
		echo "Error : $sql".$conn->error;
	}else{
		echo "<div class ='box container'>
			<p>Deleted User's Login Detail</p>
			</div>"; 
	}
    }
       
            if(isset($_GET['del'])){
	$vid = $_GET['del'];
	$sql = "delete from wings_details where details_username='$vid'";

	$result = $conn -> query($sql);
        
	if($result == false){
		echo "Error : $sql".$conn->error;
	}else{
		echo "<div class ='box container'>
			<p>Deleted User's Personal Detail</p>
			<a href='indexadmin.php'>Back To Admin Home Page</a>
			</div>"; 
	}
            }
            
?>