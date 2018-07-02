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

  <title>Add Money </title>
  
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
			background:white;
	}
	

	.add{
	background:url(../images/exchange.jpg);
		margin:10px;
		padding:50px;
		
		text-align:center;
		font-size:30px;
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
	.pa{
		color:black;
		font-family:'Lato';
		font-size:30px;
	}


  </style>
</head>
<body >

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
				echo '<h5 class="pa">'.$y.'</h5>';
				
		
			?>
		</div>
		
		</div>
		
	
		</div>
		<div class="row login-menu">
	
	<div class="col-md-12 menu-center">

		<ul>
				<li><a href="login_homepage.php">Home</a></li>
				<li><a href="#">Add Money</a></li>
				<li><a href="transaction.php">Transaction History</a></li>
	   			<li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
			<ul>
    
	</div>
	</div>
		
		<div class="row add" style="height:400px;margin:30px;">
			<div class="col-md-12">
			
			
			<form action="updbmoney.php" method="GET">
			<p>ADD MONEY TO YOUR WALLET</p>
		
			
			
		<select name="money">
				<option value="0.25">0.25</option>
				<option value="0.5">0.5</option>
				<option value="0.75">0.75</option>
				<option value="1">1</option>
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="20">20</option>
				
		</select>			
			<br><br>
		<input type="submit" value="Add Money">
	<br>
			<br>
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
