<?php
 require 'all_desh/Header.php';
 ?>
 <?php
 require 'db.php';
 //echo $data['role'];

   $alldataquery="SELECT * FROM bloge";
   $alldataresult=mysqli_query($connectionQuery,$alldataquery);


  ?>

 <br><br>

 <h1>All Blogs</h1>
 <br>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   <table class="table mt-5 " id="table_id">
     <thead class="thead-dark">
       <tr>
         <th>Title</th>
         <th>Small Descreption</th>
         <th>Big Descreption</th>
         <th>Photo</th>
         <th>Link</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
     <?php
     foreach ($alldataresult as $value) {
      ?>
       <tr>
         <td><?php echo $value['title']; ?></td>
         <td><?php echo $value['des_small']; ?></td>
         <td><?php echo $value['des_big']; ?></td>
         <td><img src="all_bloge_pic/<?php echo $value['photo']; ?>" alt=""width="50"></td>
         <td><?php echo $value['link']; ?></td>
         <td class="text-right">

             <a href="bloge_del.php?id=<?php echo $value['id']; ?>&comm=<?php echo $value['comment']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a>

         </td>
       </tr>

     <?php
      }
      ?>
     </tbody>
   </table>







   <h1>Add New Bloge</h1>
   <div>
     <form action="all_bloge_post.php" method="post" enctype="multipart/form-data">
       <table class="table mt-5 " id="table_id">
         <thead class="thead-dark">
           <tr>
             <th>Title</th>
             <th>Small Descreptoin</th>
             <th>Big Descreption</th>
             <th>Link</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td> <input type="text" name="one" placeholder="Write" > </td>
             <td> <input type="text" name="tow" placeholder="Write" > </td>
             <td> <input type="text" name="three" placeholder="Write" > </td>
             <td> <input type="text" name="four" placeholder="Write" > </td>
           </tr>
         </tbody>
       </table>
       <label>Add photo</label>
       <div class="form-control">
         <input type="file" name="photo" value="">
         <br>

           <br>
           <button type="submit" name="button" class="btn btn-primary form-control">Add New</button>
       </div>
     </form>
   </div>










<?php
 require 'all_desh/footer.php';
 ?>
