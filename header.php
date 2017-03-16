<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Contenido">
  <meta name="keywords" content="Palabras clave">
  <meta name="author" content="Nombre del diseñador">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>	
</head>
<body>
  <div id='wrap'>
    <header>
      <section id="top-header" >
        <div class="container">
          <div class="redes py-2">
            <a href="#"><i title="facebook" class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i title="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i title="instagram" class="fa fa-instagram" aria-hidden="true"></i></a>
          <div id="idiomas" class="mb-0">
              <span><a id="idioma" href="#">EN</a></span>
              <span class="separator">|</span>
              <span><a id="idioma" href="#">NL</a></span>
          </div>
            
          </div>
        </div>
      </section>
      <section id="bottom-header">
        <div class="container">
          <div class="row" >
            <div class="col-xl-3 col-lg-3 col-md-3 col-3 my-4">
              <a href="#"><img id="img-logo" src="<?php print IMAGES.'/logo.png'; ?>"></a>
            </div>
            <div id="main-menu" class="col-xl-9 col-lg-9 col-md-9 col-9">
              <ul>
                <li><a href="#" active><span>HOME</span></a></li>
                <li><a href="#"><span>EVENTO</span></a></li>
                <li><a href="#bg-choco"><span>ACTIVIDADES</span></a></li>
                <li><a href="#"><span>SOCIOS</span></a></li>
                <li><a href="#nosotros"><span>NOSOTROS</span></a></li>
                <li><a href="#"><span>CONTACTO</span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </section>
      <section id="toggle-menu">
        <div class='container'>
          <div class="row bg-marron-cacao">
            <div class="col-2 togglemenu">
              <a class="togglebar" href="#" title="Menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="col-8 toggle-title ">
              <h1>Cacao y Chocolate</h1>
            </div>
            <div class="col-2">
            </div>
          </div>
        </div>
      </section>
      <section id="responsive-menu">
        <div class="responsive-menu">
          <ul>
            <li><a href="#" active><span>HOME</span></a></li>
            <li><a href="#"><span>EVENTO</span></a></li>
            <li><a href="#bg-choco"><span>ACTIVIDADES</span></a></li>
            <li><a href="#"><span>SOCIOS</span></a></li>
            <li><a href="#nosotros"><span>NOSOTROS</span></a></li>
            <li><a href="#"><span>CONTACTO</span></a></li>
          </ul>
        </div>
      </section>
  </header>