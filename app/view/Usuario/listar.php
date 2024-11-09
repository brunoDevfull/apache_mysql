<?php

require __DIR__ . "\..\..\config\Database.php";
require  __DIR__ . "\..\..\model\Usuario.php";

$usuarioModel = new Usuario($conn);
$usuarios = $usuarioModel->findAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <style>
        .table{
            tr,td,th{
                border: 1px solid;
            }
        }
    </style>

</head>

<body>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>AÇÂO</th>
        </thead>
        <tbody>
            <!-- percorre a lista de resultados -->
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <!-- escreve na tabela cada item retornado -->
                    <td><?php echo $usuario->id ?></td>
                    <td><?php echo $usuario->nome ?></td>
                    <td>
                        <form action="visualizar.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $usuario->id ?>">
                            <button>DETALHES</button>
                        </form>

                        <form action="excluir.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $usuario->id ?>">
                            <button>EXCLUIR</button>

                        </form>
                        
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script defer>

                /* se o PHP retornar mensagem = erro -> Erro ao excluir Usuario
                se o PHP retornar mensagem -> o filme foi excluido com sucesso
                */

        document.querySelector('mensagem').innerHTML = ('<h1>ERRO</h1>')

    </script>

</body>
</html>