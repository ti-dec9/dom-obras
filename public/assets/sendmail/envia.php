<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './lib/vendor/autoload.php';

$email= $_POST['email'];
$assunto= $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$hoje = date('d/m/Y');

$template = file_get_contents('email_template/template_form.html');
$template = str_replace('%email%', $email, $template);
$template = str_replace('%nome%', $nome, $template);
$template = str_replace('%assunto%', $assunto, $template);
$template = str_replace('%mensagem%', $mensagem, $template);
$template = str_replace('%hoje%', $hoje, $template);
$template = str_replace('%telefone%', $telefone, $template);



//Começa o processo de envio de email

try {
//Autenticar com o Site
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '41ba4d444b153a';
    $mail->Password = '1cb4480d659eb8';
    //Remetende e Destinatário
    $mail->setFrom('no-reply@institutomaas.com.br');
    $mail->addAddress('contato@institutomaas.com.br');
    //Conteúdo
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                
    $mail->Subject = 'Orçamento Instituto MAAS';
    //Redirecionar página HTML contendo o corpo do EMAIL
    $mail->MsgHTML($template);

//Enviar o email
    $mail->send();
    echo 'Mensagem Enviada com Sucesso';
    header("location: index.html");
    die();
} catch (Exception $e) {
    echo "Message não pode ser enviada:";
    header("location: index.html");
    die();
}

?>