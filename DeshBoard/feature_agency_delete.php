<?php
  require 'db.php';
  require 'session_check.php';

  $id=$_GET['id'];
  $select_photo="SELECT photo FROM feature_agency WHERE id=$id";
  $currentPhotoQuery=mysqli_query($connectionQuery,$select_photo);
  $currentPhot=mysqli_fetch_assoc($currentPhotoQuery);
  //echo $currentPhot['photo'];
  $photoDeleteLocation="feature_agency_pic/".$currentPhot['photo'];
  unlink($photoDeleteLocation);


  $deleteQuery="DELETE FROM feature_agency WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=feature_agency.php");
  }
  else {
    //header("location:dropdowndelete2.php?dropdownname=$page");
    header("location:feature_agency.php");
  }
 ?>
