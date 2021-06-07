<?php

$conn = new mysqli ("localhost","root","root","project1");

if(!$conn){
    die ("connection_failed : mysqli_connect_error() ");
        
    }
    echo "connect succesfully";
    

?>

