<?php 
class Conexion{
	private static $conexion;

	public static function abrirConexion(){
     if (!isset(self::$conexion))
     	try{
          include_once 'config.php';
          self::$conexion = new PDO('pgsql::host='NOMBRE_SERVIDOR';
          	dbname= BASE_DE_DEATOS', NOMRE_USUARIO,PASSWORD);
          self::$conexion->setAttribute(PDO::ATTR_ERROR, PDO::ERRORMODE_EXEPTIO);
          self::$conexion->exec('SET CHARACTER SET UTF8');
     	}
     	catch(PDOException $ex){
           print "ERROR".$ex->getMessage(). "<br>";
     	}

	}
}
	 public static function cerrarConexion(){
          if (isset(self::$conexion)) {
             self::$conexion = null;
          }
	 }

	 public static function obtenerConexion(){
	 	if (isset(self::$conexion)) {
	 		echo "conexion establecida";
	 	}else{
	 		echo "no se pudo conectar a la bade de datos";
	 	}
	 	//return self::$conexion;
	 }
}
      Conexion::abrirConexion();
      Conexion::obtenerConexion();
?>