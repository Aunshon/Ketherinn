<?php
 require 'all_desh/Header.php';
 require 'db.php';

 $selecdes="SELECT * FROM desclaimer";
 $querydes=mysqli_query($connectionQuery,$selecdes);
 $datades=mysqli_fetch_assoc($querydes);

 $selec="SELECT * FROM footer";
 $query=mysqli_query($connectionQuery,$selec);
 $data=mysqli_fetch_assoc($query);
 ?>




 <h1>Change Disclaimer</h1>
 <form action="dca.php" method="post">
   <table class="table mt-5 " id="table_id">
     <thead class="thead-dark">
       <tr>
         <th>Write Below</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td> <input type="text" name="copy" placeholder="Write Here " class="form-control" > </td>
       </tr>
     </tbody>
   </table>
   <button type="submit" name="button" class="btn btn-success form-control">Change Disclaimer</button>
 </form>





<h1>Change Footer</h1>
<form action="fca.php" method="post">
  <table class="table mt-5 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>now is (<?php echo $data['copy']; ?>)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="copy" placeholder="Write Here  " class="form-control" > </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" name="button" class="btn btn-success form-control">Change Footer</button>
</form>










<?php
 require 'all_desh/footer.php';
 ?>
