<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h1 style="text-align:center; margin-top: 150px;">Tarefas</h1>
    <table style="margin-left: 38%; margin-top: 50px;background-color: white;" border="1">
        <tr>
            <th>Nome da tarefa</th>
            <th>Data da tarefa</th>
            <th>Situação da tarefa</th>
        </tr>

        <?php
        $conexao = mysqli_connect("localhost", "root", "", "pessoas");

        $sqlBusca = "select * from tarefas";
        $todasAsTarefas = mysqli_query($conexao, $sqlBusca);

        while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
            echo "<tr>";
            echo "<td>" . $umaTarefa["nome_tarefa"] . "</td>";
            echo "<td>" . $umaTarefa["data_tarefa"] . "</td>";
            echo "<td>" . $umaTarefa["situacao_tarefa"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
    </table>

</body>
</html>