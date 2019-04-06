<?php
session_start();
$_SESSION['messageAlert']=0;
$_SESSION['activation']=0;
$_SESSION["activationbanner"]=0;
if ($_SESSION['check_login']==null) {
  header("location:login.php");
}
 ?>
