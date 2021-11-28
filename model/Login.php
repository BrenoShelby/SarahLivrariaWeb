<?php

include_once("../model/ConnectionDB.php");

class Login
{
    private $usuario;
    private $senha;

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($user)
    {
        $this->usuario = $user;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function login($user, $password)
    {
        // Inicia a sessão
        session_start();

        // Cria variáveis de sessão e atribui os valores recebidos por parâmetro
        $_SESSION["user"] = $user;
        $_SESSION["password"] = $password;

        $conn = new ConnectionDB();

        $query = (
            $conn->
            connect()->
            query("SELECT * FROM cliente WHERE email = '$user' and senha = '$password'")
        );

        if ($query->rowCount() === 0) {
            header("location:../view/login_access_denied.html");
        } else {
            header("location:../cadastroLivro.html");
        }
        }

   function logout()
    {
        session_start();
        session_destroy();
        unset($_SESSION);
        header("location:../cadastroLivro.html");
    }
}