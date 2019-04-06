<?php
  require 'db.php';
  require 'session_check.php';

  $id=$_GET['id'];
  $select_photo="SELECT photo FROM logo WHERE id=$id";
  $currentPhotoQuery=mysqli_query($connectionQuery,$select_photo);
  $currentPhot=mysqli_fetch_assoc($currentPhotoQuery);
  echo $currentPhot['photo'];
  $photoDeleteLocation="logos/".$currentPhot['photo'];
  unlink($photoDeleteLocation);


  $deleteQuery="DELETE FROM logo WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=logochange.php");
  }
  else {
    header("Location:logochange.php");
  }
 ?>
