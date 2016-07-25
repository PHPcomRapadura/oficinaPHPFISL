<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Valor</th>
			<th>Quantidade</th>
			<th>Validade</th>
			<th>Opções</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach($produtos as $cada_prod){
			echo '<tr>';
			foreach($cada_prod as $cada_campo){
				echo '<td>',$cada_campo,'</td>';
			}
			echo '<td><a href="controller/excluir_produto.php?prod=',$cada_prod['id_produto'],'">Excluir</a></td>';
			echo '</tr>';
		}
		?>
	</tbody>
</table>