<?php $page = 'contacto';
include 'include/header.php'; ?>
<!-- Contenido -->
<section class="page-title" style="background-image:url(images/banner_contacto.jpg);">
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
            <form class="needs-validation" novalidate action="email/enviarCorreo.php" method="post" id="contact-form">
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
                            y acepto la <a class="footer_enlace" href="archivos/POLITICA_DE_TRATAMIENTO_DE_DATOS.pdf" target="_blanck"> política de tratamiento de datos personales </a></label>
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