<?php/*

   //require_once '..\config\dbconfig.php';
   if (isset($_POST['submit'])) {
  // Recebe os dados do formulário
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

  // Conecta ao banco de dados
  $serverName = "SUPERHOUSE\SQLEXPRESS";
  $connectionInfo = array("Database" => "controlepessoal", "UID" => "sa", "PWD" => "30232800");
  $conn = sqlsrv_connect($serverName, $connectionInfo);

  // Insere a imagem no banco de dados
  $sql = "INSERT INTO LANCAMENTOS (image) VALUES (?)";
  $params = array($image);
  $stmt = sqlsrv_query($conn, $sql, $params);

  // Verifica se a inserção foi bem-sucedida
  if ($stmt === false) {
    echo "Erro ao inserir imagem no banco de dados.";
	  die( print_r( sqlsrv_errors(), true));
  } else {
    echo "Imagem inserida com sucesso.";
  }
}
*/
?>


<?php
if (isset($_POST['submit'])) {
  $id = $_POST['ID_LANCAMENTOS'];
  $descricao = $_POST['descricao'];
  $valor = $_POST['valor'];
  $tipo = $_POST['tipo'];
  $data = $_POST['DATALANCAMENTO'];

  // Configurações da imagem
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $extensions_arr = array("jpg", "jpeg", "png", "gif");

  // Conecta ao banco de dados
  $serverName = "SUPERHOUSE\SQLEXPRESS";
  $connectionInfo = array( "Database"=>"controlepessoal", "UID"=>"sa", "PWD"=>"30232800");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);

  // Verifica se a imagem é válida
  if( in_array($imageFileType, $extensions_arr) ) {
    // Lê o arquivo de imagem em um binário
    $image = file_get_contents($_FILES['image']['tmp_name']);

    // Atualiza os dados no banco de dados
    $sql = "UPDATE LANCAMENTOS SET descricao = ?, valor = ?, tipo = ?, DATALANCAMENTO = ?, image = ? WHERE ID_LANCAMENTOS = ?";
    $params = array($descricao, $valor, $tipo, $data, $image, $id);
    $stmt = sqlsrv_query( $conn, $sql, $params);

    if( $stmt === false ) {
      die( print_r( sqlsrv_errors(), true));
    } else {
      header("Location: index.php");
    }
  } else {
    echo "Tipo de arquivo inválido. Por favor, selecione um arquivo JPG, JPEG, PNG ou GIF.";
  }
}
?>