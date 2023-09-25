<?php
include "db.php";
if($mysqli->connect_error)
{
	die('connect_error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
if(isset($_POST['review']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$comment=$_POST['comment'];
	$rating=$_POST['rating'];
	$id=$_POST['bname'];
	echo "Name";
	echo $id;
	$now=date("h:i:sa");
	$a=1;

	$insert="INSERT INTO review_ratings(comment,rating,time_stamp)values('".$comment."','".$rating."','".$now."')";
		$i="INSERT INTO customer(C_Name,C_Email,City)values('".$name."','".$email."','".$city."')";
		$result2=$mysqli->query($insert);
			$result=$mysqli->query($i);
		if($i==true && $insert==true)
		{
			echo "<script>alert('Data added successfully!')</script>";
				
		}
		else
		{
			echo "<script>alert('Data not added!')</script>";
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
<form class="form" method="POST">
<body>
	
		<img src="custreview.jpg">
 		<p type="Name:"></p><input type="text" placeholder="Write your name" name="name" id="name">
  		<p type="Email:"></p><input type="text" placeholder="Tell us how to contact you back" name="email" id="email">
  		<p type="City:"></p><input type="text" placeholder="Enter city" name="city" id="city">
  		<p type="Comment:"></p><input type="text" placeholder="Write your comment" name="comment" id="comment">
  		<p type="Rating:"></p><input type="text" placeholder="Rate in 1 to 5 scale" name="rating" id="rating">

  		<!--<button>Review</button>-->
  		<input type="submit" name="review" value="Review">
	
</body>
</form>
</html>