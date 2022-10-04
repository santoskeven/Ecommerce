<?php 

    $produtos = new Produtos();
    $produtos->GetProdutosID(Rotas::$pag[1]);

    $itens = $produtos->GetItens();

    foreach($itens as $key => $value){
?>

<section class="info_cont">

    <div class="cont_imgs">

        <div class="img_princ">
            <img src="<?php echo $value['pro_img'] ?>">
        </div>

       
        <div class="imgs_previus">
            <div class="scroll">
            <?php 
                $produtos->GetProdutos();

                $previous = $produtos->GetItens();
                    foreach($previous as $key => $value){
            ?>
                <div class="previus_single">
                    <img src="<?php echo $value['pro_img'] ?>">
                </div>
            <?php } ?>
            </div>
        </div>
       

    </div>

    <div class="infos_prod">

        <span><a href="">Home</a> / <a href=""><?php echo $value['pro_nome']?></a></span>

        <h2>Men's fashion <?php echo $value['pro_nome']?></h2>

        <h3>R$ <?php echo $value['pro_valor']?></h3>

        <div class="prod_options">

            <select>
                <option>Select size</option>
                <option>m</option>
                <option>p</option>
                <option>g</option>
            </select>

            <input type="number" value="1">

            <button>Carrinho</button>

        </div>

        <div class="info_detalhes">
        <h2>Detalhes do Produto</h2>
        <p><?php echo $value['pro_desc'] ?></p>
        </div>  

    </div>

</section>

<section class="produtos_container">

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
                // var_dump($itens)
            ?>

                <div class="wrap">
                    <div class="ProdUnico">
                        <div class="imgProdU">
                        <a href="infoProdutos/ <?php echo $value['pro_slug'] ?>"><img src="<?php echo $value['pro_img'] ?>"></a>
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

</section>

<?php } ?>

