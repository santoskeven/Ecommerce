<?php 
    require_once'./lib/autoload.php';

    $rota = Rotas::get_SiteTemplate();
    
    $conectarBanco = new Conexao();

    $sql = "SELECT * FROM produtos";
    $conectarBanco->ExecuteSQL($sql);

    // echo 'etssdf';
//    echo $conectarBanco->LinkAtivo();

    // echo '<pre>';
    // // var_dump($conectarBanco->ListarDadosAll());
    // echo '</pre>';
   

    // $listar = $conectarBanco->ListarDados();

    // echo $conectarBanco->TotalDados();
?>

<!-- // 

// //ABAIXO PARA O PHPMailer
// // use PHPMailer\PHPMailer\PHPMailer;
// // use PHPMailer\PHPMailer\Exception;
// // require 'Exception.php';
// // require 'PHPMailer.php';
// // require 'SMTP.php';
// // $mail = new PHPMailer();
// // $mail = new PHPMailer(true);

// // Rotas::PegarPagina();
 -->

<!DOCTYPE html>

<html>

    <head>
        <title><?php echo Config::SITE_NOME ?></title>
        <meta charset="UTF-8">
        <link href="<?php echo $rota ?>/tema/css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>

    <body>

        <header class='main_header'>
            <img src="<?php echo $rota ?>/imgs/logo.png">
            
            <!-- <?php 
            // echo Rotas::get_SitePagPrincipal();
            ?> -->

            <nav>
                <ul id="MobileMenu">
                    <li <?php echo $conectarBanco->LinkAtivo('http://localhost/Keven/loja/')?>><a href="<?php echo Rotas::get_SitePagPrincipal()?>">Home</a></li>
                    <li <?php echo $conectarBanco->LinkAtivo('produtos') ?>><a href="<?php echo Rotas::pag_produtos()?>">Produtos</a></li>
                    <li <?php echo $conectarBanco->LinkAtivo('blog') ?>><a href="<?php echo Rotas::pag_blog()?>">Blog</a></li>
                    <li <?php echo $conectarBanco->LinkAtivo('sobre') ?>><a href="<?php echo Rotas::pag_about()?>">Sobre</a></li>
                    <li <?php echo $conectarBanco->LinkAtivo('contato') ?>><a href="<?php echo Rotas::pag_contato()?>">Contato</a></li>
                    <li <?php echo $conectarBanco->LinkAtivo('carrinho') ?>><a href="<?php echo Rotas::pag_Carrinho()?>"><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
            </nav>
            <i id="mobile" class=" fa-solid fa-bars"></i>
        </header>

        <?php 
             Rotas::PegarPagina ();
        ?>

        <footer>
            <section class="f_uteis">
            <div class="f_contato">
                <img src="<?php  echo $rota ?>/imgs/logo.png">
    
                <h2 style="padding: 1rem 0">Contacts</h2>
    
                <p><b>Address:</b>Rua  BH1 NILO PEREIRA 1332</p>
                <p><b>Phone:</b>(92) 992957686</p>
                <p><b>Hours</b>10:00 - 18:00 seg - sex</p>
    
                <h2 style="padding: 1rem 0">Follow Us</h2>
    
                <div class="contatcFollowsImg">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a> 
                </div>
            </div><!--f_contato-->
    
            <div class="f_about">
                <h2>About</h2>
                <p>Lorem ipsun dolor amet</p>
                <p>Lorem ipsun dolor</p>
                <p>Lorem ipsun amet</p>
                <p>Lorem ipsun dolo amet</p>
                <p>Lorem ipsun</p>
            </div><!--f_about-->
    
            <div class="f_install">
                <h2>Install App</h2>
                <p style="padding: 1rem 0">lorem ipsum dolor amet</p>
    
                <div class="contentStore">
                    <div class="apllestyle">
                        <i class="fa-brands fa-apple"></i>
                        <span>
                            <p>development the</p>
                            <b> app store</b>
                        </span>
                    </div>
                    <div class="googlestyle">
                    <i class="fa-brands fa-google-play"></i>
                    <span>
                        <p>Google Play</p>
                        
                    </span>
                </div>
                </div>
    
                <p style="padding: 1rem 0">Segure Payment GateWays</p>
    
                <div class="cartoes">
                    <img src="<?php  echo $rota ?>/imgs/cartoes/visa.png">
                    <img src="<?php  echo $rota ?>/imgs/cartoes/mastercard.png">
                    <img src="<?php  echo $rota ?>/imgs/cartoes/mastro.png">
                    <img src="<?php  echo $rota ?>/imgs/cartoes/amex.png">
                </div>
            </div><!--f_install-->
    
            </section><!--f_uteis-->
            <div style="width: 100%; padding: 3rem 2%; text-align: center; font-size: 1.5rem">2022 tech - HTML CSS EComercie Template</div>
        </footer>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsM0UCAfKbsVjwYjveeWhfcOaELswj7R8" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/fb43290b99.js" crossorigin="anonymous"></script>
        <script src="<?php  echo $rota ?>/tema/js/func.js"></script>

    </body>

</html>