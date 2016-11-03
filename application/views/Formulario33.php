<!DOCTYPE html>
<html lang="es">
<head>
    <title>Acerca De</title>
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
    </header>

    <?php echo form_open("",array("id"=>"login_form2"));?> <!..<form>

                    <label for="nombre">STREET`S ANIMALS Es desarrolado mediante un framework llamado "CodeIgniter" y con una base de datos "MySql".</label>
                    <label for="nombre">Desarrollado por:</label>
                    <label for="nombre">Angie Godoy</label>
                    <label for="nombre">Luisa Espinosa</label>
                    <label for="nombre">Jenny Barbosa</label>
                    <label for="nombre">Cristian Mayorga</label>
                    <label for="nombre">Universidad De Cundinamarca</label>
                    <label for="nombre">Ing. Sw-I  2016</label>
                     
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