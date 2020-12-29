<?php 
//header("Location:index.php");

$code = $_GET['shoes_code'];
$name = $_POST['shoes_name'];
$colour = $_POST['shoes_colour'];
$brand = $_POST['shoes_brand'];
$type = $_POST['shoes_type'];
$catgry = $_POST['shoes_category'];
$price = $_POST['shoes_price'];
$qty = $_POST['shoes_qty'];
$shoes_image = $_POST['shoes_image'];

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

$sql= "update shoes set shoes_code='$code', shoes_name='$name', shoes_colour='$colour', shoes_brand='$brand', shoes_type='$type',  shoes_category='$catgry', shoes_price='$price', shoes_qty='$qty' where shoes_code='$code'";

$results=mysqli_query($connection, $sql);


if($results )
{
	mysqli_commit($connection);
	print '<script>alert("Item Successsfully Edited !");</script>';
	print '<script>window.location.assign("allcategory.php");</script>';
}
?>
