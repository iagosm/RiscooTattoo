<?php
    // Para conectar ao banco de dados tem de enviar os seguintes dados:
    // endereço do servidor
    // login e senha de acesso ao banco mysql
    // nome do banco de dados
    $servidor = "localhost";
    $login = "root";
    $senha = "";
    $nomeBD = "tattoo_studio";

    $conexao = new mysqli($servidor,$login,$senha,$nomeBD);
?>