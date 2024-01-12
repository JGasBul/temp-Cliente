<?php
include("../clases/TempData.php");
session_start();

// Leer el cuerpo de la solicitud POST y decodificar el JSON
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'] ?? ''; // Utiliza un valor predeterminado si 'email' no está establecido

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost:8080/mediciones/ultima_medicion",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 1,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
));
$headers = [
    'accept: application/json',
    'email: ' . $email // Utiliza el email obtenido de la solicitud POST
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$res = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo json_encode(['error' => $err]);
} else {
    $res = json_decode($res, true); // Decodificar como array
    if (!is_array($res) || !isset($res[0])) {
        // Devolver un JSON con valores nulos si no hay mediciones o si el array está vacío
        echo json_encode(['email' => $email, 'instante' => null]);
    } else {
        // Asegurarse de que el índice y el campo 'instante' estén establecidos
        $_SESSION['email'] = $res[0]['email'] ?? $email;
        $_SESSION['instante'] = $res[0]['instante'] ?? null;
        echo json_encode(['email' => $_SESSION['email'], 'instante' => $_SESSION['instante']]);
    }
}
?>
