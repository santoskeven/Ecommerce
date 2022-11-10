<?php 
    $rota = Rotas::get_SiteTemplate();

?>
<section class="header_container">

    <section  class="conteudo">
        <div class="content_esquerdo">
            <h3>Trade-in-offer</h3>
            <h2>Super values deals</h2>
            <h2>On all products</h2>
            <p>Sava more with coupons & up to 70% off!</p>
            <button>Shop Now</button>
        </div><!--content_esquerdo-->
        
            <!---->

        <img src="<?php echo $rota?>/imgs/img2.png">
    </section><!--content-->

</section> 

<section class="produtos_container">
    
    <header>
        <div class="Prod_Link_Uteis">
            <img src="<?php echo $rota?>/imgs/phonework.png">
            <p class="color1">Free Shipping</p>
        </div>
        <div class="Prod_Link_Uteis">
            <img src="<?php echo $rota?>/imgs/timework.png">
            <p  class="color2">Online Order</p>
        </div>
        <div class="Prod_Link_Uteis">
            <img src="<?php echo $rota?>/imgs/pig.png">
            <p  class="color3">Save Money</p>
        </div>
        <div class="Prod_Link_Uteis">
            <img src="<?php echo $rota?>/imgs/promo.png">
            <p  class="color4">Promotions</p>
        </div>
        <div class="Prod_Link_Uteis">
            <img src="<?php echo $rota?>/imgs/sell.png">
            <p  class="color5">Happy Sell</p>
        </div>
        <div class="Prod_Link_Uteis">
            <img src="<?php echo $rota?>/imgs/suporte.PNG">
            <p  class="color6">F24/7 suporte</p>
        </div>
    </header>

    <section class="prod_conteudo">

        <header>
            <h2>Feature Products</h2>
            <p>Summer collection New Modern Design</p>
        </header>

        <div class="MostrarProduto_1">
            <?php 
               
            $produtos = new Produtos();
            $produtos->GetProdutosCateHome(1);

            $itens = $produtos->GetItens();

                foreach($itens as $key => $value){
                      $ref_Slug = $value['pro_id'].'/'.$value['pro_slug'];

            ?>
            <div class="wrap">
                <div class="ProdUnico">
                    <div class="imgProdU">
                       <a href="infoProdutos/<?php echo $ref_Slug?>"><img src="<?php echo $value['pro_img']?>"></a>
                        </div>
                        <div class="Info_ProdUnico">
                            <p><?php echo $value['pro_slug']?></p>
                            <h4><?php echo $value['pro_nome']?></h4>
                            <div class="InfoEstrelas">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="Preco_Carrinho">
                                <p>$ <?php echo $value['pro_valor']?></p>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>                            
                        </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </section>

    <div class="ShowPromo">
        <div class="cont_text">
            <h2>Repair Services</h2>  
            
            <p>Up To <b>70% Off</b> - All t-shirts & acessories</p>

            <button>Explore More</button>
        </div>
        <img src="<?php echo $rota ?>/imgs/oculos2.png">
    </div>

    <section class="prod_conteudo">

        <header>
            <h2>Feature Products</h2>
            <p>Summer collection New Modern Design</p>
        </header>

        <div class="MostrarProduto_1">
            <?php 
              $produtos = new Produtos();
              $produtos->GetProdutosCateHome(2);
  
              $itens = $produtos->GetItens();

                foreach($itens as $key => $value){
                    $ref_Slug = $value['pro_id'].'/'.$value['pro_slug'];
            ?>
            <div class="wrap">
                <div class="ProdUnico">
                    <div class="imgProdU">
                       <a href="infoProdutos/<?php echo $ref_Slug?>"><img src="<?php echo $value['pro_img']?>"></a>
                        </div>
                        <div class="Info_ProdUnico">
                            <p><?php echo $value['pro_slug']?></p>
                            <h4><?php echo $value['pro_nome']?></h4>
                            <div class="InfoEstrelas">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="Preco_Carrinho">
                                <p>$ <?php echo $value['pro_valor']?></p>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>                            
                        </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </section>

     <div class="cont_hot_categ">
        <div class="hot_unic w50 categ_hot_1">
            <span>crazy deals</span>
            <h2>buy 1 get 1 free</h2>
            <p>the best classic  dress is an  sale at cara</p>

            <button>Learn More</button>
        </div>
        
        <div class="hot_unic w50 categ_hot_2">
            <span>spring/summer</span>
            <h2>upcomming season</h2>
            <p>the best classic  dress is an  sale at cara</p>

            <button>Learn More</button>
        </div>

        <div class="hot_unic w30 categ_hot_3 hot_color">
            <h2>SEASON SALE</h2>
            <p>winter Collection 50% Off</p>
        </div>

        <div class="hot_unic w40 categ_hot_4 hot_color">
            <h2 style="font-size: 2.4rem">NEW FOOTWEAR COLLECTION</h2>
            <p>spring/summer</p>
        </div>

        <div class="hot_unic w30 categ_hot_5 hot_color">
            <h2>T-SHIRTS</h2>
            <p>New Trandy Prints</p>
        </div>
    </div>

    <section class="NotNovidades">
        <div class="esquerda">
            <h3>Sing Up For NewLetters</h3>
            <p>Get email updates about our latest shop and <b>special affers</b></p>
        </div>

        <div class="direita">
            <form id='SubForm' >
                <input type="text" placeholder="Digite seu Email"> 
                <input type="submit">
            </form>
        </div>
    </section>

</section>

