<!DOCTYPE html>
<html lang="es">
<head>
    <title>index</title>
    <meta charset="utf-8">

    <link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
    <?php echo link_tag("css/estilos/Formulario1.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/fonts.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
        
</head>
 
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<header>
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
        <input style="background-color: #FF9900" value="Buscar" name="button" type="submit"/>

    </nav>
    </header>
    <div class="social">
            <ul>
                    <li><a href="http://www.facebook.com/crisstian.mayorga"  target="_blank"class="icon-facebook"></a></li>
                    <li><a href="http://www." class="icon-google"></a></li>
                    <li><a href="http://www." class="icon-youtube"></a></li>
                    <li><a href="http://www." class="icon-instagram"></a></li>

            </ul>

        </div>

    <?php echo form_open("",array("id"=>"login_form2"));?>
    <div>
        <h3>APADRINAR</h3>
                    <p>Si no puedes adoptar y deseas ayudar a un animal lo puedes apadrinar. Consiste en ofrecer un
                       aporte voluntario mensual para su sustento hasta el día en que sea adoptado. Con esto, el animal
                       que escojas, ya sea de la calle o de alguna fundación existente tendrá una buena calidad de vida
                       mientras encuentra un verdadero hogar.</p>

    </div>

    <?php echo form_close();?>   <!..<form>
    <img src="g.gif" width="600" height="450" alt="Hola" align="right" border="20">

    <?php echo form_open("",array("id"=>"login_form3"));?>
    <div>
        <h3>HISTORIA</h3>
                    <p>La asociacion defensora de animales de fusagasuga, es una entidad sin animo de lucro, creada por un grupo de personas que desde hace 8 años, rehabilitan perritos  de la calle o desprotegidos, de propietarios de bajos recursos, con la ayuda de veterinarios del municipio de fusagasuga,  despues de ser rehabilitados los perritos (as) de la calle, son entregados en adopcion a personas responsables, afectivas y que tengan espacio suficiente y ademas que se comprometen con la asociacion en brindarles un hogar, cariño, alimento , vacunas y cuidado veterinario en general. ademas las perritas se entregan operadas, para asi erradicar la sobrepoblacion.

                    Esta asociacion busca con su labor que mas personas de buen corazon como usted, se vincule y colabore con esta noble causa por el bien de los animales menos favorecidos.

                    Se necesitan utensillos, comida, medicamentos, articulos de aseo, auxilios para transporte y servicios, papeleria, vacunas.

                    eflexión: es objetivo de esta asociacion, recoger todos los perros de la calle, especialmente los del centro de fusagasuga y rehabilitarlos, pero no podemos solos, por esto acudimos a usted para que nos ayude. y asi dar una mejor imagen a nuestra cuidad.
                    </p>

    </div>

    <?php echo form_close();?>   <!..<form>
    
    </body>
	</html>