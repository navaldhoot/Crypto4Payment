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

  	<title>Mobile Recharge</title>
	<script src="https://use.fontawesome.com/7d44bc7623.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
<!---------- INCLUSION OF VIEWPORT --------------->
	<meta name="viewport" content="width=1024">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/common.css">

	
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
			background:url(images/mobile_back.jpg);
	background-size:cover;
		color:black;
		padding-top:150px;
		text-align:center;
		font-size:30px;
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
			
			<p> Mobile Recharge</p>
		
		
			<div class="col-md-12">
			
			<form action="updbmobile.php" method="GET">
			<table align="center">
			<tr>
				<td><p class="show">Mobile  Number:</p></td>
				<td>
					<input type="text" name="number" >
			</td>
			</tr>
			<tr>
				<td><p class="show">Type:</p></td>
				<td>
					<input type="radio" name="type" value="prepaid"> Prepaid
				<input type="radio" name="type" value="postpaid"> PostPaid
			</td>
			</tr>
			<tr>
			<td><p class="show">Operator</p></td>
				<td><select type="opertaor">
					<option>----------Select----------</option>
					<option>Idea</option>
					<option>Airtel</option>
					<option>Jio</option>
					<option>Aircel</option>
					<option>Tata Docomo</option>
					<option>BSNL</option>
					
				</select></td>
			</tr>
			<tr>
				<td><p class="show"> Recharge Amount</p></td>
				<td><select id="amount"  name="amount">
					  <option value="0.05" selected>0.05</option>
					  <option value="0.1">0.1</option>
					  <option value="0.2">0.3</option>
					  <option value="0.25">0.35</option>
					  <option value="0.3">0.3</option>
					  <option value="0.5">0.5</option>
					  <option value="0.6">0.6</option>
					  <option value="0.75">0.75</option>
					  <option value="0.8">0.8</option>
					  <option value="0.9">0.9</option>
					  <option value="1">1</option>
					</select>
					<p id="aerror"></p>
				
					</td>
			</tr>
			
			
			</table>
			
			<div class="col-md-12">
			<input type="submit" value="Done It" style="color:red" onClick="return check()" />
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