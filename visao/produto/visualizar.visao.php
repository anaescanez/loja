<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>

<div id="visualizarProduto">
<img id="imgProdutoV" src="<?=$produto['imagem']?>" alt="imagem">
<h2 id="nomeProd"><?= $produto['nomeproduto'] ?></h2>
<p style="padding-left: 40%; padding-bottom: 3%;">(Cod.) <?= $produto['idproduto'] ?></p>
<div id="caixaProdVer">

<p id="precoVer" style="padding-left: 2%;">R$ <?= $produto['preco'] ?></p> 
<a href="./produto/comprar/<?= $produto['idproduto'] ?>" ><button class="btn" style="background-color: lightseagreen; width: 30%; color: white;  float: right; margin-right: 10%; padding: 2%; font-size: 15px;"><img style="height: 28px; width: 28px;" src="publico/imgs/logocar2.png" alt="imagemlogo"> Comprar</button></a>
<p style="padding-left: 2%;">Estoque Mínimo: <?= $produto['estoque_minimo'] ?></p>
<p style="padding-left: 2%;">Estoque Máximo: <?= $produto['estoque_maximo'] ?></p>
<p style="padding-left: 2%;">Quantidade estoque: <?= $produto['quant_estoque'] ?></p>
</div>

 <br>   
 <br>
</div>

<div id="caixaDescricao">
<h3>Descrição</h3>
<hr>
<p style="text-align: justify"><?= $produto['descricao'] ?></p>
</div>

  </body>
</html>

