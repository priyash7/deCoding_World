<?php
 $name = $_POST['name'];
 $phoneno = $_POST['phoneno'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 //Database connection
 $conn = new mysqli('localhost','root','test')
 if($conn->connect_error){
   die('Connection Failed : '.$conn->connect_error);
 }
 else{
   $stmt = $conn->prepare("insert into registration(name,phoneno,email,password)values(?, ?, ?, ?)")
   $stmt->bind_param("siss",$name,$phoneno,$email,$password);
   $stmt->execute();
   echo "Registration Successful...";
   $stmt->close();
   $conn->close();

 }
?>