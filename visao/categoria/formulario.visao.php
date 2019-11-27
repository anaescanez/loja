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
        <h2 class="cadastroTitulo">Cadastro de Categoria</h2>
        <div id="caixaCategoria">
        <form action="" method="POST">
          <div id="formCategoria">
            Nome: <input class="campoForm" type="text" name="descricao" value="<?=@$categoria['descricao']?>"><br>
            
            <br><button class="btnForm">Enviar</button>
        
        </form>
        </div>
        </div>
    
    </body>
</html>

