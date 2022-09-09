<?php 
    
    Class Rotas{

        public static $pag;
        private static $pasta_controller = 'controller';
        private  static $pasta_view = 'view';

        static function get_SitePagPrincipal(){
            return Config::SITE_URL . '/' .Config::SITE_PASTA;
        }

        static function get_SitePagRaiz(){
            return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
        }

        static function get_SiteTemplate(){
            return self::get_SitePagPrincipal() . '/' . self::$pasta_view;
        }

        static function pag_Carrinho(){
            return self::get_SitePagPrincipal() . '/carrinho';
        }

        static function pag_teste(){
            return self::get_SitePagPrincipal() . '/teste';
        }


        static function PegarPagina () {
            
            if(isset($_GET['pag'])){

                $pagina = $_GET['pag'];

                self::$pag = explode('/', $pagina);

                $pagina = 'controller/' . self::$pag[0] . '.php';

                switch(self::$pag[0]){
                    case 'home':
                        require_once 'view/' . 'home.php';
                        break;
                }
               
                if(file_exists($pagina)){
                    require_once $pagina;
                }else{ 
                    if(self::$pag[0] != 'home'){
                        require_once 'error.php';
                    }            
                }
                   
            }else{
                require_once 'view/' . 'home.php';
            }
         
        }

    }

?>