<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
     <title>Login</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <link href='http://fonts.googleapis.com/css?family=Hammersmith+One'rel='stylesheet'type='text/css'>
    <?php echo link_tag("css/estilos/Ingreso.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">
     <?php echo link_tag("css/estilos/Login.css"); ?> <!.. <link rel="stylesheet" type="text/css" href="">    
</head>

<body>

<nav>
        <ul>
             <li><a href="iniciovi"><span class "primero" ><i class="icon icon-home"></i></span>Inicio</a></li>
            <li><a href="Formulario2"><span class "segundo"><i class="icon icon-file-text"></i></span>Servicios</a></li>
            <li><a href="Formulario3"><span class "tercero"><i class="icon icon-price-tag"></i></span>Acerca de</a></li>
            <li><a href="Formulario4"><span class "cuarto"><i class="icon icon-mail4"></i></span>Contacto</a></li>
        </ul>

    </nav>

<?php echo form_open("Inicio/Login/",array("id"=>"login_form"));?>

<label>Usuario</label>
<input type="text" name="maillogin" class="input" value="<?= set_value('maillogin'); ?>" size="25" />
<label>Contraseña</label>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<input type="password" name="passwordlogin" class="input" value="<?= set_value('passwordlogin'); ?>" size="25" />

<input type="submit" value="Iniciar Sesion" id="bt_form" name="submit"/>
<input type="button" value="Registrarse" id="bt_form2" name="submit_reg" onclick = "location='/Proyecto/Inicio/Ingreso'"/>
<?php echo form_close();?>   <!..<form>..>

</body>
</html> 