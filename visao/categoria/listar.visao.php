<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>
        <h2 class="cadastroTitulo">Listar Categoria</h2>
        <div id="caixaListarCategorias"> 
        <table class="table">
            <thead>
                <th class="thTodos">ID</th>
                <th class="thTodos">NOME</th>
                <th class="thTodos">VISUALIZAR</th>
                <th class="thTodos">DELETAR</th>
                <th class="thTodos">EDITAR</th>
            </thead>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td class="tdTodos"><?=$categoria['idcategoria']?></td>
                <td class="tdTodos"><?=$categoria['descricao']?></td>
                <td class="tdTodos"><a href="./categoria/ver/<?=$categoria['idcategoria']?>">Ver</a></td>
                <td class="tdTodos"><a href=" ./categoria/deletar/<?=$categoria['idcategoria']?>">Deletar</td>
                <td class="tdTodos"><a href="./categoria/editar/<?= $categoria['idcategoria'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </table>
            <br><br><a href="./categoria/adicionarCategoria" id="btnListar">Nova Categoria</a>
            </div>
        

        
    </body>
</html>

 