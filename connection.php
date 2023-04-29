<?php
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli("localhost","root","","login_reg");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else
	{
		$stmt = $conn->prepare("insert into create_account(firstname, lastname, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
		$execval = $stmt->execute();
		echo "Account created successfully...";
	
		echo "<p><a href='login.html'>Back to login page</a></p>";
		
		$stmt->close();
		$conn->close();
	}
?>