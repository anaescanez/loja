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
        <h2 class="cadastroTitulo">Cadastro do Endereço</h2>
        <div id="caixaEndereco">
        <form action="" method="POST">
          
           <div id="formEndereco"> 
               
           
            <br>Logradouro: <input class="campoForm" type="text" name="logradouro" value="<?=@$endereco['logradouro']?>"><br>
            <br>Número: <input class="campoForm" type="text" name="numero" value="<?=@$$endereco['numero']?>"><br>
            <br>Complemento: <input class="campoForm" type="text" name="complemento" value="<?=@$endereco['complemento']?>"><br>
            <br>Bairro: <input class="campoForm" type="text" name="bairro" value="<?=@$endereco['bairro']?>"><br>
            <br>Cidade : <input class="campoForm" type="text" name="cidade" value="<?=@$endereco['cidade']?>"><br>
            <br>CEP : <input class="campoForm" type="text" name="cep" value="<?=@$endereco['cep']?>"><br>
            
            <br><button class="btnForm">Enviar</button>
           
        </div>
        </form>
    </body>
</html>
