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
<link rel="stylesheet" type="text/css" href="css/common.css">

  	<title>Mobile Recharge</title>
	<script src="https://use.fontawesome.com/7d44bc7623.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<!---------- INCLUSION OF VIEWPORT --------------->
	<meta name="viewport" content="width=1024">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">

	
	<!----- INCLUSION OF BOOTSTRAP ------------>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
	.container,.row{
		width:100%!important;
		margin:0px!important;
		padding:0px!important;
	}
	.menu-bar{
		
		background:white!important;
	}

	.pa{
		color:black;
		font-family:'Lato';
		font-size:30px;
	}

	.head{
				height:700px;
			background:url(images/parking_back.jpg);
	background-size:cover;
padding-top:150px;
		color:red;
		text-align:center;
		font-size:35px;
		font-weight:600;
	}
	tr,td{
		text-align:center;
		font-size:20px;
		padding:10px;
		margin:10px;
		
	}
	
.air{
	text-align:center;
	padding:40px;
}.heading{
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

<body>
<div class="container">

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
				<li><a href="login_homepage.php">Home</a></li>
				<li><a href="addmoney.php">Add Money</a></li>
				<li><a href="transaction.php">Transaction History</a></li>
	   			<li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
			<ul>
    
	</div>
	</div>
	
		<div class="row air " >
		
			<div class="col-md-12 head">
			
			<p> Book Parking Slot</p>
		
		
			<div class="col-md-12">
			
			<form action="updbparking.php" method="GET">
			<table align="center">
			<tr>
				<td><p class="show">Type:</p></td>
				<td>
				<select type="vehice" id="vehicle" name="vehicle" onchange="update()">
					<option value="2" selected>Two Wheeler</option>
					<option value="4">Four Wheeler</option>
				</select>
			</td>
			</tr>
			<tr>
			<td><p class="show">Time:</p></td>
				<td>
				<select type="time" id="time" name="time" onchange="update()">
					<option value="15" selected>15 minute</option>
					<option value="30">30 minute</option>
					<option value="45">45 minute</option>
					<option value="60">60 minute</option>
					<option value="90">90 minute</option>
					<option value="120">120 minute</option>
					
				</select></td>
				</tr>
			<td><p class="show"> Amount</p></td>
				<td><input type="text" name="amount" id="amount" value="0.015"><p id="aerror"></p>
					</td>
			</tr>
			<script>
			function update()
			{
				var total;
				var t=document.getElementById("vehicle").value;
				var min=document.getElementById("time").value;
				if(t==2)
				{
					total=min*0.001;
				}
				if(t==4)
				{
					total = min*0.002;
				}
				document.getElementById("amount").value=total;
			}
			
			</script>
			
			</table>
			
			<div class="col-md-12">
			<input type="submit" value="Done It" style="color:red" onclick="return check();"/>
		</div>
		</form>
		<script>
			
			
			
			function check()
			{
				var amt = '<?php echo $y;?>';
			console.log(amt);
			
			var price = document.getElementById("amount").value;
			console.log(price);

			if(amt < price)
			{
				 
				document.getElementById("aerror").innerHTML="Your wallet Money Is less";
				return false;
			}
				return true;
			}
		
		
		
		</script>
	
		</div>
	</div>
		
	<div class="row footer">
		
                <div class="col-md-12 cpy-text">
                		<p>CopyRight &copy 2018</p>
                </div>
            </div>
        </div>
		
		


	</div>
	
</body>
</html>