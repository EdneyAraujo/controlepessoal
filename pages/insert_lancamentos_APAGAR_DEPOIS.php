<?php
//require_once 'db_connection.php';

if (isset($_POST['submit'])) {
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];
    $datalancamento = $_POST['datalancamento'];

    $query = "INSERT INTO lancamentos (descricao, valor, tipo, datalancamento) VALUES ('$descricao', '$valor', '$tipo', '$datalancamento')";
    $result = sqlsrv_query($conn, $query);

    if ($result) {
        echo 'Dados inseridos com sucesso.';
    } else {
        echo 'Erro ao inserir dados: ' . sqlsrv_errors();
    }
}
