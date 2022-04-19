<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos blanditiis ab, nemo est commodi ratione, rerum tempora officia debitis, voluptatem nulla fugit eligendi nesciunt assumenda quis repudiandae saepe. Explicabo, accusantium?";
$textCensured = str_replace($_GET["world"], "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Paragrafo senza censure</h1>
    <p><?php echo "$text"; ?> </p>
    <p>Questo paragrafo è lungo <?php echo strlen($text);?> caratteri</p>

    <h2>Paragrafo con censure (scegliere che parola censurare e mandarla al server con il metodo GET tramite l'url ex:"http://localhost/php-badwords/?world=Lorem")</h2>
    <p><?php echo  $textCensured?> </p>
    <p>Questo paragrafo è lungo <?php echo strlen($textCensured);?> caratteri</p>
</body>
</html>