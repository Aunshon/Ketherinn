<?php
 require 'db.php';
 $one=$_POST['copy'];
 if ($one==null) {
   $one=" 2019 Copyright Top Real Estate Agent | All Rights Reserved | Privacy Policy";
 }
 $update="UPDATE footer SET copy='$one'";
 $query=mysqli_query($connectionQuery,$update);

 if (!$query) {
   echo "Failed to change navbar";
   header("refresh:1 ; URL=footerch.php");
 }
 else {
   Header("location:footerch.php");
 }
 ?>













<?php
 require 'desh_file/desh_footer.php';
 ?>
