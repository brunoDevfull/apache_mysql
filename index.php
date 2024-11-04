<?php

require "Database.php";

$database = new Database(
    "localhost",
    3306,
    "root",
    "",
    "filmesdb"
);



$conn =$database->createConnection();

$stmt = $conn-> prepare("SELECT * FROM filme");


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
            <?php foreach ($stmt as $row) { ?>
        <tr>
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
