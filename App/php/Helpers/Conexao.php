<?php



define('ERROR_DEBUG',true);

define('DRIVER','mysql');
define('HOST','localhost');
define('DB_NAME','vendas');
define('USERNAME','root');
define('PASSWORD','');

class Conexao{
	public static function conectar(){
		$conn = new PDO(DRIVER.':host='.HOST.';dbname='.DB_NAME,USERNAME,PASSWORD);
		return $conn;
	}
}
?> 