		<section id="footer" class="px-3">
			<div class="container footer">
				<div class="row">
					<div class="footer-column col-md-6">
						<div class="footer-menu">
          		<?php wp_nav_menu( array( 'theme_location' => 'primary_footer', 'menu_class' => 'footer-menus' ) ); ?>
        		</div>
					</div>
					<div class="footer-column col-md-3">
						<form method='post'>
              <div class='form_heading'>
                  <h3 class='footer-title'>Boletín</h3>
                  <p class='footer-content'>Suscríbete a nuestro boletin para que tengas las últimas noticias</p>
              </div>
              <div class='form_body'>
              	<ul>
                	<li>
                			<div class='ginput_container ginput_container_text'>
                				<input class="textbox" type='text' value='' class='large'  tabindex='3'  placeholder='Nombres' />
                			</div>
                	</li>
                	<li>
                		<div class='ginput_container ginput_container_text'>
                			<input class="textbox" type='text' value='' class='large'  tabindex='4'  placeholder='Apellidos' />
                		</div>
                	</li>
                	<li>
                		<div class='ginput_container ginput_container_email'>
                			<input class="textbox" type='text' value='' class='large' tabindex='5'   placeholder='E-mail'/>
                		</div>
                	</li>
                 </ul>
              </div>
	        				<div class='gform_footer top_label'>
	        					<input type='submit' id='form_submit_button' value='Send' tabindex='6' style="border:0; background-color: #f3910e;"onclick='if(window["gf_submitting_3"]){return false;}  window["gf_submitting_3"]=true;  ' /> 
	        					<input type='hidden' name='gform_ajax' value='form_id=3&amp;title=1&amp;description=1&amp;tabindex=1' />
	            
	        				</div>
	                    </form>
					</div>
					<div class="footer-column col-md-3">
						
						<div class="address">
							<h4 class="footer-title">Ubícanos</h4>			
							<div class="textwidget">
								<p class="footer-content no-margin">VIII Salón del Cacao & Chocolate</p>
								<p class="footer-content no-margin">Centro de Convenciones de Lima</p>
								<p class="footer-content no-margin"><a class ='gmaps' href="https://www.google.com.pe/maps/place/Centro+de+Convenciones+de+Lima/@-12.0863713,-77.0028131,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c7d2eace5ded:0x60e727e3cac7362c!8m2!3d-12.0863713!4d-77.0006244?hl=en">Av. El Comercio S/N</a></p>
								<p class="footer-content no-margin"><a class ='gmaps' href="https://www.google.com.pe/maps/place/Centro+de+Convenciones+de+Lima/@-12.0863713,-77.0028131,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c7d2eace5ded:0x60e727e3cac7362c!8m2!3d-12.0863713!4d-77.0006244?hl=en">San Borja, Lima – Perú.</a></p>
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="social_links">
							<h4 class="footer-title">Redes Sociales</h4>
							<div class="fusion-social-networks">
								<div class="redes_footer">
									<a href="https://www.facebook.com/salondelcacaoychocolateperu" target="_blank"><i title="facebook" class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="https://twitter.com/salondelcacao" target="_blank"><i title="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="https://www.instagram.com/salondelcacao" target="_blank"><i title="instagram" class="fa fa-instagram" aria-hidden="true"></i></a>
								</div>
							</div>
							<div style="clear:both;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class= "footer-copyright">
			<div class="linea-footer"></div>
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-2 col-2">
						<div class='logo-footer'><a href=""><img src="<?php print IMAGES. '/logo-footer.png' ?>"  ></a></div>
					</div>
					<div class="col-xl-10 col-lg-10 col-md-9 col-10 branding">
						<p>2017 @ Salón del Cacao y Chocolate - Desarrollado por <a href="http://www.sb360.com.pe"><strong>SmartBrands</strong></a></p>
					</div>
				</div>
			</div>
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>