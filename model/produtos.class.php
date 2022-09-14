<?php 
    Class Produtos extends Conexao{
        function __construct (){
            parent:: __construct ();
        }

        function GetProdutos (){
            //query para buscar um produto de uma categoria especifica.
            $this->query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = 
            c.cate_id";

            // $this -> query .= "ORDER BY pro_id DESC"; 

            $this -> ExecuteSQL($this->query);

            $this -> GetLista();

        }

       private function GetLista (){
            $i = 1;
            while($listagem = $this -> ListarDados ()):
           $this -> itens[$i] = array (
            'pro_id' => $listagem['pro_id'],
            'pro_nome' => $listagem['pro_nome'],
            'pro_desc' => $listagem['pro_desc'], 
            'pro_peso' => $listagem['pro_peso'],          
            'pro_valor' => $listagem['pro_valor'],
            'pro_altura' => $listagem['pro_altura'],
            'pro_largura' => $listagem['pro_largura'],
            'pro_comprimento' => $listagem['pro_comprimento'],
            'pro_img' => $listagem['pro_img'],
            'pro_slug' => $listagem['pro_slug'],
            // 'pro_ref' => $listagem['pro_ref'],
            'cate_nome' => $listagem['cate_nome'],
            'cate_id' =>  $listagem['cate_id']
           ); 

            $i++;
            endwhile;
        }
    }
?>