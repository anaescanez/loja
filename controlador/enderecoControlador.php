<?php

require("servico/validarServico.php");
require_once 'modelo/enderecoModelo.php';

/** user */
function adicionar ($idUsuario) {
    if (ehPost()){
            $logradouro = $_POST["logradouro"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];
            
            $errors= array();
            
            if  (validar_elementos_obrigatorios($logradouro, "logradouro") != NULL){
                $errors[]= validar_elementos_obrigatorios($logradouro, "logradouro");
            }
            if  (validar_elementos_especificos($numero, "numero") != NULL){
                $errors[]= validar_elementos_especificos($numero, "numero");
            }
             if  (validar_elementos_obrigatorios($complemento, "complemento") != NULL){
                $errors[]= validar_elementos_obrigatorios($complemento, "complemento");
            }
            if  (validar_elementos_obrigatorios($bairro, "bairro") != NULL){
                $errors[]= validar_elementos_obrigatorios($bairro, "bairro");
            }
            if  (validar_elementos_obrigatorios($cidade, "cidade") != NULL){
                $errors[]= validar_elementos_obrigatorios($cidade, "cidade");
            }
            if  (validar_elementos_especificos($cep, "cep") != NULL){
                $errors[]= validar_elementos_especificos($cep, "cep");
            }
            
            if (count($errors) > 0){
                $dados= array();
                $dados["errors"]= $errors;
                exibir ("endereco/formulario", $dados);
            } else{
               $msg = adicionarEndereco($idUsuario, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
               echo $msg;
              redirecionar("cliente/ver/$idUsuario");
            }
            }else {
                $dados["endereco"] = pegarEnderecoPorId($idUsuario);
                exibir ("endereco/formulario", $dados);
            }
}

/** anon */
function listarEnderecos (){
    $dados= array();
    $dados["enderecos"]= pegarTodosEnderecos();
    exibir ("endereco/listar", $dados);
}

/** user */
function ver ($idendereco){
    $dados["endereco"]= pegarEnderecoPorId($idendereco);
    exibir ("endereco/visualizar", $dados);
}

/** user */
function deletar ($idendereco, $idUsuario){
    $msg = deletarEndereco($idendereco);
    redirecionar ("cliente/ver/$idUsuario");
}

/** user */
function editar($idendereco, $idUsuario) {
    if (ehPost()){
            $logradouro = $_POST["logradouro"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];
			
	    editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
            redirecionar("cliente/ver/$idUsuario");
	} else {
            $dados["endereco"] = pegarEnderecoPorId($idendereco);
            exibir("endereco/formulario", $dados);			
	}
}