<?php
  require 'db.php';
  $id=$_POST['id'];
  $bloge=$_POST['bloge'];
  $comment=$_POST['comment'];
  $insertbanner="INSERT INTO b_comm($bloge) VALUES('$comment')";
  $confirmInsert=mysqli_query($connectionQuery,$insertbanner);
  if (!$confirmInsert) {
    echo "Could not sent comment";
    header("Refresh:2; URL=bloge_post.php?id=$id&bloge=$bloge");
  }
  else {
    echo "<script type='text/javascript'>alert('Comment Sent');</script>";
    header("location:bloge_post.php?id=$id&bloge=$bloge");
  }
 ?>
