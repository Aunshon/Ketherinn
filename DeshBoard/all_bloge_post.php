<?php
require 'db.php';
$month_num = date("m");
$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
$date=date("d")." ".$month_name." ".date("Y");
//echo $date;
//session_start();
$upload_photo=$_FILES['photo'];
$after_explode=explode(".",$upload_photo['name']);
$extension=end($after_explode);
//echo $extension;
$suppported_fild=array('jpg','jpeg','png','JPG');
if (in_array($extension,$suppported_fild)) {
  if ($_POST['one']==null || $_POST['tow']==null ) {
    echo "Please fill up all fild";
  }
  else {
    $n=$_POST['one'];$e=$_POST['tow'];$r=$_POST['three'];$t=$_POST['four'];
    $contactinsertquery="INSERT into bloge(title,des_small,des_big,link,date_time) VALUES('$n','$e','$r','$t','$date')";
    $contactresult=mysqli_query($connectionQuery,$contactinsertquery);
    $current_user_id=mysqli_insert_id($connectionQuery);
    // echo $current_user_id;
    $uploadFileName=$current_user_id .".". $extension;
    // echo "$uploadFileName";
    $uploadFileLocation='all_bloge_pic/'.$uploadFileName;
    move_uploaded_file($upload_photo['tmp_name'],$uploadFileLocation);
    $com="bloge".$current_user_id;
    $uploadPhotoQuery="UPDATE bloge SET photo='$uploadFileName',comment='$com' WHERE id=$current_user_id";
    $res=mysqli_query($connectionQuery,$uploadPhotoQuery);
    if (!$contactresult) {
      echo "Could not save to database";
    }
    else {
      //echo "Contact saved";
      //header("Refresh:2;URL=contact_list.php");
      //$_SESSION['messageAlert']=1;
      //header("location:contact_list.php");
      $sqlaaa = "ALTER TABLE b_comm ADD $com VARCHAR( 255 ) NOT NULL DEFAULT 'n'";
      $resultOfTable=mysqli_query($connectionQuery, $sqlaaa);
      if (!$resultOfTable) {
        echo "Could not save bloge";
      }
      else {
        header("location:all_bloge.php");
      }

    }
  }
}else {
  header("location:all_bloge.php");
}

 ?>
