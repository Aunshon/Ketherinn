<?php
   require 'db.php';
   //$sqli = "SHOW TABLES FROM shawon";
   // $sqli = "SHOW COLUMNS FROM menu";
   // $result = mysqli_query($connectionQuery,$sqli); dropimg
   $menuName=$_POST['menuName'];
   $one=$_POST['one'];
   $two=$_POST['tow'];
   $three=$_POST['three'];
   $four=$_POST['four'];
   $photo=$_FILES['photo'];
// echo $menuName . $one . $two . $three . $four . $five . "<br>"; title 	name 	address 	photo 	des
// print_r($photo);
if ($one==null) {
  $one="Jeremy Rosens - Gary Peer & Associates";
}
if ($two==null) {
  $two="About Jeremy";
}
if ($three==null) {
  $three="Office: 55 Inkerman Street, St Kilda VIC 3182";
}
if ($four==null) {
  $four="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationo laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occacat cupiatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
}


$afterExplode=explode(".",$photo['name']);
$extention=end($afterExplode);
//echo $extention;

//echo $photo['tmp_name'];
$insertbanner="INSERT INTO $menuName(title,name,address,des) VALUES('$one','$two','$three','$four')";
$confirmInsert=mysqli_query($connectionQuery,$insertbanner);
$id=mysqli_insert_id($connectionQuery);
$photoname=$id.'.'.$extention;
$uploadphotolocation="dropimg/".$photoname;
$currentPhotoLocation=$photo['tmp_name'];
move_uploaded_file($currentPhotoLocation,$uploadphotolocation);


$updatepic="UPDATE $menuName SET photo='$photoname' WHERE id=$id";
$confirmupdate=mysqli_query($connectionQuery,$updatepic);
if (!$confirmupdate) {
  echo "Failed to upload photo";
  header("Refresh:1; URL=dropdown.php");
}
else {
  header("location:dropdown.php");
}


  ?>
