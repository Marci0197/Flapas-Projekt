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
        $query = mysqli_query($con,"SELECT * FROM Benutzer");

        while($result = mysqli_fetch_assoc($query)){
            $res_Name = $result['Name'];
            $res_EMail = $result['EMail'];
        }
    ?>

    <div class="header">
        <h1>StudyZone - Schüler</h>
    </div>

    <div class="content">
        <div class="profil">
            <p>Name: <?php echo $res_Name ?></p>
            <p>Rolle: Schüler</p>
            <p>E-Mail: <?php echo $res_EMail ?></p>
            <br>
            <p>Punkte: ... von ...</p>
            <br>
            <button>Bearbeiten</button>
        </div>
    </div>

    <div class="footer">
        <ul>
            <li><a href="../schueler/index.php">Dashboard</a></li>
            <li><a href="../schueler/scoreboard.php">Scoreboard</a></li>
            <li><a href="../schueler/profil.php">Profil</a></li>
        </ul>
    </div>

    <?php

    // Close the connection
    $con -> close();

    ?>
</body>
</html>