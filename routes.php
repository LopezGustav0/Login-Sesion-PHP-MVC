<?php
	//*** DECLARAR VARIABLES GLOBALES ***//
	$ruta_raiz = "http://127.0.0.1:8085/303/final";
	//*** ENRUTAMIENTO ***//
	//Recoger el valor enviado: modelo/accion
	$ruta = $_GET['ruta'];
	$ruta = explode('/', $ruta); //$ruta se convierte en un array
	//Leer el modelo.
	//"inicio" será el modelo predeterminado 
	$modelo = strlen($ruta[0])>0?$ruta[0]:"login";
	//Leer la accion.
	//"index" será la accion predeterminada
	$accion = isset($ruta[1])?$ruta[1]:"index";
	//Armar la ruta del controlador solicitado
	//Ejm: "productoAgregar.php"
	$controlador = "controllers/" . $modelo . $accion . ".php";
	//Armar la ruta del controlador predeterminado:
	//=>"inicioIndex.php"
	$controlador_default = "controllers/UsuarioInicio.php";
	//Verificar si existe el Archivo del Controlador
	if(file_exists($controlador))
	{
		//Cargar el controlador solicitado
		require_once($controlador);
	}
	else
	{
		//Cargar el controlador predeterminado
		require_once($controlador_default);
	}
?>