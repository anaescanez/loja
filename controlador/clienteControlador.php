<?php

require("servico/validarServico.php");
require_once 'modelo/clienteModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/pedidoModelo.php';

/** anon */
function cadastro () {
    if (ehPost()){
            $nome = $_POST["nomeUsuario"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $cpf = $_POST["cpf"];
            $datanasc = $_POST["datadenascimento"];
            $sexo = $_POST["sexo"];
            $tipousuario = $_POST["tipoUsuario"];
            
            $errors= array();
            
            if  (validar_elementos_obrigatorios($nome, "nomeUsuario") != NULL){
                $errors[]= validar_elementos_obrigatorios($nome, "nome usuario");
            }
            if  (validar_email($email, "email") != NULL){
                $errors[]= validar_email($email, "email");
            }
             if  (validar_elementos_obrigatorios($senha, "senha") != NULL){
                $errors[]= validar_elementos_obrigatorios($senha);
            }
            if  (validar_elementos_especificos($cpf, "cpf") != NULL){
                $errors[]= validar_elementos_especificos($cpf, "cpf");
            }
            if  (validar_elementos_especificos($datanasc, "datadenascimento") != NULL){
                $errors[]= validar_elementos_especificos($datanasc,  "data de nascimento");
            }
            
            if (count($errors) > 0){
                $dados= array();
                $dados["errors"]= $errors;
                exibir ("cliente/cadastro", $dados);
            } else{
               $msg = adicionarCliente($nome, $email, $senha, $cpf, $datanasc, $sexo, $tipousuario);
               echo $msg;
              
              redirecionar ("paginas");
            }
            }else {
                exibir ("cliente/formulario");
            }
}


function contato () {
    if (ehPost()){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $mensagem = $_POST["mensagem"];
            
            
       echo validar_elementos_obrigatorios($nome);
       echo validar_email($email);
       echo validar_elementos_especificos($cpf);
       echo validar_elementos_especificos($telefone); 
       echo validar_elementos_obrigatorios($mensagem);
            
    print_r($_POST);
    
}else{
    exibir("cliente/contato");

    }
}

/** Adm */
function listarClientes (){
    $dados= array();
    $dados["clientes"]= pegarTodosClientes();
    exibir ("cliente/listar", $dados);
}

/** user */
function ver ($idCliente){
    $dados["cliente"]= pegarClientePorId($idCliente);
    $dados["enderecos"]= pegarEnderecosPorUsuario($idCliente);
    exibir ("cliente/visualizar", $dados);
   
}

/** Adm */
function deletar ($idCliente){
    $msg = deletarCliente($idCliente);
    redirecionar ("cliente/listarClientes");
}

/** anon */
function editar($id) {
    if (ehPost()){
            $nome = $_POST["nomeUsuario"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $cpf = $_POST["cpf"];
            $datanasc = $_POST["datadenascimento"];
            $sexo = $_POST["sexo"];
            $tipoUsuario = $_POST["tipoUsuario"];
			
	editarCliente($id, $nome, $email, $senha, $cpf, $datanasc, $sexo, $tipoUsuario);
         redirecionar("cliente/ver/".$id);
         
	} else {
            $dados["cliente"] = pegarClientePorId($id);
            exibir("cliente/formulario", $dados);			
	}
}

function MeuPedido(){
  $idUsuario=acessoPegarUsuarioLogado();
  $dados["pedidos"]=PedidosDoCliente($idUsuario);   
  exibir('cliente/pedidos', $dados);
}