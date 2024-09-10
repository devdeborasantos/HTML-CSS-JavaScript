<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitiza e valida os dados recebidos
    $nome = htmlspecialchars($_POST['nome']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Configura o e-mail
    $to = 'deboracamila@gmail.com'; // Substitua pelo e-mail do dono do site
    $subject = 'Contato feito pelo site';
    $message = "Você recebeu uma nova mensagem para agendamento de paciente:\n\n";
    $message .= "Nome: " . $nome . "\n";
    $message .= "Telefone: " . $telefone . "\n";
    $message .= "E-mail: " . $email . "\n";
    $message .= "Mensagem: " . $mensagem . "\n";
    $headers = "From: no-reply@gmail.com\r\n"; // Substitua pelo e-mail do remetente
    $headers .= "Reply-To: " . $email . "\r\n";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Enviado com Sucesso!</h1>";
        echo "<p>Obrigada, " . $nome . ".\nSua mensagem foi enviada.\nEntraremos em contato.</p>";
    } else {
        echo "<h1>Erro ao Enviar</h1>";
        echo "<p>Houve um problema ao enviar sua mensagem. Por favor, tente novamente.</p>";
    }
} else {
    echo "Método de requisição inválido.";
}
?>