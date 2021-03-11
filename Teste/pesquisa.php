<?php
    // include_once(conexao.php);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pesquisar</h1>
    <form action="processa_pessoa.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Data Nascimento</label>
        <input type="date" name="data">
        <label>Cidade</label>
        <input type="text" name="cidade">
        <input type="submit" name="SendPesquisa" value="Pesquisar">
    </form>

    <?php
        $SendPesquisa = filter_input(INPUT_POST, 'SendPesquisar');
        if($SendPesquisa){
            $nome = filter_input(INPUT_POST, 'nome');
            $data = filter_input(INPUT_POST, 'data');

            $resultPesquisa = "select * from pessoa where nome like '%$nome% and data like '%$data%'";
            $resultPesquisa = mysqli_query($conn, $resultPesquisa);
            while($row_pesquisa = mysqli_fetch_assoc($resultPesquisa)){
                echo "Nome: " . $row_pesquisa['nome'];
                echo "Data Nascimento" . $row_pesquisa['data'];
            }
        }
    ?>
</body>
</html>