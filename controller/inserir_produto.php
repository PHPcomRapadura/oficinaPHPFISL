<?php
	include_once dirname(__DIR__).'/model/Produto.php';

	Produto::inserir($_POST);

	header("location: ../index.php?msg=ok");

?>