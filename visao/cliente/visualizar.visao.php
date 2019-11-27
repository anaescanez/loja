<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        
    </head>
    <body>
        
        <div id="visualizarCliente">  
            
            <div id="caixaPerfil2">
            <img id="logoConta"src="publico/imgs/minhaConta.png" alt="imagemlogo">
            <h5 id="perfil">Minha Conta</h5><br>
            <h5>Olá  <?=$cliente['nomeUsuario']?></h5>
            <p><?=$cliente['email']?></p>
            </div>
            
            <div id="caixaPerfil">
            <p class="p-cliente"><strong>Id:</strong> <?=$cliente['idUsuario']?> <strong>    Nome:</strong> <?=$cliente['nomeUsuario']?></p>
            <p class="p-cliente"><strong>Senha:</strong> <?=$cliente['senha']?></p>
            <p class="p-cliente"><strong>Cpf:</strong> <?=$cliente['cpf']?></p>
            <p class="p-cliente"><strong>Data de Nascimento:</strong> <?=$cliente['datadenascimento']?></p>
            <p class="p-cliente"><strong>Sexo:</strong> <?=$cliente['sexo']?><strong>      Tipo usuário:</strong> <?=$cliente['tipoUsuario']?></p>
            </div>
           
            <a href="./cliente/editar/<?= $cliente['idUsuario'] ?>" id="btnEditar">Alterar Dados</a>
             <a href="./login/logout" id="btnLogout">Logout<img id="logoLogout"src="publico/imgs/logout.png" alt="imagemlogo"></a>
             <a href="./cliente/MeuPedido/<?= $cliente['idUsuario'] ?>" id="btnEditar" style="margin-left: 3%;"> Meus Pedidos</a>
        </div>
        <div id="caixaEnderecoVisualizar">
        <p>Endereço:</p> <a href="./endereco/adicionar/<?=$cliente['idUsuario']?>" id="btnNovoEndereco">Novo endereço</a>
        </div>
        <?php
       require_once 'visao/endereco/listar.visao.php'; 
        ?>
        
    </body>
</html>