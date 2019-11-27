<?php

function inserirPedido($idUsuario, $idFormaPagamento, $idendereco, $total, $produtos) {
$sql = "INSERT INTO pedido (idUsuario,  idFormaPagamento, idendereco, datacompra, total) VALUES('$idUsuario', '$idFormaPagamento', '$idendereco', curdate(), '$total')"; 
$resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar Pedido' . mysqli_error($cnx)); }
    $idPedido = mysqli_insert_id($cnx);
    foreach ($produtos as $produto):
        $idProduto=$produto ['idproduto'];
        $sql = "insert into pedido_produto (idproduto, idpedido, quantidade) values('$idProduto', '$idPedido', '1')";                
        $resultado = mysqli_query($cnx = conn(), $sql);
     if(!$resultado) { die('Erro ao cadastrar Pedido' . mysqli_error($cnx)); }
        endforeach;
       
    return 'Pedido cadastrado com sucesso!';
}
function PedidosDoCliente($idUsuario){    
    $sql = "SELECT DATE_FORMAT (pedido.datacompra, '%d/%m/%y') as Data, total, idPedido FROM pedido WHERE idUsuario = idUsuario order by idPedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos=array();
    while($linha = mysqli_fetch_assoc($resultado)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}

function pegarPedidoPorId ($idpedido){
    $sql= "SELECT pedido.idpedido, usuario.nomeUsuario, formapagamento.descricao, endereco.logradouro, endereco.numero, endereco.complemento,"
            . "endereco.bairro, endereco.cidade, endereco.cep, DATE_FORMAT (pedido.datacompra, '%d/%m/%y') as Data, "
            . "pedido.total FROM usuario inner join endereco on usuario.idUsuario=endereco.idUsuario "
            . "inner join pedido on pedido.idendereco=endereco.idendereco "
            . "inner join formapagamento on pedido.idFormaPagamento= formapagamento.idFormaPagamento where idpedido= $idpedido";
    $resultado= mysqli_query(conn(), $sql);
    $detalhes= mysqli_fetch_assoc($resultado);
       return $detalhes;
}
function pegarProdutosPedido($idPedido){
    
        $sql = "select pedido_produto.idPedido, pedido_produto.idProduto, produtos.nomeproduto, produtos.preco, produtos.imagem from pedido_produto "
                . "inner join produtos on pedido_produto.idProduto = produtos.idProduto "
                . "where idPedido=$idPedido";    
        $resultado = mysqli_query($cnx = conn(), $sql);
        $produtos=array();
    while($linha = mysqli_fetch_assoc($resultado)){
        $produtos[] = $linha;
    }
    return $produtos;
}
?>