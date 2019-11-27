<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./publico/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    </head>
    <body>
<h2 class="cadastroTitulo">Listar  Clientes</h2>
<div id="caixaListarClientes">
<table class="table">
    <thead>
        <th class="thTodos">ID</th>
        <th class="thTodos">NOME</th>
        <th class="thTodos">EMAIL</th>
        <th class="thTodos">SENHA</th>
        <th class="thTodos">CPF</th>
        <th class="thTodos">DATA DE NASCIMENTO </th>
        <th class="thTodos">SEXO</th>
        <th class="thTodos">TIPO USUÁRIO</th>
        <th class="thTodos">VISUALIZAR</th>
        <th class="thTodos">DELETAR</th>
	<th class="thTodos">EDITAR</th>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td class="tdTodos"><?= $cliente['idUsuario'] ?></td> 
                <td class="tdTodos"><?= $cliente['nomeUsuario'] ?></td> 
                <td class="tdTodos"><?= $cliente['email'] ?></td>
                <td class="tdTodos"><?= $cliente['senha'] ?></td>
                <td class="tdTodos"><?= $cliente['cpf'] ?></td>
                <td class="tdTodos"><?= $cliente['datadenascimento'] ?></td> 
                <td class="tdTodos"><?= $cliente['sexo'] ?></td> 
                <td class="tdTodos"><?= $cliente['tipoUsuario'] ?></td> 
                <td class="tdTodos"><a href="./cliente/ver/<?= $cliente['idUsuario'] ?>">Ver</a></td>
                <td class="tdTodos"><a href="./cliente/deletar/<?= $cliente['idUsuario'] ?>">Deletar</a></td>
		<td class="tdTodos"><a href="./cliente/editar/<?= $cliente['idUsuario'] ?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
    <br><a href="./cliente/cadastro" id="btnListar">Novo Usuário</a>
    </div>



 </body>
</html>