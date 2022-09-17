<?php 
    
    Class Rotas{

        public static $pag;
        private static $pasta_controller = 'controller';
        private  static $pasta_view = 'view';

        static function get_SitePagPrincipal(){
            return Config::SITE_URL . '/' . Config::SITE_PASTA;
        }

        static function get_SitePagRaiz(){
            return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
        }

        static function get_SiteTemplate(){
            return self::get_SitePagPrincipal()  . self::$pasta_view;
        }

        static function pag_produtos(){
            return self::get_SitePagPrincipal() . 'produtos';
        }

        static function pag_blog(){
            return self::get_SitePagPrincipal() . 'blog';
        }

        static function pag_about(){
            return self::get_SitePagPrincipal() . 'sobre';
        }

        static function pag_contato(){
            return self::get_SitePagPrincipal() . 'contato';
        }

        static function pag_Carrinho(){
            return self::get_SitePagPrincipal() . 'carrinho';
        }



        static function PegarPagina () {
            
            if(isset($_GET['pag'])){

                $pagina = $_GET['pag'];

                self::$pag = explode('/', $pagina);

                $pagina = 'controller/' . self::$pag[0] . '.php';
               
                if(file_exists($pagina)){
                    require_once $pagina;
                }else{ 
                    require_once 'error.php';    
                }
                   
            }else{
                require_once 'view/' . 'home.php';
            }
         
        }

        static function PegarImgPasta(){
            return 'media/imgs/roupas/';
        }

        static function PegarImgUrl(){
            return self::get_SitePagPrincipal() . '/' . self::PegarImgPasta(); 
        }

        static function PegarImgLink($img){
            $imagem = self::PegarImgUrl() . $img ;
           return $imagem;
        }
 
    }

?>