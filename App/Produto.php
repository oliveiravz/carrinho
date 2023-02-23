<?php

namespace App\Produto;

class Produto {

    private int $id;
    private String $descricao;
    private Float $quantidade;

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
     * @return Float
     */
    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setDescricao(String $descricao) {
        $this->descricao = $descricao;
    }

    public function setQuantidade(Float $quantidade) {
        $this->quantidade = $quantidade;
    }

}