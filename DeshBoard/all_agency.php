<?php
 require 'all_desh/Header.php';
 $bannerdata="SELECT * FROM all_agency";
 $bannerresult=mysqli_query($connectionQuery,$bannerdata);
 $bd=mysqli_fetch_assoc($bannerresult);
?>





<h1>Change titles</h1>
<form action="all_agency_title.php" method="post">
  <table class="table mt-5 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>main Title</th>
        <th>2nd Title</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="one" placeholder="Change <?php echo $bd['title'] ?>" > </td>
        <td> <input type="text" name="tow" placeholder="Change <?php echo $bd['des'] ?>" > </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" name="button" class="btn btn-success form-control">Change Titles</button>
</form>







<h1>Change image</h1>
<div>
  <form action="all_agency_photo.php" method="post" enctype="multipart/form-data">
    <div class="form-control">
      <input type="file" name="photo" value="">
      <br>

        <br>
        <button type="submit" name="button" class="btn btn-primary form-control">Add</button>
    </div>
  </form>
</div>
<?php
 require 'all_desh/footer.php';
 ?>
