<?php
    require_once("conexion.php");
    class Usuario{
        public $usuario;
        public $nombre;
        public $apellidos;
        public $email;
        public $clave;
        public function setInsertar($objUsuario){
            $conexion = Conexion :: getConectarMySQL();
            $sentencia = $conexion->prepare("insert into usuarios
            (usuario, nombre, apellidos, email, clave) 
            values(:usuario, :nombre, :apellidos,:email, :clave);");
            $sentencia->bindValue(":usuario",$objUsuario->usuario);
            $sentencia->bindValue(":nombre",$objUsuario->nombre);
            $sentencia->bindValue(":apellidos",$objUsuario->apellidos);
            $sentencia->bindValue(":email",$objUsuario->email);
            $sentencia->bindValue(":clave",$objUsuario->clave);
            $sentencia->execute();
        }
        public function setActualizar($objUsuario){
            $conexion = Conexion :: getConectarMySQL();
            $sentencia = $conexion->prepare("update usuarios set clave=:clave 
            where usuario=:usuario;");
            $sentencia->bindValue(":clave",$objUsuario->clave);
            $sentencia->bindValue(":usuario",$objUsuario->usuario);
            $sentencia->execute();
        }
        public function getBuscarByUsuario($usuario) {
            $conexion = Conexion::getConectarMySQL();
            $sentencia = $conexion->prepare("select * from usuarios where 
            usuario=:usuario;");
            $sentencia->bindValue(":usuario", $usuario);
            $sentencia->execute();
            $fila = $sentencia->fetch();
            if ($fila === false) {
                // Manejo del caso en que no se encuentra el usuario
                return null;
            }
    
            $this->usuario = $fila['usuario'];
            $this->unombre = $fila['nombre'];
            $this->apellidos = $fila['apellidos'];
            $this->email = $fila['email'];
            $this->clave = $fila['clave'];
            return $this;
        }
    }

?>