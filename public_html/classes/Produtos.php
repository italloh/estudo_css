<?php

class Produtos {
    private $arrProduto;
    public function __construct() {
        $this->carregarJson();
    }
    
    private function carregarJson() {
        $string = file_get_contents("json/Produtos.json");
        $arrProduto = json_decode(utf8_encode($string),true);
        foreach( $arrProduto['Produto'] as $key =>  $arrProd ) {
            if ( $arrProd["Status"] === 1 ) {
                $this->arrProduto['Produto'][] = $arrProd;
            }
        }
    }
    
    public function pesquisar($conteudo,$start,$end) {
        $start = (is_null($start)) ? 0 : $start;
        $end = (is_null($end)) ? 5 : $end;
        $arr = $this->pesquisarPorNome($conteudo);
        $arr1 = $this->pesquisarPorId($conteudo);
        $arrMerge = array_merge($arr,$arr1);
        $arr = array();
        $count = (!array_key_exists('Produto',$arrMerge) || count($arrMerge['Produto']) === 0 )
                    ? 1 : count($arrMerge['Produto']);
        $arr['totalPaginas'] = ceil( $count / ($end-$start));
        $arr['pagina'] = ceil($end / $count );
        $arr['produtos'] = array();
         for ( $i=$start; $i<$end; $i++ ) {
            if ( isset($arrMerge['Produto'][$i]) ) {
                $arr['produtos'][] = $arrMerge['Produto'][$i];
            }
        }
        return $arr;
    }
    
    public function pesquisarPorNome($nome) {
        $arr = array();
        $arrNome = explode(" ",$nome);
        foreach ( $arrNome as $nome) {
            foreach ( $this->arrProduto['Produto'] as $arrProd ) {
                if ( stripos($arrProd['Nome'],$nome) !== false || empty($nome) === true ) {
                $arr['Produto'][] = $arrProd;
                }
            }   
        }
        return $arr;
    }
    
    public function pesquisarPorId($codigo) {
        $arr = array();
        foreach ( $this->arrProduto['Produto'] as  $arrProd ) {
            if ( $arrProd['ProdutoId'] == $codigo || empty($codigo) === true ) {
                $arr['Produto'][] = $arrProd;
            }
        }
        return $arr;
    }
    
    public function listarAleatorio() {
        srand((float)  microtime() * 10000 ) ;
        $arr = array_rand($this->arrProduto['Produto'],3);
        $produtos['produtos'] = array();
        foreach ( $arr as $valor ) {
            $produtos['produtos'][] = $this->arrProduto['Produto'][$valor];
        }
        return $produtos;
    }
    
    public static function RESUMIR_NOME_PRODUTO($nome) {
        if (strlen(trim($nome)) > 48 ) {
            return substr($nome,0,45)."...";
        }
        return $nome;
    }
}