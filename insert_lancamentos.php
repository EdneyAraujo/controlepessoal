<?php
  $descricao = $_POST['descricao'];  
  $valor = $_POST['valor'];
  $tipo = $_POST['tipo'];
  $datalancamento = $_POST['datalancamento'];

  require_once 'config\dbconfig.php';

  if($conn){
    $sql = "INSERT INTO lancamentos (descricao,valor,tipo,datalancamento) VALUES (?,?,?,?)";
    $params = array($descricao,$valor,$tipo,$datalancamento);
	  
	  
    $stmt = sqlsrv_query($conn, $sql, $params);

    if($stmt === false){
      die(print_r(sqlsrv_errors(), true));
    } else {
        header('location: painel.php?url=financeiro');
      //echo "Cadastro realizado com sucesso!";
    }
  } else {
    die(print_r(sqlsrv_errors(), true));
  }
?>
