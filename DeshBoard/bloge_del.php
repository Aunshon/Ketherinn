<?php
  require 'db.php';
  require 'session_check.php';

  $id=$_GET['id'];
  $comm=$_GET['comm'];
  $select_photo="SELECT photo FROM bloge WHERE id=$id";
  $currentPhotoQuery=mysqli_query($connectionQuery,$select_photo);
  $currentPhot=mysqli_fetch_assoc($currentPhotoQuery);
  //echo $currentPhot['photo'];
  $photoDeleteLocation="all_bloge_pic/".$currentPhot['photo'];
  unlink($photoDeleteLocation);


  $deleteQuery="DELETE FROM bloge WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=bloge.php");
  }
  else {
    //header("location:dropdowndelete2.php?dropdownname=$page");
    $d="ALTER TABLE b_comm DROP $comm";
    $deleteR=mysqli_query($connectionQuery,$d);
    if (!$deleteR) {
      echo "Cound not delete b_comm";
      header("Refresh:2; URL=all_bloge.php");
    }
    else {
      header("location:all_bloge.php");
    }

  }
 ?>
