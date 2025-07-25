<?php 
   session_start();

   include("../../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../login/index.php");
   }
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyZone</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/lehrer.css">
</head>
<body>
    
    <?php

        include("../../connection/header-lehrer.html");

    ?>

    <div class="content">
        <div class="erstellen">
                <form action="#" method="post">
                <h3>Fach auswählen:</h3>
                <select name="Fächer" required>
                    <option selected>...</option>
                    <!-- Hauptfächer -->
                    <option value="Mathematik">Mathematik</option>
                    <option value="Englisch">Englisch</option>
                    <option value="Deutsch">Deutsch</option>
                    <!-- Nebenfächer -->
                    <option value="Informatik">Informatik</option>
                    <option value="Chemie">Chemie</option>
                    <option value="Biologie">Biologie</option>
                    <option value="Geografie">Geografie</option>
                    <option value="Wirtschaft und Recht">Witschaft und Recht</option>
                    <option value="Geschichte">Geschichte</option>
                </select><br>

                <div class="erstellen-möglichkeiten">
                    <h3>Frage:</h3>
                    <textarea name="Frage" placeholder="Hier die Frage eingeben:" required></textarea>

                    <h3>Antwort Möglichkeiten:</h3>
                    <textarea name="Antwort" placeholder="Hier die Antwort Möglichkeiten eingeben:" required></textarea>
                </div>
                <button type="submit">Speichern</button>
            </form>
        </div>
    </div>

    <?php

        include("../../connection/footer-lehrer.html");

    ?>

</body>
</html>