<?php
   require 'all_desh/Header.php';

   require 'db.php';
   //$sqli = "SHOW TABLES FROM shawon";
   $sqli = "SHOW COLUMNS FROM menu";
   $result = mysqli_query($connectionQuery,$sqli);
   $i=1;
 ?>





<br><br><br><br><br>
<form  action="dropdown1.php" method="post">
    <div class="row">
      <label >Select Which Menu ?</label>
      <div class="col">
        <select class="form-control" id="exampleFormControlSelect1" name="menuName">
          <?php
            while ($row = mysqli_fetch_row($result)){
              $did='d'.$i;
              if($row[0]!='id'){
           ?>
          <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
        <?php }} ?>
        </select>
      </div>
    </div>
<br><br><br><br>
<button type="submit"class="form-control btn btn-primary">NEXT</button>



</form>



 <?php
  require 'all_desh/footer.php';
  ?>
