<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Strong-Password-Generator</title>
      <!-- bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container py-4">

        <h1 class="my-color">Memorizzatore password</h1>
        <p class="text-bg-danger text-center col-5 my-4">La tua password casuale è :</p>
        <strong class="text-bg-primary text-white px-3">

        <?php
            // Recupero password dalla sessione
            session_start();
            $password = $_SESSION["password"];
            echo $password;
        ?>

        </strong>

</body>
    </div>
</html>