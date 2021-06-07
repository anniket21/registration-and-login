<?php
include '../database/conn.php';

$username = $_POST['uname'];
$password = $_POST['password'];
$password= hash('sha256', $password);
echo $query ="select * from users where uname ='$username' and password = '$password'";
$result =mysqli_query ($conn ,$query);
echo $count =mysqli_num_rows($result);
if($count > 0) 
{
    echo"Logged in successfully" ;
}
else
    {
        echo"Login Failed";
    }





















?>