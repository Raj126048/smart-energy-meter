<?php 
$mail= $_POST['email'];
$password= $_POST['password'];
echo $mail;
$con =new mysqli("localhost","root","","smart energy moniter");
if($con->connect_error){
    die("failed to connect:".$con->connect_error);
}
else{
    $stmt= $con->prepare("SELECT * from register1 where mail= ?");  
    $stmt->bind_param("s",$mail);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc(); 
    if($data['pass1']===$password){
        echo "<h2>Login successful</h2>";
        echo $data['uname'];
        session_start();
        $_SESSION['uname'] =$data['uname'];
        echo  $_SESSION['uname'];
        header("Location: website.php");
       
     
       
        
    }   else{
        echo "<h2>Invalid email or password</h2>";
    }
}
        else{
            echo "<h2>Invalid email or password</h2>";
        }
}
?>