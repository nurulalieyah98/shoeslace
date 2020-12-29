<?php
	
		$name = $_POST['cust_name'];
		$phone = $_POST['cust_phone'];
		$email = $_POST['cust_email'];
		$pass = $_POST['cust_password'];

    	include "dbcon.php";
	
    	if(mysqli_connect_error())
    	{
			echo "Failed to connect to MYSQL".mysqli_connect_error();
		}

    	$sql= "INSERT INTO customer( cust_name, cust_phone, cust_email, cust_password) VALUES ('$name', '$phone', '$email', '$pass')";
		
	// 	$results=mysqli_query($connection, $sql);

	// 	$row = mysqli_fetch_array($results);


	// if(isset($_POST['signup']))
	// {
		
	// 	if( $row['cust_email'] =! $email)
	// 	{
	// 		//mysqli_commit($connection);
	// 		print '<script>alert("Successfully Sign Up!");</script>';
	// 		print '<script>window.location.assign("signup.html");</script>';
	// 	}
	// 	else
	// 	{
	// 		//mysqli_rollback($connection);
	// 		print '<script>alert("Email Already Exists!");</script>';
	// 		//print '<script>window.location.assign("signup.html");</script>';
	// 	}
	// }
	// else
	// {
	// 	header("location: signup.html");
	// }

	$result = mysqli_query($connection,$sql);

	$row = mysqli_fetch_array($result);

	if(isset($_POST['signup']))
	{
		
		if($row['cust_email'] == $email && $row['cust_password'] == $pass)
		{
			//mysqli_commit($connection);
			// print '<script>alert("Successfully Login!");</script>';
			// header("location: alladmin.php");
			print '<script>alert("Unsuccessfully Login!");</script>';
			print '<script>window.location.assign("signup.html");</script>';
		}
		else
		{
			//mysqli_rollback($connection);
			print '<script>alert("Successfully Sign Up!");</script>';
			print '<script>window.location.assign("cust.html");</script>';
			}
	}
	else
	{
		header("location: loginadmin.html");
	}

		?>