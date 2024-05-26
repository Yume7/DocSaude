<?php
require __DIR__ . '/connect.php'; // Certificando que o caminho está correto

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';
    $genero = $_POST['genero'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $email = $_POST['email'] ?? '';
    $condicoes_medicas = $_POST['condicoes_medicas'] ?? '';
    $alergias = $_POST['alergias'] ?? '';
    $medicamentos = $_POST['medicamentos'] ?? '';
    $plano_saude = $_POST['plano_saude'] ?? null;
    $numero_apolice = $_POST['numero_apolice'] ?? null;
    $validade = $_POST['validade'] ?? null;
    $sintomas = $_POST['sintomas'] ?? '';
    $duracao_sintomas = $_POST['duracao_sintomas'] ?? '';
    $perguntas = $_POST['perguntas'] ?? '';

    try {
        // Inserindo os dados no banco de dados
        $sql = "INSERT INTO paciente (nome, data_nascimento, genero, telefone, email, condicoes_medicas, alergias, medicamentos, plano_saude, numero_apolice, validade, sintomas, duracao_sintomas, perguntas) 
                VALUES (:nome, :data_nascimento, :genero, :telefone, :email, :condicoes_medicas, :alergias, :medicamentos, :plano_saude, :numero_apolice, :validade, :sintomas, :duracao_sintomas, :perguntas)";
        $stmt = $pdo->prepare($sql);

        // Bind dos parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':condicoes_medicas', $condicoes_medicas);
        $stmt->bindParam(':alergias', $alergias);
        $stmt->bindParam(':medicamentos', $medicamentos);
        $stmt->bindParam(':plano_saude', $plano_saude);
        $stmt->bindParam(':numero_apolice', $numero_apolice);
        $stmt->bindParam(':validade', $validade);
        $stmt->bindParam(':sintomas', $sintomas);
        $stmt->bindParam(':duracao_sintomas', $duracao_sintomas);
        $stmt->bindParam(':perguntas', $perguntas);

        // Executando a query
        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
            error_log("Erro ao executar a query: " . implode(", ", $stmt->errorInfo()));
        }
    } catch (PDOException $e) {
        // Log de erro
        error_log("Erro: " . $e->getMessage());
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
