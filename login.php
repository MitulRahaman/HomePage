<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli("localhost","root","","login_reg");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}else{
		$sql = "select * from create_account where email = '$email' and password = '$password' limit 1";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

		if($count == 1){  
			echo "Login successfully...";
	
			echo "<p><a href='index.html'>Back to Home page</a></p>";
        }else{  
			echo "Invalid credentials";
	
			echo "<p><a href='login.html'>Go back to Login page</a></p>";
		}  	
	}

?>
