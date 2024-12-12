<?php
$username = "marcel"; // your lower privileged userid
$password = "MM-06102009-mm"; // your password for your lower privileged user
$database = "studyzone";  // your database

// Verbindung zur Datenbank herstellen
$conn = mysqli_connect("localhost", $username, $password, $database);

// Überprüfung, ob die Verbindung erfolgreich war
if (mysqli_connect_errno()) {
    echo "Failed to connect to database: " . mysqli_connect_error();
    exit();
} else {
    echo "Connected to database<br>";

    // SQL-Abfrage
    $sql = "SELECT * FROM `Benutzer`";
    $result = mysqli_query($conn, $sql);

    // Überprüfung, ob die Abfrage erfolgreich war
    if (!$result) {
        echo "Error in query: " . mysqli_error($conn);
    } else {
        // Prüfen, ob Datensätze vorhanden sind
        if (mysqli_num_rows($result) > 0) {
            // Ergebnisse durchlaufen und anzeigen
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
            }
        } else {
            echo "No records found in the table.";
        }
    }
}

// Verbindung schließen
mysqli_close($conn);
?>
