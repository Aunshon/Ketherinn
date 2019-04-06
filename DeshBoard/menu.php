<?php
		require 'all_desh/Header.php';
 ?>
		<form  action="menutest.php" method="post">
      <label for="">Menu name</label>
      <input type="text" name="menuName" value="" class="form-control">
      <label for="">how many dorp down</label>
      <input type="number" name="numofdrop" value="" class="form-control">
      <br>
      <input type="submit" class="btn btn-primary form-control" name="" value="go">
    </form>
<?php
		require 'all_desh/footer.php';
?>
<?php
    //echo $_GET['menuName'];
 ?>
