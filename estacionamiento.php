<?php
header('Content-Type: application/json');

// Simulamos los datos del Arduino para este ejemplo.
$data = [
    'status1' => 50,    // Ejemplo de distancia del primer sensor
    'status2' => 10,    // Ejemplo de distancia del segundo sensor
    'countIn' => 5,     // Número de carros ingresados
    'countOut' => 3     // Número de carros salidos
];

// Si se reciben los datos del Arduino, se actualizan.
if (isset($_GET['status1']) && isset($_GET['status2']) && isset($_GET['countIn']) && isset($_GET['countOut'])) {
    $data['status1'] = $_GET['status1'];
    $data['status2'] = $_GET['status2'];
    $data['countIn'] = $_GET['countIn'];
    $data['countOut'] = $_GET['countOut'];
}

echo json_encode($data);  // Devuelve los datos en formato JSON
?>
