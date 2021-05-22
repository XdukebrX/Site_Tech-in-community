<?php
class Conexao extends PDO {
	private $banco = 'tcc';
	private $user = 'root';
	private $password = '';
	
	function __construct() {
		$dsn = 'mysql:host=localhost;dbname='.$this->banco;
		$options = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];
		try {
			parent::__construct($dsn, $this->user, $this->password, $options);
		}
		catch(PDOException $e) {
			file_put_contents('erros.txt', $e->getMessage()."\r\n", FILE_APPEND);
		}
	}
}

?>