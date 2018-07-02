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
<head>
	<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/common.css">

  	<title>Airlines</title>
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
			background:white;
	
	}
	
	.pa{
		color:black;
		font-family:'Lato';
		font-size:30px;
	
	}

	.head{
		height:700px;
		padding-top:100px;
	color:black;
background:url(images/flight_back.jpg);
	background-size:cover;
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
	padding:30px;
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
	
		<div class="row air">
		
			<div class="col-md-12 head">
			
			<p> Book Air Ticket</p>
		
		
			<div class="col-md-12">
			
			<form action="updbflight.php" method="GET">
			<table align="center">
			<tr>
				<td><p class="show">Origin</p></td>
				<td><select type="origin">
					<option>----------Select----------</option>
					<option>Indore</option>
					<option>Bhopal</option>
					<option>Ahmedabad</option>
					<option>Mumbai</option>
					<option>Delhi</option>
					<option>Chennai</option>
					<option>Kolkata</option>
					<option>Thiruvanantapuram</option>
				</select></td>
			</tr>
			<tr>
			<td><p class="show">Destination</p></td>
				<td><select type="origin">
					<option>----------Select----------</option>
					<option>Indore</option>
					<option>Bhopal</option>
					<option>Ahmedabad</option>
					<option>Mumbai</option>
					<option>Delhi</option>
					<option>Chennai</option>
					<option>Kolkata</option>
					<option>Thiruvanantapuram</option> 	
				</select></td>
			</tr>
			<tr>
				<td><p class="show"> Tickets Type:</p></td>
				<td><select id="adult" onchange="getSelectedValue1()">
					  <option value="1" selected>1 Adult</option>
					  <option value="2">2 Adults</option>
					  <option value="3">3 Adults</option>
					  <option value="4">4 Adults</option>
					  <option value="5">5 Adults</option>
					  <option value="6">6 Adults</option>
					  <option value="7">7 Adults</option>
					  <option value="8">8 Adults</option>
					  <option value="9">9 Adults</option>
					</select>
					<select id="child"onchange="getSelectedValue2()">
					  <option value="0" selected>0 Child</option>
					  <option value="1">1 Child</option>
					  <option value="2">2 Children</option>
					  <option value="3">3 Children</option>
					  <option value="4">4 Children</option>
					  <option value="5">5 Children</option>
					  <option value="6">6 Children</option>
					  <option value="7">7 Children</option>
					  <option value="8">8 Children</option>
					</select>
					<select id="infant" onchange="getSelectedValue3()">
					  <option value="0" selected>0 Infant</option>
					  <option value="1">1 Infant</option>
					  <option value="2">2 Infants</option>
					  <option value="3">3 Infants</option>
					  <option value="4">4 Infants</option>
					  <option value="5">5 Infants</option>
					  <option value="6">6 Infants</option>
					  <option value="7">7 Infants</option>
					  <option value="8">8 Infants</option>
					  <option value="9">9 Infants</option>
					</select>
		<script type = "text/javascript">
		var x1,x2,x3;
		function getSelectedValue1()
		{
			var s1=document.getElementById("adult").value;
			var x1=parseFloat(s1)*0.03;
			document.getElementById("ticket").value=x1;
			return x1;
		}
		function getSelectedValue2()
		{
				var s2=document.getElementById("child").value;
				var x2=parseFloat(s2)*0.02;
				var w=getSelectedValue1();
				var w1=x2+parseFloat(w);
				document.getElementById("ticket").value=w1;
				return w1;
			}
		function getSelectedValue3()
		{
			var s3=document.getElementById("infant").value;
			var x3=parseFloat(s3)*0.01;
		var y=getSelectedValue2();
		var y1=x3+parseFloat(y);
			document.getElementById("ticket").value=y1;
			return y1;
		}
		function total(x1,x2,x3)
		{
			var x4=x1 + x2 + x3;
			var z=getSelectedValue3();
			var z1=x4+parseFloat(z)
			document.getElementById("ticket").value=z1;	
		
		}
		/*function check()
		{
			var amt = <?php echo "$x";?>
			var getamt = document.getElementById("ticket").value;
			
			if(Number(amt) < Number())
			{
				document.getElementById("aerror").innerHTML="Your Wallet Amount is Less.";
				return false;
			}
			return true;
		}
		
		*/
		
		
		</script>
		
					</td>
			</tr>
			
			<tr>
					<td><p class="show">Date </td> 
					<td>	<input type="date"/></td>
	
			</tr>
				
			<tr>
					<td><p class="show">Amount</p> </td> 
					<td><input type="text" name="ticket" id="ticket" value="0.03"> <p id="aerror"></p></td>
			
			</tr>
			</table>
			
			<div class="col-md-12">
			<input type="submit" value="Book Flight" style="color:red" onclick="return check()"/>
		</div>
		</form>
		<script>
			
			
			
			function check()
			{
				var amt = '<?php echo $y;?>';
			console.log(amt);
			
			var price = document.getElementById("ticket").value;
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