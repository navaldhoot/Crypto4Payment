<?php
session_start();
	include('database_info.php');
	$mobile=$_SESSION["mobile"];
	
	$money = $_GET["amount"];
//	echo "$money";
	
	$num = (float)$money;
	//echo "$num";
	$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}

	
	$sql="SELECT * from register where Mobile='$mobile'";
		$qry = mysqli_query($mysql,$sql);	

		while($row = mysqli_fetch_array($qry,MYSQLI_ASSOC))
		{
			
			$x=$row['Amount'];
			
		}
		//echo "$x";
			$total = $x - $num;

		//	echo "$total";


	$sql1 = "UPDATE register set Amount='$total' where Mobile='$mobile'";
	
	
			
			
			
			
			
			
	$sql2 = "INSERT INTO transaction(Sender_Mobile,Service,Amount,Balance) values('$mobile','Recharge','$num','$total')";		
			
			
			
			
			
	
	
	
	
	
	
	$query="SELECT * from services where Service_Name='Recharge'";
		$q = mysqli_query($mysql,$query);	

		while($row = mysqli_fetch_array($q,MYSQLI_ASSOC))
		{
			
			$a=$row['Amount'];
			
		}
		
		$a = $a + $num;
	
	
	
	$sql3 = "UPDATE services set Amount='$a' where Service_Name='Recharge'";
	
	
	
	
	
	
	
	
	
	
	
	
	
	if($mysql->query($sql1)  ===  TRUE  &&  $mysql->query($sql2)  ===  TRUE && $mysql->query($sql3)  ===  TRUE)
	{
	echo "Your Recharge Is Done.";

	header('refresh:5;url=login_homepage.php');
	}
else
{
echo "Error:". $sql ."<br/>". $mysql->error;
}








?>