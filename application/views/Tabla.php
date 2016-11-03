<!DOCTYPE html>
<html>
<head>
	<title>Animales</title>
	<meta charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
    <?php echo link_tag("css/estilos/Ingreso.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/fonts.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/tablecloth.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">

<body>

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

	</nav>
    </header>

	<center>
		<table bgcolor="white" border="3">
			<thead>
				<tr>
					<th colspan="10" >Consulta de animales</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Genero</td>
					<td>Raza</td>
					<td>Edad</td>
					<td>Comportamiento</td>
					<td>Esterilizado</td>
					<td>Tamaño</td>
					<td>Recomendado</td>
					<td>Operacion</td>
				</tr>
			<?php 

			$con = mysqli_connect("localhost", "root", "", "codeigniter");

				$query="SELECT * FROM animales";
				$resultado= $con->query($query);
				while($row=$resultado->fetch_assoc()){

			?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['genero']; ?></td>
					<td><?php echo $row['raza']; ?></td>
					<td><?php echo $row['edad']; ?></td>
					<td><?php echo $row['comportamiento']; ?></td>
					<td><?php echo $row['esterilizado']; ?></td>
					<td><?php echo $row['tamano']; ?></td>
					<td><?php echo $row['recomendado']; ?></td>
					<td><a href="Eliminar?id=<?php echo $row['id']; ?>" >Eliminar</a></td>




				</tr>

			<?php
				}
			?>
			</tbody>
		</table>
	</center>

	<div class="social">
            <ul>
                    <li><a href="http://huellitas.social/"  target="_blank"class="icon-facebook"></a></li>
                    <li><a href="http://www." class="icon-google"></a></li>
                    <li><a href="http://www." class="icon-youtube"></a></li>
                    <li><a href="http://www." class="icon-instagram"></a></li>
                   

            </ul>


    </div>



    <?php 



    echo form_open("/php/reporte",array("id"=>"login_form"));?> <!..<form>

      <div align="center">
<input  id="bt_form" type="submit" value="Reportes"  name ="submit_reg" />


       
      </div>

  	<?=  validation_errors(); ?>
  	<?php echo form_close();?>   <!..<form>
  	
</body>
</html>