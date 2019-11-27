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
        <h2 class="cadastroTitulo">Cadastro Forma de Pagamento</h2>
        <div id="caixaFormaPagamento">
        <form action="" method="POST">
            Descrição: <input class="campoForm" type="text" name="descricao" value="<?=@$formapagamento['descricao']?>"><br>
            
            <br><button class="btnForm">Enviar</button>
        
        </form>
        </div>
        
    </body>
</html>

