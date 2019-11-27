<?php

function adicionarCliente($nome, $email, $senha, $cpf, $datanasc, $sexo, $tipousuario){
    $sql = "INSERT INTO usuario (nomeUsuario, email, senha, cpf, datadenascimento, sexo, tipousuario) VALUES ('$nome', '$email', '$senha', '$cpf', '$datanasc', '$sexo', '$tipousuario')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cliente' .mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
    
}

function pegarTodosClientes (){
    $sql= "SELECT * FROM usuario";
    $resultado= mysqli_query(conn(), $sql);
    $clientes= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $clientes[]= $linha;
    }
    return $clientes;
}

function pegarClientePorId ($idUsuario){
    $sql= "SELECT idUsuario, nomeUsuario, email, senha, cpf, DATE_FORMAT(datadenascimento, '%d/%m/%y') as datadenascimento, sexo, tipoUsuario FROM usuario where idUsuario= $idUsuario";
    $resultado= mysqli_query(conn(), $sql);
    $cliente= mysqli_fetch_assoc($resultado);
   
    return $cliente;
}

function deletarCliente($idUsuario){
    $sql= "DELETE FROM usuario WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar cliente' . mysqli_error($cnx));
    }
    return 'Cliente deletado com sucesso!';
}

function editarCliente($idUsuario, $nomeUsuario, $email, $senha, $cpf, $datadenascimento, $sexo, $tipoUsuario){
   $sql = "UPDATE usuario SET nomeUsuario = '$nomeUsuario', email = '$email', senha = '$senha', cpf = '$cpf', datadenascimento = '$datadenascimento', sexo = '$sexo', tipoUsuario = '$tipoUsuario' WHERE idUsuario = $idUsuario" ;
   $resultado = mysqli_query($cnx = conn(), $sql);
   if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx));}
   return 'Usuário alterado com sucesso!';
}

function pegarUsuarioPorEmailSenha ($email, $senha){
    $sql= "SELECT * FROM usuario where email = '$email' and senha = '$senha'";
    echo $sql;
    $resultado= mysqli_query(conn(), $sql);
    $cliente= mysqli_fetch_assoc($resultado);
   
    return $cliente;
}

