<?php
require 'main_file\dropheadertobanner.php';
require 'db.php';
$page=$_GET['tab'];
$bannerdata="SELECT * FROM $page";
$bannerresult=mysqli_query($connectionQuery,$bannerdata);
 ?>
             <section id="blog-details" class="mt-5">

              <div class="container">

                <div class="row">


                  <?php while ($bd = mysqli_fetch_array($bannerresult)) {
                      //$bd=mysqli_fetch_array($rowofcol);//$rowofcol
                     ?>
                  <div class="blog-vdo mt-5" >
                    <div class="row mt-5" >
                      <div class="col-lg-4 col-md-12">
                        <div class="vdo">
                          <img src="DeshBoard/dropimg/<?php echo $bd['photo'] ?>" alt="blogvdo-img">
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-12">
                          <div class="title">
                              <h3 class="mb-5"><?php echo $bd['title'] ?></h3>
                            </div>
                        <div class="vdo-details">
                          <h4 class="mb-3"><?php echo $bd['name'] ?></h4>
                          <p style="font-weight: bold; color: #323232; font-size:13px; margin-bottom:7px;"><?php echo $bd['address'] ?></p>
                          <p class="mt-0"><?php echo $bd['des'] ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>


          </div><br>

             </section>

<?php require 'main_file/agentlisttofooter.php'; ?>
