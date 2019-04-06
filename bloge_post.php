<?php
require 'db.php';
// $bannerdata="SELECT * FROM all_agency";
// $bannerresult=mysqli_query($connectionQuery,$bannerdata);
// $bd=mysqli_fetch_assoc($bannerresult);
//
// $alldataquery="SELECT * FROM best_agency";
// $alldataresult=mysqli_query($connectionQuery,$alldataquery);
//
$feature_agency="SELECT * FROM bloge";
$feature_agency_data=mysqli_query($connectionQuery,$feature_agency);
$id=$_GET['id'];
$blogs="SELECT * FROM bloge WHERE id=$id";
$blogs_data=mysqli_query($connectionQuery,$blogs);
$bd=mysqli_fetch_assoc($blogs_data);

// $sqli = "SHOW COLUMNS FROM menu";
// $result = mysqli_query($connectionQuery,$sqli);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

        <nav class="navbar navbar-expand-lg">
               <div class="container">
                    <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>


                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SYDNEY
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      MELBOURNE
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </li>
                                  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          BRISBANE
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                      </li>
                                      <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              PERTH
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                          </li>
                                          <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  ADELAIDE
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                              </li>
                                              <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      CANBERRA
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                  </li>
                                                  <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          DARWIN
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                          <a class="dropdown-item" href="#">Action</a>
                                                          <a class="dropdown-item" href="#">Another action</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                      </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#">Bloge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact </a>
                            </li>

                          </ul>

                        </div>
               </div>
              </nav>

              <section id="banner-part">
                <div class="overlay">
                     <div class="container text-center">
                          <h2>Bloge</h2>

                     </div>
                </div>
            </section>

              <section id="blog-details" class="mt-5">
                <div class="container p-0 b-p">
                  <div class="row">
                    <div class="col-lg-8 p-0">
                      <div class="blog-img">
                        <img src="DeshBoard/all_bloge_pic/<?php echo $bd['photo'] ?>" class="img-fluid" alt="blog-img">
                      </div>
                      <div class="blog-text">
                        <h3><?php echo $bd['title'] ?></h3>
                        <div class="blog-like">


                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-pera">
                          <p class="p-b"><?php echo $bd['des_small'] ?></p>
                          <p class="p-f"><?php echo $bd['des_big'] ?></p>
                          <p>For more detail you can access the full report using the link below.</p>
                          <a href="<?php echo $bd['link'] ?>"><?php echo $bd['link'] ?></a>
                        </div>

                      </div>

                      <div class="comment">
                        <form class="text-center" action="comment_post.php" method="post">
                          <input type="text" style="display:none;" name="id" value="<?php echo $_GET['id'] ?>">
                          <input type="text" style="display:none;" name="bloge" value="<?php echo $_GET['bloge'] ?>">
                           <textarea class="w-100" placeholder="Write your comment" name="comment"></textarea>
                           <button type="submit">Submit</button>
                        </form>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="popular">

                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">




                            <?php
                            foreach ($feature_agency_data as $value) {
                              $me="all_agency".$value['id'];
                             ?>


                            <div class="popular-item">
                              <div class="popular-item-img">
                                <img src="DeshBoard/all_bloge_pic/<?php echo $value['photo'] ?>" alt="tab-img1">
                                <div class="overlay">
                                  <a href="bloge_post.php?id=<?php echo $value['id'] ?>"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html"><?php echo $value['title'] ?></a></h3>
                              </div>
                            </div>


                          <?php } ?>


                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="popular-item">
                              <div class="popular-item-img">
                                <img src="images/tab-img2.png" alt="tab-img1">
                                <div class="overlay">
                                  <a href="#"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html">We can rise your agency on a top rank via SEO</a></h3>


                              </div>
                            </div>
                            <div class="popular-item">
                              <div class="popular-item-img">
                                <img src="images/tab-img1.png" alt="tab-img1">
                                <div class="overlay">
                                  <a href="#"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html">We can rise your agency on a top rank via SEO</a></h3>


                              </div>
                            </div>
                            <div class="popular-item popular-item2">
                              <div class="popular-item-img">
                                <img src="images/tab-img3.png" alt="tab-img1">
                                <div class="overlay">
                                  <a href="#"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html">We can rise your agency on a top rank via SEO</a></h3>


                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="popular-item">
                              <div class="popular-item-img">
                                <img src="images/tab-img3.png" alt="tab-img1">
                                <div class="overlay">
                                  <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html">We can rise your agency on a top rank via SEO</a></h3>


                              </div>
                            </div>
                            <div class="popular-item">
                              <div class="popular-item-img">
                                <img src="images/tab-img2.png" alt="tab-img1">
                                <div class="overlay">
                                  <a href="#"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html">We can rise your agency on a top rank via SEO</a></h3>


                              </div>
                            </div>
                            <div class="popular-item popular-item2">
                              <div class="popular-item-img">
                                <img src="images/tab-img1.png" alt="tab-img1">
                                <div class="overlay">
                                  <a href="#"><i class="fas fa-link"></i></a>
                                </div>
                              </div>
                              <div class="popular-item-text">
                                <h3><a href="blog-details.html">We can rise your agency on a top rank via SEO</a></h3>


                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>

                  </div>
                </div>


              </div>

            </div>
          </div>




              </section>



              <section id="agent-list" class="mt-5 pt-5">
                <div class="title text-center">
                  <h3>Agents list</h3>
                </div>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-4 col-sm-4">
                              <ul>
                                <li><a href="#">
                                  London Property Agents</a></li>
                                <li><a href="#">
                                  Edinburgh Property Agents</a> </li>
                                <li><a href="#">
                                  Aberdeen Property Agents</a></li>
                                <li><a href="#">
                                  Belfast Property Agents </a></li>
                                <li><a href="#">
                                  Manchester Property Agents</a></li>
                                <li><a href="#">
                                  Birmingham Property Agents</a></li>
                                <li><a href="#">
                                  Leicester Property Agents</a></li>
                                <li><a href="#">
                                  Dundee Property Agents</a></li>
                                <li><a href="#">
                                  Glasgow Real Estate Agents</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                              <ul>
                                  <li><a href="#">
                                    London Property Agents</a></li>
                                  <li><a href="#">
                                    Edinburgh Property Agents</a> </li>
                                  <li><a href="#">
                                    Aberdeen Property Agents</a></li>
                                  <li><a href="#">
                                    Belfast Property Agents </a></li>
                                  <li><a href="#">
                                    Manchester Property Agents</a></li>
                                  <li><a href="#">
                                    Birmingham Property Agents</a></li>
                                  <li><a href="#">
                                    Leicester Property Agents</a></li>
                                  <li><a href="#">
                                    Dundee Property Agents</a></li>
                                  <li><a href="#">
                                    Glasgow Real Estate Agents</a></li>
                                </ul>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                              <ul>
                                  <li><a href="#">
                                    London Property Agents</a></li>
                                  <li><a href="#">
                                    Edinburgh Property Agents</a> </li>
                                  <li><a href="#">
                                    Aberdeen Property Agents</a></li>
                                  <li><a href="#">
                                    Belfast Property Agents </a></li>
                                  <li><a href="#">
                                    Manchester Property Agents</a></li>
                                  <li><a href="#">
                                    Birmingham Property Agents</a></li>
                                  <li><a href="#">
                                    Leicester Property Agents</a></li>
                                  <li><a href="#">
                                    Dundee Property Agents</a></li>
                                  <li><a href="#">
                                    Glasgow Real Estate Agents</a></li>
                                </ul>
                          </div>
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
                        <p>The information contained in this website is factual in nature and for general information purposes only. Top 10 Real Estate Agent accepts no responsibility with regard to any real estate transactions as a result of using this website or any linked external websites.  We are not associated with the REIA, REINSW, REIV, REIQ, REIWA, REISA, REIACT, REINT, REIT or Real Estate Business Online.</p>
                        <p class="mtb">
                            We have not reviewed all real estate agents in Australia and have based our listings on industry body awards and sales figure awards.   All care has been taken in the compilation of listings. However we cannot guarantee the quality of any advice given by individual agents or organisations listed on the website.  Home buyers/sellers or investors should conduct their own due diligence before proceeding to appoint a real estate agent.</p>
                            <p>Top 10 Real Estate Agent allows real estate agents and agencies who meet the website selection criteria to advertise and sponsor pages on the website.  We also receive payments from agents where an agent enquiry form is submitted and a property is sold or rented out when we introduce users of the website to real estate agents and property managers.  Where an agent enquiry form is submitted we will introduce users of the website to agents listed on the website where appropriate but may also pass user details onto other agents not listed on the website if appropriate.  We will only ever pass user details onto one agent or property manager for each agent enquiry from submission.</p>
                    </div>
                  </div>
                </div>
              </section>

              <section id="footer">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <p>© 2019 Copyright Top Real Estate Agent | All Rights Reserved | Privacy Policy</p>
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
