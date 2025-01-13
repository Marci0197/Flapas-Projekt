<?php
$username = "marcel"; // your lower privileged userid
$password = "MM-06102009-mm"; // your password for your lower privileged user
$database = "studyzone";  // your database

// Verbindung zur Datenbank herstellen
$conn = mysqli_connect("localhost", $username, 
$password, $database);

// Überprüfung, ob die Verbindung erfolgreich war
if (mysqli_connect_errno()) {
    echo "Failed to connect to database: " . mysqli_connect_error();
    exit();
}else{
    echo "Connected to database<br>";

    // SQL-Abfrage
    $sql = "SELECT * FROM `Benutzer`";
    $result = mysqli_query($conn, $sql);

    // Ergebnisse durchlaufen und anzeigen
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['ID'] . " - Name: " . $row['Name'] . "<br>";
    }
}

// Verbindung schließen
mysqli_close($conn);
?>