<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <br><h2 class="cadastroTitulo">Listar Produtos por Categoria</h2>
        <table class="table" id="CaixaListarPorCategoria">
	<thead>
		<tr>
			<th class="thTodos">Nome</th>
			<th class="thTodos">Categoria</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td class="tdTodos"><?=$produto['nomeproduto']?></td>
                            <td class="tdTodos"><?=$produto['categoria']?></td>
			</tr>
		<?php endforeach; ?>
        </table>    
    </body>
</html>
