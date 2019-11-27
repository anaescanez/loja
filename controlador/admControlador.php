<?php

require_once 'modelo/admModelo.php';
require_once 'modelo/produtoModelo.php';

function listarQuantidadeEstoque() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoEstoque();
	exibir("adm/quantidadeEstoque", $dados);
}

function listarProdutosCategoria() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutosCategoria();
	exibir("adm/produtosPorCategoria", $dados);
}


function listarPedidosPorData() {
	if (ehPost()){
		$datad1 = $_POST ['datad1'];
		$datad2= $_POST ['datad2'];
		$dados = array();
		$dados["adm"] = pegarTodosPedidosData($datad1, $datad2); 
		exibir("adm/listarPorData", $dados);
	}else{
		exibir("adm/formData");
	} 
}

function listarPedidosCE() {
	$dados = array();
	$dados["adm"] = pegarTodosPedidosCE();
	exibir("adm/listarPorEstado", $dados);	
}

function total_do_faturamento(){
    $total=0;
     if (ehPost()) {   
         $data1= $_POST['d1'];
         $data2= $_POST['d2'];         
     $pedidos= seleciona_pedidos_por_intervalo($data1, $data2);
    
     foreach ($pedidos as $prod):
            $total += $prod["total"];
     endforeach;
            
     $dados['total']= $total;
     exibir('adm/faturamentoTotal', $dados);
}else{
    exibir('adm/formularioTotal');
}    
}
function faturamento_mensal(){
    $total=0;
    if (ehPost()) {   
    $mes= $_POST['op'];
     $pedidos= seleciona_pedidos_mensalmente($mes);     
      foreach ($pedidos as $prod):
            $total += $prod["total"];
     endforeach;
    
    $dados['total']= $total;
    exibir('adm/faturamentoTotal', $dados);
}else{
    exibir('adm/faturamentoMensal');
}
}
function faturamento_anual(){
    $total=0;
    if (ehPost()) {   
    $ano= $_POST['op'];
     $pedidos= seleciona_pedidos_anualmente($ano);     
      foreach ($pedidos as $prod):
            $total += $prod["total"];
     endforeach;
    
    $dados['total']= $total;
    exibir('adm/faturamentoTotal', $dados);
}else{
    exibir('adm/faturamentoAnual');
}
}