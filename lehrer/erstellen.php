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
    <div class="header">
        <h1>StudyZone - Lehrer</h>
    </div>
    
    <div class="content">
        <div class="erstellen">
            <h1>Was möchten Sie erstellen? <br>Lehrer-Name</h1>

            <button><a href="/aufgaben/multiple-aufgabe.php">Multiplechoice - Aufgaben</a></button>
            <button><a href="/aufgaben/freie-aufgabe.html">Freie - Aufgaben</a></button>
            <button><a href="/aufgaben/bild-aufgabe.html">Bild - Aufgaben</a></button>
        </div>
    </div>

    <div class="footer">
        <ul>
            <li><a href="../lehrer/index.php">Dashboard</a></li>
            <li><a href="../lehrer/erstellen.php">Erstellen</a></li>
            <li><a href="../lehrer/profil.php">Profil</a></li>
        </ul>
    </div>
</body>
</html>