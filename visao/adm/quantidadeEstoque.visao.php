
<html>
<body>
    
  <h2 class="cadastroTitulo">Listar Produtos e Quantidade</h2>
<table class="table" id="CaixaListarQuantEstoque">
	<thead>
		<tr>
			<th class="thTodos">Nome</th>
			<th class="thTodos">Estoque</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td class="tdTodos"><?=$produto['nomeproduto']?></td>
                            <td class="tdTodos"><?=$produto['quant_estoque']?></td>
			</tr>
		<?php endforeach; ?>
</table> 
    
</body>
</html>


