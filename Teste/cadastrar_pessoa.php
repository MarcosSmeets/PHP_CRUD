<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <form action="processa_pessoa.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome">
        <label for="">Idade</label>
        <input type="number" name="idade" placeholder="Digite sua idade">
        <label for="">Data de nascimento</label>
        <input type="date" name="data" placeholder="Digite o ano de nascimento">
        <label for="">Cidade</label>
        <input type="text" name="cidade" placeholder="Escolha sua cidade">
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>