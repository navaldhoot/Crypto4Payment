<?php
	session_start();
 include("database_info.php");
 $username=$_SESSION["username"];
 
 // Create connection
$conn = new mysqli("$dbservername", "$dbusername", "$dbpassword");
// Check connection





$name=$_SESSION["name"];
	$email=$_SESSION["email"];
	$phone=$_SESSION["phone"];
	$address=$_SESSION["address"];
	$firm_name=$_SESSION["firm_name"];
	$firm_address=$_SESSION["firm_address"];
	$firm_email=$_SESSION["firm_email"];
	$firm_phone=$_SESSION["firm_phone"];
	$firm_gstin_no=$_SESSION["firm_gstin_no"];
	$area_of_business=$_SESSION["area_of_business"];
	$items_sold=$_SESSION["items_sold"];
	$business_turnover=$_SESSION["business_turnover"];
	
	
	











if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



				
				
	$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");

				$sql_tab = "CREATE TABLE  ".$username."_item_details (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				item_name TEXT,
				hsn_code TEXT,
				igst TEXT,
				cgst TEXT,
				sgst TEXT ,
				notes TEXT)";
				
				
				$sql_tab1 = "CREATE TABLE ".$username."_bill_details (
				invoice_no TEXT,
				bill_date TEXT,
				buyer_name TEXT,
				buyer_address TEXT,
				buyer_gstin_no TEXT ,
				itemlist TEXT,
				quantitylist TEXT,
				ratelist TEXT,
				perlist TEXT,
				taxlist TEXT,
				taxamount TEXT,
				grandtotal TEXT)";
				
				$sql_tab2 = "CREATE TABLE ".$username."_purchase_details (
				supplier_invoice_no TEXT,
				party_account_name TEXT,
				party_gstin TEXT,
				date TEXT,
				item_name TEXT ,
				quantity TEXT ,
				rate TEXT ,
				igst TEXT ,
				total TEXT,	
			total_with_tax TEXT)";
				
				$sql_tab3 = "CREATE TABLE ".$username."_transaction (
				Date TEXT,
				Detail TEXT,
				Cheque TEXT,
				Debit TEXT,
				Credit TEXT ,
				Balance TEXT)";
				
				$sql_tab4 = "CREATE TABLE ".$username."_profile_info (
				name TEXT,
				email TEXT,
				phone TEXT,
				address TEXT,
			    firm_name TEXT ,
			    firm_address TEXT ,
				firm_email TEXT,
				firm_phone TEXT,
			    firm_gstin_no TEXT ,
			    area_of_business TEXT ,
				items_sold TEXT ,
				business_turnover TEXT)";


								if (mysqli_query($mysql, $sql_tab) && mysqli_query($mysql, $sql_tab1) && mysqli_query($mysql, $sql_tab2) && mysqli_query($mysql, $sql_tab3)) {
								echo "Table MyGuests created successfully";
								} else {
								echo "Error creating table: " . mysqli_error($conn);
								}
	
	
						if (mysqli_query($mysql, $sql_tab4)) {
								echo "Table profile created successfully";
								} else {
								echo "Error creating table: " . mysqli_error($conn);
								}
	
	
	
	
				
				/*				$sql_tab5 = "CREATE TABLE transaction (
				Date TEXT,
				Detail TEXT,
				Cheque TEXT,
				Debit TEXT,
				Credit TEXT ,
				Balance TEXT)";

				$

*/








$conn->close(); 






$mysql2 = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");


$sql2= "INSERT INTO ".$username."_profile_info( name, email, phone, address , firm_name ,firm_address, firm_email, firm_phone, firm_gstin_no, area_of_business, items_sold, business_turnover) 
            VALUES ('$name', '$email', '$phone', '$address', '$firm_name', '$firm_address','$firm_email', '$firm_phone','$firm_gstin_no','$area_of_business','$items_sold','$business_turnover')";

			
			
if( $mysql2->query($sql2)  ===  TRUE)
{
	session_unset();
header('refresh:5;url=login.html');
$mysql2->close();
	
}

else
{
echo "Error:". $sql2 ."<br/>". $mysql2->error;
}







?>