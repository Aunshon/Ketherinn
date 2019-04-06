<?php
   require 'all_desh/Header.php';

   require 'db.php';
   $s="SELECT title,comment from bloge";
   $result = mysqli_query($connectionQuery,$s);
   //$sqli = "SHOW TABLES FROM shawon";
   // $sqli = "SHOW COLUMNS FROM menu";
   // $result = mysqli_query($connectionQuery,$sqli);
   // $i=1;
   // $sqli = "SHOW COLUMNS FROM menu";
   // $result = mysqli_query($connectionQuery,$sqli);
   // $dropdownname=$_POST['dropdownname'];
   // $bannerdata="SELECT * FROM '$dropdownname'";
   // $bannerresult=mysqli_query($connectionQuery,$bannerdata);
   // $bd=mysqli_fetch_assoc($bannerresult);
 ?>

<br><br><br>
 <form  action="allcomments.php" method="post">
     <div class="row">
       <label >Select One Bloge Title</label>
       <div class="col">
         <select class="form-control" id="exampleFormControlSelect1" name="menuName">
           <?php
             while ($row = mysqli_fetch_row($result)){
               $did='d'.$i;
               if($row[0]!='title'){
            ?>
           <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
         <?php }} ?>
         </select>
       </div>
     </div>
 <br><br>
 <button type="submit"class="form-control btn btn-primary" name="bb">Show Comments</button>
 </form>



<?php
    if (isset($_POST['bb'])) {
      $title=$_POST['menuName'];
      $sti="SELECT comment from bloge WHERE title='$title'";
      $resultti = mysqli_query($connectionQuery,$sti);
      $blogName=mysqli_fetch_assoc($resultti);
      //echo $blogName['comment'];
      $bName=$blogName['comment'];
      $sb="SELECT id,$bName from b_comm";
      $resultb = mysqli_query($connectionQuery,$sb);
      $blogeComment=mysqli_fetch_assoc($resultb);
      ?>
      <br><br><br>
      <label class="form-control"> Comments of : <?php echo  $title?></label>
      <table class="table mt-5 " id="table_id">
        <thead class="thead-dark">
          <tr>
            <th>Comments</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            foreach ($resultb as $blogs_s) {
              // $me="all_agency".$value['id'];
             ?>
             <?php if($blogs_s[$bName]!='n'){ ?>
              <td><?php echo $blogs_s[$bName] ?></td>
              <td> <a href="comment_del.php?id=<?php echo $blogs_s['id'] ?>"> <button type="submit" name="button" class="btn btn-danger">Remove</button> </a> </td>
            <?php }} ?>
          </tr>


        </tbody>
      </table>
  <?php
    }
 ?>
 <?php
  require 'all_desh/footer.php';
  ?>
