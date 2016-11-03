<!doctype html>
<html lang="es">
<head>
     <title>Formulario</title>
     <meta charset="UTF-8">
     <link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
     <?php echo link_tag("css/estilos/Registroa.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
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
        <h1>REGISTRO ANIMAL</h1>
    </div>

   <?php echo form_open("/php/registro_perro",array("id"=>"login_form"));?> <!..<form>
   <!-- <form id="form-login" action="#" method="post" >-->

    <form name ="form_reg" action="<?= base_url().'Login/Ingreso_very' ?>" method="POST">
                    <label for="id">Identificador:</label>
                    <input name="id" type="text" class="input" placeholder="Asigna un id"/ >
                    <label for="nombre">Nombre:</label>
                    <input name="nombre" type="text" class="input" placeholder="(Nombre o apodo)" />
                    <label for="genero">Genero:</label>
                    <input name="genero" type="text" class="input" placeholder="(Hembra/macho)" />
                    <label for="raza">Raza:</label>
                    <input name="raza" type="text" class="input"/ >
                    <label for="edad">Edad:</label>
                    <input name="edad" type="text" class="input"/ >
                    <label for="comportamiento">Comportamiento:</label>
                    <input name="comportamiento" type="text" class="input" / >
                    <label for="esterilizado">Esterilizado:</label>
                    <input name="esterilizado" type="text" class="input" placeholder="(Si/No)" / >
                    <label for="tamano">Tamaño:</label>
                    <input name="tamano" type="text" class="input" placeholder="(Pequeño/Mediano/Grande)" / >
                    <label for="recomendado">Recomendado:</label>
                    <input name="recomendado" type="text" class="input" / >
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
                    <li><a href="http://www.facebook.com/crisstian.mayorga"  target="_blank"class="icon-facebook"></a></li>
                    <li><a href="http://www." class="icon-google"></a></li>
                    <li><a href="http://www." class="icon-youtube"></a></li>
                    <li><a href="http://www." class="icon-instagram"></a></li>

            </ul>

        </div>

</body>
</html>