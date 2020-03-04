<!-- Boton subir -->
<i class="fas fa-angle-double-up subir"></i>
<!-- Boton subir -->
<!-- <footer class="footer-style-two">
		<div class="auto-container">
        
        	
            <div class="widgets-section">
            	<div class="row clearfix">
                	
            
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                        <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<h2>Menu</h2>
                                    <ul class="links">
                                    	<li><a href="index.php">Inicio</a></li>
                                        <li><a href="quienes-somos.php">Quíenes Somos</a></li>
                                        <li><a href="inmuebles.php">Inmuebles</a></li>
                                        <li><a href="clientes.php">Clientes</a></li>
                                        <li><a href="contacto.php">Contáctanos</a></li>
                                    </ul>
                                </div>
                            </div>                        
            
                            
            
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<h2>Nuestros Servicios</h2>
                                    <ul class="links">
                                    	<li><a href="quienes-somos.php#servicios">Ventas</a></li>
                                        <li><a href="quienes-somos.php#servicios">Arriendos</a></li>
                                        <li><a href="quienes-somos.php#servicios">Avalúos</a></li>
                                    </ul>
                                    <ul>
                                    <li class="mt-4">
                                            <div class="row">
                                                <div class="col-auto"><a target="_blank" href="https://www.facebook.com/grr.fincaraiz.1?ref=bookmarks"><i class="icon azul icon-grande fab fa-facebook"></i></a></div>
                                                <div class="col-auto"><a target="_blank" href="https://www.instagram.com/grr_fincaraiz/?hl=es-la"><i class="icon azul icon-grande fab fa-instagram"></i></a></div>
                                                <div class="col-auto"> <a target="_blank" href="https://api.whatsapp.com/send?phone=573143612092&text=&source=&data="><i class="icon azul icon-grande fab fa-whatsapp"></i></a></div>
                                                <div class="col-auto"><a target="_blank" href="https://www.youtube.com/channel/UCDw7z49ZfgvhMU_oCVGnpbw?view_as=subscriber"><i class="icon azul icon-grande fab fa-youtube"></i><a href=""></a></a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
              
                    <div class="big-column col-md-5 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        	
                           
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<h2>Contáctenos</h2>
                                    <ul class="list-style-one style-two">
                                
                                        <li class="color-negro"><a  class="color-negro" href="tel:+570313106093"><span class="icon icon-blanco fa fa-phone"></span> 57 (1) 3106093</a></li>
                                        <li class="color-negro"><a class="color-negro"href="tel:+573143612092"><span class="icon fas fa-mobile-alt"></span>314 361 2092</a></li>    
                                        <li class="color-negro"><a class="color-negro"href="mailto:grrfincaraiz@yahoo.com"><span class="icon icon-blanco fa fa-envelope-o"></span> grrfincaraiz@yahoo.com</a></li>
                                        <li class="color-negro"><span class="icon icon-blanco fa fa-map-marker"></span> Carrera 10 # 73 - 20 Oficina 102 Bogotá</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget touch-widget">
                                    <img src="images/LogoGrr.png" alt="" style="width:150px; height:auto;">
                                    <h2></h2>
                                    <div class="text">
                                        GRR Finca Raíz S.A.S es una empresa con más de 40 años de experiencia en el sector inmobiliario.
                                    </div>
								</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>    
    </footer>
 -->

<footer id="footer">

    <div class="col-12 d-flex p-0">
        <div class="col-6 mt-3 container">
            <div class="sec-title">
                <div class="title">Contáctenos</div>
                <h2 id="color">Datos de Contacto</h2>
                <div class="separator"></div>
                <ul class="mt-5">
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-phone"></span><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-mobile-alt"></span><a href="tel:<?php echo $datos_contacto['celular']['link'] ?>" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['celular']['imprimir'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-envelope"></span><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['correo']['correo'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fab fa-whatsapp"></span><a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blanck" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-calendar-alt"></span><span class="ml-4"><?php echo $datos_contacto['horario']['horario'] ?></span></li>
                </ul>
                <div class="sec-title">
                    <h2 id="color">Descargar formularios</h2>
                    <div class="separator"></div>
                    <ul class="mt-5">
                        <li class="mb-4 lista"><span class="color_icono icon far fa-file-pdf"></span><a href="#" target="_blanck" class="ml-4" style="color:inherit;"> Protecsa</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-6 p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6431869068188!2d-74.0587532857369!3d4.65755684332822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5ce079502f%3A0xb732007c0d9bf021!2sOficina%20406%2C%20Cl.%2073%20%239-42%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1583181126033!5m2!1ses!2sco" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class=" col-4  direccion">

            <h3 class="titulo">Dirección</h3>
            <div class="text">
                <p>Calle 73 No. 9 – 42 Oficina 406 – Bogotá D.C</p>
            </div>
        </div>
    </div>


</footer>
<footer class="main-footer">
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">Diseñado y Desarrollado por <a class="footer_enlace" href="www.dexcondigital.com" target="_blanck">Dexcon Digital.</a> ©Copyright 2020 para Inmobiliaria
                        Polania. Todos los derechos reservados. <a class="footer_enlace" href="archivos/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blanck">Política de tratamiento de datos</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="./js/jquery.js"></script>
<script src="./js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/owlCarouselStar.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- // Jquery del boton subir -->
<script>
    $(document).ready(function() {

        $('.subir').click(function() {
            $('body, html').animate({
                scrollTop: '0px'
            }, 300);
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.subir').fadeIn(500);
            } else {
                $('.subir').fadeOut(500);
            }
        });
    });
</script>
<!-- fin del boton subir -->