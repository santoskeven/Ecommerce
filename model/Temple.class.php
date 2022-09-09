<?php 

    Class Template extends Smarty{
        function __construct(){
            parent:: __construct();

            //com esses 3 comandos eu especifico o diretório onde serão criados a pasta COMPILE/CACHE 
            //e onde é o diretório que deve ser acessado para o index ser obtido
            $this -> setTemplateDir('view/');
            $this -> setCompileDir('view/compile/');
            $this -> setCacheDir('view/cache/');
        }
    }

?>