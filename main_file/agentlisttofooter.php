
<?php
require 'db.php';
//$sqli = "SHOW TABLES FROM shawon";
$sqli = "SHOW COLUMNS FROM menu";
$result = mysqli_query($connectionQuery,$sqli);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error($result);
    exit;
}
$selec="SELECT * FROM footer";
$query=mysqli_query($connectionQuery,$selec);
$data=mysqli_fetch_assoc($query);

$selecdes="SELECT * FROM desclaimer";
$querydes=mysqli_query($connectionQuery,$selecdes);
$datades=mysqli_fetch_assoc($querydes);

 ?>
              <section id="agent-list">
                <div class="title text-center">
                  <h3>Agents list</h3>
                </div>
                  <div class="container">
                      <div class="row">


                        <?php
                        while ($row = mysqli_fetch_row($result)) {
                            //echo "Table: {$row[0]}\n";
                            if ($row[0]!='id') {
                          $sqlii = "SELECT $row[0] FROM menu";
                        $resulti = mysqli_query($connectionQuery,$sqlii);
                        while ($rowofcol = mysqli_fetch_row($resulti)) {
                        if($rowofcol[0]!='n'){
                          if($rowofcol[0]!=$row[0]){
                         ?>

                          <div class="col-lg-4 col-sm-4">
                              <ul>
                                <li><a href="drop.php?tab=<?php echo  $rowofcol[0]?>">
                                  <?php echo $rowofcol[0] ?></a></li>
                              </ul>
                          </div>
                        <?php }}}}} ?>



                      </div>
                  </div>
              </section>

              <section id="disclaimer">
                <div class="title text-center">
                  <h3></h30>Disclaimer</h3>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                        <p><?php echo $datades['des'] ?></p>
                    </div>
                  </div>
                </div>
              </section>

              <section id="footer">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <p>©<?php echo $data['copy'] ?></p>
                      </div>
                    </div>
                  </div>
              </section>


    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
 </html>
