<?php
include "db.php";

$var=$_GET['id'];
//echo"Variable: ";
//echo$var;
if(isset($_POST['review']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$comment=$_POST['comment'];
	$rating=$_POST['rating'];
	$now=date("h:i:sa");
	$c_id=rand(1,1000);
	$cust="INSERT INTO customer(C_id,C_name,C_Email,City) values ('".$c_id."','".$name."','".$email."','".$city."')";
		$r1=$mysqli->query($cust);

$i="INSERT INTO review_ratings(P_id,C_id,comment,rating,time_stamp) values ('".$var."','".$c_id."','".$comment."','".$rating."','".$now."')";
		$r4=$mysqli->query($i);
		
		if($i==true && $cust==true)
		{
			
			echo "<script>alert('Data added successfully!')</script>";
		}
		else
		{
			
			echo "<script>alert('Failed to add data!')</script>";
		}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="reviewstyle.css">
	<title>Customer Review</title>
</head>
<body>
	<form class="form" method="POST">
		<img src="custreview.jpg">
 		<p type="Name:"></p><input type="text" placeholder="Write your name" name="name">
  		<p type="Email:"></p><input type="text" placeholder="Tell us how to contact you back" name="email">
  		<p type="City:"></p><input type="text" placeholder="Enter city" name="city" id="city">
  		<p type="Comment:"></p><input type="text" placeholder="Write your comment" name="comment">
  		<p type="Rating:"></p><input type="text" placeholder="Rate in 1 to 5 scale" name="rating">
  		<input type="submit" name="review" value="Review">
  		<br><br>
	
</body>
</form>
</html>