<?php
	include_once 'model/Conexao.php';
	include_once 'model/Produto.php';

	$produtos = Produto::buscar();

	include_once 'views/listar_produto.php';
?>