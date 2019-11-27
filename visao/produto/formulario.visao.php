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
        <h2 class="cadastroTitulo">Cadastro do Produto</h2>
        <div id="caixaProduto">
        <form action="" method="POST" enctype="multipart/form-data">
          
           <div id="formProduto"> 
            Preço: <input class="campoForm" type="text" name="preco" value="<?=@$produto['preco']?>"><br>
            <br>Nome: <input class="campoForm" type="text" name="nomeproduto" value="<?=@$produto['nomeproduto']?>"><br>
            <br>Descrição: <input class="campoForm" type="text" name="descricao" value="<?=@$produto['descricao']?>"><br>
            <br>Imagem: <input class="campoForm" type="file" name="imagem"><br>
            <select class="campoForm" name="categoria">
                <?php foreach ($categorias as $categoria):?>
                <option value="<?=$categoria['idcategoria']?>"><?=$categoria['descricao']?></option>
                <?php endforeach;?>
            </select>
            <br>Estoque mínimo : <input class="campoForm" type="text" name="estoque_minimo" value="<?=@$produto['estoque_minimo']?>"><br>
            <br>Estoque máximo: <input class="campoForm" type="text" name="estoque_maximo" value="<?=@$produto['estoque_maximo']?>"><br>
            <br>Quantidade estoque: <input class="campoForm" type="text" name="quant_estoque" value="<?=@$produto['quant_estoque']?>"><br>
            
            <br><button class="btnForm">Enviar</button>
           
        </div>
        </form>
    </body>
</html>