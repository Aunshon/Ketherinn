<?php
   require 'db.php';
   //$sqli = "SHOW TABLES FROM shawon";
   // $sqli = "SHOW COLUMNS FROM menu";
   // $result = mysqli_query($connectionQuery,$sqli); dropimg
   $menuName=$_POST['menuName'];
   $one=$_POST['one'];
   $two=$_POST['tow'];
   $photo=$_FILES['photo'];
// echo $menuName . $one . $two . $three . $four . $five . "<br>"; title 	name 	address 	photo 	des
// print_r($photo);
if ($one==null) {
  $one="Best Sydney Residential Real Estate Agents";
}
if ($two==null) {
  $two="We have listed the Best Real Estate Agents in Sydney to ensure you receive top class service and the best price when selling your exclusive property.";
}


$afterExplode=explode(".",$photo['name']);
$extention=end($afterExplode);
//echo $extention;

//echo $photo['tmp_name'];
$insertbanner="INSERT INTO $menuName(title,des) VALUES('$one','$two')";
$confirmInsert=mysqli_query($connectionQuery,$insertbanner);
$id=mysqli_insert_id($connectionQuery);
$photoname=$id.'.'.$extention;
$uploadphotolocation="main/".$photoname;
$currentPhotoLocation=$photo['tmp_name'];
move_uploaded_file($currentPhotoLocation,$uploadphotolocation);


$updatepic="UPDATE $menuName SET photo='$photoname' WHERE id=$id";
$confirmupdate=mysqli_query($connectionQuery,$updatepic);
if (!$confirmupdate) {
  echo "Failed to upload photo".mysqli_error($connectionQuery);
  //header("Refresh:1; URL=index.php");
}
else {
  header("location:index.php");
}


  ?>
