<?php

function buscar($buscar) {
    $sql = "select * from produtos where nomeproduto like '%$buscar%'";
    $resultado = mysqli_query($cnx = conn (), $sql);

    if(!$resultado) {
        echo mysqli_error($cnx);
    }

    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}