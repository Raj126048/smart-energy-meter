
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="website.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="status.html">Status</a></li>
                <li><a href="">Contacts</a></li>
                <li><a href="wave.php">Wave</a></li>
                <li><a href="index.html">Logout</a></li>
            </ul>
        </nav>
        </div>
        <div class="box">
        <div class="row">
            <div class="col-1">
                <h1>Batch A2</h1>
                <h2>Welcome <?php  
                session_start();

                
                echo "".$_SESSION['uname']    ;
               // $con =new mysqli("localhost","root","","smart energy moniter");
               // $sel="SELECT * from register1";
               // $query= mysqli_query($con,$sel);
               // $result=mysqli_fetch_assoc($query);
               // echo $result['uname'];
               // $result=null; ?></h2>
                <h3>Energy monitering system</h3>
            </div>
            <div class="col-2">
                <img src="meter.jpg" class="meter">
         
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