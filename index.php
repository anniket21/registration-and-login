<?php 


  if (!isset($_SESSION['uname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:'.$baseurl."/vrmproject/view/login.html");
      exit;
  }
  else{
    header('location:'.$baseurl."/vrmproject/view/main.php");
    exit;
}
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['uname']);
  	header('location:'.$baseurl."/vrmproject/view/login.html");
  }
?>

