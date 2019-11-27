<html>
    <head>
        <title>World of books</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./publico/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .mySlides {display:none;}
    </style>
        
    </head>
    <body class="container">
	  <div id="page">
			<div class="header">
				<a id="linkMenu" href="#menu"><span></span></a>
                                <a href="./produto/listarProdutos"><img id="logo"src="publico/imgs/logo.png" alt="imagemlogo"></a>
				
				<div id="logos-menu">
			    <a id= "usuario-menu" href="./login/"><img id="logousuario"src="publico/imgs/logousuario.png" alt="imagemlogo"></a>
				<a id= "carrinho-menu" href="./sacola/mostrar"><img id="logocar"src="publico/imgs/logocar2.png" alt="imagemlogo"></a>
				</div>
				
			</div>
			
			<nav id="menu">
				<ul>
					<li><a href="./produto/listarProdutos">Home</a></li>
                                        
                                        <?php if (acessoPegarPapelDoUsuario() == 'Adm') { ?>
					<li><span>Administrador</span>
						<ul>
						
						<li><span>Usuário</span>
								<ul>
									<li><a href="./cliente/listarClientes">Listar</a></li>
                                                                        <li><a href="./cliente/Cadastro">Formulário</a></li>
								</ul>
							</li>
							
							<li><span>Produto</span>
								<ul>
									<li><a href="./produto/listarProdutosAdm">Listar Todos</a></li>
                                                                        <li><a href="./produto/adicionar">Formulário</a></li>
                                                                        <li><a href="./adm/listarQuantidadeEstoque">Listagem Quant. Estoque</a></li>
                                                                        <li><a href="./adm/listarProdutosCategoria">Listagem Por Categoria</a></li>
								</ul>
							</li>
							
							<li><span>Categoria</span>
								<ul>
									<li><a href="./categoria/listarCategorias">Listar</a></li>
                                                                        <li><a href="./categoria/adicionarCategoria">Formulário</a></li>
								</ul>
							</li>
							
							<li><span>Forma de Pagamento</span>
								<ul>
									<li><a href="./formapagamento/listarFormaPagamento">Listar</a></li>
                                                                        <li><a href="./formapagamento/adicionarFormapagamento">Formulário</a></li>
								</ul>
							</li>
							
							<li><span>Cupom</span>
								<ul>
									<li><a href="./cupom/listarCupom">Listar</a></li>
                                                                        <li><a href="./cupom/adicionarCupom">Formulário</a></li>
								</ul>
							</li>
							<li><span>Pedidos</span>
								<ul>
									<li><a href="./adm/listarPedidosPorData">Listagem Por Data </a></li>
                                                                        <li><a href="./adm/listarPedidosCE">Listagem Por Município</a></li>
								</ul>
							</li>
                                                        <li><span>Faturamento</span>
								<ul>
									<li><a href="./adm/total_do_faturamento">Faturamento Total</a></li>
                                                                        <li><a href="./adm/faturamento_anual">Faturamento Anual</a></li>
                                                                        <li><a href="./adm/faturamento_mensal">Faturamento Mensal</a></li>
								</ul>
							</li>
						</ul>
						
					</li>
                                        <?php } ?>
					
					<li><a id= "usuario-menu" href="./login/">Entre</a> <a href="#">ou</a><a id= "usuario-menu" href="./cliente/cadastro">Cadastre-se</a></li>
					<li><a href="cliente/ver/<?=acessoPegarUsuarioLogado();?>"> Minha Conta </a></li>
					<li><a href="./login/logout"> Logout</a></li>
					
				</ul>
			</nav>

    
      
          <form action="./busca/pesquisar" method="POST">
              <div id="Caixabusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar" name="pesquisar" required="">
            <button id="btnBusca">&#128269;</button> 
          </form>
      </div>

 
      
        


        <main class="container">
            <?php require $viewFilePath; ?>
            
        </main>


<div id="rodape">
	  
        <div id="esquerda">
          <h3 class="lorem-rodape">Lorem ipsum dolor</h3> 
          <p class="parag-rodape">Sed ut perspiciatis unde<br>
		  omnis iste natus error sit<br>
		  voluptatem accusantium<br>
		  doloremque laudantium,<br>
		  totam rem aperiam, eaque<br> 
		  ipsa quae ab illo inventore</p>
        </div>
        <div id="centro">
          <h3 class="lorem-rodape">Lorem ipsum dolor</h3> 
          <p class="parag-rodape">Sed ut perspiciatis unde<br>
		  omnis iste natus error sit<br>
		  voluptatem accusantium<br>
		  doloremque laudantium,<br>
		  totam rem aperiam, eaque<br> 
		  ipsa quae ab illo inventore</p>
        </div>
        <div id="direita">
          <h3 class="lorem-rodape">Lorem ipsum dolor</h3> 
          <p class="parag-rodape">Sed ut perspiciatis unde<br>
		  omnis iste natus error sit<br>
		  voluptatem accusantium<br>
		  doloremque laudantium,<br>
		  totam rem aperiam, eaque<br> 
		  ipsa quae ab illo inventore</p>
        </div>
        
       	
    
        <div id="endereco">
          <p id="p1">Endereço: Av. João Olímpio de Oliveira, 1561 - Vila Asem, Itapetininga - SP, 18202-000</p> 

        </div>
        <div id="icones">

          <div id="instagram">
            <a href="https://www.instagram.com/"
               target="_blank"><img id="insta" src="publico/imgs/instagram.jpg" style="margin-top: 1%"></a>

          </div>
          <div id="googleplus">
            <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
               target="_blank">
                <center><img src="publico/imgs/gplus.svg" style="margin-top: 15%"></center></a>

          </div>
          <div id="twitter">
            <a href="https://twitter.com/login?lang=pt"
               target="_blank">
              <center><img src="publico/imgs/twitter.svg" style="margin-top: 15%"></center></a>
          </div>

          <div id="facebook">
            <a href="https://pt-br.facebook.com/"
               target="_blank"> <center>
                    <img src="publico/imgs/facebook.svg" style="margin-top: 15%"></center></a>
          </div>
          
       </div>
	</div>
              
              <!-- mmenu scripts -->
		<script src="publico/dist/mmenu.polyfills.js"></script>
		<script src="publico/dist/mmenu.js"></script>
		<script>
			new Mmenu( document.querySelector( '#menu' ));

			document.addEventListener( 'click', function( evnt ) {
				var anchor = evnt.target.closest( 'a[href^="#/"]' );
				if ( anchor ) {
					alert('Thank you for clicking, but that\'s a demo link.');
					evnt.preventDefault();
				}
			});
		</script>
    </body>
</html>
