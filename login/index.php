<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php
             
              include("../php/config.php");
              
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM 'Logins' WHERE hashedpw='$hashedpw' AND EMail='$EMail' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Falsche Email oder Passwort</p>
                       </div> <br>";
                   echo "<a href='/login/index.php'><button class='btn'>Zurück</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: /schueler/index.php");
                }
              }else{

            
            ?>
            <header>Login</header>
            <form action="../schueler/index.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" placeholder="Email eingeben" required>
                </div>

                <div class="field input">
                    <label for="password">Passwort</label>
                    <input type="password" name="password" id="password" autocomplete="off" placeholder="Passwort eingeben" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Keinen Account? <a href="registrieren.php">Registrieren</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
