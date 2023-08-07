<?php
$to = 'j.solarek@wp.pl';

$from = "testowy email <keywave.kontakt@gmail.com>";

$replyTo = "Biuro obsługi klienta <keywave.kontakt@gmail.com>";

$subject = "Testowy email";

$message ="
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Witaj to jest testowy email</h1>
    <hr>
    <p>Nasza strona <a href='https://keywave.pl'>Keywave.pl</a></p>
</body>
</html>
";
$headers = 'MIME-Version: 1.0'."\r\n";
$headers = 'Content-Type: text/html; charset=utf-8'."\r\n";
$headers = 'From: '.$from."\r\n";
$headers = 'Reply-To '.$replyTo."\r\n";

mail($to, $subject, $message, $headers);
?>

