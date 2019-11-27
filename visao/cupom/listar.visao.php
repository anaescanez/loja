<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        <h2 class="cadastroTitulo">Listar Cupom</h2>
        <div id="caixaListarCupom"> 
        <table class="table">
            <thead>
                <th class="thTodos">ID</th>
                <th class="thTodos">NOME DO CUPOM</th>
                <th class="thTodos">DESCONTO</th>
                <th class="thTodos">VISUALIZAR</th>
                <th class="thTodos">DELETAR</th>
                <th class="thTodos">EDITAR</th>
            </thead>
            <?php foreach ($cupons as $cupom): ?>
            <tr>
                <td class="tdTodos"><?=$cupom['idcupom']?></td>
                <td class="tdTodos"><?=$cupom['nomecupom']?></td>
                <td class="tdTodos"><?=$cupom['desconto']?></td>
                <td class="tdTodos"><a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a></td>
                <td class="tdTodos"><a href=" ./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</td>
                <td class="tdTodos"><a href="./cupom/editar/<?= $cupom['idcupom'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </table>
            
             <br><a href="./cupom/adicionarCupom" id="btnListar">Novo Cupom</a>
            </div>
        
       
        
    </body>
</html>