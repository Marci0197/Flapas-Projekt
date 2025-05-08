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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/lehrer.css">
</head>
<body>
    <!-- 
    TODO: KI hinzufügen die die Aufgaben überprüft
    -->
    <?php

        include("../connection/header-lehrer.html");

    ?>
    
    <div class="content">
        <div class="erstellen">
            <h1>Was möchten Sie erstellen? <br>Lehrer-Name</h1>

            <button><a href="/lehrer/aufgaben/multiple-aufgabe.php">Multiplechoice - Aufgaben</a></button>
            <button><a href="/lehrer/aufgaben/multiple-answer.php">Multiple - Answer</a></button>
            <button><a href="/lehrer/aufgaben/freie-aufgabe.php">Freie - Aufgaben</a></button>
            <button><a href="/lehrer/aufgaben/bild-aufgabe.php">Bild - Aufgaben</a></button>
        </div>
    </div>

    <?php

        include("../connection/footer-lehrer.html");

    ?>
</body>
</html>