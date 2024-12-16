<?php
include("dataexe.php");
while($row = mysqli_fetch_assoc($result)){
    echo "Position: " . $row['ID'] . " - Name: " . $row['Name'] . "<br>";
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyZone</title>
    <link rel="stylesheet" href="/iframes/style.css">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="header">
        <h2>StudyZone - Schüler</h2>
    </div>

    <div class="div-scoreboard-top">
        <li><p><?php $row['ID'] ?></p></li>
        <li><p>Name</p></li>
        <li><p>Zeit</p></li>
        <li><p>Punkte</p></li>
    </div>

    <div class="div-scoreboard">
        <li><p>1.</p></li>
        <li><p>Max Mustermann</p></li>
        <li><p>1:20 Min.</p></li>
        <li><p>20</p></li>
    </div>

    <div class="div-scoreboard">
        <li><p>2.</p></li>
        <li><p>Max Mustermann 2</p></li>
        <li><p>1:30 Min.</p></li>
        <li><p>18</p></li>
    </div>

    <div class="div-scoreboard">
        <li><p>3.</p></li>
        <li><p>Max Mustermann 3</p></li>
        <li><p>1:40 Min.</p></li>
        <li><p>17</p></li>
    </div>

    <div class="div-scoreboard">
        <li><p>4.</p></li>
        <li><p>Max Mustermann 4</p></li>
        <li><p>1:42 Min.</p></li>
        <li><p>17</p></li>
    </div>

    <!--
  TODO: Man kann den Namen/Zeile auf dem Scoreboard Antippen und 
        dann kann man das Profil von einem sehen
        Es soll wie ein Pop Up rauskommen
        Mann kann aber beim Scoreboard auch noch nach unten scrollen
    -->

    <div class="footer">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Scoreboard</a></li>
            <li><a href="#">Profil</a></li>
        </ul>
    </div>
    

    <script src="script.js"></script>
</body>
</html>
