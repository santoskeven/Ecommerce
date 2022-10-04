<?php 
    Class Produtos extends Conexao{
        function __construct (){
            parent:: __construct ();
        }

        function GetProdutos (){
            //query para buscar um produto de uma categoria especifica.
            $query = "SELECT * FROM {$this->prefix}categorias c INNER JOIN {$this->prefix}produtos p ON p.pro_cate = 
            c.cate_id ";

            $query .= " ORDER BY pro_id DESC"; 

            $this -> ExecuteSQL($query);

            $this -> GetLista();

        }

        function GetProdutosCateHome ($id){
            //query para buscar um produto de uma categoria especifica.
            $query = "SELECT * FROM {$this->prefix}categorias c INNER JOIN {$this->prefix}produtos p ON p.pro_cate = 
            c.cate_id ";

            $query .= "  AND cate_id = {$id} LIMIT 8"; 

            $this -> ExecuteSQL($query);

            $this -> GetLista();

        }

        function GetProdutosCateProd ($id){
            //query para buscar um produto de uma categoria especifica.
            $query = "SELECT * FROM {$this->prefix}categorias c INNER JOIN {$this->prefix}produtos p ON p.pro_cate = 
            c.cate_id ";

            $query .= " AND cate_id = {$id}"; 

            $this -> ExecuteSQL($query);

            $this -> GetLista();

        }

        function GetProdutosID ($id){
            //query para buscar um produto de uma categoria especifica.
            $query = "SELECT * FROM {$this->prefix}categorias c INNER JOIN {$this->prefix}produtos p ON p.pro_cate = 
            c.cate_id ";

            $query .= " AND pro_id = {$id}"; 

            $this -> ExecuteSQL($query);

            $this -> GetLista();

        }


        function GetProdutosAll(){
            //query para buscar todos os elemento da tabela
            $query = "SELECT * FROM produtos";

            // $this -> query .= "ORDER BY pro_id DESC"; 

           $this -> ExecuteSQL($query);
        }

       private function GetLista (){
            $i = 1;
            while($lista = $this -> ListarDados()):
           $this -> itens[$i] = array (
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_desc' => $lista['pro_desc'], 
            'pro_peso' => $lista['pro_peso'],          
            'pro_valor' => $lista['pro_valor'],
            'pro_altura' => $lista['pro_altura'],
            'pro_largura' => $lista['pro_largura'],
            'pro_comprimento' => $lista['pro_comprimento'],
            'pro_img' => Rotas::PegarImgLink($lista['pro_img']),
            'pro_slug' => $lista['pro_slug'],
            // 'pro_ref' => $lista['pro_ref'],
            'cate_nome' => $lista['cate_nome'],
            'cate_id' =>  $lista['cate_id']
           ); 

            $i++;
            endwhile;
        }
    }
?>