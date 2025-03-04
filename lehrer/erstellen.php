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
            <h1>Name des Lehrers</h1>

            <form action="#" method="post">
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

                <div class="erstellen-möglichkeiten">
                    <h3>Frage:</h3>
                    <textarea name="Frage" placeholder="Hier die Frage eingeben:" required></textarea>

                    <h3>Antwort Möglichkeiten:</h3>
                    <textarea name="Antwort" placeholder="Hier die Antwort Möglichkeiten eingeben:" required></textarea>
                </div>
                <div class="erstellen-Lösung">
                    <h3>Lösung:</h3>
                    <textarea name="Lösung" placeholder="Hier die Lösung eingeben:" required></textarea>
                </div>
                <button type="submit">Speichern</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <ul>
            <li><a href="/lehrer/index.php">Dashboard</a></li>
            <li><a href="/lehrer/erstellen.php">Erstellen</a></li>
            <li><a href="/lehrer/profil.php">Profil</a></li>
        </ul>
    </div>
</body>
</html>