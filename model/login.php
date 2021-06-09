<?php
session_start();

include '../controller/conn.php';

$username = $_POST['uname'];
$password = $_POST['password'];
$password= hash('sha256', $password);
$baseurl="http://". $_SERVER['SERVER_NAME'];

    $query ="select * from users where uname ='$username' and password = '$password'";
    $result =mysqli_query ($conn ,$query);
    $count =mysqli_num_rows($result);

   if($count >0){
    $_SESSION['uname'] = $username;
   // $_SESSION['success'] = "You are now logged in";
    header('Location:'.$baseurl."/vrmproject/view/main.php");
    exit;
   }
   else{
    header('Location:'.$baseurl."/vrmproject/view/login.html?erromsg=password did not matched");
    exit;
   }




   

  


  


















?>