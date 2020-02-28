<?php $page = 'contacto';
include 'include/header.php'; ?>
<!-- Contenido -->
<section class="page-title" style="background-image:url(images/banner-contacto.png">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Contáctenos</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Contáctenos</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <div class="title">Contáctenos</div>
            <h2>Formulario de Contacto</h2>
            <div class="separator"></div>
        </div>

        <!--Contact Form-->
        <div class="contact-form">
            <form class="needs-validation" novalidate action="envia.php" method="post" id="contact-form">
                <div class="row">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su Nombre
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required="">
                        <div class="invalid-feedback">
                            Por favor ingrese un Apellido
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email" class="form-control" placeholder="Correo" required="">
                        <div class="invalid-feedback">
                            Por favor ingrese un Correo
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required="">
                        <div class="invalid-feedback">
                            Ingrese un Teléfono Valido
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" name="mensaje" rows="3" placeholder="Ingrese su Mensaje" required></textarea>
                        <div class="invalid-feedback">
                            Por favor ingrese su Mensaje
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                        <label class="form-check-label" for="exampleCheck1">Confirmo que he leído, entendido
                            y acepto la <a href="politica.pdf" download="Politica_de_datos"> política de tratamiento de datos personales </a></label>
                        <div class="invalid-feedback">
                            por favor acepte Terminos y Condiciones
                        </div>
                    </div>
                    <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="theme-btn btn-style-three">Enviar<span class="icon flaticon-send-message-button"></span></button>
                    </div>
                </div>
            </form>
        </div>
        <!--End Contact Form-->
    </div>
</section>
<footer class="main-footer" style="background-image:url(images/background/2.jpg)">
    <div class="container-fluid">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Info column-->
                <div class="info-column col-md-5 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <h2>Datos de contacto</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="text"></div>
                        <ul class="list-style-one">
                            <li><span class="icon blanco fas fa-map-marker-alt "></span><a  style="color:inherit;">Carrera 10 # 73 - 20 Oficina 102 Bogotá</a></li>
                            <li><span class="icon blanco fas fa-phone"></span><a href="tel:+570313260861" style="color:inherit;">57 (1) 3106093</a></li>
                            <li><span class="icon blanco fas fa-mobile-alt"></span><a href="tel:+573143612092" style="color:inherit;">314 361 2092</a></li>
                            <li><a href="mailto:grrfincaraiz@yahoo.com"><span class="icon blanco fa fa-envelope-o"></span> grrfincaraiz@yahoo.com</li></a>
                            <li><span class="icon blanco fa fa-clock-o"></span>Lunes a Viernes de 8:30 am a 12:30 pm y de 2:00 pm a 5:30 pm</li>
                        </ul>
                    </div>
                </div>

                <!--Map column-->
                <div class="map-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <!--   <div class="map-info-box">
                                        <h3>Dirección Oficina</h3> 
                                        <div class="text">Carrera 10 # 73 - 20 Oficina 102 Bogotá</div>
                                    </div> -->
                            <!--map Canvas-->
                            <div class="map-canvas" style="position: relative; overflow: hidden;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.642389056939!2d-74.05905258573694!3d4.657697943327031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5ce3e450f5%3A0xaf09aa64d179a705!2sCra.+10+%2373-20%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1557672395920!5m2!1ses!2sco" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- Vali formulario -->
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>