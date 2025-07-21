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
    <script src="https://cdn.jsdelivr.net/npm/mathjs@12.4.1/lib/browser/math.min.js"></script>
</head>
<body>
    
    <?php

        include("../../connection/header-lehrer.html");

    ?>

    <div class="content">
        <div class="erstellen">

            <?php
            
                include("../../php/config.php");
            
            
            ?>

            <form action="#" method="post">
                <div class="fächer">
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

                    <h3>Jahrgang auswählen:</h3>
                    <select name="Jahrgang" required>
                        <option selected>...</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select><br>

                    <h3>Klasse auswählen:</h3>
                    <select name="Klasse" required>
                        <option selected>...</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                        <option value="e">e</option>
                        <option value="f">f</option>
                    </select>
                </div><br>

                <div class="erstellen-frage">
                    <h3>Frage:</h3>
                    <textarea name="Frage" placeholder="Hier die Frage eingeben:" required></textarea>
                </div>

                <!-- Seite überarbeiten -->
                <!--
                
                <div class="erstellen-möglichkeiten">
                    <h3>Antwort Möglichkeiten:</h3>
                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-A">
                        <textarea class="antwort" name="Antwort-A" placeholder="Antwort A eingeben:" required></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-B">
                        <textarea class="antwort" name="Antwort-B" placeholder="Antwort B eingeben:" required></textarea>
                    </div>
                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-C">
                        <textarea class="antwort" name="Antwort-C" placeholder="Antwort C eingeben:" required></textarea>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-D">
                        <textarea class="antwort" name="Antwort-D" placeholder="Antwort D eingeben:" required></textarea>
                    </div>
                </div>

                -->
                <button name="submit" type="submit">Speichern</button>

                <canvas id="canvas" width="800" height="600" style="border:1px solid #ccc; position:absolute; left:0; top:0; z-index:10;"></canvas>
                <img src="../../picture/StudyZone.png" id="img" style="position:absolute; left:0; top:0; z-index:0;" />
            </form>
        </div>
    </div>

    <?php

        include("../../connection/footer-lehrer.html");

    ?>
    <script type="module" src="../../js/bild-aufgabe.js"></script>
</body>
</html>