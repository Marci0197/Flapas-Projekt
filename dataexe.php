<?php

$username="marcel"; // your lower privileged userid
$password="MM-06102009-mm"; //your password for your lower privileged user
$database="studyzone";  //your database

$conn = mysqli_connect("localhost", $username, $password, $database);
if (mysqli_connect_errno()){
        echo "Failed to connect to database: " . mysqli_connect_error();
        exit();
}else{
    echo "Connected to database";
    $sql = "SELECT ID, Name FROM Benutzer;";
    $result = mysqli_query($conn, $sql);
    echo "result" + $result;
}


/*
//first query
$sql = "SELECT datetime, temperature, pressure, humidity FROM bmesensor;";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result))
{
        print "Time: $row[0] temp: $row[1] pressure: $row[2] humidity: $row[3]\n";
}
*/
?>
