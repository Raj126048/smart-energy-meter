// Code Written by Rishi Tiwari
// Website:- https://tricksumo.com
// Reference:- https://www.w3schools.com/php/php_mysql_select.asp
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

else { echo "Connected to mysql database. <br>"; }

$uname="Raj";
// Select values from MySQL database table

$sql = "SELECT value, current, voltage, energy FROM register WHERE uname='". $uname ."'";  // Update your tablename here

$result = $conn->query($sql);

echo "<center>";



if ($result->num_rows > 0) {


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong> Id:</strong> " . $row["value"]. " &nbsp <strong>val:</strong> " . $row["current"]. " &nbsp <strong>val2:</strong> " . $row["voltage"]. " &nbsp <strong>Date:</strong> " . $row["energy"]." &nbsp <strong>Time:</strong><p>";
    


}
} else {
    echo "0 results";
}

echo "</center>";

$conn->close();



?>