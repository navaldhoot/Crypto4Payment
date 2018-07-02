<?php 
	session_start();
	
	include('database_info.php');
	
$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];

	$_SESSION["mobile"]=$mobile;

if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}
$sql="SELECT AES_DECRYPT(Password,'secret') AS 'Password' from Login where Mobile='$mobile'";


		$qry = mysqli_query($mysql,$sql) ;
		//or die(mysql_error($mysql));	
		echo "Hiii";
		
		if (!$result = mysqli_query($mysql, $sql)) {	
		//echo "Hiiiii";	
				printf("Errormessage: %s\n", mysqli_error($conn));
		}
		/*if($qry -> )
		{
			die(mysqli_error());
			echo "Mobile Number Not Found";
			exit(1);
		}*/
		
		
		while($row = mysqli_fetch_array($qry,MYSQLI_ASSOC))
		{
			echo "hii";
			
			$x=$row["Password"];
			
			
			if( $x == $password )
			{
				echo  "Login Sucessfully";
			header('refresh:0;url=login_homepage.php');					
			}
			else
			{
					echo "Mobile No. and Password Not Matches";
					header('refresh:10;url=login.html');

			}
			
			
			
			
		}
																											


/*



if (!$check1_res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}




*/
?>