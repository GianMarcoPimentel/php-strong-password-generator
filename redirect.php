<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Strong-Password-Generator</title>
</head>
<body>
        <h1>Memorizzatore password</h1>
        <p>La tua password casuale è :</p>
        <strong>

        <?php
            // Recupero password dalla sessione
            session_start();
            $password = $_SESSION["password"];
            echo $password;
        ?>

        </strong>
</body>
</html>