<?php
session_start();
	include('database_info.php');
	$mobile=$_SESSION["mobile"];
	$money = $_GET["money"];
	//echo "$money";
	
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
			$total = $x + $num;

		///	echo "$total";
	$sql1 = "UPDATE register set Amount='$total' where Mobile='$mobile'";
			
			
			
			
			
			
			
	$sql2 = "INSERT INTO transaction(Sender_Mobile,Service,Amount,Balance) values('$mobile','Add Money','$num','$total')";		
			
			
			
			
			
			
	if($mysql->query($sql1)  ===  TRUE  &&  $mysql->query($sql2)  ===  TRUE )//&& $mysql->query($sql2)  ===  TRUE)
	{
			
	header('refresh:2;url=login_homepage.php');
	}
else
{
echo "Error:". $sql ."<br/>". $mysql->error;
}








?>