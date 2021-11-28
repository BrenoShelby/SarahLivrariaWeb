<?php
class ConnectionDB{
    function connect(){
        try {

            $conn = new PDO("mysql:host=localhost;dbname=exemplo_bd", "root", "");

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "<p style='font-size:20px;color:blue;'>Conexão com banco realizada com sucesso!</p>";

            return $conn;
        } catch (PDOException $e) {
            echo "Erro ao conectar! <br>" . $e->getMessage();
        }
    }
}
?>