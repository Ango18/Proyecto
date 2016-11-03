<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contactos</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
    <?php echo link_tag("css/estilos/Ingreso.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/fonts.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
     
</head>
 
<body>

<header>
	<nav>
        <ul>
            <li><a href="iniciov"><span class "primero" ><i class="icon icon-home"></i></span>Inicio</a></li>
            <li><a href="Tablaa"><span class "segundo" ><i class="icon icon-books"></i></span>Animales</a></li>
            <li><a href="Formulario22"><span class "tercero"><i class="icon icon-file-text"></i></span>Servicios</a></li>
            <li><a href="Formulario33"><span class "cuarto"><i class="icon icon-price-tag"></i></span>Acerca de</a></li>
            <li><a href="Formulario44"><span class "Quinto"><i class="icon icon-mail4"></i></span>Contacto</a></li>
        </ul>

    </nav>
    </header >

    <?php echo form_open("",array("id"=>"login_form3"));?> <!..<form>

                    <label for="nombre">Contactenos a los Correos:</label>
                    <label for="nombre">alejabarpa@gmail.com</label>
                    <label for="nombre">cristianmayorga20@gmail.com</label>
                    <label for="nombre">angiegodoy24@gmail.com</label>
                    <label for="nombre">zabisa24@gmail.com</label>
                     
<?php echo form_close();?>   <!..<form>..> 

    <div class="social">
            <ul>
                    <li><a href="http://www.facebook.com/crisstian.mayorga"  target="_blank"class="icon-facebook"></a></li>
                    <li><a href="http://www." class="icon-google"></a></li>
                    <li><a href="http://www." class="icon-youtube"></a></li>
                    <li><a href="http://www." class="icon-instagram"></a></li>

            </ul>

        </div>

</body>
</html>