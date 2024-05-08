<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos do formulário estão preenchidos
    if (isset($_POST['inputName']) && isset($_POST['inputEmail']) && isset($_POST['inputEmpresa']) && isset($_POST['inputTelefone'])) {
        // Dados do formulário
        $nome = $_POST['inputName'];
        $email = $_POST['inputEmail'];
        $empresa = $_POST['inputEmpresa'];
        $telefone = $_POST['inputTelefone'];
        
        // Mensagem de email
        $mensagem = "Nome: $nome\n";
        $mensagem .= "Email: $email\n";
        $mensagem .= "Empresa: $empresa\n";
        $mensagem .= "Telefone: $telefone\n";

        // Endereço de email para onde será enviado
        $para = 'souvilmarsou@gmail.com';
        
        // Assunto do email
        $assunto = 'Formulário de Contato';
        
        // Cabeçalhos do email
        $headers = "De: $email";

        // Envia o email
        mail($para, $assunto, $mensagem, $headers);

        // Redireciona para uma página de confirmação ou exibe uma mensagem de sucesso
        echo "<script>alert('Obrigado! Seu formulário foi enviado com sucesso.'); window.location.href='index.html';</script>";
        exit;
    } else {
        // Se algum campo estiver vazio, exibe uma mensagem de erro
        echo "<script>alert('Por favor, preencha todos os campos do formulário.'); window.history.back();</script>";
        exit;
    }
}
?>