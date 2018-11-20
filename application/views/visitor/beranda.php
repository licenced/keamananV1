<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SecureOne|Beranda</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/home/css/styles-merged.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/home/css/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/home/css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


  <div class="probootstrap-main-content">
    <section class="probootstrap-slider flexslider">
      <ul class="slides">
         <!-- class="overlay" -->
        <li style="background-image: url('<?php echo base_url();?>assets/images/header.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <br>
                  <h1 class="probootstrap-heading probootstrap-animate mb20">SecurityOne</h1>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container-fluid">
        <div class="section-heading text-center">
          <h2 class="mt0 mb0">"mencegah lebih baik daripada mengobati"</h2>
        </div>
      </div>
    </section>
  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">secureone<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="<?php echo site_url('home'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('home/index_artikel'); ?>">Article</a></li>
            <li><a href="<?php echo site_url('home/index_tools'); ?>">Brand</a></li>
            <li><a href="<?php echo site_url('home/contact_us'); ?>">Contact Us</a></li>
            <li><a href="<?php echo site_url('login'); ?>"></a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->    
    <section class="probootstrap-half">
      <div class="image-wrap">
        <div class="image" style="background-image: url('<?php echo base_url();?>assets/home/img/slider_7new.jpg')"></div>
      </div>
      <div class="text">
        <p class="mb10 subtitle">Penjelasan</p>
        <h3 class="mt0 mb40">Apa Itu SecureOne?</h3>
        <p>SecureOne adalah sebuah web yang berisi tentang penjualan barang - barang keamanan yang tidak dijual secara bebas.</p>
        <br>
        <p class="mb70">Seperti yang kita ketahui bersama bahwa dewasa ini sangat marak kasus - kasus kejahatan yang ada disekitar kita. Baik itu kasus perampokan, pencurian, pembegalan, dan lain sebagainya.</p>
        
      </div>
    </section>
    <section class="probootstrap-half reverse">
      <div class="image-wrap">
        <div class="image" style="background-image: url('<?php echo base_url();?>assets/home/img/slider_6new.png')"></div>
      </div>
      <div class="text">
        <p class="mb10 subtitle">aman? secureone aja...</p>
        <h3 class="mt0 mb40">Brand</h3>
        <p>Kami menyediakan berbagai macam peralatan keamanan mulai dari keamanan pribadi, rumah, kendaraan, elekronik, dan masih banyak lagi.</p>
        <p class="mb50">alat yang kami miliki dijamin berkualitas dan bisa membantu mengamankan anda dari berbagai macam hal yang tidak diinginkan.</p>
        <p><a href="<?php echo site_url('home/index_tools'); ?>" class="btn btn-ghost btn-ghost-white mb10">Lihat Barang</a></p>
      </div>
    </section>
     <section class="probootstrap-half">
      <div class="image-wrap">
        <div class="image" style="background-image: url('<?php echo base_url();?>assets/home/img/slider_2new.png')"></div>
      </div>
      <div class="text">
        <p class="mb10 subtitle">Kurang wawasan mengenai keamanan?</p>
        <h3 class="mt0 mb40">Artikel keamanan</h3>
        <div class="row mb20">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <?php
            function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
            }
            ?>
            <?php $i=0 ?>
            <?php foreach ($artikel as $konten_item):?>
            <div class="service-item">
              <span class="number"><?php echo $i+1 ?></span>
              <h4 class="mt0"><?php echo $konten_item['title'] ?></h4>
              <p><?php echo limit_words($konten_item['text'], 7)."...";?></p>
            </div>
          </div>
          <?php if (++$i == 2) break; ?>
          <?php endforeach; ?>
        <p><a href="<?php echo site_url('home/index_artikel'); ?>" class="btn btn-ghost btn-ghost-white mb10">See All Article</a></p>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
        <div class="container">
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth mt50">
                <div class="item">

                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="<?php echo base_url();?>assets/images/ayu.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Jangan Berharap Sesuatu yang luar biasa jika hanya melakukan sesuatu yang biasa saja.&rdquo; <cite class="author">&mdash; Ayu Rahmawati <br> <span>14116099 @sayukadek_</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">

                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="<?php echo base_url();?>assets/images/ragil.jpeg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Aduh. &rdquo; <cite class="author">&mdash; Muhammad Ragil Trireza Ramadhan <br> <span>14116150 @mragill</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="<?php echo base_url();?>assets/images/dedi.jpeg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Jangan terlalu sering mengambil peluang baik, karna yang baik belum tentu bisa jadi yg terbaik.&rdquo; <cite class="author">&mdash; Dedi Rizaldi <br> <span>14115055 @dediepow</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="<?php echo base_url();?>assets/images/tedi.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Lewat jalan saja...&rdquo; <cite class="author">&mdash; Ivan Teddy Pratama <br> <span>14116167 @lewatjalan</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="<?php echo base_url();?>assets/images/doni.jpeg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Mawar itu merah, Violet itu ungu... Squidword kau botak !!!&rdquo; <cite class="author">&mdash; Doni Agus Adila <br> <span>14116084 @doniagusadila</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="<?php echo base_url();?>assets/images/atun.jpeg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Anda tidak pernah terlalu tua untuk menetapkan tujuan lain atau untuk bermimpi mimpi baru.&rdquo; <cite class="author">&mdash; Rodliyatun Nichlah Hidayati <br> <span>14116068 @rdlynichlah</span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
    </div>

    <div class="probootstrap-footer-spacer"></div>
    <footer class="probootstrap-footer">
      <div class="probootstrap-footer-section">
        <div class="container">
          <div class="row mb80">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
              <h3>Tentang Kami</h3>
              <p>Web ini dibuat untuk memenuhi tugas besar kami pada mata kuliah Pengenalan Aplikasi Berbasis Web.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <p class="text-center">Copyleft &copy; SecureOne <br> Dibuat penuh <i class="icon-heart2"></i> dan Template by Unsplash.com</p>
          </div>
        </div>
      </div>
    </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="<?php echo base_url();?>/assets/home/js/scripts.min.js"></script>
  <script src="<?php echo base_url();?>/assets/home/js/main.min.js"></script>
  <script src="<?php echo base_url();?>/assets/home/js/custom.js"></script>

  </body>
</html>