<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Projeto </title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
<h3 class="pageholder"> logar no sistema </h3>
    <fieldset>
    <legend>:::sistema:::</legend>
    <form action="verificarlogin.php" method="POST" class="formgroup">
    E-mail.: <input type="text" name="email"
    placeholder="Digite o E-mail" class="form-control"/>
    <br><br>

    Senha.: <input type="passaword" name="senha"
    placeholder="Digite o Senha" class="form-control"/>
    <br><br>

    <input type="submit" value="Entrar no sistema" class="btn btn-primary" />
    </form>

    </fieldset>
    </div>
</body>
</html>