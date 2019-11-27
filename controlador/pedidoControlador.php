<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once 'modelo/clienteModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formapagamentoModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once "./biblioteca/acesso.php";

    function desconto(){
   
   if(ehPost()){
       $nomecupom = $_POST["nomecupom"];
       $desconto = pegarDescontoPorNome($nomecupom);
       $desconto = $desconto['desconto']/100;
      
       $total = 0;
    
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod = pegarProdutoPorId($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   
    $idUsuario = acessoPegarUsuarioLogado();
   
    $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = number_format($total - ($total * $desconto),2); 
   $dados['cliente'] = pegarClientePorId($idUsuario);
   $dados['enderecos'] = pegarEnderecosPorUsuario($idUsuario);
   $dados['formapagamentos'] = pegarTodasFormaPagamento();
   
   exibir('pedido/pedido', $dados);
   }else{
       $total = 0;
    
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  pegarProdutoPorId($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   
    $idCliente = acessoPegarUsuarioLogado();
   $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = $total; 
   $dados['cliente'] = pegarClientePorId($idUsuario);
   $dados['enderecos'] = pegarEnderecosPorUsuario($idUsuario);
   $dados['formapagamentos'] = pegarTodasFormaPagamento();
   
   exibir('pedido/pedido', $dados);
   }
   
}


function finalizar($total){
   if(ehPost()){
       $idUsuario = acessoPegarUsuarioLogado();
       $formapagamento= $_POST["formaPag"];
       $endereco= $_POST["enderecos"];
       if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  pegarProdutoPorId($produto);
            $todos[] = $prod;
        endforeach;
    } 
       inserirPedido($idUsuario, $formapagamento, $endereco, $total, $todos);
       $dados["pedidos"]=PedidosDoCliente($idUsuario);   
       redirecionar('cliente/MeuPedido');
   }else{
       $total = 0;
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  pegarProdutoPorId($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   $idUsuario = acessoPegarUsuarioLogado();
   $dados = array();
   $dados["produto"] = $todos;
   $dados["total"] = $total; 
   $dados['cliente'] = pegarClientePorId($idUsuario);
   $dados['enderecos'] = pegarEnderecosPorUsuario($idUsuario);
   $dados['formapagamentos'] = pegarTodasFormaPagamento();
   exibir('pedido/pedido', $dados);
   }
}



/** anon */
function verDetalhesPedido ($idPedido){
    $dados["pedido"]= pegarPedidoPorId($idPedido);
    $dados["produtos"]= pegarProdutosPedido($idPedido);
    
    exibir ("pedido/visualizarPedido", $dados);
}

?>

