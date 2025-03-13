<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
    }
    form{
        width: 500px;
        align-items: center;
        gap: 30px;
    }
    a{
        margin-right: 60px;
    }
    li{
        list-style: none;
    }
    ol{
        display: flex;
        justify-content: center;
        gap: 50px;
    }
</style>
<body>
    <form action="auxlogin.php" method="POST">
        <h2 class="text-center">Login</h2>
        <label>Usuario:</label>
        <input type="text" class="form-control" name="user">
        <label>Senha:</label>
        <input type="text" class="form-control" name="password">
        <ol>
            <li><a href="#" class="text-center">Cadastrar</a></li>
            <li><a href="#">Esqueci a senha</a></li>
        </ol>
        <input type="submit"  class="btn btn-primary">
    </form>
</body>
</html>