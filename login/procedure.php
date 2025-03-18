<?php
  include("../php/config.php");

  // Prüfen, ob die Eingaben existieren
  if (!isset($_POST["email"]) || !isset($_POST["password"])) {
    header("Location: ../schueler/scoreboard.php");
    exit();
  }

  $email = $_POST["email"];
  $password = $_POST["password"];

  // Prepared Statement verwenden, um SQL-Injection zu verhindern
  $stmt = $con->prepare("SELECT hashedpw FROM Logins WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashedpw = $row["hashedpw"];

    // Passwort mit SHA-512 hashen und vergleichen
    $hashedInputPassword = hash("sha512", $password);
    if (hash_equals($hashedpw, $hashedInputPassword)) { // Sicherer Vergleich
      header("Location: ../schueler/profil.php");
      exit();
    } else {
      // Passwort passt nicht
      $errorMessage = "Falsche Email oder Passwort";
    }
  } else {
    // E-Mail passt nicht
    $errorMessage = "Falsche Email oder Passwort";
  }
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyZone</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<?php if (isset($errorMessage)): ?>
  <div class='message'>
    <p><?php echo $errorMessage; ?></p>
  </div> <br>
  <a href='../login/index.php'><button class='btn'>Zurück</button></a>
<?php endif; ?>
</body>
</html>
