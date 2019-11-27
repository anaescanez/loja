<html>
    <head>
        <meta charset="UTF-8">
        <title>World of Books</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./publico/css/app.css">
        <script src="publico/js/funcoes.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <style>
      .mySlides {display:none;}
    </style>
    <body>
<?php if (acessoPegarPapelDoUsuario() == 'Adm') { ?>       
<h2 class="cadastroTitulo">Listar Produtos</h2>
       <div id="caixaListarProdutos"> 
           <table class="table">
            
            <thead>
                <th class="thTodos">ID PRODUTO</th>
                <th class="thTodos">ID CATEGORIA</th>
                <th class="thTodos">PREÇO</th>
                <th class="thTodos">NOME</th>
                <th class="thTodos">DESCRIÇÃO</th>
                <th class="thTodos">IMAGEM</th>
                <th class="thTodos">ESTOQUE M�?NIMO</th>
                <th class="thTodos">ESTOQUE M�?XIMO</th>
                <th class="thTodos">QUANTIDADE ESTOQUE</th>
                <th class="thTodos">VISUALIZAR</th>
                <th class="thTodos">DELETAR</th>
                <th class="thTodos">EDITAR</th>
        
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td class="tdTodos"><?=$produto['idproduto']?></td>
                 <td class="tdTodos"><?=$produto['idcategoria']?></td>
                <td class="tdTodos"><?=$produto['preco']?></td>
                <td class="tdTodos"><?=$produto['nomeproduto']?></td>
                <td class="tdTodos"><?=$produto['descricao']?></td>
                <td class="tdTodos"><img id="imgProduto" src="<?=$produto['imagem']?>" alt="imagem"></td>
                <td class="tdTodos"><?=$produto['estoque_minimo']?></td>
                <td class="tdTodos"><?=$produto['estoque_maximo']?></td>
                <td class="tdTodos"><?=$produto['quant_estoque']?></td>
                <td class="tdTodos"><a href="./produto/verAdm/<?=$produto['idproduto']?>">Ver</a></td>
                <td class="tdTodos"><a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a></td>
                <td class="tdTodos"><a href="./produto/editar/<?= $produto['idproduto'] ?>">Editar</a></td>
               
            </tr>
            <?php endforeach; ?>
        
        </table>
        
           
           <br><a href="./produto/adicionar" id="btnListar">Novo Produto</a>
        </div>
<?php } ?>

 
    </body>
</html>