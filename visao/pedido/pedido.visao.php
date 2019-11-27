<form action="pedido/finalizar/<?= $total ?>" method="POST">
<div class="col-25">
    
    <h2 class="cadastroTitulo"> Verifique seus dados</h2>
    <div id="caixaCarrinho">
        <hr align="center" width="100%" size="1" >
              <?php  foreach ($produto as $prod): ?>
        <p><img id="imgProduto" src="<?=$prod['imagem']?>" alt="imagem"><a id="nomeProdutoFin" href="./produto/ver/<?= $prod["idproduto"] ?>"><?= $prod["nomeproduto"] ?></a><span id="precoProd">$<?= $prod["preco"] ?></span></p>
              <hr align="center" width="100%" size="1" >
              <?php endforeach; ?>
              <p id="total">Total <span class="price" style="color:black"><b>R$ <?= $total ?></b></span></p>
    </div>
</div>


<div id="caixaCarrinho">         
   <h2> Endereço de entrega:</h2>
        <hr>
       
       
		
		<?php foreach ($enderecos as $endereco): ?>
       

                    <input class="campoForm" type="radio" name="enderecos" value="<?=$endereco['idendereco']?>" ><br>
                                Rua: <?=$endereco['logradouro']?><br>
				Número:<?=$endereco['numero']?><br>
				Complemento:<?=$endereco['complemento']?><br>
				Bairro:<?=$endereco['bairro']?><br>
				Cidade: <?=$endereco['cidade']?><br>
				Cep:<?=$endereco['cep']?><br><br>
                                           
		<?php endforeach; ?>
<h4> Deseja atualizar seu endereço antes de finalizar sua compra <td><a href="./endereco/editar/<?=$endereco['idendereco']?>/<?=$endereco['idusuario']?>">Sim</a></h4>
			
</div>




<div id="caixaCarrinho">
    <h2> Formas de pagamento</h2> 
    
     <hr>
     <img id="imgPag"src="publico/imgs/pagamento.png" alt="formas de pagamento"><br><br>
     
    <?php foreach ($formapagamentos as $formapagamento): ?>
            
     <input class="campoForm" type="radio" name="formaPag" value="<?=$formapagamento['idformapagamento']?>" ><?=$formapagamento['descricao']?><br>
                
    <?php endforeach ?>
    
    <input type="submit" value="Finalizar Compra" class="btn">
 
</div>
    
</form>

<div id="caixaCarrinho">
    <h2> Possui cupom ou vale?</h2>
    
<form action="pedido/desconto" method="POST">  
    <hr>
         <h6> Informe aqui: </h6>

    <input type="text"  name="nomecupom">
         <br><br>        
<button class="btn" type="submit"> Aplicar</button>

</form> 
</div>