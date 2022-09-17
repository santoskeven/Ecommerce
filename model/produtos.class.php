<?php 
    Class Produtos extends Conexao{
        function __construct (){
            parent:: __construct ();
        }

        function GetProdutos (){
            //query para buscar um produto de uma categoria especifica.
            $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = 
            c.cate_id";

            $query .= " ORDER BY pro_id DESC"; 

            $this -> ExecuteSQL($query);

            $this -> GetLista();

        }

        function GetProdutosID ($id){
            //query para buscar um produto de uma categoria especifica.
            $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = 
            c.cate_id";

            $query .= " AND pro_id = {$id}"; 

            $this -> ExecuteSQL($query);

            $this -> GetLista();

        }


        function GetProdutosAll (){
            //query para buscar todos os elemento da tabela
            $query = "SELECT * FROM produtos";

            // $this -> query .= "ORDER BY pro_id DESC"; 

           $this -> ExecuteSQL($query);
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
            'pro_img' => Rotas::PegarImgLink($listagem['pro_img']),
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