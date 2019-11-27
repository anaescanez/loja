<?php
require("servico/validarServico.php");
require_once 'modelo/cupomModelo.php';

/** Adm */
function adicionarCupom () {
    if (ehPost()){
        $nomecupom = $_POST["nomecupom"];
        $desconto = $_POST["desconto"];
            
        $errors= array();
            
        if  (validar_elementos_obrigatorios($nomecupom, "nomecupom") != NULL){
             $errors[]= validar_elementos_obrigatorios($nomecupom, "nomecupom");
        }   
        if  (validar_elementos_especificos($desconto, "desconto") != NULL){
            $errors[]= validar_elementos_especificos($desconto, "desconto");
        } 
      
    if (count($errors) > 0){
        $dados= array();
        $dados["errors"]= $errors;
        exibir ("cupom/formulario", $dados);
    } else{   
    $msg = cupom($nomecupom, $desconto);
    echo $msg;
    redirecionar("cupom/listarCupom");
    }
}else{
    exibir("cupom/formulario");

    }
}

/** anon */
function listarCupom (){
    $dados= array();
    $dados["cupons"]= pegarTodosCupom();
    exibir ("cupom/listar", $dados);
}

/** anon */
function ver ($idCupom){
    $dados["cupom"]= pegarCupomPorId($idCupom);
    exibir ("cupom/visualizar", $dados);
}

/** Adm */
function deletar ($idCupom){
    $msg = deletarCupom($idCupom);
    redirecionar ("cupom/listarCupom");
}

/** Adm */
function editar($idCupom) {
    if (ehPost()){
            $nomecupom = $_POST["nomecupom"];
            $desconto = $_POST["desconto"];
			
	editarCupom($idCupom, $nomecupom, $desconto);
        redirecionar("cupom/listarCupom");
	} else {
            $dados["cupom"] = pegarCupomPorId($idCupom);
            exibir("cupom/formulario", $dados);			
	}
}