<?php  
	$con = mysqli_connect("localhost", "root", "", "codeigniter");
    $id=$_REQUEST['id'];

    $query="DELETE FROM animales WHERE id=$id";
    $resultado=$con->query($query);

    if($resultado){
      header("Location: Tabla");
  }else{
    echo "Frikis";
  }
?>