<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <br><h2 class="cadastroTitulo">Lista de pedidos por município</h2>
        <div id="caixaListarCidade">        
            <table class="table" class="cadastroTitulo">
	<thead>
		<tr>
			<th class="thTodos">Cidade</th>
			<th class="thTodos">Quantidade de Pedidos</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($adm as $pedido): ?>
			<tr>
                            <td class="tdTodos"><?=$pedido['cidade']?></td>
                            <td class="tdTodos"><?=$pedido['quantidade']?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
            </table>
        </div>
        
        
    </body>
</html>
