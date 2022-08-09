<?php

class Usuario{

public $nombre;
public $apellido;
public $edad;
public $usuario;
public $contraseña;


 

  public function __construct()
   {

   	  require 'configuracion/variables.php';
  
             try 
             {
                 $this->conectar = new PDO('mysql:host=localhost;dbname=' . $basedatos, $usuario);
                 echo "CONEXION EXITOSA";
                 echo "";
                 
             } catch (Exception $e) {
                echo "NO EXISTE LA BASE DE DATOS";
            }
       
   }



public function validarUsuario($usuario,$contraseña){

$sentencia = $this->conectar->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'");

  if($sentencia==($usuario) && ($sentencia==($contraseña))){
  
        echo "Ingreso Valido";
  		header ("location: index.php");

  	}else{

  		echo "Ingreso denegado";
  	}



  }




public function setNombre($nombre){

	$this -> nombre=$nombre;
}

public function getNombre(){

	return $this -> nombre;
}

public function setApellido($apellido){

	$this -> apellido=$apellido;
}

public function getApellido(){

	return $this -> apellido;
}


public function setEdad($edad){

	$this -> edad=$edad;
}

public function getEdad(){

	return $this -> edad;
}


public function setUsuario($usuario){

	$this -> usuario=$usuario;
}

public function getUsuario(){

	return $this -> usuario;
}


public function setContraseña($contraseña){

	$this -> contraseña=$contraseña;
}

public function getContraseña(){

	return $this -> contraseña;
}




}


?>