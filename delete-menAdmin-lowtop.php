<?php 
//header("Location:index.php");
$code = $_GET['shoes_code'];
include "dbcon.php";

$sql= "DELETE FROM shoes WHERE shoes_code='$code'";

$result = mysqli_query($connection, $sql);

if($result) //success  
	   {
			mysqli_commit($connection);
			Print '<script>alert("Item Successfully Deleted !");</script>'; 
			Print '<script>window.location.assign("menAdmin-lowtop.php");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($connection);

			Print '<script>alert("Item Failed to Delete !");</script>'; 
			Print '<script>window.location.assign("menAdmin-lowtop.php);</script>'; 		
		}

?>