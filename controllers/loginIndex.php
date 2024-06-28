<?php
session_start();

//Si existe una sesion
if(isset($_SESSION["usuario"]))
{//Redireccionar al inicio
	header("location: ".$GLOBALS['ruta_raiz']."/usuario/Inicio");
	exit();
}//Controlar el Tipo de Solicitud
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
	$usuario = '';
	$clave = '';
	$verificar="";
	//Armando la Vista
    require_once("views/login.php");
}
//Funcion responda POST
function metodoPOST()
{
	require_once("models/usuario.php");
	$objUsuario = new Usuario();
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		//Leer las variable
		$usuario = $_POST['txtUsuario'];
		$clave = $_POST['txtClave'];
		$objUsuario = $objUsuario->getBuscarByUsuario($usuario);
		//Verificar si el usuario existe
		if($objUsuario){
			if(password_verify($clave, $objUsuario->clave)){
			   //Crear la variable de sesion
				$_SESSION['usuario'] = $usuario;
				header("Location: ".$GLOBALS['ruta_raiz']."/usuario/Inicio");
			}else{
				$usuario = $objUsuario->usuario;
				$clave = $_POST['txtClave'];
				$verificar = "Contraseña <br> incorrecta";
				//Armando la Vista
				require_once("views/login.php");
			}
		}else{
			$usuario = "Usuario Incorrecto";
			$clave = $_POST['txtClave'];
			$verificar = "";
			//Armando la Vista
			require_once("views/login.php");
		}
	}
}?>