<?php

$type = $_POST['type'];
$region = $_POST['region'];
$visitor_email = $_POST['email'];
$telephone = $_POST['tel'];

$to = 'to@afd-chem.ru';

$subject = 'Новая заявка с afd-chem.ru';

$message = "Дистрибьютор или cх: " . $type . "\r\n" .
    "Регион: " . $region . "\r\n" .
    "E-mail: " . $visitor_email . "\r\n" .
    "Телефон: " . $telephone;

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

$headers = "From: $to " . "\r\n" .
    "Reply-To: $visitor_email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>