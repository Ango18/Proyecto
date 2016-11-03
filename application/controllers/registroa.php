<?php

class Registroa extends CI_controller {   
        
    function registro_perro(){
        if((isset($_POST['nombre']))&& !empty($_POST['nombre'])&& 
            isset($_POST['edad'])&& !empty($_POST['edad'])&&
            isset($_POST['raza'])&& !empty($_POST['raza'])){
 $con = mysqli_connect("localhost", "root", "", "codeigniter");
    if(mysqli_connect_errno())
    {
        echo "No se pudo conectar a la base de datos".mysqli_connect_error();
       }

       $nombre =  mysqli_real_escape_string($con, $_POST['nombre']);
       $edad = mysqli_real_escape_string($con,  $_POST['edad']);
       $raza = mysqli_real_escape_string($con, $_POST['raza']);
       


       $sql="INSERT INTO perros (Nombre, Edad, Raza) VALUES ('$nombre','$edad','$raza')";
       if(!mysqli_query($con,$sql))
       {
        die('Error: ' .msql_error($con));
       }else{
       echo "Guardado correctamente";
       //$this->load->view('login');
       }
       
       
       echo "<a href='Inicio' > Volver Al Menu </a>";
     
    }else{

	  echo "Debes llenar todos los campos.";
	  echo "<a href='Formulario1' > Volver Al Menu </a>";
	}  
}      

?>  