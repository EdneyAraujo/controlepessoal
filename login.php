<?php
require_once 'config\dbconfig.php';

// Verifica se o formulário foi enviado
if(isset($_POST['submit'])){
    // Recupera dados do formulário
    $username = $_POST['usuario'];
    $password = $_POST['senha'];
    //$name = $_POST['NOME'];
    // Consulta o banco de dados para verificar se os dados de login estão corretos
    $query = "SELECT * FROM usuarios WHERE usuario = '$username' AND senha = '$password'";

    $result = sqlsrv_query($conn, $query);

    //$stmt = sqlsrv_query($conn, $query, $params);
    // Verifica se a consulta retornou algum resultado
    if(sqlsrv_has_rows($result)){
        // Inicia a sessão e armazena o nome de usuário na sessão
        session_start();
        $row = sqlsrv_fetch_array($result);
        $nome = $row['NOME'];
        $sobrenome = $row['SOBRENOME'];
        $_SESSION['usuario'] = $username;
        $_SESSION['NOME'] = $nome;
        $_SESSION['SOBRENOME'] = $sobrenome;
        //$_SESSION['SOBRENOME'] = $sname;
        // Redireciona para a página restrita
        header('location: painel.php?url=principal');
    } else {
        // Exibe mensagem de erro
        //header('location: index.php');
        echo 'Nome de usuário ou senha incorretos.';
    }
}
?>

