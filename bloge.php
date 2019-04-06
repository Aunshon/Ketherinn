<?php
require 'main_file\newheadertobanner.php';
require 'db.php';
$blogs="SELECT * FROM bloge";
$blogs_data=mysqli_query($connectionQuery,$blogs);
 ?>


              <section id="blog-details" class="mt-5">
                <div class="container  b-p">
                  <div class="row">



                    <?php
                    foreach ($blogs_data as $blogs_s) {
                      // $me="all_agency".$value['id'];
                     ?>


                    <div class="col-lg-6 ">
                      <div class="blog-img">
                        <img src="DeshBoard/all_bloge_pic/<?php echo $blogs_s['photo'] ?>" class="img-fluid" alt="blog-img">
                      </div>
                      <div class="blog-text">
                        <h3><?php echo $blogs_s['title'] ?></h3>
                        <div class="blog-like">


                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-pera">
                          <p class="p-t"><?php echo $blogs_s['des_small'] ?></p>
                          <a href="bloge_post.php?id=<?php echo $blogs_s['id'] ?>&bloge=<?php echo $blogs_s['comment'] ?>">Read More</a>
                        </div>

                      </div>
                    </div>

                  <?php } ?>





                  </div>
                </div>


              </section>


<?php require 'main_file\agentlisttofooter.php'; ?>
