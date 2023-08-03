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



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="status.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
        <nav>
            <ul>
                <li><a href="website.php">Home</a></li>
                <li><a href="">Status</a></li>
                <li><a href="">Contacts</a></li>
                <li><a href="wave.php">Wave</a></li>
                <li><a href="index.html">Logout</a></li>
            </ul>
        </nav>
        </div>
        <div class="box">
        <div class="row-1">
            <div class="col-1">
             <h1>Energy readings</h1>
             
            </div>
            <hr>
            <div class="col-2">
              <div class="text"><h1><?php echo "".$row['value']?></h1></div>
             
            </div>
        </div>
        <div class="row">
            <div class="col-1">
             <h3>Energy</h3>
           
            </div>
            <div class="col-2">
              <div class="text"><h1><?php echo "".$row['current']?></h1></div>
             
            </div>
            <div class="row">
                <div class="col-1">
                 <h3>Voltage</h3>
               
                </div>
                <div class="col-2">
                  <div class="text"><h1><?php echo "".$row['voltage']?></h1></div>
                 
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                 <h3>Current</h3>
               
                </div>
                <div class="col-2">
                  <div class="text"></div>
                 
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight ="0px";
        function togglemenu(){
            if(menuList.style.maxHeight =="0px"){
                menuList.style.maxHeight ="130px"
            }
            else{
                menuList.style.maxHeight ="0px"
            }
        }
    </script>
</body>
</html>