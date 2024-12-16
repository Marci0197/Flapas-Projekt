<?php
include("dataexe.php");
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyZone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>StudyZone - Schüler</h2>
    </div>

    <div class="div-dashboard-hauptfächer">
        <h2>Hauptfächer</h2>

        <div class="div-dashboard">
            <li class="li-dashboard"><a href="#">Mathe</a></li>
        </div>
    
        <div class="div-dashboard">
            <li class="li-dashboard"><a href="#">Deutsch</a></li>
        </div>

        <div class="div-dashboard">
            <li class="li-dashboard"><a href="#">Englisch</a></li>
        </div>

        <div class="div-dashboard">
            <li class="li-dashboard"><a href="#">Physik</a></li>
        </div>
    </div>
    
    <div class="div-dashboard-nebenfächer">
        <h2>Nebenfächer</h2>

        <div class="div-dashboard">
            <li class="li-dashboard"><a href="#">IT</a></li>
        </div>

        <div class="div-dashboard">
            <li class="li-dashboard"><a href="#">Chemie</a></li>
        </div>
    </div>

    <div class="footer">
        <ul>
            <li><a href="/iframes/dashboard.php">Dashboard</a></li>
            <li><a href="/iframes/scoreboard.php">Scoreboard</a></li>
            <li><a href="/iframes/profil.php">Profil</a></li>
        </ul>
    </div>
</body>
</html>