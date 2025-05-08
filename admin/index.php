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
    <link rel="stylesheet" href="../css/schueler.css">
</head>
<body>
    
    <?php

        include("../connection/header-admin.html");

    ?>

    <div class="content">
        <div class="dashboard-hauptfächer">
            <h1>Hauptfächer</h1>

            <div class="dashboard">
                <li class="li-dashboard"><a href="#">Mathe</a></li>
            </div>
            <div class="dashboard">
                <li class="li-dashboard"><a href="#">Deutsch</a></li>
            </div>
            <div class="dashboard">
                <li class="li-dashboard"><a href="#">Englisch</a></li>
            </div>
            <div class="dashboard">
                <li class="li-dashboard"><a href="#">Physik</a></li>
            </div>
        </div>

        <div class="dashboard-nebenfächer">
            <h1>Nebenfächer</h1>

            <div class="dashboard">
                <li class="li-dashboard"><a href="#">IT</a></li>
            </div>
            <div class="dashboard">
                <li class="li-dashboard"><a href="#">Chemie</a></li>
            </div>
        </div>
    </div>

    <?php

        include("../connection/footer-admin.html");

    ?>
</body>
</html>