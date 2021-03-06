<!-- Boton subir -->
<i class="fas fa-angle-double-up subir"></i>
<!-- Boton subir -->
<footer id="footer" class="position-relative">

    <div class=" d-flex flex-wrap p-0">
        <div class="col-12 col-lg-6 col-md-6 mt-3 container">
            <div class="sec-title">
                <div class="title">Contáctenos</div>
                <h2 id="color" style="font-size:30px">Datos de Contacto</h2>
                <div class="separator"></div>
                <ul class="mt-5">
                <li class="mb-4 lista direc_movil"><span class="color_icono icon fas fa-map-marker-alt"></span><a id="direccion" href="https://www.google.com/maps/place/Oficina+406,+Cl.+73+%239-42,+Bogot%C3%A1/@4.6575568,-74.0587533,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9a5ce079502f:0xb732007c0d9bf021!8m2!3d4.6575515!4d-74.0565646" class="ml-4" target="_blanck"><?php echo $datos_contacto['direccion']['direccion'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-phone"></span><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-mobile-alt"></span><a href="tel:<?php echo $datos_contacto['celular']['link'] ?>" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['celular']['imprimir'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-envelope"></span><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['correo']['correo'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fab fa-whatsapp"></span><a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blanck" class="ml-4" style="color:inherit;"><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a></li>
                    <li class="mb-4 lista"><span class="color_icono icon fas fas fa-calendar-alt"></span><span class="ml-4"><?php echo $datos_contacto['horario']['horario'] ?></span></li>
                </ul>
                <div class="sec-title">
                    <h2 id="color" style="font-size:30px">Descargar formularios</h2>
                    <div class="separator"></div>
                    <ul class="mt-5">
                        <li class="mb-4 lista"><span class="color_icono icon far fa-file-pdf"></span><a href="archivos/Formulario-Solicitud-Arrendamiento-Por-Intermedio-de-Inmobiliaria-Personas-Juridicas.pdf (1).pdf" target="_blanck" class="ml-4" style="color:inherit;"> Zurich Persona Jurídica</a></li>
						<li class="mb-4 lista"><span class="color_icono icon far fa-file-pdf"></span><a href="archivos/Formulario-Solicitud-Arrendamiento-Por-Intermedio-de-Inmobiliaria-Personas-Naturales.pdf (2).pdf" target="_blanck" class="ml-4" style="color:inherit;"> Zurich Persona Natural</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-6 col-md-6 p-0 d-flex mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6431869068188!2d-74.0587532857369!3d4.65755684332822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5ce079502f%3A0xb732007c0d9bf021!2sOficina%20406%2C%20Cl.%2073%20%239-42%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1583181126033!5m2!1ses!2sco" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>


</footer>
<footer class="main-footer">
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">Diseñado y Desarrollado por <a class="footer_enlace" href="www.dexcondigital.com" target="_blanck">Dexcon Digital.</a> ©Copyright 2020 para Polania Inmobiliaria. 
                    Todos los derechos reservados. <a class="footer_enlace" href="archivos/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blanck">Política de tratamiento de datos</a></div>
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