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
	//Armando la Vista
    require_once("views/head.php");
    require_once("views/usuario/ayuda.php");
    require_once("views/foot.php");
}
//Funcion responda POST
function metodoPOST()
{
}
?>