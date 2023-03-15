<?php
if (isset($_POST['submit'])) {
    include_once "bd/conexao.php";
    $cpf_colaborador = $_POST['cpf'];
    $administrativo_colaborador = $_POST['administrativo'];
    $pratico_coloborador = $_POST['pratico'];
    $teorico_colaborador = $_POST['teorico'];

    $sql = "INSERT INTO colaborador (cpf_colaborador, colaborador_administrativo, colaborador_pratico, colaborador_teorico) VALUES ('$cpf_colaborador', '$administrativo_colaborador', '$pratico_coloborador', '$teorico_colaborador')";
    if (mysqli_query($conn, $sql)) {
        echo ("<h2>Colaborador cadastrado com sucesso!</h2>");
    } else {
        echo ("<h2>Houve um problema no cadastro do colaborador!</h2><br><p>" . $conn->error . "</p>");
    }
}
