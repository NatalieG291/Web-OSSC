<?php
// guardar-config.php

// Obtener los datos JSON enviados
$data = file_get_contents('php://input');
$json_data = json_decode($data, true);

if (isset($json_data['correos'])) {
    $correos = $json_data['correos'];

    // Guardar la configuración en un archivo JSON
    $config = array('correos' => $correos);
    $config_json = json_encode($config);
    file_put_contents('emails.json', $config_json);

    echo json_encode(array('status' => 'success', 'message' => 'Configuración actualizada'));
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Datos no válidos'));
}
?>

