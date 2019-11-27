<?php

require("servico/validarServico.php");
require_once 'modelo/produtoModelo.php';
require_once 'modelo/categoriaModelo.php';

function visualizar () {
    
    $dados = array ();
    $dados["nome"] = "Para todos os garotos que já amei";
    $dados["codigo"] = "1234";
    $dados["descricao"] = "Lara Jean guarda suas cartas de amor em uma caixa azul-petróleo que ganhou da mãe. Não são cartas que ela recebeu de alguém, mas que ela mesma escreveu. Uma para cada garoto que amou — cinco ao todo. São cartas sinceras, sem joguinhos nem fingimentos, repletas de coisas que Lara Jean não diria a ninguém, confissões de seus sentimentos mais profundos. Até que um dia essas cartas secretas são misteriosamente enviadas aos destinatários, e de uma hora para outra a vida amorosa de Lara Jean sai do papel e se transforma em algo que ela não pode mais controlar";
    $dados["valor"] = "39,90";
    $dados["categoria"] = "Infanto Juvenil";
    
    exibir("produto/visualizar" , $dados);
}

/** Adm */
function adicionar () {
    if (ehPost()){
        
        $preco = $_POST["preco"];
        $nomeproduto = $_POST["nomeproduto"];
        $descricao = $_POST["descricao"];
        $destino = './publico/imgs/' . $_FILES['imagem']['name'];
        $arquivo_tmp = $_FILES['imagem']['tmp_name'];
        $categoria = $_POST["categoria"];
        $estoque_minimo = $_POST["estoque_minimo"];
        $estoque_maximo = $_POST["estoque_maximo"];
        $quant_estoque = $_POST["quant_estoque"];
        
        move_uploaded_file( $arquivo_tmp,$destino );
        
        $errors= array();
        if  (validar_elementos_especificos($preco, "preco") != NULL){
            $errors[]= validar_elementos_especificos($preco, "preco");
        }
        if  (validar_elementos_obrigatorios($nomeproduto, "nomeproduto") != NULL){
            $errors[]= validar_elementos_obrigatorios($nomeproduto, "nomeproduto");
        }
        if  (validar_elementos_obrigatorios($descricao, "descricao") != NULL){
            $errors[]= validar_elementos_obrigatorios($descricao,"descricao");
        }
        if  (validar_elementos_obrigatorios($estoque_minimo, "estoque_minimo") != NULL){
            $errors[]= validar_elementos_obrigatorios($estoque_minimo,"estoque_minimo");
        }
        if  (validar_elementos_obrigatorios($estoque_maximo, "estoque_maximo") != NULL){
            $errors[]= validar_elementos_obrigatorios($estoque_maximo,"estoque_maximo");
        }
        if  (validar_elementos_obrigatorios($quant_estoque, "quant_estoque") != NULL){
            $errors[]= validar_elementos_obrigatorios($quant_estoque,"quant_estoque");
        }
        
        
        if (count($errors) > 0){
            $dados= array();
            $dados["errors"]= $errors;
            $dados["categorias"]= pegarTodasCategorias();
            exibir("produto/formulario", $dados);
        } else{
            $msg = adicionarProduto($preco, $nomeproduto, $descricao, $destino, $estoque_minimo, $estoque_maximo, $quant_estoque, $categoria);
            echo $msg;    
            redirecionar("produto/listarProdutosAdm");
        }
    }else{
        $dados["categorias"]= pegarTodasCategorias();
        exibir("produto/formulario", $dados);
        
    }
}

/** anon */
function listarProdutos (){
    $dados= array();
    $dados["produtos"]= pegarTodosProdutos();
    exibir ("produto/listar", $dados);
}

/** Adm */
function listarProdutosAdm (){
    $dados= array();
    $dados["produtos"]= pegarTodosProdutos();
    exibir ("produto/listarAdm", $dados);
}

function verAdm ($idProduto){
    $dados["produto"]= pegarProdutoPorId($idProduto);
    exibir ("produto/visualizarAdm", $dados);
}

/** anon */
function ver ($idProduto){
    $dados["produto"]= pegarProdutoPorId($idProduto);
    exibir ("produto/visualizar", $dados);
}

/** Adm */
function deletar ($idProduto){
    $msg = deletarProduto($idProduto);
    redirecionar ("produto/listarProdutos");
}

/** Adm */
function editar($id) {
    if (ehPost()){
        $preco = $_POST["preco"];
        $nomeproduto = $_POST["nomeproduto"];
        $descricao = $_POST["descricao"];
       $destino = './publico/imgs/' . $_FILES['imagem']['name'];
        $arquivo_tmp = $_FILES['imagem']['tmp_name'];
        $categoria = $_POST["categoria"];
        $estoque_minimo = $_POST["estoque_minimo"];
        $estoque_maximo = $_POST["estoque_maximo"];
        $quant_estoque = $_POST["quant_estoque"];
        
         move_uploaded_file( $arquivo_tmp, $destino );
        
        editarProduto($id, $preco, $nomeproduto, $descricao, $destino, $estoque_minimo, $estoque_maximo, $quant_estoque, $categoria);
        redirecionar("produto/listarProdutosAdm");
    } else {
        $dados["produto"] = pegarProdutoPorId($id);
        $dados["categorias"]= pegarTodasCategorias();
        exibir("produto/formulario", $dados);	
    }
}

function comprar($idProduto){
    // unset($_SESSION["carrinho"]); //p apagar sessão
     if(isset($_SESSION["carrinho"])) {
     $produtos = $_SESSION["carrinho"]; 
     } else {
         $produtos = array();
     }
 
     $produtos[] = $idProduto;
     $_SESSION["carrinho"] = $produtos;
 
    redirecionar("sacola/mostrar"); 
 }
