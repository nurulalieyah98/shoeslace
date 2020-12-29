<?php
		$id = $_POST['admin_id'];
		$pass = $_POST['admin_pass'];
    	include "dbcon.php";
	

if(mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "select * from admin where admin_id='$id' and admin_pass='$pass'";
	
	$result = mysqli_query($connection,$sql);

	$row = mysqli_fetch_array($result);

	if(isset($_POST['login']))
	{
		
		if($row['admin_id'] == $id && $row['admin_pass'] == $pass)
		{
			//mysqli_commit($connection);
			// print '<script>alert("Successfully Login!");</script>';
			// header("location: alladmin.php");
			print '<script>alert("Successfully Login!");</script>';
			print '<script>window.location.assign("alladmin.php");</script>';
		}
		else
		{
			//mysqli_rollback($connection);
			print '<script>alert("Wrong ID & Password!");</script>';
			print '<script>window.location.assign("loginadmin.html");</script>';
			}
	}
	else
	{
		header("location: loginadmin.html");
	}
?>