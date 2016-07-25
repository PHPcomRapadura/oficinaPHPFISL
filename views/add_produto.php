<form action="controller/inserir_produto.php" method="POST">
	<label>Nome</label>
	<input type="text" name="nome" placeholder="Digite o nome do produto" class="form-control" required>
	<br>

	<label>Valor</label>
	<input type="text" name="valor" placeholder="Digite o valor do produto" class="form-control" required>
	<br>

	<label>Quantidade</label>
	<input type="number" name="quantidade" placeholder="Digite a quantidade do produto" class="form-control" required>
	<br>

	<label>Data de Validade</label>
	<input type="text" name="validade" placeholder="Digite a validade do produto" class="form-control" required>
	<br>

	<button class="btn btn-primary btn-block btn-lg">
		Enviar
	</button>
</form>