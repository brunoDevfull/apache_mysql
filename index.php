<?php

require "Database.php";

$database = new Database(
    "localhost",
    3306,
    "root",
    "",
    "filmesdb"
);


// estabelece conexão com o banco
$conn =$database->createConnection();

// prepara a consulta (statement)
$stmt = $conn-> prepare("SELECT * FROM filme");

// executa a consulta
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tbody>
            <!-- percorre a lista de resultados -->
            <?php foreach ($stmt as $row) { ?>
        <tr>
            <!-- escreve na tabela cada item retornado-->
            <td> <?php echo $row["id"] ?> </td>
            <td> <?php echo $row["titulo"] ?> </td>
            <td> <?php echo $row["ano"] ?> </td>
            <td> <?php echo $row["descricao"] ?> </td>
        </tr>
            <?php } ?>
        </tbody> 
    </table>
</body>
</html>
