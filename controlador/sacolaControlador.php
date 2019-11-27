<?php
require_once "modelo/produtoModelo.php";

function mostrar() {
    $total = 0;
    $todos = array();
    if(isset($_SESSION["carrinho"])) {
        
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  pegarProdutoPorId($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
            $dados ["erros"] = "";
        endforeach;
    } else {
        $dados ["erros"] = "Carrinho vazio!!!";   
        
    }
    
   //$dados = array();
   
   $dados["produtos"] = $todos;
   $dados["total"] = $total;
   
  
   //print_r($dados);
    exibir('carrinho/mostrar', $dados);
}

function limparCarrinho() {
    unset($_SESSION['carrinho']);
    redirecionar("sacola/mostrar");
}

function removerProduto($id) {
    $produtos = $_SESSION['carrinho'];
    foreach ($produtos as $key => $produto) {
        if ($produto == $id) {
            unset($produtos[$key]);
        }
    }
    $_SESSION['carrinho'] = $produtos;
    redirecionar("sacola/mostrar");
}