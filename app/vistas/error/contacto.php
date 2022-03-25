<?php 
    
   require RUTA_APP."/vistas/inc/header.php"

?>


<!-- Portada Start Slider Area -->
    <div id="" class="slider-area">
        <div class=" preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="<?php echo RUTA_URL; ?>/public/img/contacto/contacto.jpg" alt="Llama o escribe" title="#slider-direction-1" />
                <img src="<?php echo RUTA_URL; ?>/public/img/contacto/contacto.jpg" alt="¿Estas listo?" title="#slider-direction-2" />
                <img src="<?php echo RUTA_URL; ?>/public/img/contacto/contacto.jpg" alt="contácta" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s"data-wow-delay=".2s"><br>
                                    <br><br><br>
                                    <h2 class="title1">Hagamos</i></h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Contacto</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s"><br>
                                    <h2 class="title1">¡Abrochate los cinturones </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Aqui Vamos! </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                     <h2 class="title1">Tu decides, tan solo </h2> 
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Hazlo</h1> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Slider Area -->




<!--****************** Área del Mapa ********************-->

    <div class="container-contact100">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact100-map" id="google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d940.406702735731!2d-98.3475446!3d19.4716504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d02f1d737666ab%3A0x23f41d08445a9141!2sByteTIC&#39;s%20Consulting!5e0!3m2!1ses-419!2smx!4v1594841327934!5m2!1ses-419!2smx" width="800" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <!--*************** Formulario de email *******************-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form" action="enviar" method="post">
                        <span class="contact100-form-title">Contáctanos</span>

                        <div class="wrap-input100"> 
                            <span class="label-input100">Nombre</span>
                            <input class="input100" type="text" name="name" placeholder="Ingresa tu nombre" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100"> 
                            <span class="label-input100">Asunto</span>
                            <input class="input100" type="text" name="asunto" placeholder="Ingresa tu asunto" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100">
                            <span class="label-input100">Correo</span>
                            <input class="input100" type="email" name="email" placeholder="Escribe tu e-mail" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100">
                            <span class="label-input100">Telefono</span>
                            <input class="input100" type="tel" name="phone" placeholder="¿Cual es tu numero" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Mensaje</span>
                            <textarea class="input100" name="message" placeholder="Alguna pregunta o comentario" required></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn"></div>
                                <button class="contact100-form-btn" type="submit" value="enviar" id="boton">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Exelencia Digital -->
    <div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="suscribe-text text-center">
                        <h3>Vive la ¡Excelencia Digital!</h3>
                        <a class="sus-btn" href="#">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin --
     -->

   <?php 
    
   require RUTA_APP."/vistas/inc/footer.php"

?>


