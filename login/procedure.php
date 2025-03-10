
<?php 
  session_start();
  include("../php/config.php");

  # Finde hashpw für diese E-Mail
  $email = $_POST["email"]
  $result = mysqli_query($con,"SELECT 'hashedpw' FROM 'Logins' WHERE email='$email' ") or die("Select Error");
  $hashedpw = mysqli_fetch_assoc($result);
        
  if (sha512($_POST["password"]) == $hashedpw)
    {
    echo "<br>Hello world!";
    exit;
    } else {
    echo "<br>Nein, versuch's erst garnicht!!";      
    }
    

?>
