<?php 

    Class Blog extends Conexao{

        function __construct (){
            parent:: __construct ();
        }

        function listarEventos($inicio = NULL, $fim = NULL) {

            $query = "SELECT * FROM blog";
            
            if($inicio == NULL && $fim == NULL){
                $query .= ' ORDER BY id ASC';
                $this -> ExecuteSQL($query);
            }else {
                $query .= " ORDER BY id ASC LIMIT $inicio, $fim";
                $this -> ExecuteSQL($query);
            }

            return $this -> ListarDadosAll();

        }


        // private function Val_blog () {
        //     $i = 1;
        //     while($lista = $this -> ListarDados()):
        //         $this -> itens[$i] = array (
        //             'imagem' => $lista['imagem'],
        //             'titulo' => $lista['titulo'],
        //             'desc' => $lista['desc'],
        //             'data' => $lista['data']
        //         );
        //       $i++;
        //     endwhile;
        // }
 
    }

?>