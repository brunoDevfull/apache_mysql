<?php
require __DIR__ . "\..\..\config\Database.php";
require  __DIR__ . "\..\..\model\Filme.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    return header("location: listar.php");
}

$id = (int) $_POST["id"];

// if ($id < 1) {

//     echo "<h1> Erro ao excluir </h1>";

// };

$filmeModel = new Filme($conn);
$sucesso = $filmeModel->delete($id);

if ($sucesso === TRUE) {
    return header("location: listar.php?mensagem=Sucesso");

} else {
    return header("location: listar.php?mensagem=Erro");
}


?>