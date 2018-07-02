<?php session_start();
	include('database_info.php');
	$mobile=$_SESSION["mobile"];
	$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="images/favicon.ico" />

  <title>Login Home</title>
  
  	<link rel="stylesheet" type="text/css" href="css/common.css">

  <meta charset="utf-8">
  <!---------- INCLUSION OF VIEWPORT --------------->
	<meta name="viewport" content="width=1024">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container-fluid,.row{
	  margin:0px!important;
	  padding:0px!important;
	   }
	
.menu-center{
text-align:center;
}
	.menu-bar{
		
		background:white!important;
	}
	.pa{
		color:black;
		font-family:'Lato';
		font-size:30px;
	}
	.intro{
		background:yellow;
		margin:10px;
		padding:50px;
		text-align:center;
		font-size:30px;
	}

	.ser-fwd{
		background:url("images/payback.jpg");
	}
	.ser-fwd .head{
		text-align:center;
		font-size:30px;
		color:black;
		margin:10px;
	}
	
	.ser-fwd .blk{
		padding:10px;
		margin:20px;
		text-align:center;
	}
	
	
	
	.ser-fwd .blk p{
		font-size:25px;
	}
	
	
	
	
	.heading{
	padding-left:50px!important;
}
.heading h1
{
font-family: Open Sans, sans-serif;
font-weight: 700;
font-size: 45px;
}
.heading h3
{
font-family: Open Sans, sans-serif;
font-weight: normal;
font-size: 30px;
}

.head-under {
	text-align:center;	
	width:300px;
    border: 2px solid #0a4bff;
    margin-right: 50%;
    margin-left: 0;
    margin-top: 8px;
}

  </style>
</head>
<body  background="images/55.jpg">

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 menu-bar">
		<div class="col-md-2">
			<img src="images/logo.png" width="100%" height="120" alt="Crypto4Payment"> 
		</div>
				<div class="col-md-6 heading">
				<h1>Crypto4Payment</h1>      
				<hr class="head-under">
				<h3>Pay Easy,Pay Digital</h3>
			</div>
				<div class="col-md-4 name">
			<?php
					$sql="SELECT * from register where Mobile='$mobile'";
					$qry = mysqli_query($mysql,$sql);	

		while($row = mysqli_fetch_array($qry,MYSQLI_ASSOC))
		{
			
			$x=$row['Name'];
			$y=$row['Amount'];
		}
				echo '<h3 class="pa">'.$x.'</h3>';
				echo '<h5 class="pa">'.$y.' BTC </h5>';
				
		
			?>
		</div>
		
		</div>
		
		
		
		
		
		
		
		
		</div>
	<div class="row login-menu">
	
	<div class="col-md-12 menu-center">

		<ul>
				<li><a href="#">Home</a></li>
				<li><a href="addmoney.php">Add Money</a></li>
				<li><a href="transaction.php">Transaction History</a></li>
	   			<li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
			<ul>
    
	</div>
	</div>
	
	
	
	
	
	
	
	

	<div class="row intro ">
	<div class="col-md-12">
      
		<h1>Welcome TO Crypto4Payment Services !</h1>
		<p>Our team will provide following services - </p>
			
		<ul>
		
		<li>
		<b>Flight Booking-</b>  You can book flight in the form of cryptocurrency payment.
		</li>
		

		<li>
		<b>Movie Ticket Booking-</b>  You can book moviie ticket in the nearest theatre of the picture of your own choice in form of cryptocurrency payment.
		</li>

		<li>
		<b>Parking Slot Booking -</b> Get parking slot from mobile and book it and pay in form of cryptocurrency.
		</li>

		<li>
		<b>Mobile Recharge-</b> Do the mobile in the form of cryptocurrency and get enjoy the uniterrupted service.
		</li>
			
		</ul>
	
	
	</div>
	</div>
	
	
	
	
	<div class="row ser-fwd">
		
		<div class="col-md-12">
		
		<p class="ser-head" style="text-align:center;padding:20px;font-size:30px">SERVICES</p>
		
		</div>
		<div class="col-md-12 blk">
		<div class="col-md-3">
			
				<a href="flightbook.php">
				
			<p> Flight Booking</p>
			<img src = "images/flight_icon.jpg" width="50px" height="50px">
			</a>
		
		</div>
	
		<div class="col-md-3">
			
				<a href="movie.php">
				
			<p> Movie Ticket Booking</p>
			<img src = "images/movie_icon.jpg" width="50px" height="50px">
			</a>
		
		</div>
		<div class="col-md-3">
			
				<a href="mobilerecharge.php">
				
			<p>Mobile Recharge</p>
			<img src = "images/mobile_icon.jpg" width="50px" height="50px">
			</a>
		
		</div>
	
		<div class="col-md-3">
			
				<a href="parking.php">
				
			<p>Parking Slot</p>
			<img src = "images/parking_icon.jpg" width="50px" height="50px">
			</a>
		
		</div>
	</div>
	
	
	
	
	
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="row footer">
		
                <div class="col-md-12 cpy-text">
                		<p>CopyRight &copy 2018</p>
                </div>
            </div>
        </div>
		
		






</body>
</html>
