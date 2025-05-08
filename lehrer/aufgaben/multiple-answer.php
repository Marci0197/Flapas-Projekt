<?php 
   session_start();

   include("../../php/config.php");
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
    
    <?php

        include("../../connection/header-lehrer.html");

    ?>

    <div class="content">
        <div>
            <?php 
            
                if(isset($_POST['submit'])){
                    echo "<p>Die Aufgabe wurde erfolgreich erstellt!</p>";
                }
            
            ?>
        </div>
        <div class="erstellen">
            <?php

                include("../../php/config.php");
                if(isset($_POST['submit'])){
                $Fächer = $_POST['Fächer'];
                $Frage = $_POST['Frage'];
                $Klasse = $_POST['Klasse'];
                $Jahrgang = $_POST['Jahrgang'];
                // echo $Fächer;
                $korrekte_Antwort = isset($_POST['Antwort']) ? implode(',', (array)$_POST['Antwort']) : '';
                // $korrekte_Antwort = $_POST['Antwort'];
                
                $Klassen = $Jahrgang . $Klasse;

                $Antwort_A = $_POST['Antwort-A'];
                $Antwort_B = $_POST['Antwort-B'];
                $Antwort_C = $_POST['Antwort-C'];
                $Antwort_D = $_POST['Antwort-D'];
                
                // TODO: Daten in die Datenbank eintragen
                // TODO: Überprüfen, ob es eine Aufgabe schon gibt?
                
                // TODO: Bild Link hinzufügen, wenn es ein Bild gibt
                $Bild_link = '';
                // $Bild_link = $_POST['Bild'];
                
                // $korrekte_Antwort = 
                mysqli_query($con, "INSERT INTO `Aufgaben_MA` (`ID_Aufgaben_MC`, `Korrekte_MC_Antworten`, `Schulfach`, `Klasse`, `Frage_MC`, `Antwort-A`, `Antwort-B`, `Antwort-C`, `Antwort-D`, `Bild_Link`) VALUES (NULL, '$korrekte_Antwort', '$Fächer', '$Klassen', '$Frage', '$Antwort_A', '$Antwort_B', '$Antwort_C', '$Antwort_D', '$Bild_link');");
                // aus PHPmyAdmin: "INSERT INTO `Aufgaben` (`ID_Aufgaben`, `Typus`, `Fachzuordnung`) VALUES (NULL, '1', '1');"

                // TODO: finde $ID_MC, damit für diese Aufgabe auch Antworten in MC_Antworten eingetragen werden können


                
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
                    </select><br>

                    <h3>Jahrgang auswählen:</h3>
                    <select name="Jahrgang" required>
                        <option selected>...</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select><br>

                    <h3>Klasse auswählen:</h3>
                    <select name="Klasse" required>
                        <option selected>...</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                        <option value="e">e</option>
                        <option value="f">f</option>
                    </select>
                </div><br>

                <div class="erstellen-frage">
                    <h3>Frage:</h3>
                    <textarea name="Frage" placeholder="Hier die Frage eingeben:" required></textarea>
                </div>

                <div class="erstellen-möglichkeiten">
                    <h3>Antwort Möglichkeiten:</h3>
                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-A">
                        <textarea class="antwort" name="Antwort-A" placeholder="Antwort A eingeben:" required></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-B">
                        <textarea class="antwort" name="Antwort-B" placeholder="Antwort B eingeben:" required></textarea>
                    </div>
                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-C">
                        <textarea class="antwort" name="Antwort-C" placeholder="Antwort C eingeben:" required></textarea>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="Antwort" value="Antwort-D">
                        <textarea class="antwort" name="Antwort-D" placeholder="Antwort D eingeben:" required></textarea>
                    </div>
                </div>

                <button name="submit" type="submit">Speichern</button>
            </form>
        </div>
    </div>

    <?php

        include("../../connection/footer-lehrer.html");

    ?>
</body>
</html>