<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
       <h2 class="cadastroTitulo">Listar Pedidos por Data</h2>
    <table class="table" id="CaixaListarData">
	<thead>
		<tr>
			<th class="thTodos">Data da Compra</th>
			<th class="thTodos">Total</th>
		</tr>
	</thead>
		<?php foreach ($adm as $data): ?>
			<tr>
                            <td class="tdTodos"><?=$data['Data']?></td>
                            <td class="tdTodos"><?=$data['total']?></td>
			</tr>
		<?php endforeach; ?>
	</div>
    </table> 
       <br>     
    </body>
</html>
