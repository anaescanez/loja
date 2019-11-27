<?php

function adicionarEndereco($idUsuario, $logradouro, $numero, $complemento, $bairro, $cidade, $cep){
    $sql = "INSERT INTO endereco (idUsuario, logradouro, numero, complemento, bairro, cidade, cep) VALUES ('$idUsuario', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar endereco' .mysqli_error($cnx));}
    return 'Endereço cadastrado com sucesso!';
    
}

function pegarTodosEnderecos (){
    $sql= "SELECT * FROM endereco";
    $resultado= mysqli_query(conn(), $sql);
    $enderecos= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $enderecos[]= $linha;
    }
    return $enderecos;
}

function pegarEnderecoPorId ($idendereco){
    $sql= "SELECT * FROM endereco where idendereco= $idendereco";
    $resultado= mysqli_query(conn(), $sql);
    $endereco= mysqli_fetch_assoc($resultado);
   
    return $endereco;
}

function deletarEndereco($idendereco){
    $sql= "DELETE FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar cliente' . mysqli_error($cnx));
    }
    return 'Endereço deletado com sucesso!';
}

function editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep){
   $sql = "UPDATE endereco SET logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', cep = '$cep' WHERE idendereco = $idendereco" ;
   $resultado = mysqli_query($cnx = conn(), $sql);
   if(!$resultado) { die('Erro ao alterar endereço' . mysqli_error($cnx));}
   return 'Endereço alterado com sucesso!';
}

function pegarEnderecosPorUsuario ($idUsuario){
  $sql= "SELECT * FROM endereco WHERE idusuario = $idUsuario";
    $resultado= mysqli_query(conn(), $sql);
    $endereco= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $endereco[]= $linha;
    }
    return $endereco;  
}