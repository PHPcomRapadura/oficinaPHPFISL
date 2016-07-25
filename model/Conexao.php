<?php
class Conexao{
	private $servidor = "localhost";
	private $banco = "db_eventos_fisl";
	private $usuario = "root";
	private $senha = "livre";
	private $con; 

	public function abre_conexao(){
		$this->con = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco) or die(mysqli_error());
	}

	public function pega_conexao(){
		return $this->con;
	}

	public function fecha_conexao(){
		mysqli_close($this->con);
		$this->con = false;
	}
}

?>

