<?php
require("servico/validarServico.php");
require_once 'modelo/categoriaModelo.php';

/** Adm */
function adicionarCategoria () {
    if (ehPost()){
        $nome = $_POST["descricao"];
            
        $errors= array();
            
        if  (validar_elementos_obrigatorios($nome, "descricao") != NULL){
             $errors[]= validar_elementos_obrigatorios($nome, "descricao");
        }    
      
    if (count($errors) > 0){
        $dados= array();
        $dados["errors"]= $errors;
        exibir ("categoria/formulario", $dados);
    } else{   
    $msg = categoria($nome);
    echo $msg;
    redirecionar("categoria/listarCategorias");
    }
}else{
    exibir("categoria/formulario");

    }
}

/** anon */
function listarCategorias (){
    $dados= array();
    $dados["categorias"]= pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
}

/** anon */
function ver ($idCategoria){
    $dados["categoria"]= pegarCategoriaPorId($idCategoria);
    exibir ("categoria/visualizar", $dados);
}

/** Adm */
function deletar ($idCategoria){
    $msg = deletarCategoria($idCategoria);
    redirecionar ("categoria/listarCategorias");
}

/** Adm */
function editar($id) {
    if (ehPost()){
            $descricao = $_POST["descricao"];
			
			editarCategoria($id, $descricao);
            redirecionar("categoria/listarCategorias");
	} else {
            $dados["categoria"] = pegarCategoriaPorId($id);
            exibir("categoria/formulario", $dados);			
	}
}