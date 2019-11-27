<?php

function pegarTodosProdutoEstoque() {
	$sql = "select * from produtos";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}
function pegarTodosProdutosCategoria() {
	$sql = "select produtos.nomeproduto, categoria.descricao as categoria "
                . "from produtos inner join categoria on categoria.idcategoria = produtos.idcategoria ";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}
function pegarTodosPedidosData($datad1, $datad2) {
	$sql = "SELECT DATE_FORMAT (pedido.datacompra, '%d/%m/%y') as Data, total FROM pedido WHERE datacompra BETWEEN '$datad1' AND '$datad2'";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}


function pegarTodosPedidosCE() {
	$sql = "SELECT endereco.cidade, COUNT(pedido.idPedido) AS quantidade"
                . " FROM pedido INNER JOIN endereco ON endereco.idendereco = pedido.idendereco "
                . "group by endereco.cidade";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

function buscarPorCidade($cidade)
{
    $sql = "SELECT e.idendereco, e.cidade, p.idPedido
            FROM pedido p";
	$resultado = mysqli_query(conn(), $sql);
	$pedido = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$pedido[] = $linha;
	}
	return $pedido;
}

function seleciona_pedidos_por_intervalo($data1, $data2){
    $sql = "select datacompra, total from pedido where datacompra>='$data1' and datacompra<='$data2'";
   
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}

function seleciona_pedidos_mensalmente($mes){
    $sql = "select datacompra, total from pedido where date_format(datacompra, '%m') = '$mes'";         
   
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}
function seleciona_pedidos_anualmente($ano){
    $sql = "select datacompra, total from pedido where date_format(datacompra, '%Y') = '$ano'";         
   
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}