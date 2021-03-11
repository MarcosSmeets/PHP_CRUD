<?php
   // include_once(conexao.php);

   $nome=filter_input(INPUT_POST, 'nome');
   $idade=filter_input(INPUT_POST, 'idade');
   $data=filter_input(INPUT_POST, 'data');
   $cidade=filter_input(INPUT_POST, 'cidade');

   echo "nome: $nome <br>";
   echo "idade: $idade <br>";
   echo "data: $data <br>";
   echo "cidade: $cidade <br>";

   $insert = "insert into pessoa (nome, idade, datanascimento, cidade) values ('$nome','$idade','$data','$cidade')";
   $insert = mysqli_query($conn,$insert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>processa</title>
</head>
<body>
   <a href="index.php" type="button">Voltar ao menu</a>
</body>
</html>