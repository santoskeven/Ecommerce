<div class="TopoProdut">
        <h2>#stayHome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </div>

<section class="produtos_container">

    <section class="prod_conteudo">

        <div class="MostrarProduto_1">

            <?php 

            $produtos = new Produtos();
            $produtos->GetProdutos();

            // echo '<pre>';
            // var_dump($produtos->GetItens());
            // echo '</pre>';

            $itens = $produtos->GetItens();
      
            foreach($itens as $key => $value){
                // echo $key;
               $ref_Slug = $value['pro_id'].'/'.$value['pro_slug'];
            ?>

                <div class="wrap">
                    <div class="ProdUnico">
                        <div class="imgProdU">
                            <a href="infoProdutos/<?php echo $ref_Slug?>"><img src="<?php echo $value['pro_img'] ?>"></a>
                        </div>
                        <div class="Info_ProdUnico">
                            <p><?php echo $value['pro_desc'];?></p>
                            <h4><?php echo $value['pro_nome'];?></h4>
                            <div class="InfoEstrelas">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="Preco_Carrinho">
                                <p>$<?php echo $value['pro_valor'];?></p>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>                            
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
            
    </section>

    <section class="prod_conteudo">

        <header>
            <h2>Feature Products</h2>
            <p>Summer collection New Modern Design</p>
        </header>

        <div class="MostrarProduto_1">

            <?php 

            $produtos = new Produtos();
            $produtos->GetProdutos();

            // echo '<pre>';
            // var_dump($produtos->GetItens());
            // echo '</pre>';

            $itens = $produtos->GetItens();
      
            foreach($itens as $key => $value){
                // echo $key;
               $ref_Slug = $value['pro_id'].'/'.$value['pro_slug'];
            ?>

                <div class="wrap">
                    <div class="ProdUnico">
                        <div class="imgProdU">
                            <a href="infoProdutos/<?php echo $ref_Slug?>"><img src="<?php echo $value['pro_img'] ?>"></a>
                        </div>
                        <div class="Info_ProdUnico">
                            <p><?php echo $value['pro_desc'];?></p>
                            <h4><?php echo $value['pro_nome'];?></h4>
                            <div class="InfoEstrelas">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="Preco_Carrinho">
                                <p>$<?php echo $value['pro_valor'];?></p>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>                            
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </section>

    <section class="NotNovidades">
        <div class="esquerda">
            <h3>Sing Up For NewLetters</h3>
            <p>Get email updates about our latest shop and <b>special affers</b></p>
        </div>

        <div class="direita">
            <form>
                <input type="text" placeholder="Digite seu Email"> 
                <input type="submit">
            </form>
        </div>
    </section>

</section>