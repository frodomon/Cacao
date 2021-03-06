<?php get_header(); ?>
	<section id="carouselTop">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" pause="" data-interval="2000">
		  <div class="carousel-inner" role="listbox" style="height: 330px;">
		    <div class="carousel-item active" >
		      <img class="d-block img-fluid" src="<?php print IMAGES.'/slider/slider1.jpg'; ?>" alt="First slide">
		    </div>
		    <div class="carousel-item" >
		      <img class="d-block img-fluid" src="<?php print IMAGES. '/slider/slider2.jpg' ?>" alt="Second slide">
		    </div>
		  </div>
		</div>
	</section>
	<section id="nosotros" class="px-3">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-12">
					<h2 class='marron-cacao'><?php echo __(utf8_encode('<!--:en-->Cacao Biodiversity Origin Center<!--:--><!--:es-->Centro de Origen de la Biodiversidad del Cacao<!--:--><!--:fr--><!--:-->')); ?></h2>
					<p><?php echo __(utf8_encode('<!--:en-->Since 2010, organizations of producers, manufacturers, entrepreneurs and exporters of cocoa and derivatives with the aim of raising the quality, productivity and exportable supply of Peruvian cocoa and positioning it in the national and international markets carried out, with the support of the Public and Private Sector and International Cooperation, the "Hall of cocoa and chocolate".<!--:--><!--:es-->Desde el a&#241o 2010, las organizaciones de productores, fabricantes, emprendedores y exportadores de cacao y derivados con mira a elevar la calidad, productividad y oferta exportable del cacao peruano y posicionarlo en los mercados nacionales e internacionales, realizan con el apoyo del Sector P&#250blico, Privado y de Cooperaci&#243n Internacional el &#171Sal&#243n del Cacao y Chocolate&#187.<!--:--><!--:fr--><!--:-->')); ?>
					</p> 
				</div>
		</div>
				
		<div class="container description">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 col-12 px-0">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
					  <div class="carousel-inner" role="listbox">
					    <div class="carousel-item active">
					      <img class="d-block img-fluid" src="<?php print IMAGES. '/slider/CHOCOA-3950.jpg' ?>" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block img-fluid" src="<?php print IMAGES. '/slider/Chocoa-chocolade-repen.jpeg' ?>" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block img-fluid" src="<?php print IMAGES.  '/slider/Chocola-Festival-zaterdag-choco-300x200.jpg' ?>" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-12 px-0 featured_event">
					<div id="evento" class="pl-3 py-4 pr-3">
						<?php  
				  		$link = '';
	       			if ( qtranxf_getLanguage() == 'es' ) {
	       				$link = 'http://www.salondelcacaoychocolate.pe/es/hall-of-cocoa-and-chocolate/';
	       			}
	       			elseif ( qtranxf_getLanguage() == 'en' ) {
	       				$link = 'http://www.salondelcacaoychocolate.pe/hall-of-cocoa-and-chocolate/';	
	       			}
	       			elseif ( qtranxf_getLanguage() == 'fr' ) {
	       				$link = 'http://www.salondelcacaoychocolate.pe/fr/hall-of-cocoa-and-chocolate/';
	       			}
	       		?>					
						<h1 class="b text-justify"><?php echo __(utf8_encode('<!--:en-->HALL OF COCOA AND CHOCOLATE<!--:--><!--:es-->SAL&#211N DEL CACAO Y EL CHOCOLATE<!--:--><!--:fr--><!--:-->')); ?></h1>
						<p class="text-justify"><?php echo __(utf8_encode('<!--:en-->The event seeks to integrate the different national and international economic agents of the cocoa production chain, to manage knowledge, exchange information, establish contact networks and promote the commercial activity of cocoa and derivatives in the national and international market.<!--:--><!--:es-->El Sal&#243n busca integrar a los diferentes agentes econ&#243micos nacionales e internacionales de la cadena productiva del cacao, para gestionar conocimiento, intercambiar informaci&#243n, establecer redes de contacto y promover la actividad comercial  del cacao y derivados en el mercado nacional e internacional.<!--:--><!--:fr--><!--:-->')); ?>
							<span><a href="<?php echo $link; ?>" class="b  text-white"><?php echo __(utf8_encode('<!--:en-->Read More<!--:--><!--:es-->Leer m&#225s<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-share" aria-hidden="true"></i></a></span></p>
					</div>
				</div>
			</div>
			<?php  
			  	$link1 = '';
			 		$link2 = '';
			 		$link3 = '';
       		if ( qtranxf_getLanguage() == 'es' ) {
	         	$link1 = 'http://www.salondelcacaoychocolate.pe/es/rueda-de-negocios/';
					  $link2 = 'http://www.salondelcacaoychocolate.pe/es/conferencias-magistrales/';
					  $link3 = 'http://www.salondelcacaoychocolate.pe/es/choco-demo/';
	        }
	        elseif ( qtranxf_getLanguage() == 'en' ) {
	          $link1 = 'http://www.salondelcacaoychocolate.pe/rueda-de-negocios/';
					  $link2 = 'http://www.salondelcacaoychocolate.pe/conferencias-magistrales/';
					  $link3 = 'http://www.salondelcacaoychocolate.pe/choco-demo/';
	        }
	        elseif ( qtranxf_getLanguage() == 'fr' ) {
	          $link1 = 'http://www.salondelcacaoychocolate.pe/fr/rueda-de-negocios/';
					  $link2 = 'http://www.salondelcacaoychocolate.pe/fr/conferencias-magistrales/';
					  $link3 = 'http://www.salondelcacaoychocolate.pe/fr/choco-demo/';
	        }
    		?>
			<div class="row py-4">
				<div class="col-xl-4 col-lg-4 col-md-4 col-12 items">
					<div class='item'>
						<img src="<?php print IMAGES. '/subitems/Chocoa-trade-fair-e1449491246476.jpeg' ?>">
						<div class="p-3">
							<h3 class="text-center"><?php echo __(utf8_encode('<!--:en-->BUSINESS ROUNDTABLE<!--:--><!--:es-->RUEDA DE NEGOCIOS<!--:-->')); ?></h3>
							<p><?php echo __(utf8_encode('<!--:en-->Exhibitors will be able to meet potential buyers, exporters, and invited investors, generating business and strategic relationships in the medium and long term...<!--:--><!--:es-->Los expositores podr&#225n reunirse con potenciales compradores, exportadores, inversionistas invitados, generando negocios y relaciones estrat&#233gicas a mediano y largo plazo...<!--:--><!--:fr--><!--:-->')); ?>
								<span><a href="<?php echo $link1; ?>" class="b readmore"><?php echo __(utf8_encode('<!--:en-->Read More<!--:--><!--:es-->Leer m&#225s<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-share" aria-hidden="true"></i></a></span></p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-12 items">
					<div class='item'>
						<img src="<?php print IMAGES. '/subitems/event_2-e1449495732163.jpg' ?>" width="100%" alt="">
						<div class="p-3">
							<h3 class="text-center"><?php echo __(utf8_encode('<!--:en-->MASTER CONFERENCES<!--:--><!--:es-->CONFERENCIAS MAGISTRALES<!--:-->')); ?></h3>
							<p><?php echo __(utf8_encode('<!--:en-->Master lectures given by domestic and international experts on topics such as market and projections, trends, global cocoa and ...<!--:--><!--:es-->Disertaciones magistrales brindadas por expertos nacionales e internacionales en temas como: mercado y proyecciones, tendencias, industria mundial del cacao y...<!--:--><!--:fr--><!--:-->')); ?>
								<span><a href="<?php echo $link2; ?>" class="b readmore"><?php echo __(utf8_encode('<!--:en-->Read More<!--:--><!--:es-->Leer m&#225s<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-share" aria-hidden="true"></i></a></span></p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-12 items">
					<div class='item'>
						<img src="<?php print IMAGES. '/subitems/CHOCOA-3997-e1449491310680.jpg' ?>" width="100%" alt="">
						<div class="p-3">
							<h3 class="text-center">CHOCO - DEMO</h3>
							<p><?php echo __(utf8_encode('<!--:en-->Master classes for the preparation of chocolate-based products, provided by national and international experts invited...<!--:--><!--:es-->Clases magistrales para la preparaci&#243n de productos a base de chocolate, brindados por expertos nacionales e internacionales invitados...<!--:--><!--:fr--><!--:-->')); ?>
								<span><a href="<?php echo $link3; ?>" class="b readmore"><?php echo __(utf8_encode('<!--:en-->Read More<!--:--><!--:es-->Leer m&#225s<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-share" aria-hidden="true"></i></a></span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="countdown">

			<div class="container">
				
				<div class="row">
					<div class = 'col-xl-12 col-lg-12 col-md-12 col-12'>
						<?php 
							if ( qtranxf_getLanguage() == 'es' ) {
			         	echo do_shortcode('[wpcdt-countdown id="6"]');
			        }
			        elseif ( qtranxf_getLanguage() == 'en' ) {
			        	echo do_shortcode('[wpcdt-countdown id="254"]');
			        }
			        elseif ( qtranxf_getLanguage() == 'fr' ) {
			        	echo do_shortcode('[wpcdt-countdown id="255"]');
			        }
		        ?>
	        </div>
				</div>
			</div>
	</section>
	<section id="bg-choco" class="px-3">
		<div class="container py-5">
			<div class="row py-4">
				<a class="btn btn-secondary f1-5 b" href="http://www.salondelcacaoychocolate.pe/rueda-de-negocios/"><?php echo __(utf8_encode('<!--:en-->BUSINESS ROUNDTABLE&#160<!--:--><!--:es-->RUEDA DE NEGOCIOS&#160<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				<a class="btn btn-secondary f1-5 b" href="http://www.salondelcacaoychocolate.pe/desfile-de-modas/"><?php echo __(utf8_encode('<!--:en-->FASHION SHOW&#160<!--:--><!--:es-->DESFILE DE MODAS&#160<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				<a class="btn btn-secondary f1-5 b" href="http://www.salondelcacaoychocolate.pe/choco-demo/"><?php echo __(utf8_encode('<!--:en-->CHOCO - DEMO&#160<!--:--><!--:es-->CHOCO - DEMO&#160<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div>
			<div class="row py-4">
				<a class="btn btn-secondary f1-5 b" href="http://www.salondelcacaoychocolate.pe/bosque-tematico/"><?php echo __(utf8_encode('<!--:en-->THEMATIC FOREST&#160<!--:--><!--:es-->BOSQUE TEM&#193TICO&#160<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				<a class="btn btn-secondary f1-5 b" href="http://www.salondelcacaoychocolate.pe/salon-de-exhibicion/"><?php echo __(utf8_encode('<!--:en-->SHOWROOM&#160<!--:--><!--:es-->SAL&#211N DE EXHIBICI&#211N&#160<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div>
			<div class="row py-4">
				<a class="btn btn-secondary f1-5 b" href="http://www.salondelcacaoychocolate.pe/cadena-del-cacao-al-chocolate/"><?php echo __(utf8_encode('<!--:en-->COCOA TO CHOCOLATE CHAIN&#160<!--:--><!--:es-->CADENA DEL CACAO AL CHOCOLATE&#160<!--:--><!--:fr--><!--:-->')); ?><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>


	<section class="py-5 px-3">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-12">
					<p class="section-title-comite"><?php echo __(utf8_encode('<!--:en-->PURPOSE OF THE HALL<!--:--><!--:es-->PROP&#211SITO DEL SAL&#211N<!--:--><!--:fr--><!--:-->')); ?></p>
					<p class="section-content purpose text-justify" style="text-transform: uppercase;color: #A98F70;"><?php echo __(utf8_encode('<!--:en-->Bringing the culture of cocoa and chocolate to the general public about its benefits<!--:--><!--:es-->Acercar la cultura del cacao y chocolate,  informando al p&#250blico en general sobre sus beneficios<!--:--><!--:fr--><!--:-->')); ?></p>
				</div>
				<div class="col-xl-9 col-lg-9 col-md-9 col-12 lista-comite">
					<p class="section-title-comite"><?php echo __(utf8_encode("<!--:en-->ORGANIZING COMMITTEE:<!--:--><!--:es-->COMIT&#201 ORGANIZADOR:<!--:--><!--:fr-->COMITÉ ORGANIZADOR:<!--:-->")); ?> </p>
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/magr.png' ?>" alt="Ministerio de Agricultura y Riego"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/devida.png' ?>" alt="Comisión Nacional para el Desarrollo y Vida sin Drogas"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/promperu.png' ?>" alt="Comisión de Promoción del Perú para la Exportación y el Turismo"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/appcacao.png' ?>" alt="Asociación Peruana de Productores de Cacao"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/pnud.png' ?>" alt="Programa de las Naciones Unidas"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/usaid.png' ?>" alt="Agencia de los Estados Unidos para el Desarrollo Internacional"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/technoserve.png' ?>" alt="TechnoServe"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite"><img class="py-4" src="<?php print IMAGES. '/comision/alianzacacaoperu.png' ?>" alt="Alianza Cacao Peru"></div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-12 sponsors">
					<p class="section-title-comite aligncenter"><?php echo __(utf8_encode("<!--:en-->SPONSORS:<!--:--><!--:es-->AUSPICIADORES:<!--:--><!--:fr-->Auspiciadores:<!--:-->")); ?></p>
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-3 logos-home-comite hide-responsive aligncenter"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite aligncenter"><img src="<?php print IMAGES. '/comision/minprod.png' ?>" alt="Ministerio de Producción"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-6 logos-home-comite aligncenter"><img src="<?php print IMAGES. '/comision/mincetur.png' ?>" alt="Ministerio de Comercio Exterior y Turismo"></div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-3 logos-home-comite hide-responsive aligncenter"></div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
<?php get_footer(); ?>
<script type="text/javascript">
	$(window).scroll(function(){
		window_y = $(window).scrollTop(); // VALOR QUE SE HA MOVIDO DEL SCROLL
		nav = parseInt($('#top-header').height());
	    if(window_y > nav){
	    	$('#bottom-header').addClass('fixed-header');
	    	$('#main-menu ul li a').css('height','90px');
	    	$('.header-logo').css('height','90px');
	    }
	    if(window_y == 0){
	    	$('#bottom-header').removeClass('fixed-header');
	    	$('#main-menu ul li a').css('height','139px');
	    	$('.header-logo').css('height','139px');
	    }
   	});
</script>