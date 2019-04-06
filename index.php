<?php
require 'main_file\headertobanner.php';
require 'db.php';
$bannerdata="SELECT * FROM all_agency";
$bannerresult=mysqli_query($connectionQuery,$bannerdata);
$bd=mysqli_fetch_assoc($bannerresult);

$alldataquery="SELECT * FROM best_agency";
$alldataresult=mysqli_query($connectionQuery,$alldataquery);

$feature_agency="SELECT * FROM feature_agency";
$feature_agency_data=mysqli_query($connectionQuery,$feature_agency);

$blogs="SELECT * FROM bloge";
$blogs_data=mysqli_query($connectionQuery,$blogs);

$sqli = "SHOW COLUMNS FROM menu";
$result = mysqli_query($connectionQuery,$sqli);
 ?>

              <section id="agents-part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="title">
                                <div class="details">
                                  <h3><?php echo $bd['title'] ?></h3>

                                  <div class="text">
                                     <p><?php echo $bd['des'] ?></p>
                                  </div>

                                  <div class="tags">
                                    <?php
                                    while ($row = mysqli_fetch_row($result)) {
                                        //echo "Table: {$row[0]}\n";
                                     ?>
                                     <?php if($row[0]!='id'){ ?>
                                      <a href="main.php?tab=<?php echo  $row[0]?>"><?php echo $row[0] ?></a>
                                    <?php }} ?>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <img src="DeshBoard/all_agency_pic/<?php echo $bd['photo'] ?>" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
              </section>

              <section id="best-agency">
                  <div class="title text-center">
                    <h3>Best Agencies</h3>
                  </div>
                  <div class="container">
                      <div class="row">
                          <div class="accordion" id="accordionExample">

                            <?php
                            foreach ($alldataresult as $value) {
                              $me="all_agency".$value['id'];
                             ?>
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $me ?>" aria-expanded="true" aria-controls="collapseOne">
                                       <h4><?php echo $value['title'] ?><i class="fas fa-angle-down"></i></h4>
                                    </button>
                                  </h2>
                                </div>

                                <div id="<?php echo $me ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                     <div class="row">
                                        <div class="col-lg-9">
                                            <p><?php echo  $value['des'] ?></p>
                                        <div class="col-lg-3">
                                          <img src="DeshBoard/best_agency_pic/<?php echo  $value['photo'] ?>" alt="reia">
                                        </div>
                                     </div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>

                            </div>
                      </div>
                  </div>
              </section>

              <section id="featured-agency">
                  <div class="title text-center">
                      <h3>FEATURED AGENCIES</h3>
                  </div>

                  <div class="container">
                      <div class="row">

                        <?php
                        foreach ($feature_agency_data as $ag) {
                          //$me="all_agency".$ag['id'];
                         ?>

                          <div class="col-lg-4 col-sm-6">
                             <div class="info">
                                <img src="DeshBoard/feature_agency_pic/<?php echo $ag['photo'] ?>" class="img-fluid w-100" alt="agency">
                              <div class="overlay text-center">
                                <h4><?php echo $ag['title'] ?></h4>
                                <p><?php echo $ag['sale'] ?></p>
                                <p class="pb"><?php echo $ag['rent'] ?></p>
                              </div>
                             </div>
                          </div>

                        <?php } ?>


                      </div>
                  </div>
              </section>

              <section id="blog">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="heading text-center">

                                  <h2>Our Blogs</h2>
                              </div>
                          </div>
                      </div>
                      <div class="row">


                        <?php
                        foreach ($blogs_data as $blogs_s) {
                          // $me="all_agency".$value['id'];
                         ?>


                          <div class="col-lg-6 col-sm-6 col-md-12">
                              <div class="row">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="blog-item">
                                          <div class="row">
                                              <div class="col-lg-4">
                                                  <div class="blog-img">
                                                      <img src="DeshBoard/all_bloge_pic/<?php echo $blogs_s['photo'] ?>" alt="blog2" class="img-fluid w-100">
                                                          <div class="blog-over">
                                                          <a href="bloge_post.php?id=<?php echo $blogs_s['id'] ?>&bloge=<?php echo $blogs_s['comment'] ?>"><i class="fas fa-share-alt"></i></a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-8 extra2">
                                                  <div class="blog-text blog-text2">
                                                      <span class="extra1"><?php echo $blogs_s['date_time'] ?></span>
                                                      <h3><a class="a" href="bloge_post.php?id=<?php echo $blogs_s['id'] ?>&bloge=<?php echo $blogs_s['comment'] ?>"><?php echo $blogs_s['title'] ?></a></h3>
                                                      <a href="bloge_post.php?id=<?php echo $blogs_s['id'] ?>&bloge=<?php echo $blogs_s['comment'] ?>">Read More  <i class="fas fa-long-arrow-alt-right"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>



                        <?php } ?>




                      </div>

                  </div>
              </section>

<?php require 'main_file\agentlisttofooter.php'; ?>
