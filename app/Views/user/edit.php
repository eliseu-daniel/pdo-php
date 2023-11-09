<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="/public/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Editar Dados</h1>
        <form action="/update.php?id=" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" >
            </div>
            <div class="form-group">
                <label for="emailn">E-mail</label>
                <input type="email" name="emailn" id="emailn" class="form-control">
            </div>
            <button class="btn btn-success">
                Editar
            </button>
        </form>
    </div>
</body>
</html>