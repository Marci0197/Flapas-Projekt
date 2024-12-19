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
            <header>Registrieren</header>
            <form action="#" method="post">
                <div class="field input">
                    <label for="benutzername">Benutzername</label>
                    <input type="text" name="benutzername" id="benutzername" autocomplete="off" placeholder="Benutzername eingeben" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email eingeben" required>
                </div>

                <div class="field input">
                    <label for="passwort">Passwort</label>
                    <input type="password" name="passwort" id="passwort" autocomplete="off" placeholder="Passwort eingeben" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Registrieren" required>
                </div>

                <div class="links">
                    schon einen Account? <a href="/login/index.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>