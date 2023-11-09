<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="/public/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="/criar.php" class="btn btn-primary">
                Criar usuario
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td>
                            <?= $usuario->id ?>
                        </td>
                        <td>
                            <?= $usuario->name ?>
                        </td>
                        <td>
                            <?= $usuario->email ?>
                        </td>
                        <td class="btn btn-secondary">
                            <a href="/editar.php?id=<?= $usuario->id ?>"> 
                                Editar 
                            </a>
                        </td>
                        <td class="btn btn-secondary ">
                            <a href="destroy.php?id=<?= $usuario->id ?>">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>