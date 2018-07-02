<?php	session_start();
		include('database_info.php');
$mysql = mysqli_connect($dbservername, $dbusername, $dbpassword, "crypto");

	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	

	$_SESSION["name"]=$name;
	$_SESSION["email"]=$email;
	$_SESSION["mobile"]=$mobile;
	
	$password = $_POST["user_password"];
	
	
	//$encrypt_pswd = AES_ENCRYPT($password,'secret');
/*	$password = md5($_POST["password"]);
*//*
if($mysql->connect_error)
{
	
	$conn = new mysqli($dbservername, $dbusername, $dbpassword);

	 $sql34 = "CREATE DATABASE  crypto";
				
				
			if ($conn->query($sql34) === TRUE) 
			{
			
				
				$mysql1 = mysqli_connect($dbservername, $dbusername, $dbpassword, "crypto");

				$sql_tab = "CREATE TABLE Register (
				Name TEXT
				Email TEXT,
				Mobile TEXT,
				Amount(in BitCoin) TEXT
			)";
				
				
				$sql_tab1 = "CREATE TABLE Login (
				Mobile TEXT
				Password TEXT)";
				
				
				
				
				$sql_tb2 = "CREATE TABLE Transcation (
				Transaction_Id INT Primary Key AUTO_INCREMENT,
				Sender_Mobile TEXT,
				Service TEXT,
				Amount(in BitCoin) TEXT)";
				
				
				
				$sql_ser = "CREATE TABLE Services (
				Service_Name TEXT,
				Amount(in BitCoin) TEXT)";
				
				
				
				
				
								if (mysqli_query($mysql, $sql_tab) && mysqli_query($mysql, $sql_tab1) &&mysqli_query($mysql, $sql_tb2)) {
								echo  "Tables created successfully";
								} else {
								echo "Error creating table: " . mysqli_error($conn);
								}
	
	
	
	
	
}
}
*/

$mysql = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

$sql= "INSERT INTO register( Name, Email, Mobile, Amount) 
            VALUES ('$name', '$email', '$mobile', '0')";


			
			
	
$sql1="INSERT INTO login( Mobile, Password) VALUES ('$mobile',AES_ENCRYPT('$password','secret'))";


//$sql2="INSERT INTO Services(Service_Name,Amount(in BitCoin)) VALUES ('Parking','0'),('Flight','0'),('Movie','0'),('Recharge','0')";



if($mysql->query($sql)  ===  TRUE  &&  $mysql->query($sql1)  ===  TRUE )//&& $mysql->query($sql2)  ===  TRUE)
{
	echo "<h3>Data entered successfully</h3><br/><br/>";
	echo "<h1>Thank You!</h1><br/><br/>";
	echo "You will be redirected in 5 seconds!";
	header('refresh:5;url=login.html');
}
else
{
echo "Error:". $sql ."<br/>". $mysql->error;
}

	


$mysql->close();


?>
