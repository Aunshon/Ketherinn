<?php
   require 'all_desh/Header.php';

   require 'db.php';
   if ($_POST['dropdownname']!=null) {
     $page=$_POST['dropdownname'];
   }else {
     $page=$_GET['dropdownname'];
   }

   $bannerdata="SELECT * FROM $page";
   $bannerresult=mysqli_query($connectionQuery,$bannerdata);
 ?>





 <h1>All data of <?php echo $page ?></h1>

  <table class="table mt-5 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Title</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($bd = mysqli_fetch_array($bannerresult)) {
     ?>
      <tr>
        <td><?php echo $bd['title'] ?></td>
        <td><?php echo $bd['name'] ?></td>
        <td><img src="dropimg/<?php echo $bd['photo']; ?>" alt=""width="100"></td>
        <td>
               <a href="dropdowndelete3.php?id=<?php echo $bd['id'];?>&page=<?php echo $page ?>"><input type="submit" name="" value="Remove" class="btn btn-danger"></a>
        </td>
      </tr>

    <?php
     }
     ?>

    </tbody>
  </table>







 <?php
  require 'all_desh/footer.php';
  ?>
