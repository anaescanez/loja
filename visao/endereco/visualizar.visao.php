<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>
<h2 class="cadastroTitulo">Ver detalhes do endereço</h2>
<div id="visualizarEndereco">
<p>Id Endereço: <?= $endereco['idendereco'] ?></p>
<p>Id Usuario: <?= $endereco['idusuario'] ?></p>
<p>Logradouro: <?= $endereco['logradouro'] ?></p>
<p>Número: <?= $endereco['numero'] ?></p>
<p>Complemento:<?= $endereco['complemento'] ?></p>
<p>Bairro: <?= $endereco['bairro'] ?></p>
<p>Cidade: <?= $endereco['cidade'] ?></p>
<p>CEP: <?= $endereco['cep'] ?></p>
 <br><a href="./cliente/ver/<?= $endereco['idusuario']?>"><button class="btnVoltar">Voltar</button></a>
</div>

  </body>
</html>