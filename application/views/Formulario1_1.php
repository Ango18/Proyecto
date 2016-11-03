<!doctype html>
<html>
<head>
     <title>Formulario</title>
     <meta charset="UTF-8">
     <link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
     <?php echo link_tag("css/estilos/Ingreso.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/fonts.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
     
 
</head>
<body>

<nav>
    <ul>
        <li><a href="index"><span class "primero" ><i class="icon icon-home"></i></span>Inicio</a></li>
            <li><a href="#"><span class "segundo" ><i class="icon icon-books"></i></span>Animales</a>
                 <ul>
                  <li><a href="Formulario1">Registrar</a></li>
                  <li><a href="Tabla">Consultar</a></li>
                 </ul>     
        </li>
        <li><a href="#"><span class "tercero"><i class="icon icon-file-text"></i></span>Usuarios</a>
              <ul>
                  <li><a href="Formulario1_1">Registrar</a></li>
                  <li><a href="Tabla2">Consultar</a></li>
              </ul> 
        </li>
        <li><a href="Donacion"><span class "cuarto"><i class="icon icon-price-tag"></i></span>Donacion</a></li>
        <li><a href="Adopcion"><span class "Quinto"><i class="icon icon-mail4"></i></span>Adopcion</a></li>
    </nav>

    <div align="center">
        <h1>REGISTRO USUARIO</h1>
    </div>

   <?php echo form_open("/php/registrado2",array("id"=>"login_form"));?> <!..<form>
   <!-- <form id="form-login" action="#" method="post" >-->

    <form name ="form_reg" action="<?= base_url().'Login/Ingreso_very' ?>" method="POST">

                    <label for="id">Cedula:</label>
                    <input name="id" type="text" class="input" placeholder="# Documento"/ >
                    <label for="nombre">Nombre:</label>
                    <input name="nombre" type="text" class="input" placeholder="Pon tu nombre"/ >
                    <label for="telefono">Telefono:</label>
                    <input name="telefono" type="text" class="input" placeholder="Pon tu telefono" />
                    <label for="usuario">Usuario:</label>
                    <input name="user" type="text" class="input" placeholder="Pon tu mail" />
                    <label for="contraseña">Contraseña:</label>
                    <input name="pass" type="password" class="input" placeholder="Pon tu contraseña"/ >
                    <p>
                                                            
                  <input  id="bt_form" type="submit" value="Registrar"  name ="submit_reg" />
                  <!--<input type="button" value="enviar" name="submit_reg" onclick = "location='/Login/Ingreso_very'"/>-->
                  <input id="bt_form2" type="button" value="Cancelar" name ="submit_reg" onclick = "location='/Proyecto/Inicio/index'"/>              


    </form>
                <hr />
                <?=  validation_errors(); ?>

    <?php echo form_close();?>   <!..<form> 
    
    <div class="social">
            <ul>
                    <li><a href="http://huellitas.social/"  target="_blank"class="icon-facebook"></a></li>
                    <li><a href="http://www." class="icon-google"></a></li>
                    <li><a href="http://www." class="icon-youtube"></a></li>
                    <li><a href="http://www." class="icon-instagram"></a></li>

            </ul>

    </div>  

</body>

</html>

