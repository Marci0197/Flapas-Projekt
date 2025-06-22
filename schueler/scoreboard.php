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

        include("../connection/header-schueler.html");

    ?>

    <div class="content">
        <table class="scoreboard">
            <thead>
                <tr>
                    <th>Platz</th>
                    <th>Name</th>
                    <th>Zeit</th>
                    <th>Punkte</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1.</th>  
                    <td>Max Mustermann</td>  
                    <td>1:20 Min.</td>  
                    <td>20</td>  
                </tr>
                <tr>
                    <th>2.</th>  
                    <td>Max Mustermann 2</td>  
                    <td>1:30 Min.</td>  
                    <td>18</td>  
                </tr>
                <tr>
                    <th>3.</th>  
                    <td>Max Mustermann 3</td>  
                    <td>1:40 Min.</td>  
                    <td>17</td>  
                </tr>
                <tr>
                    <th>4.</th>  
                    <td>Max Mustermann 4</td>  
                    <td>1:42 Min.</td>  
                    <td>17</td>  
                </tr>
                <tr>
                    <th>5.</th>  
                    <td>Max Mustermann 5</td>  
                    <td>1:10 Min.</td>  
                    <td>16</td>  
                </tr>
            </tbody>
        </table> 
    </div>

    <?php

        include("../connection/footer-schueler.html");

    ?>
</body>
</html>