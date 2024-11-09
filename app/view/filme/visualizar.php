<?php

require __DIR__ . "\..\..\config\Database.php";
require  __DIR__ . "\..\..\model\Filme.php";

$filmeModel = new Filme($conn);

$id = $_GET["id"];

$filme = $filmeModel->findById($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
    <h1>FILME</h1>

    <h3>TITULO: <?php echo $filme->titulo ?></h3>
    <p>ANO: <?php echo $filme->ano ?> </p>
    <p>DESCRIÇÂO:  <?php echo $filme->descricao ?></p>

</body>
</html>