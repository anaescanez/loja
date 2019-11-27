<?php

function formapagamento ($descricao){
    $sql = "INSERT INTO formapagamento (descricao) VALUES ('$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar forma de pagamento' .mysqli_error($cnx));}
    return 'Forma de pagamento cadastrado com sucesso!';
    
}

function pegarTodasFormaPagamento (){
    $sql= "SELECT * FROM formapagamento";
    $resultado= mysqli_query(conn(), $sql);
    $formapagamentos= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $formapagamentos[]= $linha;
    }
    return $formapagamentos;
}

function pegarFormaPagamentoPorId ($idFormaPagamento){
    $sql= "SELECT * FROM formapagamento where idFormaPagamento= $idFormaPagamento";
    $resultado= mysqli_query(conn(), $sql);
    $formapagamento= mysqli_fetch_assoc($resultado);
   
    return $formapagamento;
}

function deletarFormaPagamento($idFormaPagamento){
    $sql= "DELETE FROM formapagamento WHERE idFormaPagamento = $idFormaPagamento";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar forma de pagamento' . mysqli_error($cnx));
    }
    return 'Forma de pagamento deletada com sucesso!';
}

function editarFormaPagamento($idFormaPagamento, $descricao){
    $sql = "UPDATE formapagamento SET descricao = '$descricao' WHERE idformapagamento = $idFormaPagamento" ;
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar forma de pagamento' . mysqli_error($cnx));}
    return 'Forma de pagamento alterada com sucesso!';
 }
 