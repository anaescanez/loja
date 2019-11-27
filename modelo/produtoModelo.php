<?php

function adicionarProduto($preco, $nomeproduto, $descricao, $destino, $estoque_minimo, $estoque_maximo, $quant_estoque, $categoria){
    $sql = "INSERT INTO produtos (preco, nomeproduto, descricao, imagem, estoque_minimo, estoque_maximo, quant_estoque, idcategoria) VALUES ('$preco', '$nomeproduto', '$descricao', '$destino', '$estoque_minimo', '$estoque_maximo', '$quant_estoque', '$categoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar o produto' .mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
    
}

function pegarTodosProdutos (){
    $sql= "SELECT * FROM produtos";
    $resultado= mysqli_query(conn(), $sql);
    $produtos= array();
    while ($linha= mysqli_fetch_assoc($resultado)){
        $produtos[]= $linha;
    }
    return $produtos;
}

function pegarProdutoPorId ($idProduto){
    $sql= "SELECT * FROM produtos where idProduto= $idProduto";
    $resultado= mysqli_query(conn(), $sql);
    $produto= mysqli_fetch_assoc($resultado);
   
    return $produto;
}

function deletarProduto($idProduto){
    $sql= "DELETE FROM produtos WHERE idProduto = $idProduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto deletado com sucesso!';
}

function editarProduto($idProduto, $preco, $nomeproduto, $descricao, $destino, $estoque_minimo, $estoque_maximo, $quant_estoque,$categoria){
    $sql = "UPDATE produtos SET preco = '$preco', nomeproduto = '$nomeproduto', descricao = '$descricao', imagem = '$destino', estoque_minimo = '$estoque_minimo', estoque_maximo = '$estoque_maximo', quant_estoque = '$quant_estoque', idcategoria = '$categoria' WHERE idProduto = $idProduto" ;
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx));}
    return 'Produto alterado com sucesso!';
 }
 