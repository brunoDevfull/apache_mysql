<?php

require __DIR__ . "\..\..\config\Database.php";
require  __DIR__ . "\..\..\model\Usuario.php";

$usuarioModel = new Usuario($conn);

$id = $_GET["id"];

$usuario = $usuarioModel->findById($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <h1>Usuario</h1>

    <h3>ID: <?php echo $usuario->id ?></h3>
    <h3>NOME: <?php echo $usuario->nome ?></h3>
    

</body>
</html>