<?php
namespace App\carrinho;

use App\produto\Produto;
use exceptions\CarrinhoVazioException;
use exceptions\QuantidadeException;

class Carrinho {

    private array $produtos = [];

    /**
     * @param object $produto
     * @return array
     */
    public function adicionar(Produto $produto = null) {

        if(empty($produto)) {
            throw new CarrinhoVazioException();
        }

        if($produto->getQuantidade() > 20) {
            throw new QuantidadeException();
        }

        $this->produtos[] = $produto;

        return $produtos ?? [];
    
    }

    public function remover(int $id) {

        if(isset($this->produtos)) {

            for ($i=0; $i < count($this->produtos); $i++) { 
                if($this->produtos[$i]->getId() == $id) {
                    unset($this->produtos[$i]);
                }
            }
        }
    }

    /**
     * @param int $id
     * @param int $novaQuantidade
     * void
     */
    public function alterarQuantidadeUnidadeItem(int $id, int $novaQuantidade = null) {

        if(isset($this->produtos)) {
            for ($i=0; $i < count($this->produtos); $i++) { 
                if($this->produtos[$i]->getId() == $id) {
                    $this->produtos[$i]->setQuantidade($novaQuantidade);
                }
            }   
        }
    }

    /**
     * @return int
     */
    public function totalItensCarrinho() {

        if(!empty($this->produtos)) {
            $totalItens = count($this->produtos);
        }

        return $totalItens ?? 0;
    }

    /**
     * @return int
     */
    public function quantidadeUnidadePorItem() {

        $arrQuantidadeItens = [];
        if(!empty($this->produtos)) {
            foreach($this->produtos as $key => $value) {
                $arrQuantidadeItens[] = $value->getQuantidade();
            }
        }

        return array_sum($arrQuantidadeItens);
    }

    /**
     * @return array
     */
    public function valorTotalPorUnidade() {

        $arrValores = [];

        foreach($this->produtos  as $key => $value) {
            $arrValores[] =  $value->getQuantidade() * $value->getPreco();
        }

        return $arrValores;
    }

    /**
     * @return float
     */
    public function descontoProdutoMaisBarato() {

        $arrValores = [];

        foreach($this->produtos  as $key => $value) {
            $arrValores[] =  $value->getQuantidade() * $value->getPreco();
        }
        
        if(count($arrValores) > 0) {
            $menorValor = min($arrValores);
        }

        $desconto = ($menorValor * 25) / 100;
        
        return $desconto ?? 0;
    }

    /**
     * @return float
     */
    public function valorTotalCarrinho() {

        $total = 0;

        foreach($this->produtos as $key => $value) {
            $total += $value->getQuantidade() * $value->getPreco();

        }
        
        return $total;
    }

    /**
     * @return float
     */
    public function valorTotalCarrinhoComDesconto() {
        
        $totalComDesconto = $this->valorTotalCarrinho() - $this->descontoProdutoMaisBarato();
        
        return $totalComDesconto ?? 0;
        
    }

}