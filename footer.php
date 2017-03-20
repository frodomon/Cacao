		<section id="footer" class="px-3">
			<div class="container footer">
				<div class="row">
					<div class="footer-column col-md-6">
						<ul>
							<li><a href="#">Salón de Exposición</a></li>						
							<li><a href="#">Cadena del Cacao al Chocolate: CHOCO MUSEO</a></li>
							<li><a href="#">Ciclo de conferencias</a></li>
						 	<li><a href="#">Rueda de Negocios</a></li>
						 	<li><a href="#">Desfile de Modas</a></li>
						 	<li><a href="#">Choco – demo</a></li>
						 	<li><a href="#">Bosque Temático</a></li>
						 </ul>
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
                		<label class='gfield_label' for='input_3_2' >Nombre</label>
                			<div class='ginput_container ginput_container_text'>
                				<input class="textbox" type='text' value='' class='large'  tabindex='3'  placeholder='Nombres' />
                			</div>
                	</li>
                	<li>
                		<label class='gfield_label' for='input_3_3' >Apellidos</label>
                		<div class='ginput_container ginput_container_text'>
                			<input class="textbox" type='text' value='' class='large'  tabindex='4'  placeholder='Apellidos' />
                		</div>
                	</li>
                	<li>
                		<label class='gfield_label' for='input_3_4' >E-mail</label>
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
							<h4 class="footer-title">Ubicanos</h4>			
							<div class="textwidget">
								<p class="footer-content no-margin">Del 06 al 09 de Julio del 2017</p>
								<p class="footer-content no-margin">El VIII Salón del Cacao & Chocolate se realizará</p>
								<p class="footer-content no-margin">en el Centro de Convenciones de Lima “27 de enero”</p>
								<p class="footer-content no-margin">San Borja, Lima – Perú.</p>
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="social_links">
							<h4 class="footer-title">Redes Sociales</h4>
							<div class="fusion-social-networks">
								<div class="redes_footer">
									<a href=""><i title="facebook" class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href=""><i title="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href=""><i title="instagram" class="fa fa-instagram" aria-hidden="true"></i></a>
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
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-2 col-2">
						<div class='logo-footer'><a href=""><img id="img-logo" src="<?php print IMAGES. '/logo_white.png' ?>"  ></a></div>
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