<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
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
					<th colspan="10">Consulta de Usuarios</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Usuario</td>
					<td>Password</td>
					<td>Telefono</td>
					<td>Operacion</td>
				</tr>
			<?php 

			$con = mysqli_connect("localhost", "root", "", "codeigniter");

				$query="SELECT * FROM usuarios";
				$resultado= $con->query($query);
				while($row=$resultado->fetch_assoc()){

			?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['Nombre']; ?></td>
					<td><?php echo $row['Usuario']; ?></td>
					<td><?php echo $row['Password']; ?></td>
					<td><?php echo $row['Telefono']; ?></td>
					<td><a href="Eliminar2?id=<?php echo $row['id']; ?>" >Eliminar</a></td>
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