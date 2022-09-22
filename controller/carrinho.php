
<?php 
    $rota = 'http://localhost/Keven/loja';
?>

    <div class="topoSobre">
        <h2>#readmore</h2>
        <p>read hall case studies about our products!</p>
    </div>

    <section class="contentCarrinho">
        <div class="CarTitles">
            <span>Selec</span>  
            <span>Remover</span>       
            <span>Imagem</span> 
            <span>Produto</span>
            <span>Preço</span>
            <span>Quantidade</span>
            <span>SubTotal</span>
        </div>

        <div class="carInfos">
            <span><input type="checkbox"></span>  
            <span><i class="fa-solid fa-xmark"></i></span>       
            <span><img src="<?php echo $rota?>/media/imgs/roupas/camisa1.png"></span> 
            <span>Camisa preta simples</span>
            <span>R$ 60.00</span>
            <span><input value="1" type="number"></span>
            <span>R$ 60.00</span>
        </div>

        <div class="carInfos">
            <span><input type="checkbox"></span>  
            <span><i class="fa-solid fa-xmark"></i></span>       
            <span><img src="<?php echo $rota?>/media/imgs/roupas/camisa1.png"></span> 
            <span>Camisa preta simples</span>
            <span>R$ 60.00</span>
            <span><input value="1" type="number"></span>
            <span>R$ 60.00</span>
        </div>

        <div class="carInfos">
            <span><input type="checkbox"></span>  
            <span><i class="fa-solid fa-xmark"></i></span>       
            <span><img src="<?php echo $rota?>/media/imgs/roupas/camisa1.png"></span> 
            <span>Camisa preta simples</span>
            <span>R$ 60.00</span>
            <span><input value="1" type="number"></span>
            <span>R$ 60.00</span>
        </div>

        <div class="FinalBuy">
            <div class="cupom">
                <h2>Aplicar cupom</h2>
                <form>
                    <input type="text">
                    <input type="submit" value="aplicar"> 
                </form>
            </div>
            <div class="finalValores">
                <h2>Resumo Do Pedido</h2>
                <table style="width:100%">
                    <tr>
                      <td>Valor do pedido</td>
                      <td>R$ 335</td>
                    </tr>
                    <tr>
                      <td>Envio</td>
                      <td>Free</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>R$ 335</td>
                      </tr>
                  </table>
            </div>
        </div>

     
    </section>

    <!-- <section class="content">
       
    </section> -->
    