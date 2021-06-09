<?php

$conn = new mysqli ("localhost","root","root","evldata");

if(!$conn){
    die ("connection_failed : mysqli_connect_error() ");
        
    }
    echo "connect succesfully";
    

?>

