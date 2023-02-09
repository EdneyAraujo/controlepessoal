<?php
$serverName = "SUPERHOUSE\SQLEXPRESS"; //nome do servidor
//$serverName = "022621-GTI\SQLEXPRESS"; //nome do servidor
$connectionInfo = array( "Database"=>"controlepessoal", "UID"=>"sa", "PWD"=>"30232800");
//$connectionInfo = array( "Database"=>"controlepessoal", "UID"=>"sa", "PWD"=>"Onl3023@#");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexão estabelecida.<br />";
}else{
     echo "Conexão não foi estabelecida.<br />";
     //die( print_r( sqlsrv_errors(), true));
	header('location: configuracao.php');
}
?>
