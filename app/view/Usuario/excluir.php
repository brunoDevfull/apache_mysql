<?php
require __DIR__ . "\..\..\config\Database.php";
require  __DIR__ . "\..\..\model\Usuario.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    return header("location: listar.php");
}

$id = (int) $_POST["id"];

$usuarioModel = new Usuario($conn);
$sucesso = $usuarioModel->delete($id);

if ($sucesso === TRUE) {
    return header("location: listar.php?mensagem=sucesso");

} else {
    return header("location: listar.php?mensagem=erro");
}


?>