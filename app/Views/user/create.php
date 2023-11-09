<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    <link rel="stylesheet" href="/public/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="/store.php" method="post">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <button class="btn btn-success">
                Criar
            </button>
        </form>
    </div>
</body>
</html>