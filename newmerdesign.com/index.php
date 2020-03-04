<?php 
      include 'admin/netting/baglan.php';

      $ayarsor=mysql_query("select * from ayarlar");
      $ayarcek=mysql_fetch_assoc($ayarsor);


      $ayarsor2=mysql_query("select * from urunler");
      $ayarcek2=mysql_fetch_assoc($ayarsor2);

      $urunsorgu=mysql_query("select * from urunler order by urun_id DESC");
      //$urun_id=$_GET['urun_id'];
      //$urunsorgu=mysql_query("select * from urunler where urun_id='$urun_id'");
      
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">


    <meta name="description" content="<?php echo $menucek['ayar_description']; ?>">
    <meta name="keywords" content="<?php echo $menucek['ayar_keywords']; ?>">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $ayarcek['ayar_title']; ?></title>


    <!--lightbox-->
    <link rel="stylesheet" type="text/css" href="js/lightbox/dist/css/lightbox.css">
    <script src="js/lightbox/dist/js/lightbox.min.js"></script>
    <!--lightbox-->


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=""

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/yeni.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">NewMer Design<i style="margin-left: 10px;" class="fa fa-phone" aria-hidden="true"> :  <?php echo $ayarcek['ayar_telefon'];?></i><i class="fa fa-envelope-o"> :  <?php echo $ayarcek['ayar_mail']; ?></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menuasdasfddsafdsfdsfsdfsdfsf
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul style="background-color: grey; opacity: 0.8;" class="navbar-nav text-uppercase ml-auto">
        


              <?php 
                  $menusorgu=mysql_query("select * from menuler");
                 while($menucek=mysql_fetch_assoc($menusorgu))
                 {


               ?>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href=<?php echo $menucek['tablo_menuurl']; ?>><?php echo $menucek['tablo_menuad']; ?></a></li>
            <?php } ?>


          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div style="color:black;" class="intro-lead-in">NewMer Design'a Hoşgeldiniz...</div>
          <div style="color:black;" class="intro-heading text-uppercase">Kaliteyi Hissedin.</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Ürünlerimizi görmek için tıklayın.</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section class="bg-light" id="services">
      <div class="container">
        <div class="col-lg-12 text-center">
          <a class="btn btn-success" href="#portfolio">Ürünlerimizi görmek için tıklayın.</a>
          <br><br><br><br>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 style="color:rgb(64,64,68);">Biz Neler Yapıyoruz</h2>
           <br><br><br>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <div style="margin-right:160px;">
            <span class="fa-stack fa-4x">
            <a href="#portfolio"> <img class="aw-zoom" src="admin/assets/img/biz1.jpg" height="200" width="300"></a>

            </span>
            </div>
            <br><br><br><br>
            <h4 class="service-heading">Mermer Masa</h4>
            <p class="text-muted">Ev dekorasyonun zengin bir parçası olan mermer ve mermer masa çeşitleri için seçimlerinizi istediğiniz ölçü ve detayda yapabilirsiniz.</p>
          </div>
          <div class="col-md-4">
            <div style="margin-right:160px;">
            <span class="fa-stack fa-4x">
              <a href="#portfolio"> <img class="aw-zoom" src="admin/assets/img/biz2.jpg" height="200" width="300"></a>
            </span>
          </div>
          <br><br><br><br>
            <h4 class="service-heading">Mermer ve Doğal Taşlar</h4>
            <p class="text-muted">Birbirinden benzersiz muhteşem detay ve hareketlere sahip olan doğanın harikası mermer, granit, onyx, oniks ve traveltel çeşitleri için linke tıklayınız.</p>
          </div>
          <div class="col-md-4">
            <div style="margin-right:160px;">
            <span class="fa-stack fa-4x">
              <a href="#portfolio"> <img class="aw-zoom" src="admin/assets/img/biz3.jpg" height="200" width="300"></a>
            </span>
            </div>
            <br><br><br><br>
            <h4 class="service-heading">Ev Mobilyası Sandalye ve Sehpalar</h4>
            <p class="text-muted">Ev dekorasyonunuzu sınırsız mobilya ve ürün çeşitleri ile istediğiniz ölçü ve detayda zenginleştirme imkanına sahipsiniz.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section style="background-color:white;" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Fotoğraflar</h2>
            <h3 class="section-subheading text-muted">Ürünlerin fotoğrafları.</h3>
          </div>
        </div>
        <div class="row">
          
              
               <?php 
                 
                  
                  while($uruncek=mysql_fetch_assoc($urunsorgu))
                  {?>
                    
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a class="example-image-link" data-lightbox="example-set" href="admin/<?php echo $uruncek['urun_resim']; ?>" data-title="<?php echo $uruncek['urun_aciklamasi']; ?>">
                          
                      <img class="aw-zoom" src="admin/<?php echo $uruncek['urun_resim']; ?>" class="example-image" width="400" height="400"  alt="">
                      <div style="margin-right: 140px;" class="portfolio-caption">
                        <h4 style="color:rgb(209,209,209);"><?php echo $uruncek['urun_adi'] ?></h4>
                        <p class="text-muted"><?php echo "Fiyatı :".$uruncek['urun_fiyati'] ?> TL</p>
                      </div>
                      </a>

            <!--
            <a class="example-image-link" href="admin/<?php echo $uruncek['urun_resim']; ?>" data-lightbox="example-set" data-title="caption açıklaması"><img src="admin/<?php echo $uruncek['urun_resim']; ?>" class="example-image" width="500" height="500"></a>-->
                 </div>
                  <?php } ?>
                
              
              
              
            
         
<!--
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Explore</h4>
              <p class="text-muted">Graphic Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Finish</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Lines</h4>
              <p class="text-muted">Branding</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Southwest</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      -->
      </div>
    </section>

    <!-- About -->
    <section style="background-color: rgb(223,223,223);" id="about">
      <div class="container">
        <div class="row">
      
        <div class="col-lg-6">
         <?php echo $ayarcek['ayar_hakkimizda']; ?>
        </div>
         <div class="col-lg-6">
            <img style="margin-bottom: 100px;" class="aw-zoom" src="img/about/biz4.png" height="500" width="400">
         </div>
      
    </div>
  </div>
      
     <!--
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Hakkımızda</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>


              </li>


              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      -->
    </section>

    <!-- Team -->
    

    <!-- Clients 
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
-->
    <!-- Contact -->
    <section style="background-color: rgb(142,142,142);" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">İletişim</h2>
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            

            <form id="contactForm" action="http://www.newmarbledesign.com/phpMail/test_mail.php" method="post" name="mesajGonder" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="isim" type="text" placeholder="İsminiz *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="email" type="email" placeholder="Mail adresiniz *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="telefon" type="tel" placeholder="Telefon numaranız *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="mesaj" placeholder="Mesajınız *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button name="iletisimForm" class="btn btn-primary btn-xl text-uppercase" type="submit">Gönder</button>
                </div>
              </div>
            </form>




          </div>
          <div class="col-lg-6 text-center">
            <strong>Adres : </strong><?php echo $ayarcek['ayar_adres']; ?><br>
            <strong>Telefon : </strong> <?php echo $ayarcek['ayar_telefon']; ?><br>
            <strong>E-Posta : </strong> <?php echo $ayarcek['ayar_mail']; ?><br><br><br><br>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a target="blank" href=<?php echo $ayarcek['ayar_twitter']; ?>>
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="blank" href=<?php echo $ayarcek['ayar_facebook']; ?>>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="blank" href=<?php echo $ayarcek['ayar_instagram']; ?>>
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; New Marble Design 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a target="blank" href=<?php echo $ayarcek['ayar_twitter']; ?>>
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="blank" href=<?php echo $ayarcek['ayar_facebook']; ?>>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="blank" href=<?php echo $ayarcek['ayar_instagram']; ?>>
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="index.php">Bu Sitenin Tüm Hakları Gizlidir.</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->
                    <?php

                     $uruncek=mysql_fetch_assoc($urunsorgu);
                         // $urun_id=$_GET['urun_id'];
                          //$urunsorgu=mysql_query("select * from urunler where urun_id='$urun_id'");
                         // $urunucek=mysql_fetch_assoc($urunsorgu)
                           // $id = $_GET['id'];
                            //$uruncek=mysql_query("select * from urunler WHERE urun_id='$id'");
                     ?> 
    <!-- Modal 1 
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                 
                 
                    

                  <h2 class="text-uppercase"><?php echo $uruncek['urun_adi']; ?></h2>
                  
                  <img class="img-fluid d-block mx-auto" src="admin/<?php echo $uruncek['urun_resim']; ?>" alt="">
                  <p><?php echo $uruncek['urun_aciklamasi']; ?></p>
                  <ul class="list-inline">
                    <li>Fiyat : <?php echo $uruncek['urun_fiyati']; ?>TL</li>
                   
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Resimi Kapat</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
    <!-- Modal 2 
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                 
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <!--lightbox-->
    <script src="js/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
    <!--lightbox-->
  </body>

</html>
