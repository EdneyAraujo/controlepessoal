<?php

require_once 'config\dbconfig.php';

$id = $_GET['id'];


	
	$sql = "DELETE FROM LANCAMENTOS WHERE ID_LANCAMENTOS = $id" ;
	$delete = sqlsrv_query($conn, $sql);
	//$sql->executa();
	if($delete == true){
		header("Location: painel.php?url=financeiro");
   }else{
		echo 'NAO FOI';
	}
//header("Location: financeiro.html");
?>