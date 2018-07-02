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

  <title>Trasaction History</title>
  
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
	   
	.pa{
		color:black;
		font-family:'Lato';
		font-size:30px;
	}
.menu-center{
text-align:center;
}
	.menu-bar{
			background:white;
	}
	
.table p{
		font-size:25px;
		text-align:center;
}
table{
	margin:20px;
	
}
tr,td{
	padding:10px;
	font-size:20px;
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
				<li><a href="addmoney.php">Add Money</a></li>
				<li><a href="#">Transaction History</a></li>
	   			<li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
			<ul>
    
	</div>
	</div>
		
	
	
	
	<div class="row table">
	
	
		<div class="col-md-12">
		
			<p>Transaction History</p>
		</div>
	

	<div class="col-md-12">
	
	
	
	
	
	<?php  
	
	
	
	
	
	
	
	$i=1;
	echo  "<table border='1' width='100%'>
			<tr>
			<th>S.no.</th>
			<th>Transaction ID</th>
			<th>Mobile No.</th>
			<th>Service</th>
			<th>Amount</th>
			<th>Balance</th>
		</tr>";
	if ($result = $mysql->query("SELECT * FROM transaction Where Sender_Mobile='$mobile'"))
	{
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
	
		echo "<tr>
				<td>".$i."</td>
				<td>".$row['Transaction_Id']."</td>
				<td>".$row['Sender_Mobile']."</td>
				<td>".$row['Service']."</td>
				<td>".$row['Amount']."</td>
				<td>".$row['Balance']."</td>
			</tr>";
			$i++;
	}

	}
	}	echo "</table>";

$mysql->close();

?>
	
	

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
