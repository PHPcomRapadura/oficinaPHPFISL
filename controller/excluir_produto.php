<?php
	include_once dirname(__DIR__).'/model/Produto.php';

	$id = $_GET['prod'];

	Produto::excluir($id);

	header("location: ../index.php?op=listar_produtos&msg=ok");
?>