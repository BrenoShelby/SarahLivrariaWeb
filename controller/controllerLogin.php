<?php

//importa a classe Login
include_once("../model/Login.php");

//cria um objeto do tipo Login
$login = new Login();

if (isset($_POST["login"])) {
    //executa o método FazerLogin() passando os valores do formulário
    $login->login($_POST["user"], $_POST["password"]);
}
if (isset($_POST["logout"])) {
    //executa o método fazerLogout()
    $login->logout();
}

?>