<?php
require 'main_file\dropheadertobanner.php';
require 'db.php';
$page=$_GET['tab'];
$bannerdata="SELECT * FROM $page";
$bannerresult=mysqli_query($connectionQuery,$bannerdata);
 ?>

              <section id="blog-part" class="mt-5">
                  <div class="title text-center">
                    <h3>NEED TO BUY OR SELL AN EXCLUSIVE PROPERTY IN SYDNEY?</h3>

                  </div>

                  <div class="container mt-5">
                    <div class="row">
                      <div class="col-lg-12 pr-0 p-r">
                        <div class="row">




                          <?php while ($bd = mysqli_fetch_array($bannerresult)) {
                              //$bd=mysqli_fetch_array($rowofcol);//$rowofcol
                             ?>
                          <div class="col-lg-4 col-sm-6 blg mt-5">
                            <div class="blog-item m-0">
                              <div class="blog-img">
                                <img class="w-100" src="DeshBoard/main/<?php echo $bd['photo'] ?>" alt="blog-img1">
                              </div>
                              <div class="blog-details">
                                <p class="tips"><?php echo $bd['title'] ?></p>
                                <p class="pt-0"><?php echo $bd['des'] ?></p>
                            </div>
                          </div>
                        </div>

                    <?php } ?>




                      </div>
                  </div>
                </div>
                </section>
<?php require 'main_file\agentlisttofooter.php'; ?>
