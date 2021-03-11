<?php
   include_once(conexao.php);

   $cidade=filter_input(INPUT_POST, 'cidade');

   echo "cidade: $cidade <br>";

   $insert = "insert into cidade (nome) values ('$cidade')";
   $insert = mysqli_query($conn,$insert);
?>