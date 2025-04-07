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
    <div class="header">
        <h1>StudyZone - Lehrer</h>
    </div>

    <div class="content">
        <div class="erstellen">
            <?php

                include("../php/config.php");
                if(isset($_POST['submit'])){
                $Fächer = $_POST['Fächer'];
                $Frage = $_POST['Frage'];
                
                $korrekte_Antwort = $_POST['Antwort'];

                $Antwort_A = $_POST['Antwort-A'];
                $Antwort_B = $_POST['Antwort-B'];
                $Antwort_C = $_POST['Antwort-C'];
                $Antwort_D = $_POST['Antwort-D'];
                
                //   TODO: Daten in die Datenbank eintragen
                //   TODO: Überprüfen, ob es eine Aufgabe schon gibt?
                
                $input = mysqli_query($con, "INSERT INTO `Aufgaben` (``, ``) VALUES (, )");
                
                // $korrekte_Antwort = 
                $input = mysqli_query($con, "INSERT INTO `Aufgaben_MC` (`Text`, `Korrekte_ID_MC_Antworten`) VALUES ($Frage, $korrekte_Antwort)");
                // aus PHPmyAdmin: "INSERT INTO `Aufgaben` (`ID_Aufgaben`, `Typus`, `Fachzuordnung`) VALUES (NULL, '1', '1');"

                // TODO: finde $ID_MC, damit für diese Aufgabe auch Antworten in MC_Antworten eingetragen werden können
                $input = mysqli_query($con, "INSERT INTO `Aufgaben_MC_Antworten` (`ID_Aufgaben_MC`, `Text`) VALUES ($ID_MC, $Antwort_A)");
                $input = mysqli_query($con, "INSERT INTO `Aufgaben_MC_Antworten` (`ID_Aufgaben_MC`, `Text`) VALUES ($ID_MC, $Antwort_B)");
                $input = mysqli_query($con, "INSERT INTO `Aufgaben_MC_Antworten` (`ID_Aufgaben_MC`, `Text`) VALUES ($ID_MC, $Antwort_C)");
                $input = mysqli_query($con, "INSERT INTO `Aufgaben_MC_Antworten` (`ID_Aufgaben_MC`, `Text`) VALUES ($ID_MC, $Antwort_D)");

                $input = mysqli_query($con, "INSERT INTO `Aufgaben_MC_Antworten` (`ID_Aufgaben_MC`, `Text`, `ID_Antworten`) VALUES ('2', 'binär 101', '1')");
                
                
                //   if(is_array($row) && !empty($row)){
                      
                //       // Überprüfen des Passworts
                //       if(password_verify($password, $row['Passwort'])){
                //           // Login erfolgreich
                //           $_SESSION['valid'] = $row['EMail'];
                //           $_SESSION['name'] = $row['Name'];
                    
                //           // Überprüfung ob es ein Lehrer ist
                //           $Rolle_int = $row2['Rolle_int'];
                //           if($row2["Rolle_int"] == 100){
                //               header("Location: ../lehrer/profil.php");
                //           } else{
                //               header("Location: ../schueler/profil.php");
                //           }
                //           exit;
                //       } else {
                //           // Falsches Passwort
                //           echo "<div class='message'>
                //                     <p>Falsche E-Mail oder Passwort</p>
                //                 </div> <br>";
                //           echo "<a href='index.php'><button class='btn'>Zurück</button>";
                //       }
                //   } else {
                //       // Benutzer nicht gefunden
                //       echo "<div class='message'>
                //                 <p>Falsche E-Mail oder Passwort</p>
                //             </div> <br>";
                //       echo "<a href='index.php'><button class='btn'>Zurück</button>";
                //   }
                } // else {

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
                    </select>
                </div><br>

                <div class="erstellen-frage">
                    <h3>Frage:</h3>
                    <textarea name="Frage" placeholder="Hier die Frage eingeben:" required></textarea>
                </div>

                <div class="erstellen-möglichkeiten">
                    <h3>Antwort Möglichkeiten:</h3>
                    <div>
                        <input type="radio" name="Antwort">
                        <textarea class="antwort" name="Antwort-A" placeholder="Antwort A eingeben:" required></textarea>
                    </div>

                    <div>
                        <input type="radio" name="Antwort">
                        <textarea class="antwort" name="Antwort-B" placeholder="Antwort B eingeben:" required></textarea>
                    </div>
                    <div>
                        <input type="radio" name="Antwort">
                        <textarea class="antwort" name="Antwort-C" placeholder="Antwort C eingeben:" required></textarea>
                    </div>

                    <div>
                        <input type="radio" name="Antwort">
                        <textarea class="antwort" name="Antwort-D" placeholder="Antwort D eingeben:" required></textarea>
                    </div>
                </div>

                <button type="submit">Speichern</button>
            </form>
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