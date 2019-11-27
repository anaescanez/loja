<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        
<h2 class="cadastroTitulo">Listar Endereços</h2>
       <div id="caixaListarEnderecos"> 
        <table class="table">
            
            <thead>
                <th class="thTodos">ID</th>
                <th class="thTodos">LOGRADOURO</th>
                <th class="thTodos">NÚMERO</th>
                <th class="thTodos">COMPLEMENTO</th>
                <th class="thTodos">BAIRRO</th>
                <th class="thTodos">CIDADE</th>
                <th class="thTodos">CEP</th>
                <th class="thTodos">VISUALIZAR</th>
                <th class="thTodos">DELETAR</th>
                <th class="thTodos">EDITAR</th>
            </thead>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td class="tdTodos"><?=$endereco['idendereco']?></td>
                <td class="tdTodos"><?=$endereco['logradouro']?></td>
                <td class="tdTodos"><?=$endereco['numero']?></td>
                <td class="tdTodos"><?=$endereco['complemento']?></td>
                <td class="tdTodos"><?=$endereco['bairro']?></td>
                <td class="tdTodos"><?=$endereco['cidade']?></td>
                <td class="tdTodos"><?=$endereco['cep']?></td>
                <td class="tdTodos"><a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a></td>
                <td class="tdTodos"><a href="./endereco/deletar/<?=$endereco['idendereco']?>/<?=$endereco['idusuario']?>">Deletar</a></td>
                <td class="tdTodos"><a href="./endereco/editar/<?= $endereco['idendereco'] ?>/<?=$endereco['idusuario']?>">Editar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
   
 </body>
</html>
