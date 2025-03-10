<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyZone</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/schueler.css">
</head>
<body>
    <?php
    include("../php/config.php");

    // Check connection
    if ($con -> connect_error) {
        echo "<p style='color: red;'>Connection failed: " . $con -> connect_error . "</p>";
    }

    ?>
    <div class="header">
        <h1>StudyZone - Schüler</h>
    </div>

    <?php
    $sql = "SELECT * From Profile";
    $result = $con->query($sql);

    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo "<div class='content'>
                    <div class='profil'>
                        <p>Name: " . htmlspecialchars($row["Name"]) . "</p>
                        <p>Rolle: " . htmlspecialchars($row["ID_Profile"]) ."</p>
                        <p>E-Mail: " . htmlspecialchars($row["EMail"]) . "</p>
                        <br>
                        <p>Punkte: ... von ...</p>
                        <br>
                        <button>Bearbeiten</button>
                    </div>
                </div>";
        }
    } else{
        echo "<p>No records found.</p>";
    }
 
    ?>

    <div class="footer">
        <ul>
            <li><a href="/schueler/index.php">Dashboard</a></li>
            <li><a href="/schueler/scoreboard.php">Scoreboard</a></li>
            <li><a href="/schueler/profil.php">Profil</a></li>
        </ul>
    </div>

    <?php

    // Close the connection
    $con->close();

    ?>
</body>
</html>