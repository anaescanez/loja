<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
        if(ehPost()){
        foreach ($errors as $erro) {
            echo "$erro<br>";
        }
    }
?>
        <h2 class="cadastroTitulo">Cupom</h2>
        <div id="caixaCupom">
        <form action="" method="POST">
          <div id="formCupom">
            Nome do Cupom: <input class="campoForm" type="text" name="nomecupom" value="<?=@$cupom['nomecupom']?>"><br>
            Desconto: <input class="campoForm" type="text" name="desconto" value="<?=@$cupom['desconto']?>"><br>
            
            <br><button class="btnForm">Enviar</button>
        
        </form>
        </div>
        
    </body>
</html>

