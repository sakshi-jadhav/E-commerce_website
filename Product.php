<?php
include "db.php";
if(isset($_POST['fan']))
{
	header('location:review.php? id=1');
}

if(isset($_POST['mobile']))
{
	header('location:review.php? id=2');
}

if(isset($_POST['tv']))
{
	header('location:review.php? id=3');
}

if(isset($_POST['fridge']))
{
	header('location:review.php? id=4');
}

if(isset($_POST['bulb']))
{
	header('location:review.php? id=5');
}

if(isset($_POST['laptop']))
{
	header('location:review.php? id=6');
}

if(isset($_POST['tablet']))
{
	header('location:review.php? id=7');
}

if(isset($_POST['smart_watch']))
{
	header('location:review.php? id=8');
}

if(isset($_POST['ear_phone']))
{
	header('location:review.php? id=9');
}

if(isset($_POST['chair']))
{
	header('location:review.php? id=10');
}
if(isset($_POST['fan1']))
{
header('location:ratings.php? id=1');
}

if(isset($_POST['mobile1']))
{
header('location:ratings.php? id=2');
}

if(isset($_POST['tv1']))
{
header('location:ratings.php? id=3');
}

if(isset($_POST['fridge1']))
{
header('location:ratings.php? id=4');
}

if(isset($_POST['bulb1']))
{
header('location:ratings.php? id=5');
}

if(isset($_POST['laptop1']))
{
header('location:ratings.php? id=6');
}

if(isset($_POST['tablet1']))
{
header('location:ratings.php? id=7');
}

if(isset($_POST['smart_watch1']))
{
header('location:ratings.php? id=8');
}

if(isset($_POST['ear_phone1']))
{
header('location:ratings.php? id=9');
}

if(isset($_POST['chair1']))
{
header('location:ratings.php? id=10');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="product.css">
</head>
<body class="col-lg-3 col-md-6">
	<header>
		<h1 class="heading"> SAVA <span>Electronics</span> </h1>
		<nav>
			<ul>
				<li><a href="Product.php">Home</a></li>
				<li><a href="ratings.html">Ratings</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	<form method="POST">
	<div class="container">
  		<div class="card">
    		<div class="card-header">
     			 <img src="Fan.jpeg" alt="fan" />
    		</div>
    		<div class="card-body"><h4>Fan<br></h4><p>3 Blade Ceiling with remote control<br><b>Rs. 3,200/-</b></p>
    			<div class="inline">
    				<input type="submit" name="fan" value="Rate" class="btn"><input type="submit" name="fan1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
  		<div class="card">
    		<div class="card-header">
     			 <img   src="Mobile.jpeg" />
    		</div>
    		<div class="card-body"><h4>Mobile<br></h4><p>6GB Ram , 128GB memory, Android 13<br><b>Rs. 12,000/-</b></p>
    			<div class="inline">
    				<input type="submit" name="mobile" value="Rate" class="btn"><input type="submit" name="mobile1" value="View Ratings" class="btn"></div>
    			</div>
    		
  		</div>
  		<div class="card">
    		<div class="card-header">
     			 <img  src="TV.jpeg" alt="ballons" />
    		</div>
    		<div class="card-body"><h4>TV<br></h4><p><br>Smart 32" Android TV<b>Rs. 29000/-</b></p><!--<button class="button"><span><a href="review.html" id="3">View</a></span></button>-->
    			<div class="inline">
    				<input type="submit" name="tv" value="Rate" class="btn"><input type="submit" name="tv1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
  		<div class="card">
    		<div class="card-header">
				
     			 <img src="fridge.jpg" alt="ballons" />
			
    		</div>
    		<div class="card-body"><h4>Fridge<br></h4><p><br>Double Door Fridge with wifi and voice control<b>Rs. 35,000/-</b></p><!--<button class="button"><span><a href="review.html" id="4">View</a></span></button>-->
    			<div class="inline">
    				<input type="submit" name="fridge" value="Rate" class="btn"><input type="submit" name="fridge1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
  	</div>
  	<div class="container">
  		<div class="card">
    		<div class="card-header">
     			 <img src="bulbb.jpg" alt="ballons" />
    		</div>
    		<div class="card-body"><h4>Bulb<br></h4><p> Smart Bulb with Android connected home<br><b>Rs. 249/-</b> </p><span><!--<button class="button"><span><a href="review.html" id="5">View</a></span></button>-->
    			<div class="inline">
    				<input type="submit" name="bulb" value="Rate" class="btn"><input type="submit" name="bulb1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
  		<div class="card">
    		<div class="card-header">
     			 <img src="laptop.jpg" alt="ballons" />
    		</div>
    		<div class="card-body"><h4>Laptop<br></h4><p>Win 11 , 14inch laptop 8GB RAM 512GB SSD<br><b>Rs. 49,000/-</b></p><span><!--<button class="button"><span><a href="review.html" id="6">View</a></span></button>-->
    			<div class="inline">
    				<input type="submit" name="laptop" value="Rate" class="btn"><input type="submit" name="laptop1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
  		<div class="card">
    		<div class="card-header">
     			 <img src="tablet.jpeg" alt="ballons" />
    		</div>
    		<div class="card-body"><h4>Tablet<br></h4><p>8" Andorid 13 table with 6GB RAM 128GB Storage.<br><b>Rs. 12,000/-</b></p><!--<span><button class="button"><span><a href="review.html" id="7">View</a></span></button>-->
    			<div class="inline">
    				<input type="submit" name="tablet" value="Rate" class="btn"><input type="submit" name="table1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
  		<div class="card">
    		<div class="card-header">
     			 <img src="smart watch.jpg" alt="ballons" />
    		</div>
    		<div class="card-body"><h4>Smart watch<br></h4><p>8" Andorid 13 table with 6GB RAM 128GB Storage
				Smarty Bluetooth watch with wear os.<br><b>Rs. 4900/-</b></p><!--<button class="button"><span><a href="review.html" id="8">View</a></span></button>-->
				<div class="inline">
    				<input type="submit" name="smart_watch" value="Rate" class="btn"><input type="submit" name="smart_watch1" value="View Ratings" class="btn"></div>
    			</div>
  		</div>
		  <div class="container">
			<div class="card">
			  <div class="card-header">
					<img src="ear phone.jpg" alt="fan" />
			  </div>
			  <div class="card-body"><h4>Ear Phone<br></h4><p>Bluetooth Earphone with ANC<br><b>Rs. 1900/-</b></p><!--<button class="button"><span><a href="review.html" id="9">View</a></span></button>-->
			  	<div class="inline">
    				<input type="submit" name="ear_phone" value="Rate" class="btn"><input type="submit" name="ear_phone1" value="View Ratings" class="btn"></div>
    			</div>
			</div>
			<div class="card">
			  <div class="card-header">
					<img   src="office chair.jpg" />
			  </div>
			  <div class="card-body"><h4>chair<br></h4><p>Reclining office chair<br><b>Rs. 4900/-</b></p><!--<button class="button"><span><a href="review.html" id="10">View</a></span></button>-->
			  	<div class="inline">
    				<input type="submit" name="chair" value="Rate" class="btn"><input type="submit" name="chair1" value="View Ratings" class="btn"></div>
    			</div>
			</div>
			</div>
		</form>
  	
</body>
</html>