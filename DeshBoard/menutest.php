
<?php
		require 'all_desh/Header.php';
 ?>

     <?php
     $menu=$_POST['menuName'];
     $drop=$_POST['numofdrop'];


      ?>
<form action="createmenudrop.php" method="post">
  <label>Menu name</label>
   <input type="text" name="menuName" value="<?php echo $menu ?>" class="form-control">
   <input name="count" value="<?php echo $drop ?>"><?php echo $drop ?> Drop Down</input>
   <br>
   <?php
        for ($i=1; $i <= $drop; $i++) {
          $nam='d'.$i;
          ?>
          <label><?php echo $i ?> no DropDown Name</label>
            <input type="text" name="<?php echo $nam ?>" class="form-control">
          <?php
        }
    ?>
    <br><br>
  <button type="submit" name="btn" class="form-control btn btn-primary">Create Menu and DropDown</button>

</form>
<?php
		require 'all_desh/footer.php';
?>
