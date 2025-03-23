<?php 
session_start();
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
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Verifizieren der eindeutigen E-Mail
            $verify_query = mysqli_query($con, "SELECT EMail FROM Benutzer WHERE EMail='$email'");

            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                          <p>Diese E-Mail wird bereits verwendet. Bitte versuchen Sie eine andere!</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Zurück</button>";
            } else {
                // Passwort hashen
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Einfügen des neuen Benutzers mit dem gehashten Passwort
                mysqli_query($con, "INSERT INTO Benutzer(`Name`, `EMail`, `Passwort`) VALUES('$name', '$email', '$hashed_password')") or die("Fehler aufgetreten");

                echo "<div class='message'>
                          <p>Registrierung erfolgreich!</p>
                      </div> <br>";
                echo "<a href='index.php'><button class='btn'>Jetzt Anmelden</button>";
            }
         } else {
        ?>

            <header>Registrieren</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Passwort</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Registrieren" required>
                </div>
                <div class="links">
                    Schon einen Account? <a href="../login/index.php">Anmelden</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>