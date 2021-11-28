<?php

class Book {
    private $titulo;
    private $autor;
    private $isbn;
    private $editora;
    private $acabamento;
    private $ano_edicao;
    private $preco;
    private $quantidade;
    private $descricao;

    function __construct($titulo, $autor, $isbn, $editora, $acabamento, $ano_edicao, $preco, $quantidade, $descricao)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->editora = $editora;
        $this->acabamento = $acabamento;
        $this->ano_edicao = $ano_edicao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->descricao = $descricao;
    }
    
    function setTitulo($titulo) { $this->titulo = $titulo; }
    function getTitulo() { return $this->titulo; }
    function setAutor($autor) { $this->autor = $autor; }
    function getAutor() { return $this->autor; }
    function setIsbn($isbn) { $this->isbn = $isbn; }
    function getIsbn() { return $this->isbn; }
    function setEditora($editora) { $this->editora = $editora; }
    function getEditora() { return $this->editora; }
    function setAcabamento($acabamento) { $this->acabamento = $acabamento; }
    function getAcabamento() { return $this->acabamento; }
    function setAno_edicao($ano_edicao) { $this->ano_edicao = $ano_edicao; }
    function getAno_edicao() { return $this->ano_edicao; }
    function setPreco($preco) { $this->preco = $preco; }
    function getPreco() { return $this->preco; }
    function setQuantidade($quantidade) { $this->quantidade = $quantidade; }
    function getQuantidade() { return $this->quantidade; }
    function setDescricao($descricao) { $this->descricao = $descricao; }
    function getDescricao() { return $this->descricao; }

}

?>