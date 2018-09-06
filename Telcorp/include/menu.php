 <div class="navbar-inner">                                                 
                    <div class="nav-collapse nav-collapse_ collapse">
                      <ul class="nav sf-menu clearfix">
                        <li class="<?php 
if(strstr($_SERVER['REQUEST_URI'], 'about.php')){
echo 'active';
}
?>"><a href="about.php">nosotros</a></li>
                        <li class="sub-menu <?php 
if(strstr($_SERVER['REQUEST_URI'], 'services.php')){
echo 'active';
}
elseif(strstr($_SERVER['REQUEST_URI'], 's-internet.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'cloud.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'pbx.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'ip-vpn.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 's-system.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'wifi.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'p-line.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'infrastructure.php')){ echo 'active'; }
elseif(strstr($_SERVER['REQUEST_URI'], 'integrated.php')){ echo 'active'; }
?>"><a href="services.php">Servicios</a>
                        	<ul>
                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 's-internet.php')){ echo 'active'; } ?>">
								<a href="s-internet.php">Internet Inteligente</a></li>
                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'cloud.php')){ echo 'active'; } ?>"><a href="cloud.php">Servicios en La Nube</a>
                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'pbx.php')){ echo 'active'; } ?>"><a href="pbx.php">PBX Virtual</a></li>
                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'ip-vpn.php')){ echo 'active'; } ?>"><a href="ip-vpn.php">Enlace de Datos IP y VPN</a></li>
                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 's-system.php')){ echo 'active'; } ?>"><a href="s-system.php">Televigilancia</a></li>
                                <li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'wifi.php')){ echo 'active'; } ?>"><a href="wifi.php">Implementacion WIFI</a></li>
								<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'p-line.php')){ echo 'active'; } ?>"><a href="p-line.php">L&iacute;nea Privada Internacional</a></li>
								<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'infrastructure.php')){ echo 'active'; } ?>"><a href="infrastructure.php">Desarollo de Infraestructura</a></li>
								<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'integrated.php')){ echo 'active'; } ?>"><a href="integrated.php">Soluciones Integradas</a></li>
                          </ul>
                        </li>
                        <li class="<?php 
if(strstr($_SERVER['REQUEST_URI'], 'partners.php')){
echo 'active';
}
?>"><a href="partners.php">Unete al Equipo</a></li>
                         <li class="<?php 
if(strstr($_SERVER['REQUEST_URI'], 'support.php')){
echo 'active';
}
?>"><a href="support.php">Soporte</a></li>
						 <li class="<?php 
if(strstr($_SERVER['REQUEST_URI'], 'contact.php')){
echo 'active';
}
?>"><a href="contact.php">cont&aacute;ctanos</a></li>
                      </ul>
                    </div>
                  </div>