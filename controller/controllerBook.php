<?php

include_once('../model/dao/BookDAO.php');

$book = new BookDAO();

if (isset($_POST["create"])){
    // Executa o create do livro
}
if (isset($_POST["read"])){
    // Executa o read do livro
}
if (isset($_POST["update"])) {
    // Executa o update do livro
    $book->update(
        $_POST['titulo'], 
        $_POST['autor'], 
        (int) preg_replace('/[^0-9]/', '', $_POST['isbn']), 
        $_POST['editora'],
        $_POST['acabamento'],
        $_POST['ano_edicao'], 
        $_POST['preco'], 
        $_POST['quantidade'], 
        $_POST['descricao']
    );
}
if (isset($_POST["delete"])) {
    // Executa o delete do livro
    $book->delete($_POST["isbn"]);
}

?>