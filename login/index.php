<?php 
session_start();
ob_start(); // Ausgabe-Pufferung starten
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>StudyZone</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("../php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = $_POST['password']; // Passwort muss nicht escaped werden, da es gehasht wird

                // Benutzer aus der Datenbank abrufen
                $result = mysqli_query($con, "SELECT * FROM Benutzer WHERE EMail='$email'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    // Überprüfen des Passworts
                    if(password_verify($password, $row['Passwort'])){
                        // Login erfolgreich
                        $_SESSION['valid'] = $row['EMail'];
                        $_SESSION['name'] = $row['Name'];
                        header("Location: ../schueler/profil.php");
                        exit; // Sicherstellen, dass kein weiterer Code ausgeführt wird
                    } else {
                        // Falsches Passwort
                        echo "<div class='message'>
                                  <p>Falsche E-Mail oder Passwort</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Zurück</button>";
                    }
                } else {
                    // Benutzer nicht gefunden
                    echo "<div class='message'>
                              <p>Falsche E-Mail oder Passwort</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Zurück</button>";
                }
              } else {
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Passwort</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Noch keinen Account? <a href="../login/registrieren.php">Registrieren</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>