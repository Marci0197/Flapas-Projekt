<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyZone</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="#" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email eingeben" required>
                </div>

                <div class="field input">
                    <label for="passwort">Passwort</label>
                    <input type="password" name="passwort" id="passwort" autocomplete="off" placeholder="Passwort eingeben" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="login" required>
                </div>

                <div class="links">
                    Keinen Account? <a href="/login/registrieren.php">Registrieren</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>