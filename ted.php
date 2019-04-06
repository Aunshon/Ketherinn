<?php
require 'main_file\headertobanner.php';
?>
<?php
    $ba='slkdkjf';
    $sqlaaaa="CREATE TABLE $ba (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,title VARCHAR( 255 ) NOT NULL DEFAULT 'n',name VARCHAR( 255 ) NOT NULL DEFAULT 'n',address VARCHAR( 255 ) NOT NULL DEFAULT 'n',photo VARCHAR( 255 ) NOT NULL DEFAULT 'n',des VARCHAR( 255 ) NOT NULL DEFAULT 'n')";
    echo $sqlaaaa;
 ?>
<?php
require 'main_file\agentlisttofooter.php';
 ?>
