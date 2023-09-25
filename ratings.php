<?php
 
include "db.php";

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 
$r_id=$_GET['id'];
$sql = "SELECT comment,rating FROM review_ratings where P_id='".$r_id."'"; 
$name_c="SELECT customer.C_Name FROM customer,review_ratings where review_ratings.P_id='".$r_id."' AND review_ratings.C_id= customer.C_id";
$prod="SELECT P_Name from product where P_id='".$r_id."'";

$result = $mysqli->query($sql); 
$y= $mysqli->query($name_c);
$r2 = $mysqli->query($prod); 


if(isset($_POST['submit_e']))
{
	header('location:Product.php');
}

$avg="SELECT AVG(rating) FROM review_ratings where P_id='".$r_id."'";
$r6=$mysqli->query($avg);
$mysqli->close(); 

?>


<html>

<title>Review Ratings</title>
<link rel="stylesheet" type="text/css" href="ratings.css">
<body>
<form method="POST">

	<div class="heading"><hr>
		<h2 align=center style="font-size: 40px;">RATINGS</h2><hr>
		
	</div>
<div class="add_ex" id="ex1">
		<h2 align=center style="text-decoration: underline;" ><?php 
		$r3=$r2->fetch_assoc()?>
		<?php echo $r3['P_Name'];?> Ratings</h2>
	<hr><br>
	<table>
			<tr>
			
			<th>Customer Name</th>
			<th>Comment</th>
			<th>Ratings</th>
			
			
		</tr>

<?php // LOOP TILL END OF DATA 

while($d=$y->fetch_assoc())
{
	?>
	<tr>
		<?php
		while($rows=$result->fetch_assoc()) {

			?>
			<td><?php echo $d['C_Name'];?></td>
			<td><?php echo $rows['comment'];?></td> 
			<td><?php echo $rows['rating'];?></td> 
			<td>
				<button>Delete</button>
				<?php //delete code
					$del1 = "DELETE rating FROM review_ratings where c_id = review.c_id";

				?>
			</td>
				
		</tr>
		<?php 
			}	
			}
			?>

		</table>
	<h2 class="alignh3" align="center">
		<!--Average Rating: -->
		<?php
		while($rows4=$r6->fetch_assoc()) 
				{
				echo "Average Rating:".$rows4['AVG(rating)']; 
				}
			?> 
	
	</h2>

   <input type="submit" name="submit_e" value="BACK" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 50px;margin-bottom: 50px;border-style: double;border-color: white;color:white;background-color: black">

   
</div>

</body>
<form>
</html>