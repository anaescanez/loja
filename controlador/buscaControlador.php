<?php
require_once "modelo/buscaModelo.php";

/** anon */
function pesquisar (){
    if  (ehPost ()) {
        $buscar = $_POST['pesquisar'];
        $resultadoBusca = buscar($buscar);
        $dados ["buscar"] = $resultadoBusca;
        $dados ["erros"] = "";
        if(COUNT($resultadoBusca)==0){
         $dados ["erros"] = "Nenhum produto encontrado!";   
        }
        exibir("busca/pesquisar", $dados);
    }
}