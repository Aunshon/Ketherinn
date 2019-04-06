<?php
    require 'db.php';
    $one=$_POST['one'];
    $tow=$_POST['tow'];
    $three=$_POST['three'];
    $four=$_POST['four'];
    $five=$_POST['five'];
    if ($one==null) {
      $one="THE BEST REAL ESTATE AGENTS IN AUSTRALIA";
    }
    if ($tow==null) {
      $tow="LET US HELP YOU FIND THE BEST AGENT FOR YOUR PROPERTY CLICK BELOW !";
    }
    if ($three==null) {
      $three="REAL STATE AGENT";
    }
    if ($four==null) {
      $four="BUYER AGENT";
    }
    if ($five==null) {
      $five="PROPERTY MANAGER";
    }

    echo $one . $tow . $three . $four . $five . $six ;
    $select="UPDATE banner_titles SET one='$one',two='$tow',three='$three',four='$four',five='$five'";
    $q=mysqli_query($connectionQuery,$select);
    if (!$q) {
      echo "banner not updated";
      header("Refresh:2; URL=banner.php");
    }
    else {
      header("location:banner.php");
    }

 ?>
