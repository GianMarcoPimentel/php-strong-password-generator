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

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Strong-Password-Generator</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container py-4">

        <h1>PHP-Strong-Password-Generator</h1>

    </div>
    <!-- 
         Milestone 1
            Creare un form che invii in GET la lunghezza della password. 
            Una nostra funzione utilizzerà questo dato per generare una password casuale
            (composta da lettere maiuscole, lettere minuscole, numeri e simboli) da restituire all’utente.
            Scriviamo tutto (logica e layout) in un unico file index.php
    -->
    <div class="container">

        <form action="index.php">
            <label for="lunghezza">Lunghezza password:</label>
            <input type="number" id="lunghezza" name="lunghezza" min="8" max="32" value="16">
            <input type="submit" value="Genera">
        </form>
        
    </div>
</body>
</html>