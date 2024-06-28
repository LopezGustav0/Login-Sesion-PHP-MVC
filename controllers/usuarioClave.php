<?php
session_start();
if(!isset($_SESSION["usuario"])){
	//Redireccionar al inicio
	header("location: ".$GLOBALS['ruta_raiz']);
	exit();
}
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
	$clave='';
	$clave2='';
	//Armando la Vista
    require_once("views/head.php");
    require_once("views/usuario/miusuario.php");
    require_once("views/foot.php");
}
//Funcion responda POST
function metodoPOST()
{
	require_once("models/usuario.php");
	$objUsuario= new Usuario();
	$objUsuario=$objUsuario->getBuscarByUsuario($_SESSION["usuario"]);
	$clave=$_POST['txtClave'];
	$clave2=$_POST['txtClave2'];
	if (($clave==$clave2)&&($clave!="")) {
		$objUsuario->clave=password_hash($clave,PASSWORD_DEFAULT);
		$objUsuario->setActualizar($objUsuario);
		header("location: ".$GLOBALS['ruta_raiz']);	
	}else{
		require_once("views/head.php");
   		require_once("views/usuario/miusuario.php");
    	require_once("views/foot.php");	
	}
}
?>