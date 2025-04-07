<?php
include_once 'conexao.php';

$sql = "SELECT * FROM Tarefa";
$result = $conn->query($sql);
?>

<div class="container">
    <h2>Lista de Tarefas</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Data Início</th>
            <th>Data Fim</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id_tarefa']; ?></td>
                <td><?php echo $row['descricao_tarefa']; ?></td>
                <td><?php echo $row['data_inicio_tarefa']; ?></td>
                <td><?php echo $row['data_fim_tarefa']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
