<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- IE Compatibility meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Description meta -->
        <meta name="description" content="...">
        <!-- Author meta -->
        <meta name="author" content="Bootstrap Temple">

        <!-- Page Title -->
        <title>Kamelo - Marshmallow Ice Cream</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php  echo base_url('assets/css/style.css')?>"/>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php  echo base_url('assets/css/bootstrap.min.css')?>"/>
        <!-- Custom font icons -->
        <link rel="stylesheet" href="<?php echo ('https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css')?>"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>">
        <!-- Slider -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.min.css')?>"/>
        <!-- Lightbox Pop up -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/lightbox.min.css')?>"/>
        <!-- Datepicker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.min.css')?>"/>
        <!-- Datepicker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/timepicki.min.css')?>"/>
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>"/>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css')?>"/>
        <!-- Modernizr -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.custom.79639.min.js')?>"></script>
    </head>
    <body>

        <div class="page-holder">
            <!-- Navbar -->
            <header class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header"><a href="http://localhost/kamelo/" class="navbar-brand"><img src="<?php echo base_url('assets/img/logo1.png')?>" alt="Kamelo" width="200"></a>
                            <div class="navbar-buttons">
                                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                            </div>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#hero">Home</a></li>
                                <li><a href="#about">Tentang</a></li>
                                <li><a href="#services">Produk</a></li>
                                <li><a href="#dishes">Dessert</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#gallery">Galeri</a></li>
                                <li><a href="#booking">Pre Order</a></li>
                                <li><a href="#delivery">Delivery Order</a></li>
                                <li><a href="#contact">Kontak</a></li>
                            </ul>
                            <!-- <a href="#" class="btn navbar-btn btn-unique hidden-sm hidden-xs" id="open-reservation">Buat Pesanan</a>
                            <a href="#" class="btn navbar-btn btn-unique hidden-sm hidden-xs" id="open-reservation">Buat Orderan</a> -->
                        </div>
                    </div>
                </nav>
            </header><!-- End Navbar -->



            <!-- Hero Section -->
            <section id="hero" class="hero">
                <div id="slider" class="sl-slider-wrapper">

                    <div class="sl-slider">
                        <!-- slide -->
                        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                            <div class="sl-slide-inner" style="background-image: url('assets/img/awal1.jpg');">
                                <div class="container">
                                    <h2>Your Sweet <span class="text-primary">Little Things</span></h2>
                                    <h1>Kamelo</h1>
                                    <p>Marshmallow Ice Cream</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide -->
                        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="sl-slide-inner" style="background-image: url('assets/img/awal2.jpg');">
                                <div class="container">
                                    <h1>Es Krim Marshmallow</h1>
                                    <p>Nikmat, manis menyegarkan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide -->
                        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner" style="background-image: url('assets/img/awal3.jpg');">
                                <div class="container">
                                    <h2>Ayo <span class="text-primary">pesan sekarang!</span></h2>
                                    <h1>Pengen yang manis dan lumer di mulut?</h1>
                                    <p>Kamelo solusimu.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End sl-slider -->

                    <!-- slider pagination -->
                    <nav id="nav-dots" class="nav-dots">
                        <span class="nav-dot-current"></span>
                        <span></span>
                        <span></span>
                    </nav>

                    <!-- scroll down btn -->
                    <a id="scroll-down" href="#about" class="hidden-xs"></a>

                    <!-- social icons menu -->
                    <div class="social">
                        <div class="wrapper">
                            <ul class="list-unstyled">

                                <li><a href="https://www.instagram.com/kameloku/" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <span>Follow kami</span>
                        </div>
                    </div>
                </div><!-- End slider-wrapper -->
            </section><!-- End Hero Section -->



            <!-- Details -->
            <section id="details" class="details">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="heading text-center">
                                <p>Hubungi kami untuk</p>
                                <h5>Delivery dalam kota</h5>
                            </div>
                            <a href="tel:9870988764" class="phone">0819</a>
                        </div>

                        <div class="col-sm-6">
                            <div class="heading text-center">
                                <p>Check Our Clients'</p>
                                <h5>Rating &amp; Reviews</h5>
                            </div>
                            <a href="#" class="reviews btn-unique"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Details-->


            <!-- About Section -->
            <section id="about" class="about">
                <div class="container text-center">
                    <header>
                        <h2>Tentang Kamelo</h2>
                        <h3>"Your Sweet Little Things"</h3>
                    </header>
                    <p class="lead">Kamelo adalah kedai dessert kekinian dengan produk unggulan Es Krim Marshmellow yang hadir pertama kali di Kediri.</p>
                    <p class="lead">Rasa manis marshmallow diiisi dinginnya es krim, disajikan dengan cara dibakar sehingga akan lumer dan meleleh di mulut. So what do you waiting for ? You have to try now !!</p>
                </div>
            </section>
            <!-- End About Section -->


            <!-- Services Section -->
            <section id="services" class="services">
                <div class="container text-center">
                    <header>
                        <h2>Yang ada di Kamelo</h2>
                        <h3>Our Specialities</h3>
                    </header>

                    <div class="row">
                        <!-- item -->
                        <div class="col-sm-6 service">
                            <div class="icon">
                                <i class="icon-like"></i>
                            </div>
                            <div class="text">
                                <h4>Marshmallow Es Krim</h4>
                                <p>Marshmallow lembut, enak, gurih, murah, dan pas di hati. Dengan isi es krim yang manis.</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="col-sm-6 service">
                            <div class="icon">
                                <i class="icon-hat"></i>
                            </div>
                            <div class="text">
                                <h4>Es Krim</h4>
                                <p>Es krim dingin menyegarkan, dan membuat harimu cerah kembali. Dihiasi topping yang bisa dipilih sesuka hati.</p>
                            </div>
                        </div>

                        <!-- item -->

                    </div>
                </div>
            </section>
            <!-- End Services Section -->


            <!-- Dishes Section -->
            <section id="dishes" class="dishes">
                <div class="container text-center">
                    <header>
                        <h2>Dessert</h2>
                        <h3>Makanan segar menyegarkan</h3>
                    </header>
                    <!-- Set up your HTML -->
                    <div class="owl-carousel owl-theme">
                        <!-- item -->
                        <div class="dish">

                            <div class="profile">
                                <img src="assets/img/dish-a.jpg" class="img-responsive" alt="dish name">
                                <div class="price">
                                    <span>4k</span>
                                </div>
                            </div>
                            <div class="text">
                                <h4>Oreo Soft Ice Cream</h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p> -->
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="assets/img/dish-b.jpg" class="img-responsive" alt="dish name">
                                <div class="price">
                                    <span>4k</span>
                                </div>
                            </div>
                            <div class="text">
                                <h4>Milo Soft Ice Cream</h4>
                                <p></p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="assets/img/dish-c.jpg" class="img-responsive" alt="dish name">
                                <div class="price">
                                    <span>4k</span>
                                </div>
                            </div>
                            <div class="text">
                                <h4>Strawberry Soft Ice Cream</h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p> -->
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="assets/img/dish-e.jpg" class="img-responsive" alt="dish name">
                                <div class="price">
                                    <span>4k</span>
                                </div>
                            </div>
                            <div class="text">
                                <h4>Greentea Soft Ice Cream</h4>
                                <p></p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="assets/img/dish-f.jpg" class="img-responsive" alt="dish name">
                                <div class="price">
                                    <span>4k</span>
                                </div>
                            </div>
                            <div class="text">
                                <h4>Bubble Gum Soft Ice Cream</h4>
                                <p></p>
                            </div>
                        </div>

                        <!-- item -->

                    </div>
                </div>
            </section>
            <!-- End Dishes Section -->



            <!-- Menu Section -->
            <section id="menu" class="menu">
                <div class="container">
                    <header class="text-center">
                        <h2>Menu Kami</h2>
                        <h3>Menu popular kami</h3>
                    </header>

                    <div class="menu">
                        <!-- Tabs Navigatin -->
                        <ul class="nav nav-tabs text-center has-border" role="tablist">
                            <li role="presentation" class="active"><a href="#marshmallow" aria-controls="marshmallow" role="tab" data-toggle="tab">Marshmallow Ice Cream</a></li>
                            <li role="presentation"><a href="#icecream" aria-controls="icecream" role="tab" data-toggle="tab">Soft Ice Cream</a></li>
                            <li role="presentation"><a href="#topping" aria-controls="topping" role="tab" data-toggle="tab">Topping</a></li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Breakfast Panel -->
                            <div role="tabpanel" class="tab-pane active" id="marshmallow">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Classic Choco</h5>
                                                <p>Marshmallow / Ice Cream Coklat</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">6k</strong>
                                                <span class="text-medium">Recommended</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Strawberry Delight</h5>
                                                <p>Marshmallow / Ice Cream Strawberry</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">6k</strong>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Breakfast Panel-->

                            <!-- lunch Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="icecream">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Oreo</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">4k</strong>
                                                <span class="text-medium">Recommended</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Milo</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">4k</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Strawberry</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">4k</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Greentea</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">4k</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Bubble Gum</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">4k</strong>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End lunch Panel-->

                            <!-- Dinner Panel -->
                            <div role="tabpanel" class="tab-pane fade" id="topping">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Oreo</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Chacha</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Choco Chips</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>
                                                <span class="text-medium">Recommended</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Koko Crunch</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Yuppy</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Chocolatos</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Hello Panda</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Milo</h5>
                                                <p></p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary">1k</strong>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Dinner Panel-->


                        </div>
                    </div>
                </div>
            </section>
            <!-- End Menu Section -->


            <!-- Events Section -->
            <section id="events" class="events">
                <div class="container">
                    <header class="text-center">
                        <h2>Promo</h2>
                        <h3>Jangan lewatkan promo kami</h3>
                    </header>

                    <div class="row">
                        <!-- Profile Side  -->
                        <div class="col-sm-6">
                            <div class="profile has-border" style="background-image: url('assets/img/event-bg.png');">
                                <ul class="date list-unstyled list-inline clearfix">
                                    <li class="day pull-left">21<sup>th</sup></li>
                                    <li class="month pull-left">April <span>2018</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Details Side  -->
                        <div class="col-sm-6">
                            <div class="details">
                                <h3>Beli 2 gratis 1</h3>
                                <h4 class="text-primary">21 April 2018 </h4>
                                <p class="lead">[Special Kartini Day]
                                Khusus buat kalian para Kartini jaman now ada promo menarik dari Kamelo 👌🏼
                                .
                                Buy 2 Get 1 Free berlaku untuk pembelian soft ice cream yaa. And women only, ingettt
                                .
                                Buruan hanya sehari aja, besok banget tanggal 21 April 2018 📌
                                .
                                Jadi cusss share dan ajak semua para Kartini jaman now buat nikmatin Kamelo!
                               Cek IG kami!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Events Section -->


            <!-- Gallery Section -->
            <section id="gallery" class="gallery">
                <div class="container text-center">
                    <header>
                        <h2>Galeri Kami</h2>
                        <h3>Dokumentasi kedai</h3>
                    </header>

                    <div class="gellery">
                        <div class="row">
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg01.png" alt="image">
                                    <a href="assets/img/bg01.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg02.png" alt="image">
                                    <a href="assets/img/bg02.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg03.png" alt="image">
                                    <a href="assets/img/bg03.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg.png" alt="image">
                                    <a href="assets/img/bg.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg05.png" alt="image">
                                    <a href="assets/img/bg05.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg06.png" alt="image">
                                    <a href="assets/img/bg06.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg04.png" alt="image">
                                    <a href="assets/img/bg04.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="assets/img/bg07.png" alt="image">
                                    <a href="assets/img/bg07.png" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Gallery Section -->


            <!-- Booking Section -->
            <section id="booking" class="booking">
                <div class="container text-center">
                    <header>
                        <h2>Pre Order</h2>
                        <h3>Ingin memesan, disini tempatnya!</h3>
                    </header>

                    <div class="row">
                        <div class="form-holder col-md-10 col-md-push-1 text-center">
                            <div class="ribbon">
                                <i class="fa fa-star"></i>
                            </div>

                            <h2>Buat Pesanan</h2>
                            <h3>Dan nikmati kamelomu</h3>

                            <form id="booking-form" method="get" action="#">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <div class="row">
                                            <label for="name" class="col-sm-6 unique">Nama
                                                <input name="name" type="text" id="name" required>
                                            </label>
                                            <label for="number" class="col-sm-6 unique">No Hp
                                                <input name="number" type="text" id="number" required>
                                                <br><br>
                                            </label>
                                            <label for="item" class="col-sm-4 unique">Item
                                              <br><br>
                                              <select name="cars">
                                                <option value="mclassic">Marshmallow Classic Choco</option>
                                                <option value="mdelight">Marshmallow Strawberry Delight</option>
                                                <option value="icoreo">Ice Cream Oreo</option>
                                                <option value="icmilo">Ice Cream Milo</option>
                                                <option value="icstrawberry">Ice Cream Strawberry</option>
                                                <option value="icgreentea">Ice Cream Greentea</option>
                                                <option value="icbubble">Ice Cream Bubble Gum</option>
                                              </select>
                                                <!-- <input name="item" type="text" id="item" required> -->
                                            </label>
                                            <label for="topping" class="col-sm-4 unique">Topping
                                              <br><br>
                                              <select name="topping">
                                                <option value="no">Tanpa Topping</option>
                                                <option value="oreo">Oreo</option>
                                                <option value="chacha">Chacha</option>
                                                <option value="chocochips">Choco Chips</option>
                                                <option value="kokokeunch">Koko Crunch</option>
                                                <option value="yuppy">Yuppy</option>
                                                <option value="chocolatos">Chocolatos</option>
                                                <option value="hellopanda">Hello Panda</option>
                                                <option value="milo">Milo</option>
                                              </select>
                                                <!-- <input name="topping" type="text" id="topping" required> -->
                                            </label>
                                            <label for="people" class="col-sm-4 unique">Jumlah
                                                <input name="people" type="number" id="people" min="1" required>
                                            </label>

                                            <label for="date" class="col-sm-12 unique">Tanggal Ambil
                                                <input name="date" type="text" id="date" class="datepicker-here" data-language='en' required>
                                            </label>
                                            <!-- <label for="time" class="col-sm-6 unique">Time
                                                <input name="time" type="text" id="time" class="timepicker" required>
                                            </label>
                                            <label for="request" class="col-sm-12 unique">Special Request
                                                <textarea id="request" name="request" required></textarea>
                                            </label>-->
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn-unique">Tambah</button>
                                                <br><br>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn-unique">Pesan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <section id="delivery" class="booking">
                <div class="container text-center">
                    <header>
                        <h2>Delivery Order</h2>
                        <h3>Ingin delivery, disini tempatnya!</h3>
                    </header>

                    <div class="row">
                        <div class="form-holder col-md-10 col-md-push-1 text-center">
                            <div class="ribbon">
                                <i class="fa fa-star"></i>
                            </div>

                            <h2>Buat Pesanan</h2>
                            <h3>Dan Kamelo akan datang ke tempatmu</h3>

                            <form id="booking-form" method="get" action="#">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <div class="row">
                                            <label for="name" class="col-sm-6 unique">Nama
                                                <input name="name" type="text" id="name" required>
                                            </label>
                                            <label for="number" class="col-sm-6 unique">No Hp
                                                <input name="number" type="text" id="number" required>

                                            </label>
                                            <label for="item" class="col-sm-4 unique">Item
                                              <br><br>
                                              <select name="cars">
                                                <option value="mclassic">Marshmallow Classic Choco</option>
                                                <option value="mdelight">Marshmallow Strawberry Delight</option>
                                                <option value="icoreo">Ice Cream Oreo</option>
                                                <option value="icmilo">Ice Cream Milo</option>
                                                <option value="icstrawberry">Ice Cream Strawberry</option>
                                                <option value="icgreentea">Ice Cream Greentea</option>
                                                <option value="icbubble">Ice Cream Bubble Gum</option>
                                              </select>
                                                <!-- <input name="item" type="text" id="item" required> -->
                                            </label>
                                            <label for="topping" class="col-sm-4 unique">Topping
                                              <br><br>
                                              <select name="topping">
                                                <option value="no">Tanpa Topping</option>
                                                <option value="oreo">Oreo</option>
                                                <option value="chacha">Chacha</option>
                                                <option value="chocochips">Choco Chips</option>
                                                <option value="kokokeunch">Koko Crunch</option>
                                                <option value="yuppy">Yuppy</option>
                                                <option value="chocolatos">Chocolatos</option>
                                                <option value="hellopanda">Hello Panda</option>
                                                <option value="milo">Milo</option>
                                              </select>
                                                <!-- <input name="topping" type="text" id="topping" required> -->
                                            </label>
                                            <label for="people" class="col-sm-4 unique">Jumlah
                                                <input name="people" type="number" id="people" min="1" required>
                                            </label>

                                            <label for="date" class="col-sm-6 unique">Tanggal Ambil
                                                <input name="date" type="text" id="date" class="datepicker-here" data-language='en' required>
                                            </label>
                                            <!-- <label for="time" class="col-sm-6 unique">Time
                                                <input name="time" type="text" id="time" class="timepicker" required>
                                            </label>
                                            <label for="request" class="col-sm-12 unique">Special Request
                                                <textarea id="request" name="request" required></textarea>
                                            </label>-->
                                            <label for="address" class="col-sm-6 unique">Alamat
                                                <input name="address" type="text" id="address" required>
                                            </label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn-unique">Tambah</button>
                                                <br><br>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn-unique">Pesan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <section id="contact" class="contact">
                <div id="map"></div>
                <div class="container text-center">
                    <div class="form-holder">
                        <header>
                            <h2>Kontak Kami</h2>
                            <h3>Untuk kedai yang lebih baik</h3>
                        </header>

                        <form method="post" action="contact.php" id="contact-form">
                            <div class="row">
                                <label for="user-name" class="col-sm-6 unique">Nama
                                    <input type="text" name="username" id="user-name" required>
                                </label>
                                <label for="user-email" class="col-sm-6 unique">Email
                                    <input type="email" name="useremail" id="user-email" required>
                                </label>
                                <label for="message" class="col-sm-12 unique">Pesan Anda
                                    <textarea name="message" id="message" required></textarea>
                                </label>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn-unique" id="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <!-- Footer -->
            <footer id="mainFooter" class="mainFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 brief">
                            <div class="header">
                                <img src="assets/img/logo-footer.png" alt="kamelo" width="100">
                            </div>
                            <p>Kamelo adalah kedai dessert marshmallow ice cream dan ice cream.</p>
                        </div>

                        <div class="col-md-6 contact">
                            <div class="header">
                                <h6>Kontak</h6>
                            </div>
                            <ul class="contact list-unstyled">
                                <li><span class="icon-map text-primary"></span>Jalan Kaki Kediri</li>
                                <li><a href="mailto:meilryreinadhee@gmail.com"><span class="icon-phone text-primary"></span>kamelo@gmail.com</a></li>
                                <li><span class="icon-mail text-primary"></span>0819 0000 000</li>

                            </ul>
                        </div>


                    </div>

                    <ul class="social list-unstyled list-inline">

                        <li><a href="https://www.instagram.com/kameloku/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                    </ul>
                </div>

                <div class="copyrights">
                    <div class="container">
                        <div class="row">


                            <div class="col-sm-7">
                                <p>&copy; 2018 Kamelo </a></p>
                                <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <!-- scroll top btn -->
            <div id="scrollTop" class="btn-unique">
                <i class="fa fa-angle-up"></i>
            </div><!-- end scroll top btn -->


            <!-- moadal booking form -->
            <!-- <div class="reservation-overlay hidden-sm hidden-xs">
                <section id="reservation-modal" class="reservation-modal">
                    <div id="close"><i class="icon-close"></i></div>

                    <div class="container">
                        <div class="row">
                            <div class="form-holder col-md-12 text-center">
                                <h2>Buat Pesanan</h2>
                                <h3>Dan nikmati kamelomu</h3>

                                <form id="booking-form-alternative" method="get"  action="#">
                                    <div class="row">
                                        <div class="col-md-push-1 col-sm-10">
                                            <div class="row">
                                                <label for="cname" class="col-sm-6 unique">Nama
                                                    <input name="clientname" type="text" id="cname" required>
                                                </label>
                                                <label for="cemail" class="col-sm-6 unique">No Hp
                                                    <input name="clientemail" type="email" id="cemail" required>
                                                </label>
                                                <label for="cnumber" class="col-sm-6 unique">Item
                                                  <br><br>
                                                  <select name="cars">
                                                    <option value="marshmallow">Marshmallow</option>
                                                    <option value="strawberry">Soft Ice Cream Strawberry</option>

                                                  </select>

                                                    <!-- <input name="clientnumber" type="text" id="cnumber" required> -->
                                                <!-- </label>
                                                <label for="cpeople" class="col-sm-6 unique">Jumlah Pesanan
                                                    <input name="clientpeople" type="number" id="cpeople" min="1" required>
                                                </label>
                                                <label for="cdate" class="col-sm-6 unique">Tanggal Ambil
                                                    <input name="clientdate" type="text" id="cdate" class="datepicker-here" data-language='en' required>
                                                </label>
                                                <label for="time-alt" class="col-sm-6 unique">Time
                                                    <input name="clienttime" type="text" id="time-alt" class="timepicker" required>
                                                </label>
                                                <label for="request-alt" class="col-sm-12 unique">Special Request
                                                    <textarea id="request-alt" name="clientrequest" required></textarea>
                                                </label>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn-unique">Pesan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- end modal booking form --> --> -->
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.ba-cond.min.js"></script>
        <script src="assets/js/jquery.slitslider.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/datepicker.min.js"></script>
        <script src="assets/js/datepicker.en.min.js"></script>
        <script src="assets/js/timepicki.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/smooth.scroll.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dSWcBx-VghzhzQB6oCMTgeXMOhCYTvk"></script>
        <script src="assets/js/map.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
