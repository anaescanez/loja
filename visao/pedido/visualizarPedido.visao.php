
        <h2 class="cadastroTitulo">Ver detalhes do Pedido</h2>
        <div class="visualizarPedido">
        <p>Nome do Cliente: <?=$pedido['nomeUsuario']?></p>
        <p>Data Da Compra: <?=$pedido['Data']?></p>
        <p>Total Da Compra: <?=$pedido['total']?></p>
        <p>Forma de Pagamento: <?=$pedido['descricao']?></p>
        <p>Endereço: <?=$pedido['logradouro']?></p> 
        <p>Nº: <?=$pedido['numero']?></p>
        <p>Complemento: <?=$pedido['complemento']?></p>
        <p>Bairro: <?=$pedido['bairro']?></p>
        <p>Cidade: <?=$pedido['cidade']?></p>
        </div>
        <div class="visualizarPedido">
         <?php  foreach ($produtos as $produto): ?>
        <p>Nome Produto: <?=$produto['nomeproduto']?></p>
        <p>Preço: <?=$produto['preco']?></p>
        <p><img id="imgProduto" src="<?=$produto['imagem']?>" alt="imagem"></p>
          <?php endforeach; ?>
        <br><a href="./cliente/MeuPedido"><button class="btn">Voltar</button></a>
        </div>
        
