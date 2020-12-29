<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Details</title>
<style type="text/css">
body,td,th {
  font-family: Courier New, sans-serif;
  font-size:14px;
}
#footer1 {
  position: absolute;
  height: 60px;
  width: 780px;
  bottom: 70px;
}
#footer2 {
  position: absolute;
  height: 60px;
  width: 100%;
  bottom: 20px;
}
#table1 td{
border-width:thin;
border-style:solid; 
}
</style>
</head>

<body>


<?php 
 include "dbcon.php";
$num = $_GET['cust_num'];	
$query = "SELECT * FROM customer,purchase, payment, shoes WHERE purchase.cust_num=customer.cust_num AND payment.cust_num=customer.cust_num AND purchase.shoes_code=shoes.shoes_code AND customer.cust_num='$num'";
 $r = mysqli_query($connection,$query);
 $results = mysqli_fetch_assoc($r);

?> 

<table width="778">
<tr align="center">
  <td height="20" colspan="2" align="center"><h1><u><b>Order Summary</b></u><img src="images/ordersum.png" height="30"></h1></td>
</tr>
<tr>
  <td height="20"><font size="5">
    <p><b>Cust No: </b><?php echo $results['cust_num']?> </p>
    <p>&nbsp;</p>
    <p><b>Customer Name: </b><?php echo $results['cust_name']?> </p>
  </font><p>&nbsp;</p></td>
  <td width="250"><img src="<?php echo $results['shoes_image']?>" height="150"></td>
</tr>
</table>

<table width="776" border="1" cellspacing="0" id="table1">
  <tr>
  	<td height="40" width="200" bgcolor="#89c8bd"><font color="white"><b>Shoe's Code: </b></font></td>
    <td><?php echo $results['shoes_code']?></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Shoe's Name: </b></font></td>
    <td><?php echo $results['shoes_name']?></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Colour:  </b></font></td>
    <td><?php echo $results['shoes_colour']?></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Category: </b></font></td>
    <td> <?php echo $results['shoes_category']?></td>
  </tr>
    <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Type:</b></font></td>
    <td> <?php echo $results['shoes_type']?></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Brand: </b></font></td>
    <td><?php echo $results['shoes_brand']?></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Quantity: </b></font></td>
    <td><?php echo $results['purchase_qty']?></td>
  </tr>
      <tr>
    <td height="40" bgcolor="#89c8bd"><font color="white"><b>Fast/Normal Delivery: </b></font></td>
    <td><?php echo $results['payment_package']?></td>
  </tr>
    <tr>
    <td height="90" bgcolor="#89c8bd" ><font color="white"><b>Address: </b></font></td>
    <td><?php echo $results['payment_address']?></td>
  </tr>
    <tr>
    <td height="60" bgcolor="#89c8bd" ><font color="white"><b>Total Price: </b></font></td>
    <td bgcolor="#eaeae5" align="center"><font size="5">RM 800 </font></td>
  </tr>


</table>
<div id="footer2">
<table>
  <tr><td align="center">___________________________________________________________________________________</td></tr>
    <tr><td align="center"><font size="3"><b>SHOELACE.COM</b></font></td></tr>
    <tr><td align="center"><font size="3">WEBSITE : www.shoelace.com | TEL : 03-8028337</font></td></tr>
</table>
</div>

</body>
</html>