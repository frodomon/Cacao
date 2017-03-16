		<section id="footer" class="px-3">
			<div class="container footer">
				<div class="row">
					<div class="footer-column col-md-6">
						<ul>
							<li><a href="#" class="footer-title">Sala de Exposición</a></li>						
							<li><a href="#" class="footer-title">Cadena del Cacao al Chocolate: CHOCO MUSEO</a></li>
							<li><a href="#" class="footer-title">Ciclo de conferencias</a></li>
						 	<li><a href="#" class="footer-title">Rueda de Negocios</a></li>
						 	<li><a href="#" class="footer-title">Desfile de Modas</a></li>
						 	<li><a href="#" class="footer-title">Choco – demo</a></li>
						 	<li><a href="#" class="footer-title">Bosque Temático</a></li>
						 	<li><a href="#" class="footer-title">Belleza con chocolate: “CHOCOTERAPIA”</a></li>
						 </ul>
					</div>
					<div class="footer-column col-md-3">
						<form method='post'>
	                        <div class='form_heading'>
	                            <h3 class='footer-title'>Boletín</h3>
	                            <span class='form_description'>Suscríbete a nuestro boletin para que tengas las últimas noticias</span>
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
							<div class="textwidget">Del 06 al 09 de Julio del 2017 
								El VIII Salón del Cacao & Chocolate se realizará
								en el Centro de Convenciones de Lima “27 de enero”
								San Borja, Lima – Perú. 
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
		</section>
		<footer class= "footer-copyright">
				<div class="container">
					<div class="row">
						<div ><a href=""><img id="img-logo" src="<?php print IMAGES. '/logo.png' ?>"  ></a></div>
					</div>
				</div>
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>