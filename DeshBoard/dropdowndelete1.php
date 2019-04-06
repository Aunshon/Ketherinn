<?php
   require 'all_desh/Header.php';

   require 'db.php';
   //$sqli = "SHOW TABLES FROM shawon";
   $menuName=$_POST['menuName'];

   $sqlii = "SELECT $menuName FROM menu";
   $resulti = mysqli_query($connectionQuery,$sqlii);
   $i=1;
 ?>




 <br><br><br><br><br>
 <form  action="dropdowndelete2.php" method="post">
   <input type="text" name="menuName" value="<?php echo $menuName ?>" style="display:none;">
     <div class="row">
       <label >Select Which DropDown ?</label>
       <div class="col">
         <select class="form-control" id="exampleFormControlSelect1" name="dropdownname">
           <?php
             while ($row = mysqli_fetch_row($resulti)){
               $did='d'.$i;
               if($row[0]!='id' && $row[0]!='n'){
            ?>
           <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
         <?php }} ?>
         </select>
       </div>
     </div>
 <br><br><br><br>
 <button type="submit"class="form-control btn btn-primary">Next</button>



 </form>






 <?php
  require 'all_desh/footer.php';
  ?>
