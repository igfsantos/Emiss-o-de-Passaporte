<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configurações do banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "agendamento_passaporte";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome_completo = $_POST['nome_completo'] ?? '';
$nome_mae = $_POST['nome_mae'] ?? '';
$nome_pai = $_POST['nome_pai'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$cor = $_POST['cor'] ?? '';
$estado_civil = $_POST['estado_civil'] ?? '';
$nacionalidade = $_POST['nacionalidade'] ?? '';
$uf_nascimento = $_POST['uf_nascimento'] ?? '';
$cidade_nascimento = $_POST['cidade_nascimento'] ?? '';
$nome_alterado = $_POST['nome_alterado'] ?? '';

// Prepara a consulta SQL para inserção
$sql = "INSERT INTO dados_pessoais (nome_completo, nome_mae, nome_pai, data_nascimento, cor, estado_civil, nacionalidade, uf_nascimento, cidade_nascimento, nome_alterado)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepara a declaração
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Erro ao preparar a declaração: " . $conn->error);
}

// Vincula os parâmetros
$stmt->bind_param("ssssssssss", $nome_completo, $nome_mae, $nome_pai, $data_nascimento, $cor, $estado_civil, $nacionalidade, $uf_nascimento, $cidade_nascimento, $nome_alterado);

// Executa a declaração
if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao executar a declaração: " . $stmt->error;
}

// Fecha a declaração e a conexão
$stmt->close();
$conn->close();
?>
