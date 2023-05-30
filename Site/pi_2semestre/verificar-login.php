<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nomeUsuario = $_POST["user"];
    $senha = $_POST["senha"];

    // Verificar as credenciais
    if ($nomeUsuario === "valdir" && $senha === "123") {
        // Credenciais válidas, redirecionar para a página "meu-painel.php"
        header("Location: usuario.html");
        exit();
    } else {
        // Credenciais inválidas, redirecionar para uma página de erro ou exibir uma mensagem de erro
        echo "usuario ou senha incorreta";
        exit();
    }
}


?>



