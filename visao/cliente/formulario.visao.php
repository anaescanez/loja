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
        <h2 class="cadastroTitulo">Cadastro</h2>
        <div id="caixaCliente">
        <form action="" method="POST">
           <div id="formCliente">
            Nome: <input class="campoForm" type="text" name="nomeUsuario" value="<?=@$cliente['nomeUsuario']?>"><br> 
            <br>Email: <input class="campoForm" type="text" name="email" value="<?=@$cliente['email']?>"><br>
            <br>Senha: <input class="campoForm" type="password" name="senha" value="<?=@$cliente['senha']?>"><br>
            <br>CPF: <input class="campoForm" type="text" name="cpf" value="<?=@$cliente['cpf']?>"><br>
            <br>Data de Nascimento: <input class="campoForm" type="date" name="datadenascimento" value="<?=@$cliente['datadenascimento']?>"><br>
            <br>Sexo:<br>
            <br> <input class="campoForm" type="radio" name="sexo" value="F" checked="checked"> Feminino<br>
            <br> <input class="campoForm" type="radio" name="sexo" value="M"> Masculino<br>
            <br>Tipo de usuário:<br>
            <br> <?php if (acessoPegarPapelDoUsuario() == 'Adm') { ?> <input class="campoForm" type="radio" name="tipoUsuario" value="Adm" checked="checked"> Administrador<br> <?php } ?>
            <br> <input class="campoForm" type="radio" name="tipoUsuario" value="user">Cliente<br>
            
            <br><button class="btnForm">Enviar</button>
            <div>
        </form>
        </div>    
    </body>
</html>