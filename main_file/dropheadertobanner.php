<?php
require 'db.php';
//$sqli = "SHOW TABLES FROM shawon";
$sqli = "SHOW COLUMNS FROM menu";
$result = mysqli_query($connectionQuery,$sqli);
$page=$_GET['tab'];

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error($result);
    exit;
}

// while ($row = mysqli_fetch_row($result)) {
//     echo "Table: {$row[0]}\n";
// }
$select="SELECT photo FROM logo WHERE status=1";
$query=mysqli_query($connectionQuery,$select);
$photo=mysqli_fetch_assoc($query);

$selectBanner="SELECT photo FROM banner_pic  WHERE status=1";
$navbarqueryBanner=mysqli_query($connectionQuery,$selectBanner);
$dataBanner=mysqli_fetch_assoc($navbarqueryBanner);
$bannerPhoto=$dataBanner['photo'];

$bannerdata="SELECT * FROM banner_titles";
$bannerresult=mysqli_query($connectionQuery,$bannerdata);
$bd=mysqli_fetch_assoc($bannerresult);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
         <a class="navbar-brand" href="index.php">
                 <img src="DeshBoard/logos/<?php echo $photo['photo'] ?>" alt="logo">
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <i class="fas fa-bars"></i>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                   <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                 </li>

                 <?php
                 while ($row = mysqli_fetch_row($result)) {
                     //echo "Table: {$row[0]}\n";
                  ?>
                 <li class="nav-item dropdown">
                   <?php if($row[0]!='id'){ ?>
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo  $row[0]?>
                   </a>
                 <?php } ?>

                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <?php
                     $sqlii = "SELECT $row[0] FROM menu";
                     $resulti = mysqli_query($connectionQuery,$sqlii);
                     //$getPhoto=mysqli_fetch_assoc($getPhotoResult);
                     while ($rowofcol = mysqli_fetch_row($resulti)) {
                      ?>
                      <?php if($rowofcol[0]!='n'){ ?>
                        <?php if($rowofcol[0]==$row[0]){ ?>
                     <a class="dropdown-item" href="main.php?tab=<?php echo  $rowofcol[0]?>"><?php echo  $rowofcol[0]?></a>
                        <?php } ?>
                        <?php if($rowofcol[0]!=$row[0]){ ?>
                     <a class="dropdown-item" href="drop.php?tab=<?php echo  $rowofcol[0]?>"><?php echo  $rowofcol[0]?></a>
                        <?php } ?>
                   <?php } ?>
                      <?php } ?>
                   </div>
                 </li>

               <?php } ?>

                 <li class="nav-item">
                     <a class="nav-link" href="bloge.php">Bloge</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Contact </a>
                 </li>

               </ul>

             </div>
    </div>
   </nav>

              <section id="banner-part"  style="background:url(DeshBoard/banner_pic/<?php echo $bannerPhoto ?>) no-repeat center; background-size:cover; ">
                  <div class="overlay">
                       <div class="container text-center">
                            <h2><?php echo $page ?></h2>
                       </div>
                  </div>
              </section>
