<!-- 
    Consegna Esercizio:

    Descrizione:

    Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
    L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

    Milestone 1
    Creare un form che invii in GET la lunghezza della password. 
    Una nostra funzione utilizzerà questo dato per generare una password casuale
    (composta da lettere maiuscole, lettere minuscole, numeri e simboli) da restituire all’utente.
    Scriviamo tutto (logica e layout) in un unico file index.php

    Milestone 2
    Verificato il corretto funzionamento del nostro codice,
    spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

    Milestone 3 (BONUS)
    Invece di visualizzare la password nella index,
    effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

    Milestone 4 (BONUS)
    Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
    Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro(es. numeri e simboli, oppure tutti e tre insieme).
    Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

 -->

 <!-- 
    Dichiaro la funzione prima di iniziare la mia pagina
  -->
 <?php
        // Funzione per creare una password
       /*  function createPassword($lunghezza_password) {
            // dichiaro la variabile caratteri da utilizzare per la mia password
            $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+";
            // dichiaro la mia variabile password inizialmente vuota
            $password = "";
            // inizializzo un ciclo for per comporre la mia password
            for ($i = 0; $i < $lunghezza_password; $i ++ ) {
                $password .= $caratteri[mt_rand(0, strlen($caratteri) -1)];
            }             
            return " $password" ;
            //var_dump("$password");
        }
 */
        // Includo il file funciotns.php tramite include
        include "functions.php";
    ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Strong-Password-Generator</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body dark-bg-theme>
    <div class="container py-4 text-center  ">

        <h1>PHP-Strong-Password-Generator</h1>

    </div>
    <!-- 
         Milestone 1
            Creare un form che invii in GET la lunghezza della password. 
            Una nostra funzione utilizzerà questo dato per generare una password casuale
            (composta da lettere maiuscole, lettere minuscole, numeri e simboli) da restituire all’utente.
            Scriviamo tutto (logica e layout) in un unico file index.php
    -->
    <div class="container text-center ">

        <form action="index.php" method="get" class="d-flex gap-3">
            <label for="lunghezza_password">Lunghezza password:</label>
            <input 
            type="number" 
            id="lunghezza_password" 
            name="lunghezza_password" 
            min="8"
            max="20"
            value="8"
            >
            <br>
            <label for="caratteri">Caratteri da utilizzare :</label>
            <input type="text" id="caratteri" name="caratteri" >
            <br>
            <label for="ripetizione">Ripetizione caratteri :</label>
            <input type="checkbox" id="ripetizione" name="ripetizione" checked>
            <input type="submit" value="Genera">
        </form>
        
    </div>
<div class="container">

    <?php
        // Andrò a richiamare la mia funzione createPassword() all'interno del ciclo if

        // genero la password
        if(isset($_GET["lunghezza_password"])) {
            $lunghezza_password = (int) $_GET["lunghezza_password"];
            // variabile $ caratteri
            $caratteri = $_GET["caratteri"];
            // variabile $ ripetizione
            $ripetizione = isset($_GET['ripetizione']) ? true : false;
            $password = createPassword($lunghezza_password, $caratteri, $ripetizione);

            //Memorizzo password nella sessione
            session_start();
            $_SESSION['password'] = $password;

            // reindirizzo alla pagina redirect.php
            header('Location: redirect.php');
            exit;
        }

    ?>
</div>
</body>
</html>