<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshow.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PureCianjur</title>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="green">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">PureCianjur</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">About Us</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <!-- Slider -->
    <div class="slider" id="slider">
        <ul class="slides">
            <li>
                <img src="img/slider/slider1.jpg"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Berasku Beras Cianjur</h3>
                    <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                </div>
            </li>
            <li>
                <img src="img/slider/slider2.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Beras Wangi dan Pulen</h3>
                    <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                </div>
            </li>
            <li>
                <img src="img/slider/slider3.jpg"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Dengan Perlakuan Organik</h3>
                    <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                </div>
            </li>
            <li>
                <img src="img/slider/slider5.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Bantu Sejahterakan Petani Lokal</h3>
                    <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                </div>
            </li>
        </ul>
    </div>

    <!-- About Us -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light light-green-text text-darken-4 wow fadeInDown slow">About Us</h3>
                <div class="col m8 wow fadeInLeft slow">
                    <h5 class="">CV Pure Cianjur</h5>
                    <p> Sejak didirikan pada tahun 2011 Pure Cianjur telah berkerja sama dengan banyak petani lokal kota
                        Cianjur
                        untuk selalu menyediakan produk beras dengan perlakukan organik yang berkualitas. Kami mengemas
                        dan memasarkan produk-produk beras khas Kota Cianjur ke berbagai tempat. </p>
                    <p>Pure Cianjur juga telah menjalankan kerja sama usaha dengan Carrefour dan Transmart wilayah
                        Bandung untuk
                        terus memasok beras organik produksi petani lokal. Sebagai perintis UMKM yang memasarkan beras
                        khas Cianjur Pure Cianjur akan terus berkontribusi demi berkembangnya produk lokal khususnya
                        Beras Pandanwangi Organik agar dapat dinikmati di setiap penjuru negeri. </p>
                </div>
                <div class="col m4 wow flipInX slow">
                    <br><br>
                    <img class="materialboxed responsive-img middle" width="300" src="img/jago.png">
                </div>
            </div>
        </div>
    </section>



    <!-- Our Cilents -->
    <div class="parallax-container scrollspy" id="clients">
        <div class="parallax"><img src="img/parallax/parallax4.jpg" alt=""></div>
        <div class="container clients">
            <h3 class="center light white-text wow fadeInDown slow">Our Clients</h3>
            <div class="row center wow zoomInUp slow" data-wow-delay="1s">
                <div class="col m4 s12">
                    <img src="img/clients/transretail.png" width="70%" alt="">
                </div>
                <div class="col m4 s12">
                    <img src="img/clients/tokopedia.png" width="50%" alt="">
                </div>
                <div class="col m4 s12">
                    <img src="img/clients/bukalapak.png" width="50%" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Our Products -->
    <section id="products" class="products green lighten-5 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light light-green-text text-darken-4 wow fadeInDown slow">Our Products</h3>
                <div class="col m4 s12 wow bounceInLeft slow">
                    <div class="card-panel center">
                        <img src="img/wheat1.png" alt="">
                        <h5>Pandanwangi</h5>
                        <p>Salah satu varietas padi unggulan kota Cianjur yang memiliki aroma khas Pandanwangi. Beras
                            ini memiliki bulir bulat dan panjang, warna berasnya pun putih dan segar.
                            Selain aroma pandan, beras Pandanwangi juga memiliki tekstur yang pulen dan gurih.</p>
                        <p>Beras Pandanwangi kemasan Pure Cianjur dipastikan dibudidayakan dengan perlakuan organik dan
                            sudah terjamin keasliannya. Tersedia dalam bentuk kemasan 1kg, 2.5kg, dan 5kg.</p>
                    </div>
                </div>
                <div class="col m4 s12 wow bounceInUp slow">
                    <div class="card-panel center">
                        <img src="img/wheat2.png" alt="">
                        <h5>Beras Merah</h5>
                        <p>Varietas padi yang satu ini sangat cocok bagi Anda yang ingin melakukan program diet. Beras
                            merah memiliki kandungan karbodridat yang dibutuhkan oleh tubuh namun rendah kalori, beras
                            ini juga kaya akan serat sehingga baik untuk proses pencernaan.</p>
                        <p>Beras Merah kemasan Pure Cianjur dibudidayakan secara organik dan tentunya terjamin
                            keasliannya. Tersedia dalam bentuk kemasan 1kg, 2.5kg, dan 5kg.</p>
                    </div>
                </div>
                <div class="col m4 s12 wow bounceInRight slow">
                    <div class="card-panel center">
                        <img src="img/wheat3.png" alt="">
                        <h5>Beras Hitam</h5>
                        <p>Varietas padi yang satu ini berbeda dengan ketan hitam. Diantra semua jenis varietas, beras
                            hitam memiliki nutrisi yang
                            lebih tinggi dibandingkan varietas padi lainnya karena memiliki index glikemik yang rendah
                            serta mengandung
                            aktioksidan, anthocyanin,
                            zat besi dan lainnya.</p>
                        <p>Beras Hitam kemasan Pure Cianjur dibudidayakan secara organik dan tentunya terjamin
                            keasliannya. Tersedia dalam bentuk kemasan 1kg, 2.5kg, dan 5kg.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="gallery scrollspy">
        <div class="container">
            <h3 class="center light light-green-text text-darken-4 wow fadeInDown slow">Our Gallery</h3>
            <div class="row wow zoomInUp">
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product1.jpg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product2.jpg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product4.jpg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product3.jpg">
                </div>
            </div>
            <div class="row wow zoomInUp slow">
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product5.jpeg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product6.jpeg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product7.jpeg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product8.jpeg">
                </div>
            </div>
            <div class="row wow zoomInUp slow">
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product9.jpeg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product1.jpg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product2.jpg">
                </div>
                <div class="col m3 s12">
                    <img class="materialboxed responsive-img" width="200" src="img/products/product10.jpeg">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact" class="contact green lighten-5 scrollspy">
        <div class="container">
            <h3 class="center light light-green-text text-darken-4 wow fadeInDown slow">Contact Us</h3>
            <div class="row maps">
                <div class="col m6 s12 wow slideInLeft slow">
                    <div class="card-panel">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1572833024409!6m8!1m7!1sq2S0OvfmrAScagZQH_TTkg!2m2!1d-6.807944249473041!2d107.1774270835838!3f155.73784897056225!4f-7.928307221987609!5f0.7820865974627469"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col m6 s12 wow slideInRight slow">
                    <form action="send.php" method="post">
                        <div class="card-panel">
                            <h5>Send us message</h5>
                            <br>
                            <div class="input-field">
                                <input placeholder="Your Name" name="name" id="name" type="text" class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input placeholder="Your Email" name="email" id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="input-field">
                                <button class="btn waves-effect waves-light blue pulse" type="submit" name="send">Send<i
                                        class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer green">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Address</h5>
                    <p class="grey-text text-lighten-4">Perum Gading Asri <br> Jl. Cendana Blok C-31 <br> Karangtengah
                        Cianjur,
                        Jawa Barat</p>
                    <p><img src="img/wa.png" width="25px" alt=""> 0857 7773 3962</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Find Us</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://www.bukalapak.com/u/pure_cianjur832">
                                <img src="img/BL.png" width="25px" alt="">
                                pure_cianjur832</a></li>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://www.tokopedia.com/berasorganikcjr">
                                <img src="img/TP.png" width="25px" alt="">
                                berasorganikcjr</a></li>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://www.instagram.com/sitimasum99/?hl=id">
                                <img src="img/IG.png" width="25px" alt=""> @sitimasum99</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright center">
            <div class="container">
                © 2019 Pure Cianjur
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!-- WOW JS -->
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>

    <script type="text/javascript" src="js/slideshow.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>

</html>