
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Configuración del servidor
    $ServidorSMTP = $_POST['ServidorSMTP'];
    $Debuggear = $_POST['debug'];
    $Seguridad = $_POST['seguridad'];
    $Autenticar = $_POST['autenticar'];
    $Puerto = $_POST['puerto'];
    $Correo = $_POST['correo'];
    $Contraseña = $_POST['contra'];

    //Configuración del correo
    $Asunto = 'Solicitud de contacto';
    $NombreMostrar = 'web OSSC';

    if($Debuggear == 'on') {
        $Debuggear = 'true';
    }
    else {
        $Debuggear = 'false';
    }
    if ($Autenticar == 'on') {
        $Autenticar = 'true';
    } else {
        $Autenticar = 'false';
    }

    $config = [
        'asunto' => $Asunto,
        'NombreMostrar' => $NombreMostrar,
        'ServidorSMTP' => $ServidorSMTP,
        'debug' => $Debuggear,
        'seguridad' => $Seguridad,
        'autenticar' => $Autenticar,
        'puerto' => $Puerto,
        'correo' => $Correo,
        'contra' => $Contraseña,
    ];

    file_put_contents('config.php', '<?php return ' . var_export($config, true) . ';');
    echo "Configuración actualizada";
}
?>
