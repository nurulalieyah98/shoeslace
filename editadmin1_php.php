<?php 
//header("Location:index.php");

$code = $_GET['admin_id'];
$name = $_POST['admin_name'];
$pass = $_POST['admin_pass'];
include "dbcon.php";

$sql= "update admin set admin_id='$code', admin_name='$name', admin_pass='$pass' where admin_id='$code'";

$results=mysqli_query($connection, $sql);


if($results )
{
	mysqli_commit($connection);
	print '<script>alert("Details Successsfully Updated !");</script>';
	print '<script>window.location.assign("admindetail.php");</script>';
}
?>
