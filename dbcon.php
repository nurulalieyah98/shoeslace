<?php

$connection=mysqli_connect("localhost", "root", "", "shoelace");
if(mysqli_connect_error())
{
	echo"Failed to connect to MySQL".mysqli_connect_error();}
?>