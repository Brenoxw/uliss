<?php include('conex.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>📋 Agenda de Tarefas</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Início</th>
                <th>Fim</th>
            </tr>
            <?php
            $sql = "SELECT * FROM Tarefa ORDER BY data_inicio_tarefa";
            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id_tarefa']}</td>
                            <td>{$row['descricao_tarefa']}</td>
                            <td>{$row['data_inicio_tarefa']}</td>
                            <td>{$row['data_fim_tarefa']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhuma tarefa encontrada.</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
