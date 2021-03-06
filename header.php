<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if( isset($_title) ) echo $_title . " | "; ?>Nícholas André - Programador Web & Desktop</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nícholas André">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <meta name="description" content="Nícholas André - A freelancer Wordpress and PHP Developer" />
        <meta name="keywords" content="cursos, wordpress, projetos, javascript, desenvolvedor, freelancer" />
        <meta property="og:image" content="http://nicholasandre.com.br/img/wp.jpg" />
        <link href="http://nicholasandre.com.br/img/wp.jpg" rel="image_src" />
        <link rel="shortcut icon" href="../favicon.ico">

        <!--CSS styles-->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">  
        <link rel="stylesheet" href="/css/perfect-scrollbar-0.4.5.min.css">
        <link rel="stylesheet" href=/"css/magnific-popup.css">
        <link rel="stylesheet" href="/css/style.css">
        <link id="theme-style" rel="stylesheet" href="/css/styles/default.css">

        
        <!--/CSS styles-->
        <!--Javascript files-->
        <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/js/TweenMax.min.js"></script>
        <script type="text/javascript" src="/js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        
        <script type="text/javascript" src="/js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="/js/jquery.dropdownit.js"></script>

        <script type="text/javascript" src="/js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="/js/ScrollToPlugin.min.js"></script>

        <script type="text/javascript" src="/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="/js/jquery.mixitup.min.js"></script>

        <script type="text/javascript" src="/js/masonry.min.js"></script>

        <script type="text/javascript" src="/js/perfect-scrollbar-0.4.5.with-mousewheel.min.js"></script>

        <script type="text/javascript" src="/js/magnific-popup.js"></script>
        <script type="text/javascript" src="/js/custom.js"></script>

        <!--/Javascript files-->

    </head>
    <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div id="wrapper">
            <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

            <div id="sidebar">
                <div id="main-nav">
                    <div id="nav-container">
                        <div id="profile" class="clearfix">
                            <div class="portrate hidden-xs"></div>
                            <div class="title">
                                <h2>Nícholas André</h2>
                                <h3>Web Developer</h3>
                            </div>
                            
                        </div>
                        <?php global $_page;?>
                        <ul id="navigation">
                            <li <?php if ( $_page == 'index' ):  ?> class="currentmenu" <?php endif; ?> >
                              <a href="/">
                                <div class="icon icon-user"></div>
                                <div class="text">About me</div>
                              </a>
                            </li>  
                            
                            <!--<li <?php if ( $_page == 'servicos' ):  ?> class="currentmenu" <?php endif; ?>>
                              <a href="/servicos">
                                <div class="icon icon-book"></div>
                                <div class="text">Services</div>
                              </a>
                            </li> -->
                            <!--<li  <?php if ( $_page == 'cursos' ):  ?> class="currentmenu" <?php endif; ?>>
                                <a href="/cursos">
                                    <div class="icon icon-film"></div>
                                    <div class="text">Courses</div>
                                </a>
                            </li>-->
                            <!-- <li <?php if ( $_page == 'publicacoes' ):  ?> class="currentmenu" <?php endif; ?>>
                              <a href="publicacoes.php">
                                <div class="icon icon-edit"></div>
                                <div class="text">Publicações</div>
                              </a>
                            </li> -->

                            <li <?php if ( $_page == 'ensino' ):  ?> class="currentmenu" <?php endif; ?>>
                              <a href="/training.php">
                                <div class="icon icon-time"></div>
                                <div class="text">Talks and Trainings</div>
                              </a>
                            </li>
                            
                            <li <?php if ( $_page == 'portfolio' ):  ?> class="currentmenu" <?php endif; ?>>
                              <a href="/portfolio">
                                <div class="icon icon-picture"></div>
                                <div class="text">Portfolio</div>
                              </a>
                            </li>
                            
                            <!--<li>
                                <a href="http://www.iotecnologia.com.br">
                                    <div class="icon icon-link"></div>
                                    <div class="text">Blog</div>
                                </a>
                            </li>-->


                            <li <?php if ( $_page == 'contato' ):  ?> class="currentmenu" <?php endif; ?>>
                              <a href="/contact">
                                  <div class="icon icon-calendar"></div>
                                  <div class="text">Enter in touch</div>
                              </a>
                            </li>

                            <!--<li>
                              <a href="cv.pdf">
                                  <div class="icon icon-download-alt"></div>
                                  <div class="text">Download CV</div>
                              </a>
                            </li> -->
                        </ul>
                    </div>        
                </div>
                
                <div class="social-icons">
                    <ul>
                        <li><a target="_blank" href="http://www.facebook.com/nicholasandreio"><i class="icon-facebook"></i></a></li>
                        <li><a target="_blank" href="http://www.twitter.com.br/nicholas_io"><i class="icon-twitter"></i></a></li>
                        <!--<li><a target="_blank" href="#"><i class="icon-linkedin"></i></a></li>-->
                    </ul>
                </div>    
            </div>
