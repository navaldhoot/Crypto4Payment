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
		background:url(images/movie_back.jpg);
	background-size:cover;
	height:700px;
	padding-top:150px;
		color:black;
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
	padding:30px;
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
			
			<p> Book Movie Ticket</p>
		
		
			<div class="col-md-12">
			
			<form action="updbmovie.php" method="GET">
			<table align="center">
			<tr>
			<td><p class="show">Theatre:</p></td>
				<td>
				<select type="theatre" id="theatre" name="theatre">
					<option value="PVR" selected>PVR</option>
					<option value="Inox C21 Mall">Inox C21 Mall</option>
					<option value="Inox,Sapna Sangeeta">Inox,Sapna Sangeeta</option>
					<option value="Velocity">Velocity</option>
					<option value="Carnival">Carnival</option>
					<option value="Prince AYU Cinema">Prince AYU Cinema</option>
					
				</select></td>
				</tr>
			<tr>
				<td><p class="show">Movie Name:</p></td>
				<td>
				<select type="name" id="name" name="name">
					<option value="Raid" selected>Raid</option>
					<option value="Hichki">Hichki</option>
					<option value="Sonu Ke Titu Kae Monu Ki Sweety">Sonu Ke Titu Kae Monu Ki Sweety</option>
					<option value="Pacific Film Uprising">Pacific Film Uprising</option>
					<option value="Sajjan Siingh Rangroot">Sajjan Siingh Rangroot</option>
					<option value="Padmavat">Padmavat</option>
					<option value="Hate Story 4">Hate Story 4</option>
				</select>
			</td>
			</tr>
			<tr>
			<td><p class="show">No. of Seats:</p></td>
				<td>
					<input type="number" name="seats" id="seats" value="1" onChange="update()">
				</td>
				</tr>
			<td><p class="show"> Amount</p></td>
				<td><input type="text" name="amount" id="amount" value="0.1"> <p id="aerror"></p>
					</td>
			</tr>
			<script>
			function update()
			{
				var total;
				var s=document.getElementById("seats").value;
				total = s * 0.1;
				document.getElementById("amount").value=total;
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			</script>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</table>
			
			<div class="col-md-12">
			<input type="submit" value="Book Ticket" style="color:red" onclick="return check();"/>
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