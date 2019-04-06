<?php
require 'db.php';
  $menu=$_POST['menuName'];
  $dropdown=$_POST['count'];

// echo $menu ;
// echo "<br>";
// echo $drop; "ALTER TABLE $menu ADD $b VARCHAR( 255 ) NOT NULL DEFAULT 'n'"
  //$sql = "CREATE TABLE $menu (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT)";
  //$sqlaaa = "ALTER TABLE $menu ADD $b VARCHAR( 255 ) NOT NULL DEFAULT 'n'";
  $sqlaaa = "ALTER TABLE menu ADD $menu VARCHAR( 255 ) NOT NULL DEFAULT 'n'";
  $resultOfTable=mysqli_query($connectionQuery, $sqlaaa);
  if (!$resultOfTable) {
    echo "Can not create menu";
  }
  else {
    for ($i=1; $i <= $dropdown; $i++) {
      $a='d'.$i;
      $b=$_POST[$a];
      //echo $b;echo "<br>";
      //$sqlaaa = "ALTER TABLE $menu ADD $b VARCHAR( 255 ) NOT NULL DEFAULT 'n'";
      $sqlaaa="INSERT INTO menu($menu) VALUES('$b')";
      $q=mysqli_query($connectionQuery,$sqlaaa);
      if (!$q) {
        echo "Can not create Drop". mysqli_error($connectionQuery);
      }
      else {
        // echo "Successfull";
        $sql = "CREATE TABLE $menu (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,title VARCHAR( 255 ) NOT NULL DEFAULT 'n',des VARCHAR( 500 ) NOT NULL DEFAULT 'n',photo VARCHAR( 255 ) NOT NULL DEFAULT 'n')";
        mysqli_query($connectionQuery, $sql);
        for ($j=1; $j <= $dropdown; $j++) {
          $aa='d'.$j;
          $ba=$_POST[$aa];

          $sqlaaaa="CREATE TABLE $ba (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,title VARCHAR( 255 ) NOT NULL DEFAULT 'n',name VARCHAR( 255 ) NOT NULL DEFAULT 'n',address VARCHAR( 255 ) NOT NULL DEFAULT 'n',photo VARCHAR( 255 ) NOT NULL DEFAULT 'n',des VARCHAR( 500 ) NOT NULL DEFAULT 'n')";
          $qa=mysqli_query($connectionQuery,$sqlaaaa);
          if (!$qa) {
            echo "Errrrrrroooorr :  ".mysqli_error($connectionQuery);;
          }
          else {
            header("location:menu.php");
          }
        }

      }
    }

  }

    // $sqli = "SHOW TABLES FROM shawon";
    // $result = mysqli_query($connectionQuery,$sqli);
    //
    // if (!$result) {
    //     echo "DB Error, could not list tables\n";
    //     echo 'MySQL Error: ' . mysqli_error($result);
    //     exit;
    // }

    // while ($row = mysqli_fetch_row($result)) {
    //   $sqlii = "SHOW COLUMNS FROM $row[0]";
    //   $resulti = mysqli_query($connectionQuery,$sqlii);
    //   //
    //   // if (!$resulti) {
    //   //     echo "DB Error, could not list culumn\n";
    //   //     echo 'MySQL Error: ' . mysqli_error($resulti);
    //   //     exit;
    //   // }
    //
    //   while ($rowi = mysqli_fetch_row($resulti)) {
    //       echo "Table: {$rowi[0]}\n";
    //   }
    //     //echo "Table: {$row[0]}\n";
    // }


 ?>
