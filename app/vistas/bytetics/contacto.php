<?php 
    
   require RUTA_APP."/vistas/inc/header.php";

?>

<!-- Portada Start Slider Area -->
    <div class="testimonials-area-services services-contacto">
        <div class="testi-inner-services area-padding">
            <div class="testi-overly-services"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start testimonials Start -->
                        <div class="testimonial-content text-center">
                            <!-- <i class="quate fa fa-quote-right"></i> -->
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel">
                                <div class="single-testi">

                                    <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1 wow slideInDown testi-text-services" data-wow-duration="2s"data-wow-delay=".2s">
                                            <br><br>
                                            <h6>« Hagamos »</h6>
                                        </div>

                                        <!-- layer 2 -->
                                        <div class="layer-1-2 wow slideInUp " data-wow-duration="2s" data-wow-delay=".1s">

                                            <h1>Contacto</h1>

                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">

                                     <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1 wow slideInDown testi-text-services" data-wow-duration="2s"data-wow-delay=".2s">
                                            <br><br>
                                            <h6>« Abrochate los cinturones »</h6>
                                        </div>

                                        <!-- layer 2 -->
                                        <div class="layer-1-2 wow slideInUp " data-wow-duration="2s" data-wow-delay=".1s">
                                            <h1>¡Aqui vamos!</h1>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">

                                     <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1 wow slideInDown testi-text-services" data-wow-duration="2s"data-wow-delay=".2s">
                                            <br><br>
                                            <h6>Tu decides, tan solo  </h6>
                                        </div>

                                        <!-- layer 2 -->
                                        <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                            <h1>Hazlo</h1>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                        <!-- End testimonials end -->
                    </div>
                    <!-- End Right Feature -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->



    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-titulo text-center">
                    <br>
                    <br>
                    <br>
                    <h2>Contáctanos</h2>
                </div>
            </div>
        </div>
    </div>


<!--****************** Área del Mapa ********************-->

    <div class="container-contact100">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="contact100-map" id="google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d940.406702735731!2d-98.3475446!3d19.4716504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d02f1d737666ab%3A0x23f41d08445a9141!2sByteTIC&#39;s%20Consulting!5e0!3m2!1ses-419!2smx!4v1594841327934!5m2!1ses-419!2smx" width="585" height="790" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="wrap-contact100">
                   <form action="enviar" method="post" class="form_contact ">
                        <h2 style="text-align: center;">Envia un mensaje</h2>
                        <div class="user_info">
                            <label class="label-input100" for="names">Nombre *</label>
                            <input class="input100" type="text" name="name" placeholder="Ingresa tu nombre" required>
                            <span class="focus-input100"></span>

                            <label class="label-input100" for="names">Asunto *</label>
                            <input class="input100" type="text" name="asunto" placeholder="Ingresa tu asunto" required>
                            <span class="focus-input100"></span>

                            <label class="label-input100" for="names">Email *</label>
                            <input class="input100" type="email" name="email" placeholder="Escribe tu e-mail" required>
                            <span class="focus-input100"></span>

                            <label class="label-input100" for="names">Telefono / Celular *</label>
                            <input class="input100" type="tel" name="phone" placeholder="¿Cual es tu numero" required>
                            <span class="focus-input100"></span>

                            <label class="label-input100" for="names">Mensaje *</label>
                            <textarea id="mensaje" name="message" placeholder="Alguna pregunta o comentario" required></textarea>
                            <!-- <textarea class="input100" name="message" placeholder="Alguna pregunta o comentario" required></textarea> -->
                            <span class="focus-input100"></span>
                            <br><br>

                            <input type="submit" value="Enviar Mensaje" id="btnSend">
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
                        <a class="sus-btn" >Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin --
     -->

   <?php 
    require RUTA_APP."/vistas/inc/footer.php";
   ?>


