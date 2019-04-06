<?php
    require 'db.php';
    $one=$_POST['one'];
    $tow=$_POST['tow'];
    if ($one==null) {
      $one="THE BEST REAL ESTATE AGENTS IN AUSTRALIA";
    }
    if ($tow==null) {
      $tow="Looking to buy, sell or rent out an exclusive property in Australia why not use the best real estate agent or property manager? Click on your capital city to view the best real estate agents, buyers agents and property managers in your area.";
    }

    //echo $one . $tow . $three . $four . $five . $six ;
    $select="UPDATE all_agency SET title='$one',des='$tow'";
    $q=mysqli_query($connectionQuery,$select);
    if (!$q) {
      echo "banner not updated";
      header("Refresh:2; URL=all_agency.php");
    }
    else {
      header("location:all_agency.php");
    }

 ?>
