<?php
  require 'db.php';

  $id=$_GET['id'];
  $deleteQuery="DELETE FROM b_comm WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=allcomments.php?dropdownname=$page");
  }
  else {
    //header("location:dropdowndelete2.php?dropdownname=$page");
    header("location:allcomments.php");
  }
 ?>
