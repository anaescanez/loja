<?php

function categoria ($nome){
    $sql = "INSERT INTO categoria (descricao) VALUES ('$nome')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar a Categoria' .mysqli_error($cnx));}
    return 'Categoria cadastrado com sucesso!';
    
}

function pegarTodasCategorias (){
    $sql= "SELECT * FROM categoria";
    $resultado= mysqli_query(conn(), $sql);
    $categorias= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $categorias[]= $linha;
    }
    return $categorias;
}

function pegarCategoriaPorId ($idCategoria){
    $sql= "SELECT * FROM categoria where idcategoria= $idCategoria";
    $resultado= mysqli_query(conn(), $sql);
    $categoria= mysqli_fetch_assoc($resultado);
   
    return $categoria;
}

function deletarCategoria($idCategoria){
    $sql= "DELETE FROM categoria WHERE idcategoria = $idCategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar categoria' . mysqli_error($cnx));
    }
    return 'Categoria deletada com sucesso!';
}

function editarCategoria($idCategoria, $descricao){
    $sql = "UPDATE categoria SET descricao = '$descricao' WHERE idCategoria = $idCategoria" ;
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar categoria' . mysqli_error($cnx));}
    return 'Categoria alterado com sucesso!';
 }
 