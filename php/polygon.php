<?php

include("../../php/config.php");

$points = [
    ['x' => 1.2, 'y' => 3.4],
    ['x' => 5.6, 'y' => 7.8],
];

$json = json_encode($points, JSON_NUMERIC_CHECK);

$sql = "INSERT INTO polygons_json (ID_zu_Bild, Coords) VALUES (:ID_zu_Bild, :Coords)";
// $sql = "INSERT INTO polygons_json ('ID_zu_Bild', 'Coords') VALUES ('ID_zu_Bild', 'Coords')";
$stmt = $con -> prepare($sql);
$stmt -> execute([
    ':ID_zu_Bild'   => 'MeinPolygonJSON', // Hier ID von BILD ... 
    ':Coords' => $json
]);

?>