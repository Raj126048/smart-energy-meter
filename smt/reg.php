// Code Written by Rishi Tiwari
// Website:- https://tricksumo.com
// Reference:- https://www.w3schools.com/php/php_mysql_insert.asp
//
//

<?php



    $host = "localhost";		         // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "id20500190_electric_bills";              // Database name
    $username = "id20500190_electric_bill";		// Database username
    $password = "#b!H#X1Dj5y(S@Ti";	        // Database password


// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. "; }

   
// Get date and time variables
    date_default_timezone_set('Asia/Kolkata');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
    $uname1 = $_POST['uname'];
$email  = $_POST['mail'];
$upswd1 = $_POST['pass1'];
$upswd2 = $_POST['pass2'];

// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($uname1) || !empty($email) || !empty($upswd1) || !empty($upswd2) )
    {

// Update your tablename here
	        $sql = "INSERT INTO register1 (uname, mail, pass1, pass2) VALUES ('".$uname."','".$email."', '".$upswd1."', '".$upswd2."')"; 
 


		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


// Close MySQL connection
$conn->close();



?>