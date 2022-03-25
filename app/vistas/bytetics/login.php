<?php 
    
   require RUTA_APP."/vistas/inc/header.php"

?>
<div class="background-nosotros">
    <form class="formulario">
        <a href="index.php" title="">
            <h1>Login</h1>
        </a>
        
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fa fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>

            <input type="submit" value="Iniciar Sesión" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p class="registrarse">¿No tienes una cuenta? <a class="link" href="registrarvista.html">Registrate </a></p>
        </div>
    </form>
    
</div>
<?php 
    
   require RUTA_APP."/vistas/inc/footer.php"

?>