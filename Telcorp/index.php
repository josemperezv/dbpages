<?php include('include/header.php'); ?>

		<div class="row">

            <div class="span12">

              <div class="slider">

                <div class="camera_wrap">
                    
                    <div data-src="img/slide-4.png" data-link="s-internet.php"></div>

			<div data-src="img/slide-1.png" data-link="cloud.php"></div>

			<div data-src="img/slide-2.png" data-link="pbx.php"></div>

			<div data-src="img/slide-3.png" data-link="p-line.php"></div>


                </div>

              </div>

           </div>

          </div>    

          <div class="row block-1">

              <div class="span3">

                <h3>Internet<br>Inteligente</h3>

                <div class="maxheight">

                	<img src="img/icon-s-internet.png" alt="">

                    <div>Acceso a Internet con funciones avanzadas para ofrecer a los usuarios una experiencia inteligente a trav&eacute;s del control y flexibilidad.<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>

                    	<a href="s-internet.php" class="btn-large">mas...</a>

                    </div>

                </div>

              </div>

              <div class="span3">

                <h3>Servicios<br>en La Nube</h3>

                <div class="maxheight">

                	<img src="img/icon-cloud.png" alt="">

                    <div>Servicios de tecnolog&iacute;a confiable y eficiente para acceso a las aplicaciones y la informaci&oacute;n en cualquier momento y en cualquier lugar.<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>

                    	<a href="cloud.php" class="btn-large">mas...</a>

                    </div>

                </div>

              </div>

              <div class="span3">

                <h3>PBX<br>Virtual</h3>

                <div class="maxheight">

                	<img src="img/icon-vpbx.png" alt="">

                    <div>Sistema de centrales telef&oacute;nicas, gestionado a trav&eacute;s de la Web, una plataforma de comunicaciones que reemplaza el sistema de telefon&iacute;a tradicional f&iacute;sico, lo que le permite integrar, simplificar y organizar las comunicaciones de su negocio.<br>

                    	<a href="pbx.php" class="btn-large">mas...</a>

                    </div>

                </div>

              </div>

              <div class="span3">
          <h3>L&iacute;nea Privada<br>Internacional</h3>
          <div class="maxheight">
            <img src="img/icon-lineap.png" alt="">
            <div>Circuitos dedicados internacionales para conexiones permanentes de alta disponibilidad, dedicadas e independientes del protocolo.<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
              <a href="p-line.php" class="btn-large">mas...</a>
            </div>
          </div>
        </div>

          </div>

          <div class="row block-2 bot-1">

              <div class="span4">

              	<h3 class="indent-1">24/7 Soporte</h3>

                <figure class="img-polaroid"><img src="img/support.jpg" alt=""></figure>

                <div><strong class="list-history">Soporte Multi idioma mediante el centro de atenci&oacute;n al cliente tanto telef&oacute;nicamente como  basado en portal de manejo de incidencias en la web: <a href="http://tickets.telcorp.com.ve">http://tickets.telcorp.com.ve</a></strong>

<br>

                <a href="support.php" class="btn-large">mas...</a>

                </div>

              </div>

              <div class="span4">

              	<h3 class="indent-1">Ventajas Competitivas</h3>

                <figure class="img-polaroid"><img src="img/key-beneficts.jpg" alt=""></figure>

                <div>

                <strong class="list-history">Telcorp ha desarrollado ventajas competitivas agregando valor en todos sus servicios y esencialmente mediante la innovaci&oacute;n, la velocidad en la atenci&oacute;n al cliente y el establecimiento de relaciones ganadoras.</strong><br>

                <a href="benefits.php" class="btn-large">mas...</a>

                </div>

              </div>

              <div class="span4">

              	<h3 class="indent-1">Conviertete en Distribuidor</h3>

                <figure class="img-polaroid"><img src="img/success-full.jpg" alt=""></figure>

                <div>

                <strong class="list-history">La mejor manera de aumentar los ingresos de sus negocios.</strong><br>&nbsp;<br>&nbsp;<br>&nbsp;



                <a href="#myModal" role="button" class="btn btn-large" data-toggle="modal"><i class="icon-play"></i>&nbsp;Play</a>
                <div id="myModal" width="80%" height="650" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Unete al Equipo</h3>
                  </div>
                    <div class="modal-body">
                    <!-- the player -->
                     <iframe width="100%" height="576" src="https://www.youtube.com/embed/lQ_000QI_0c?version=3&rel=0&showinfo=0"frameborder="0" allowfullscreen></iframe>
                    </div>
                      <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                      </div>
                </div>

                </div>

              </div>

          </div>         

         </div>

       </div>    

    </header>

    <!--==============================content=================================-->

    <div id="content">

      <div class="container">

        <div class="row">

          <!-- <div class="span3">

          	<h3 class="h3-grey indent-2">Last Tweets</h3>

            <div class="tweet"></div>

          </div> -->

          <div class="span3">

          	<h3 class="h3-grey indent-2">Soporte en L&iacute;nea</h3>

            <div class="phone-block"><img src="img/phone.png" alt="">

            <span>+58 212 8819800</span>

            <small>Env&iacute;a tus preguntas: <a href="mailto:soporte@telcorpcom.ec">soporte@telcorp.com.ve</a></small>

            </div>

          </div>

          <div class="span3">

          	<h3 class="h3-grey indent-2">Servicios</h3>

            <ul class="list">

                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 's-internet.php')){ echo 'active'; } ?>">

								<a href="s-internet.php">Internet Inteligente</a></li>

                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'cloud.php')){ echo 'active'; } ?>"><a href="cloud.php">Servicios en La Nube</a>

                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'pbx.php')){ echo 'active'; } ?>"><a href="pbx.php">PBX Virtual</a></li>

                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'ip-vpn.php')){ echo 'active'; } ?>"><a href="ip-vpn.php">Enlace de Datos IP y VPN</a></li>

                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 's-system.php')){ echo 'active'; } ?>"><a href="s-system.php">Televigilancia</a></li>

            </ul>

          </div>

			<div class="span3">

				<h3 class="h3-grey indent-2">&nbsp;</h3>

				<ul class="list">

                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'wifi.php')){ echo 'active'; } ?>"><a href="'wifi.php">Implementaci&oacute;n WIFI</a></li>

								<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'p-line.php')){ echo 'active'; } ?>"><a href="p-line.php">L&iacute;nea Privada Internacional</a></li>

								<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'infrastructure.php')){ echo 'active'; } ?>"><a href="infrastructure.php">Desarrollo de Infraestructura</a></li>

								<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'integrated.php')){ echo 'active'; } ?>"><a href="integrated.php">Soluciones Integradas</a></li>

				</ul>

			</div>
          <div class="row testimonials">
          <div class="span3">
          	<h3 class="h3-grey indent-2">Testimonios</h3>
              <blockquote>Logramos establecer diferentes enlaces con nuestros Restaurantes, donde <strong>“Ningún” </strong>Proveedor de ISP había podido llegar eficientemente. <br><strong class="text-info">Ronald Gonz&aacute;lez Cedres</strong>CEO en MagicNet - Venezuela<br><a href="testimonials.php">mas...</a></blockquote>
          </div>                 
        </div>
        </div>

        <div class="row">

          <div class="span12 banners">

              <ul>

            	<li><a href="http://home.bt.com/" target="blank"><img src="img/banner-1.png" alt=""></a></li>

                <li><a href="http://www.mikrotik.com/" target="blank"><img src="img/banner-2.png" alt=""></a></li>

                <li><a href="http://www.mikrotik.com/" target="blank"><img src="img/banner-3.png" alt=""></a></li>

                <li><a href="https://www.ubnt.com/" target="blank"><img src="img/banner-4.png" alt=""></a></li>

                <li><a href="http://www.verizonwireless.com/"><img src="img/banner-5.png" alt=""></a></li>

                <li><a href="http://daycohost.com/" target="blank"><img src="img/banner-6.png" alt=""></a></li>

                <li><a href="http://www.verizonwireless.com/" target="blank"><img src="img/banner-7.png" alt=""></a></li>

            </ul>

          </div>

        </div>      

      </div>

  </div>    

<!--==============================footer=================================-->

<?php include('include/footer.html'); ?>