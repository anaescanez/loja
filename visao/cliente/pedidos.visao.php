  
<h2 class="cadastroTitulo"> Seus Pedidos:</h2>
        <hr align="center" width="100%" size="1" >
  
            <div id="caixaListarPedidos">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="thTodos"> Data da compra </th>
                            <th class="thTodos">  Total  </th>
                            <th class="thTodos"> Ver </th>
                        </tr>
                    </thead>
                    <?php foreach ($pedidos as $pedido):?>
                    
                    <tr>
                        <td class="tdTodos"><?= $pedido["Data"]?></td>
                        <td class="tdTodos"><?= $pedido["total"]?></td>                       
                        <td class="tdTodos" style="color:lightseagreen"><a href="./pedido/verDetalhesPedido/<?=$pedido["idPedido"]?>"> Ver Detalhes </a></td>
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>