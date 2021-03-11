<?php
    // include_once(conexao.php);
    include_once(pesquisa.php);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GerarPlanilha</title>
</head>
<body>
    <?php
        $arquivo = 'pessoas.xls';

        $html = '';
        $html .= '<table border = 1>';
        $html .= '<tr>';
        $html .= '<td colspan="3">Planilha Pessoas</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td><b>Nome</b></td>';
        $html .= '<td><b>Data Nascimento</b></td>';
        $html .= '<td><b>Cidade</b></td>';
        $html .= '</tr>'

        $result = $resultPesquisa;
        $result = mysqli_query($conn, $result);
        while($result = mysqli_fetch_assoc($result)){
            $html .= '<tr>';
            $html .= '<td>'. $result["nome"] .'</td>';
            $data = date('d/m/y',strtotime($result["datanascimento"]));
            $html .= '<td>'. $data .'</td>';
            $html .= '<td>'. $result["cidade"] .'</td>';
            $html .= '</tr>'
        }

        echo $html;
    ?>
</body>
</html>