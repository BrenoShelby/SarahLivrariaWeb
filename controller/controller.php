<?php

include_once('./model/connectionDB.php');

if (isset($_POST['salvar'])) {
    $connect = new ConnectionDB();

    $connect->connect();
};

?>