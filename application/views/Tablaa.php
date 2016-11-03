<!DOCTYPE html>
<html>
<head>
	<title>Animales</title>
	<meta charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
    <?php echo link_tag("css/estilos/Ingreso.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/fonts.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
    <?php echo link_tag("css/estilos/tablecloth.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
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

	<center>
		<table bgcolor="white" border="3">
			<thead>
				<tr>
					<th colspan="10">Consulta de animales</th>
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

</body>
</html>