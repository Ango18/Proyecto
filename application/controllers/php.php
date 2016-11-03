<?php

class Php extends CI_Controller 
{
    /*function _construct()
    {
        parent::_construct(); 
        $this->load->library('form_validation');
    }*/
    

    
    function registrado()
    {
        if((isset($_POST['id']))&& !empty($_POST['id'])&&
            isset($_POST['nombre'])&& !empty($_POST['nombre'])&&
            isset($_POST['telefono'])&& !empty($_POST['telefono'])&&
            isset($_POST['user'])&& !empty($_POST['user'])&&
            isset($_POST['pass'])&& !empty($_POST['pass'])){
        
 $con = mysqli_connect("localhost", "root", "", "codeigniter");
       if(mysqli_connect_errno())
       {
        echo "No se pudo conectar a la base de datos".mysqli_connect_error();
       }

       $id =  mysqli_real_escape_string($con, $_POST['id']);
       $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
       $telefono = mysqli_real_escape_string($con,  $_POST['telefono']);
       $usuario =  mysqli_real_escape_string($con, $_POST['user']);
       $contraseña = mysqli_real_escape_string($con,  $_POST['pass']);
       


       $sql="INSERT INTO usuarios (id, Nombre, Telefono, Usuario, Password) VALUES ('$id','$nombre','$telefono','$usuario','$contraseña')";
       if(!mysqli_query($con,$sql))
       {
        die('Ya existe un usuario con esta cedula');
       }else{
       echo "Guardado correctamente";
       
       }
       
       echo "<a href='/Proyecto/Inicio/Ingreso' > Volver Al Menu </a>";
     
    }
else
{

  echo "Debes llenar todos los campos.";
  echo "<a href='/Proyecto/Inicio/Ingreso' > Volver Al Menu </a>";
}
        
        
    }


    function registrado2()
    {
        if((isset($_POST['id']))&& !empty($_POST['id'])&&
            isset($_POST['nombre'])&& !empty($_POST['nombre'])&&
            isset($_POST['telefono'])&& !empty($_POST['telefono'])&&
            isset($_POST['user'])&& !empty($_POST['user'])&&
            isset($_POST['pass'])&& !empty($_POST['pass'])){
        
       $con = mysqli_connect("localhost", "root", "", "codeigniter");
       if(mysqli_connect_errno())
       {
        echo "No se pudo conectar a la base de datos".mysqli_connect_error();
       }

       $id =  mysqli_real_escape_string($con, $_POST['id']);
       $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
       $telefono = mysqli_real_escape_string($con,  $_POST['telefono']);
       $usuario =  mysqli_real_escape_string($con, $_POST['user']);
       $contraseña = mysqli_real_escape_string($con,  $_POST['pass']);
       


       $sql="INSERT INTO usuarios (id, Nombre, Telefono, Usuario, Password) VALUES ('$id','$nombre','$telefono','$usuario','$contraseña')";
       if(!mysqli_query($con,$sql))
       {
        die('Ya existe un usuario con esta cedula');
       }else{
       echo "Guardado correctamente";
       }
       
       echo "<a href='/Proyecto/Inicio/index' > Volver Al Menu </a>";
     
    }
else
{

  echo "Debes llenar todos los campos.";
  echo "<a href='/Proyecto/Inicio/Formulario1_1' > Volver Al Menu </a>";
}
        
        
    }

    function registro_perro()
    {
        if((isset($_POST['id']))&& !empty($_POST['id'])&& 
            isset($_POST['nombre'])&& !empty($_POST['nombre'])&&
            isset($_POST['genero'])&& !empty($_POST['genero'])&&
            isset($_POST['raza'])&& !empty($_POST['raza'])&&
            isset($_POST['edad'])&& !empty($_POST['edad'])&&
            isset($_POST['comportamiento'])&& !empty($_POST['comportamiento'])&&
            isset($_POST['esterilizado'])&& !empty($_POST['raza'])&&
            isset($_POST['tamano'])&& !empty($_POST['tamano'])&&
            isset($_POST['recomendado'])&& !empty($_POST['recomendado'])){
        
       $con = mysqli_connect("localhost", "root", "", "codeigniter");
       if(mysqli_connect_errno())
       {
        echo "No se pudo conectar a la base de datos".mysqli_connect_error();
       }

       $id = mysqli_real_escape_string($con,  $_POST['id']);
       $nombre =  mysqli_real_escape_string($con, $_POST['nombre']);
       $genero = mysqli_real_escape_string($con,  $_POST['genero']);
       $raza = mysqli_real_escape_string($con, $_POST['raza']);
       $edad = mysqli_real_escape_string($con,  $_POST['edad']);
       $comportamiento = mysqli_real_escape_string($con, $_POST['comportamiento']);
       $esterilizado = mysqli_real_escape_string($con, $_POST['esterilizado']);
       $tamano = mysqli_real_escape_string($con, $_POST['tamano']);
       $recomendado = mysqli_real_escape_string($con, $_POST['recomendado']);


       $sql="INSERT INTO animales (id,nombre,genero,raza,edad,comportamiento,esterilizado,tamano,recomendado) VALUES ('$id','$nombre','$genero','$raza','$edad','$comportamiento','$esterilizado','$tamano','$recomendado')";
       if(!mysqli_query($con,$sql))
       {
        die('Ya existe un animal con este id');
       }else{
       echo "Guardado correctamente";
       //$this->load->view('login');
       }
       
       
       echo "<a href='/Proyecto/Inicio/index' > Volver Al Menu </a>";
     
    }
else
{

  echo "Debes llenar todos los campos.";
  echo "<a href='/Proyecto/Inicio/Formulario1' > Volver Al Menu </a>";
}  
}      

function adopcion()
    {
        if((isset($_POST['cod']))&& !empty($_POST['cod'])&& 
            isset($_POST['cedula'])&& !empty($_POST['cedula'])&&
            isset($_POST['id'])&& !empty($_POST['id'])&&
            isset($_POST['direccion'])&& !empty($_POST['direccion'])&&
            isset($_POST['oficio'])&& !empty($_POST['oficio'])){
        
       
 $con = mysqli_connect("localhost", "root", "", "codeigniter");
       if(mysqli_connect_errno())
       {
        echo "No se pudo conectar a la base de datos".mysqli_connect_error();
       }

       $cod =  mysqli_real_escape_string($con, $_POST['cod']);
       $cedula = mysqli_real_escape_string($con,  $_POST['cedula']);
       $id = mysqli_real_escape_string($con,  $_POST['id']);
       $direccion = mysqli_real_escape_string($con,  $_POST['direccion']);
       $oficio = mysqli_real_escape_string($con,  $_POST['oficio']);


       $sql="INSERT INTO adopcion (cod,cedula,id,direccion,oficio) VALUES ('$cod','$cedula','$id','$direccion','$oficio')";
       if(!mysqli_query($con,$sql))
       {
        die('Este animal ya ha sido adoptado');
       }else{
       echo "Guardado correctamente";
       }
       
       
       echo "<a href='/Proyecto/Inicio/index' > Volver Al Menu </a>";
     
    }
else
{

  echo "Debes llenar todos los campos.";
  echo "<a href='/Proyecto/Inicio/Adopcion' > Volver Al Menu </a>";
}  
}



function donacion()
    {
        if((isset($_POST['cod']))&& !empty($_POST['cod'])&& 
            isset($_POST['cedula'])&& !empty($_POST['cedula'])&&
            isset($_POST['id'])&& !empty($_POST['id'])&&
            isset($_POST['descripcion'])&& !empty($_POST['descripcion'])&&
            isset($_POST['oficio'])&& !empty($_POST['oficio'])){
        
    $con = mysqli_connect("localhost", "root", "", "codeigniter");
       if(mysqli_connect_errno())
       {
        echo "No se pudo conectar a la base de datos".mysqli_connect_error();
       }

       $cod =  mysqli_real_escape_string($con, $_POST['cod']);
       $cedula = mysqli_real_escape_string($con,  $_POST['cedula']);
       $id = mysqli_real_escape_string($con,  $_POST['id']);
       $descripcion = mysqli_real_escape_string($con,  $_POST['descripcion']);
       $oficio = mysqli_real_escape_string($con,  $_POST['oficio']);


       $sql="INSERT INTO donacion (cod,cedula,id,descripcion,oficio) VALUES ('$cod','$cedula','$id','$descripcion','$oficio')";
       if(!mysqli_query($con,$sql))
       {
        die('Este numero de registro ya ha sido guardado');
       }else{
       echo "Guardado correctamente";
       }
       
       
       echo "<a href='/Proyecto/Inicio/index' > Volver Al Menu </a>";
     
    }
else
{

  echo "Debes llenar todos los campos.";
  echo "<a href='/Proyecto/Inicio/Donacion' > Volver Al Menu </a>";
} 
}


function reporte(){
 
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls" );



?>
<HTML LANG="es">
<TITLE>::. Exportacion de Datos .::</TITLE>
</head>
<body>
<?php
$NombreBD = "codeigniter";
$Servidor = "localhost";
$Usuario = "root";
$Password ="";
$con = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $con);
$sql = "SELECT *FROM animales";
$result=mysql_query($sql,$con);
  
?>

<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>ID</TD>
<TD>NOMBRE</TD>
<TD>GENERO</TD>
<TD>RAZA</TD>
<TD>EDAD</TD>
<TD>COMPORTAMIENTO</TD>
<TD>ESTERELIZADO</TD>
<TD>TAMAÑO</TD>
<TD>RECOMENDADO</TD>

</TR>
<?php

while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>

</tr>", $row["id"],$row["nombre"],$row["genero"],$row["raza"], $row["edad"],$row["comportamiento"],$row["esterilizado"],$row["tamano"],$row["recomendado"]);
}
mysql_free_result($result);
mysql_close($con); //Cierras la Conexión




}


	

}
?>


