<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body>
        <h2 class="cadastroTitulo">Listar Forma de Pagamento</h2>
        <div id="caixaListarFormaPagamento"> 
        <table class="table">
            <thead>
                <th class="thTodos">ID</th>
                <th class="thTodos">DESCRIÇÃO</th>
                <th class="thTodos">VISUALIZAR</th>
                <th class="thTodos">DELETAR</th>
                <th class="thTodos">EDITAR</th>
            </thead>
            <?php foreach ($formapagamentos as $formapagamento): ?>
            <tr>
                <td class="tdTodos"><?=$formapagamento['idformapagamento']?></td>
                <td class="tdTodos"><?=$formapagamento['descricao']?></td>
                <td class="tdTodos"><a href="./formapagamento/ver/<?=$formapagamento['idformapagamento']?>">Ver</a></td>
                <td class="tdTodos"><a href=" ./formapagamento/deletar/<?=$formapagamento['idformapagamento']?>">Deletar</td>
                <td class="tdTodos"><a href="./formapagamento/editar/<?= $formapagamento['idformapagamento'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </table>
            
            <br><a href="./formapagamento/adicionarFormapagamento" id="btnListar">Nova Forma de Pagamento</a>
            </div>
        
    </body>
</html>

 