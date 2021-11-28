<?php

include_once('../model/ConnectionDB.php');

class BookDAO {
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectionDB();
    }

    function delete($isbn)
    {
        try {

            $delete =  $this->conn->connect()->prepare("DELETE FROM book WHERE isbn = $isbn");
            $delete->execute();

            echo "<script>alert('" .  $delete->rowCount() .
                " Usuário deletado com sucesso!');" .
                " window.location = '../view/pesquisaLivro.php';</script>";
        } catch (PDOException $e) {
            echo "Erro ao excluir " . $e->getMessage();
        }
    }

    function update($titulo, $autor, $isbn, $editora, $acabamento, $ano_edicao, $preco, $quantidade, $descricao)
    {
        try {
            $editar = (
                $this->
                conn->
                connect()->
                query(
                    "UPDATE book SET titulo='$titulo', autor='$autor', editora='$editora', acabamento='$acabamento', 
                    ano_edicao='$ano_edicao', preco='$preco', quantidade='$quantidade', descricao='$descricao' WHERE isbn=$isbn"
                    )
                );
            
            $editar->execute();

            echo "UPDATE book SET titulo='$titulo', autor='$autor', editora='$editora', acabamento='$acabamento', 
            ano_edicao='$ano_edicao', preco='$preco', quantidade='$quantidade', descricao='$descricao' WHERE isbn=$isbn";
            
            echo "<script>alert('Alterado com sucesso!');</script>";
        } catch (PDOException $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    }
}

?>