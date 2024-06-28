<?php
//Controlar el Tipo de Solicitud
switch($_SERVER['REQUEST_METHOD']) 
{
	case 'GET':
		metodoGET();
		break;
	case 'POST':
		metodoPOST();
		break;
}
//Funcion responda GET
function metodoGET()
{
	$usuario="";
	$nombre="";
	$apellidos="";
	$email="";
	$clave="";
	$clave2="";
	$verificar="";
	//Armando la Vista
    require_once("views/registro.php");
}
//Funcion responda POST
function metodoPOST()
{
	require_once("models/usuario.php");
	$objUsuario= new Usuario();
	$usuario=$_POST['txtUsuario'];
	$nombre=$_POST['txtNombre'];
	$apellidos=$_POST['txtApellidos'];
	$email=$_POST['txtEmail'];
	$clave=$_POST['txtClave'];
	$clave2=$_POST['txtClave2'];
	if ($clave==$clave2) {
		$objUsuario->usuario=$usuario;
        $objUsuario->nombre=$nombre;
        $objUsuario->apellidos=$apellidos;
        $objUsuario->email=$email;
        $objUsuario->clave= password_hash($clave,PASSWORD_DEFAULT);
		$objUsuario->setInsertar($objUsuario);
		header("location: ".$GLOBALS['ruta_raiz']);
	}else{
		require_once("views/registro.php");
		$verificar= "contraseñas no coinciden :C";	
	}
}


?>