<?php
include('conectadb.php');

//COLETA O VALOR ID LÁ DA URL
$id = $_GET['id'];
$sql =" SELECT  * FROM tb_cliente WHERE use_id = $id";
$retorno = mysqli_query($link,$sql);
while($tbl = mysqli_fetch_array($retorno)){
    $login = $tbl[0];
    $email = $tbl[1];
    $senha = $tbl[2];
    $status = $tbl[3];
    
}
// BORA FAZER O UPDATE??
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $senha = $_POST['txtsenha'];
    $email = $_POST['txtemail'];
    $status = $_POST['status'];

    $sql = "UPDATE tb_usuarios 
    SET usu_senha = '$senha', usu_email = '$email', usu_status = '$status'
    WHERE usu_id = $id";

    mysqli_query($link, $sql);

    echo"<script>window.alert('USUARIO ALTERADO COM SUCESSO!');</script>";
    echo"<script>window.location.href='usuario-lista.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.cdnfonts.com/css/curely" rel="stylesheet">
                
    <title>CLIENTES ALETERÇÃO</title>
</head>
<body>

</body>
</html>