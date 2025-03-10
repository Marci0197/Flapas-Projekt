
<?php 
  include("../php/config.php");

  # Finde hashpw für diese E-Mail
  $email = $_POST["email"];
  $result = mysqli_query($con,"SELECT 'hashedpw' FROM 'Logins' WHERE 'email'='$email' ") or die("Select Error");
  $hashedpw = mysqli_fetch_assoc($result);
        
  if ($_POST["password"] == $hashedpw)
    {
    die(header("Location: ../schueler/profil.php"));
    } else {
    die(header("Location: ../schueler/scoreboard.php"));
    }
    

?>
