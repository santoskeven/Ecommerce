<?php 
    $rota = Rotas::get_SiteTemplate();
    
    // echo Rotas::get_SitePagPrincipal();

    $banco = new Blog();
    $PaginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    $TotalPorPagina = 4;

    $depoimentos = $banco->listarEventos(($PaginaAtual-1) * $TotalPorPagina, $TotalPorPagina);

?>

    <div class="topo">
        <h2>#readmore</h2>
        <p>read hall case studies about our products!</p>
    </div>

    <?php 
         $blog = new Conexao();
         $sql = "SELECT * FROM blog";
         $blog->ExecuteSQL($sql);
     
        //  $depoimentos = $blog->ListarDadosAll();

         foreach($depoimentos as $key => $value){
    ?>

        <section class="content_blog">
            <div class="img_data">
                <h2><?php echo $value['data']?></h2>
                <img src="<?php echo $rota ?>/imgs/<?php echo $value['imagem']?>">
            </div>
            <div class="infos_content">
                <div class="limit_text">
                    <h2><?php echo $value['titulo']?></h2>
                    <p><?php echo $value['desc']?></p>
                </div>

                <div class="line_cont"><p>continue reading</p> <span class="line"></span> </div>
            
            </div>
        </section>

    <?php }?>
   
    <section class="paginacao">
        <?php 
            $TotalPorPagina = ceil(count($banco->listarEventos()) / $TotalPorPagina);
            $link = Rotas::get_SitePagPrincipal();

            for ($i=1; $i <= $TotalPorPagina; $i++) { 
                if($i == $PaginaAtual)
                    echo '<a href="'.$link.'blog?pagina='.$i.'" class="link_atc">'.$i.'</a>';
                else
                    echo '<a href="'.$link.'blog?pagina='.$i.'">'.$i.'</a>';
            }
        ?>
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
    </section><!--NotNovidades-->

