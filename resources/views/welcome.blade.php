<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyG Corporation &mdash; Un mundo de envios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('/ini/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('/ini/css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('/ini/css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('/ini/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/ini/css/magnific-popup.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/ini/css/bootstrap-datepicker.min.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('/ini/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/ini/css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('/ini/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('/ini/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <!-- <div class="page-inner"> -->
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="index.html">MYG CORPORATION <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="destination.html">Destinos</a></li>
                            <li class="has-dropdown">
                                <a href="#">Envios</a>
                                <ul class="dropdown">
                                    <li><a href="#">Europe</a></li>
                                    <li><a href="#">Asia</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Canada</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing.html">Mas</a></li>
                            <li><a href="contact.html">Contacto</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(ini/images/fondofondo.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">


                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <h1>Entregas a su tiempo segun su pais y su conveniencia.</h1>
                            </div>
                            <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                <div class="form-wrap">
                                    <div class="tab">

                                        <div class="tab-content">
                                            <div class="tab-content-inner active" data-content="signup">
                                                <h3>Estamos aqui para entregar a usted y a sus clientes. Ingresa a nuestra web.</h3>



                                                <!-- <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                                    </div>
                                                </div> -->
                                                @if (Route::has('login'))
                                                <div class="row form-group">
                                                    @auth
                                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                                    @else
                                                    <div class="col-md-12">
                                                    <a href="{{ route('login') }}" class="btn btn-primary btn-block">Iniciar Sesion</a>
                                                    </div>
                                                    @if (Route::has('register'))
                                                    <div class="col-md-12">
                                                    <a href="{{ route('register') }}" class="btn btn-primary btn-block">Registrate</a>
                                                    </div>
                                                    @endif
                                                    @endauth
                                                </div>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </header>

        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Mas de MyG Corporation</h2>
                        <p>Para tus necesidades de importación, exportación o locales, paquetes livianos o pesados, envíos con carácter de urgente o sin tanta prisa,
MyG Corporation te ofrece soluciones y un servicio en los cuales puedes confiar.</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="ini/images/correpun.jpg" class="fh5co-card-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="ini/images/correpun.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>¿Eres nuevo en MyG Corporation?</h2>
                                <p>Nuestro nuevo Centro de Atención al Cliente te guía en todos los pasos necesarios para hacer un envío con MyG Corporation.</p>
                                <p><span class="btn btn-primary">Click</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="ini/images/correopunto2.jpg" class="fh5co-card-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="ini/images/correopunto2.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Abrete una cuenta</h2>
                                <p>Aprovecha nuestros servicios y soluciones diseñados para satisfacer todas tus necesidades de envío.
Regístrate para obtener una cuenta de envíos MyG Corporation. ¡Comencemos en la parte de arriba!</p>
                                <p><span class="btn btn-primary">Click</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="ini/images/correopunto.jpg" class="fh5co-card-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="ini/images/correopunto.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Servicios de envío</h2>
                                <p>Elije MyG Corporation para entregar tus envíos importantes y urgentes desde y hacia más de 220 países y territorios en todo el mundo. De importación, exportación o nacionales, expresos o menos urgentes, paquetes pequeños o pesados, MyG Corporation tiene el servicio a la medida de tus necesidades.</p>
                                <p><span class="btn btn-primary">Click</span></p>
                            </div>
                        </a>
                    </div>


                   

                </div>
            </div>
        </div>

        

       


        

        <footer id="gtco-footer" role="contentinfo">
            <div class="gtco-container">
                <div class="row row-p	b-md">

                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h3>Sobre nosotros</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-push-1">
                        <div class="gtco-widget">
                            <h3>Destinos</h3>
                            <ul class="gtco-footer-links">
                                <li><a href="#">Europe</a></li>
                                <li><a href="#">Australia</a></li>
                                <li><a href="#">Asia</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Dubai</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-push-1">
                        <div class="gtco-widget">
                            <h3>Lugares</h3>
                            <ul class="gtco-footer-links">
                                <li><a href="#">Luxe </a></li>
                                <li><a href="#">Italy 5 </a></li>
                                <li><a href="#">Dubai </a></li>
                                <li><a href="#">Deluxe </a></li>
                                <li><a href="#">BoraBora </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <div class="gtco-widget">
                            <h3>A un solo toque</h3>
                            <ul class="gtco-quick-contact">
                                <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                                <li><a href="#"><i class="icon-mail2"></i> info@gmail.com</a></li>
                                <li><a href="#"><i class="icon-chat"></i> Chat en vivo</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; 2020 MyG Corporation. All Rights Reserved.</small>
                            <small class="block">Realizado por: <a href="https://freehtml5.co/" target="_blank">MyG Corporation</a></small>
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
        <!-- </div> -->

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/ini/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('/ini/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/ini/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('/ini/js/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('/ini/js/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('/ini/js/jquery.countTo.js')}}"></script>

    <!-- Stellar Parallax -->
    <script src="{{asset('/ini/js/jquery.stellar.min.js')}}"></script>

    <!-- Magnific Popup -->
    <script src="{{asset('/ini/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/ini/js/magnific-popup-options.js')}}"></script>

    <!-- Datepicker -->
    <script src="{{asset('/ini/js/bootstrap-datepicker.min.js')}}"></script>


    <!-- Main -->
    <script src="{{asset('/ini/js/main.js')}}"></script>

</body>

</html>