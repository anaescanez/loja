<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2 class="cadastroTitulo">Ver detalhes do Cupom</h2>
        <div id="visualizarCupom">
        <p>Id: <?=$cupom['idcupom']?></p>
        <p>Nome do Cupom: <?=$cupom['nomecupom']?></p>
        <p>Desconto: <?=$cupom['desconto']?></p>
        <br><a href="./cupom/listarCupom"><button class="btnVoltar">Voltar</button></a>
        </div>
        
         
        
    </body>
</html>
