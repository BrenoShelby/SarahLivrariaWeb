<?php

class ClientDAO {
    function insert($name, $email, $sex, $password, $conn){
        try {
            $pdo = $conn;

            $stmt = $pdo->prepare("INSERT INTO cliente (nome, email, sexo, senha) VALUES (:nome, :email, :sexo, :senha)");

            $stmt->execute(array(
                "nome" => "$name", "email" => "$email", "sexo" => "$sex", "senha" => "$password" 
            ));

            echo "<script>alert('Cadastrado com sucesso!');";
        } catch (PDOException $e) {
            echo "Erro ao inserir! <br>" . $e->getMessage();
        }
    }
}

?>
