<?php 

$code = $_POST['shoes_code'];
$name = $_POST['shoes_name'];
$colour = $_POST['shoes_colour'];
$brand = $_POST['shoes_brand'];
$catgry = $_POST['shoes_category'];
$type = $_POST['shoes_type'];
$price = $_POST['shoes_price'];
$qty = $_POST['shoes_qty'];
$shoes_image=$_FILES['shoes_image'];

//imageextension
     $dir="shoes_image/";

     $imagefile= $dir.basename($_FILES["shoes_image"]["name"]);
     $uploadOk=1;
     $imageFileType=strtolower(pathinfo($imagefile,PATHINFO_EXTENSION));

     //check image 
 	if(  $imageFileType != "jpg" && $imageFileType != "png" ) {
     echo "Sorry, only JPG, JPEG & PNG files are allowed.";
      $uploadOk=0;
     }
	 
	 if ($uploadOk == 0) {
    echo "<br>Your file was not uploaded.";
// if everything is ok, try to upload file
} 

else {
    if (move_uploaded_file($_FILES["shoes_image"]["tmp_name"], $imagefile)) {
        echo "<script>The file ". basename( $_FILES["shoes_image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

include "dbcon.php";

$sql= "INSERT INTO shoes(shoes_code, shoes_name, shoes_colour, shoes_brand, shoes_category, shoes_type, shoes_price, shoes_qty,shoes_image) VALUES ( '$code', '$name', '$colour', '$brand', '$catgry','$type', '$price', '$qty','$imagefile')";

$results=mysqli_query($connection, $sql);
/*if (!mysqli_query($dbc, $sql1))
{
    die("Error description: " . mysqli_error($dbc));
}
if (!mysqli_query($dbc, $sql2))
{
  die("Error description: " . mysqli_error($dbc));
}*/
if($results)
{
	mysqli_commit($connection);
	print '<script>alert("Item Successfully Added !");</script>';
	print '<script>window.location.assign("addadmin.php");</script>';
}
else
{
	mysqli_rollback($connection);
	//print '<script>window.location.assign("addadmin.php");</script>';
}

?>
