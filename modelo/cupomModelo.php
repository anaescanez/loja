<?php

function cupom ($nomecupom, $desconto){
    $sql = "INSERT INTO cupom (nomecupom, desconto) VALUES ('$nomecupom', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cupom' .mysqli_error($cnx));}
    return 'Cupom cadastrado com sucesso!';
    
}

function pegarTodosCupom (){
    $sql= "SELECT * FROM cupom";
    $resultado= mysqli_query(conn(), $sql);
    $cupons= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $cupons[]= $linha;
    }
    return $cupons;
}

function pegarCupomPorId ($idCupom){
    $sql= "SELECT * FROM cupom where idCupom= $idCupom";
    $resultado= mysqli_query(conn(), $sql);
    $cupom= mysqli_fetch_assoc($resultado);
   
    return $cupom;
}

function deletarCupom($idCupom){
    $sql= "DELETE FROM cupom WHERE idCupom = $idCupom";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar cupom' . mysqli_error($cnx));
    }
    return 'Cupom deletado com sucesso!';
}

function editarCupom($idCupom, $nomecupom, $desconto){
    $sql = "UPDATE cupom SET nomecupom = '$nomecupom', desconto = '$desconto' WHERE idCupom = $idCupom" ;
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx));}
    return 'Cupom alterado com sucesso!';
 }
 
 
function pegarDescontoPorNome($nomecupom){
    $sql = "SELECT desconto FROM cupom WHERE upper(nomecupom) like upper('%".$nomecupom."%')";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}