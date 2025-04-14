<?php

   $username = $_POST['username'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   
   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into enquiry(username,email,phone,message)
         values(?,?,?,?)");
    $stmt->bind_param("sssssi",$userName,$email,$phone,$message);
    $stmt->execute();
    echo"successfully registered.";
    $stmt->close();
    $conn->close();

   }

?>