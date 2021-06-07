<?php
include "../database/conn.php";


if (isset($_POST['submit'])) {

    $uname =  mysqli_real_escape_string($conn,$_POST['uname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
   $address= mysqli_real_escape_string($conn,$_POST['address']);
   $password =mysqli_real_escape_string($conn,$_POST['password']);
   $confirm_password =mysqli_real_escape_string($conn,$_POST['confpassword']);
   
   $baseurl="http://". $_SERVER['SERVER_NAME'];
   
   if ($confirm_password != $password){
       
    header('Location:'.$baseurl."/vrmproject/UI/index.php?erromsg=password did not matched");
    exit;
}

$password= hash('sha256', $password);

    $insert_query = 'insert into  users(uname,email,mobNumber,address,password) values 
   ("'.$uname.'","'.$email.'",'.$number.',"'.$address.'","'.$password.'")';
   
   $iquery = mysqli_query($conn,$insert_query);
   
   if ($iquery){
       echo "connected";
   }
   
   else{
       echo "false".mysqli_error($conn);
   }



   


   header('Location:'.$baseurl."/vrmproject/UI/login.html");
   exit;

}


?>