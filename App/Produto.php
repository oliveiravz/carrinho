<?php
namespace App;

class Produto {

    private $id;
    private $descricao;
    private $quantidade;
    private $preco;

    public function __construct(int $id, string $descricao, int $quantidade, float $preco) {
        
        $this->id = $id;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        
    }
    
   /**
     * @return Int;
    */
    public function getId() {
        return $this->id;
    }

    /**
     * @return String
    */
    public function getDescricao() {
        return $this->descricao;
    }

    /**
     * @return int
     */
    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setDescricao(String $descricao) {
        $this->descricao = $descricao;
    }

    public function setQuantidade(int $quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setPreco(float $preco) {
        $this->preco = $preco;
    }

}
