<?php
require_once dirname(__DIR__).'/model/Conexao.php';

class Produto extends Conexao{
	public static function inserir($dados){
		$query = "INSERT INTO tb_produto";
		$query .= "(produto_nome, produto_valor, produto_quantidade, produto_validade)";
		$query .= "VALUES(";
		$query .= "'".$dados['nome']."', ";
		$query .= "'".$dados['valor']."', ";
		$query .= "'".$dados['quantidade']."', ";
		$query .= "'".$dados['validade']."'";
		$query .= ");";

		$con = new Conexao();
		$con->abre_conexao();
		//inserindo
		mysqli_query($con->pega_conexao(), $query);

		$con->fecha_conexao();

		return true;
	}

	public static function buscar(){
		$query = "SELECT * FROM tb_produto";

		$con = new Conexao();
		$con->abre_conexao();


		$resultado = mysqli_query($con->pega_conexao(), $query);

		if($resultado){
			$produtos = array();
			while($registro = mysqli_fetch_assoc($resultado)){
				$produtos[] = $registro;
			}
		}

		$con->fecha_conexao();

		return $produtos;
	}

	public static function excluir($id){
		$query = "DELETE FROM tb_produto ";
		$query .= " WHERE id_produto='$id'";

		$con = new Conexao();
		$con->abre_conexao();

		mysqli_query($con->pega_conexao(), $query);

		$con->fecha_conexao(); 

		return true;
	} 
}
?>