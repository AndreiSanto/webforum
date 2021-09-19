<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="/view/validarcao.js"></script>
</head>

<body>
    <form name="form1" action="../controller/cadastroController.php" method='get'>
        <p>Log</p> <input type="text" name="usuario" id="usuario">
        <p>Nome:</p> <input type="text" name="nome" id="nome">
        <p>email:</p> <input type="text" name="email" id="email">
        <p>Senha:</p><input type="password" name="senha" id="senha">
        <input type="submit" value="Cadastrar">
    </form>
    <p id="msg"></p>
</body>

</html>