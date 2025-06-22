<?php
    session_start();

    include("../php/config.php");
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/lehrer.css">
</head>
<body>
    <?php

        include("../connection/header-lehrer.html");

    ?>

    <div class="content">
        <table class="scoreboard">
            <thead>
                <tr>
                    <th>Fach</th>
                    <th>Frage</th>
                    <th>Lösung</th>
                    <th>Bearbeitet</th> <!-- Von wie vielen Schülern es schon bearbeitet wurde -->
                    <th>Klasse</th> <!-- Von welcher Klasse es ist -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathematik</td>
                    <td>Welche Parabel?</td>
                    <td>Nein</td>
                    <td>5/23</td>
                    <td>9b</td>
                </tr>
                <tr>
                    <td>Englisch</td>
                    <td>Bearbeite die if-Clause</td>
                    <td>if ... will go ...</td>
                    <td>15/23</td>
                    <td>9b</td>
                </tr>
                <tr>
                    <td>Informatik</td>
                    <td>Binär?</td>
                    <td>011100</td>
                    <td>23/32</td>
                    <td>8a</td>
                </tr>
                <tr>
                    <td>Deutsch</td>
                    <td>TGA schreiben</td>
                    <td>Datei hochladen</td>
                    <td>0/26</td>
                    <td>8d</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php

        include("../connection/footer-lehrer.html");

    ?>
</body>
</html>