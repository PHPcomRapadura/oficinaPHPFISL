<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Sistema FISL</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>

	<body>
		<div class="container">

			<header class="row">
				<div class="navbar navbar-inverse">
					
				</div> <!-- navbar -->
			</header>

			<section class="row">
				<div class="col-lg-3">
					<div class="list-group">
						<a href="?op=listar_produtos" class="list-group-item">Listar Produtos</a>
						<a href="?op=add_produtos" class="list-group-item">Adicionar Produtos</a>
					</div>
				</div>

				<div class="col-lg-9">
					<?php
						if(isset($_GET['msg'])){
							if($_GET['msg'] == "ok"){
								$msg = "Pronto, sua requisição foi feita com sucesso";
								$class = "success";
							}else{
								$msg = "Ops, houve um problema na requisição. Tente novamente.";
								$class = "danger";
							}
							include_once 'views/alert.php';
						}

						if(isset($_GET['op'])){
							switch($_GET['op']){
								case "listar_produtos":
									include_once 'controller/listar_produtos.php';
									break;

								case "add_produtos":
									include_once 'views/add_produto.php';
									break;					
							}
						}

					?>
				</div>
			</section>

		</div>
	</body>
</html>