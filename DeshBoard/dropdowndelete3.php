<?php
  require 'db.php';
  require 'session_check.php';

  $id=$_GET['id'];
  $page=$_GET['page'];
  $select_photo="SELECT photo FROM $page WHERE id=$id";
  $currentPhotoQuery=mysqli_query($connectionQuery,$select_photo);
  $currentPhot=mysqli_fetch_assoc($currentPhotoQuery);
  //echo $currentPhot['photo'];
  $photoDeleteLocation="dropimg/".$currentPhot['photo'];
  unlink($photoDeleteLocation);


  $deleteQuery="DELETE FROM $page WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=dropdowndelete2.php?dropdownname=$page");
  }
  else {
    //header("location:dropdowndelete2.php?dropdownname=$page");
    header("location:index.php");
  }
 ?>
