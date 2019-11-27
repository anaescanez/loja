<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>
<h2 class="cadastroTitulo">Ver detalhes do produto</h2>
<div id="visualizarProduto">
<img id="imgProdutoV" src="<?=$produto['imagem']?>" alt="imagem">
<div id="caixaProdVer" style="margin-top: 3%;">
<p style="margin-left: 3%;">Id Produto: <?= $produto['idproduto'] ?></p>
<p style="margin-left: 3%;">Id Categoria: <?= $produto['idcategoria'] ?></p>
<p style="margin-left: 3%;">Preço: <?= $produto['preco'] ?></p>
<p style="margin-left: 3%;">Nome: <?= $produto['nomeproduto'] ?></p>
<p style="margin-left: 3%;">Estoque Mínimo: <?= $produto['estoque_minimo'] ?></p>
<p style="margin-left: 3%;">Estoque Máximo: <?= $produto['estoque_maximo'] ?></p>
<p style="margin-left: 3%;">Quantidade estoque: <?= $produto['quant_estoque'] ?></p>
</div>
 <br>
   
 <a href="./produto/listarProdutosAdm"><button class="btnVoltar" style="margin-left: 10%;">Voltar</button></a>

</div>

<div id="caixaDescricao">
<h3>Descrição</h3>
<hr>
<p style="text-align: justify"><?= $produto['descricao'] ?></p>
</div>

  </body>
</html>