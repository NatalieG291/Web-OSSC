<?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    /* Exception class. */
    require '../mail/src/Exception.php';
    
    /* The main PHPMailer class. */
    require '../mail/src/PHPMailer.php';
    
    /* SMTP class, needed if you want to use SMTP. */
    require '../mail/src/SMTP.php';

    $config = include('config.php');

    $respuesta = "";

    $Asunto = 'Solicitud de informacion';
	$Nombre = $_POST['Nombre'];
    $Empresa = $_POST['Empresa'];
	$Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
	$Mensaje = $_POST['Mensaje'];
    $Giro = $_POST['Giro'];
    $Reloj = $_POST['Reloj'];
    $Confronta = $_POST['Confronta'];
    $Digitalizador = $_POST['Digitalizador'];
    $Kiosco = $_POST['Kiosco'];
    $Clima = $_POST['Clima'];
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    ob_start();
    ?>
        <!DOCTYPE HTML>
        <html>
            <head>
                <style>
                    a
                    {
                        background-color: RGBA(74, 112, 89);
                        padding: 15px;
                        text-decoration: none;
                        color: gray;
                        font-family: segoe ui;
                    }
                    h1, h3, p, span
                    {
                        font-family: segoe UI;
                    }
                </style>
            </head>
            <body>
                <center>
                <h1><?php echo $Asunto; ?></h1>
                </center>
                <p>El usuario <b><?php echo $Nombre; ?> </b> de la empresa <b><?php echo $Empresa;?></b> solicito comunicarse por alguno de los siguientes medios</p>
                <p><b>Correo:</b> <?php echo $Email; ?></p>
                <p><b>telefono:</b> <?php echo $Telefono;?>.</p>
                <h3>Software de interes</h3>
                <ul>
                    <?php if ($Giro <> '') {
                        echo '<li>' . $Giro . '</li>';
                    }?>
                    <?php if ($Reloj <> '') {
                        echo '<li>' . $Reloj . '</li>';
                    }?>
                    <?php if ($Confronta <> '') {
                        echo '<li>' . $Confronta . '</li>';
                    }?>
                    <?php if ($Digitalizador <> '') {
                        echo '<li>' . $Digitalizador . '</li>';
                    }?>
                    <?php if ($Kiosco <> '') {
                        echo '<li>' . $Kiosco . '</li>';
                    }?>
                    <?php if ($Clima <> '') {
                        echo '<li>' . $Clima . '</li>';
                    }?>
                </ul>

				<h3>Detalle de la solicitud:</h3>
				<p><?php echo $Mensaje; ?></p>
            </body>
        </html>
    <?php
    $content = ob_get_contents();
    ob_end_clean();
    @file_put_contents($cacheFile,$content);
    //echo $content;
    try
    {
        $mail->CharSet = 'UTF-8';
        $mail->Host = htmlspecialchars($config['ServidorSMTP']);
        $mail->SMTPDebug = htmlspecialchars($config['debug']);
        $mail->SMTPSecure = htmlspecialchars($config['seguridad']);
        $mail->SMTPAuth = htmlspecialchars($config['autenticar']);
        $mail->Port = htmlspecialchars($config['puerto']);
        $mail->Username = htmlspecialchars($config['correo']);
        $mail->Password = htmlspecialchars($config['contra']);

        $str = file_get_contents('emails.json');
        $json = json_decode($str, true);
        $emails = $json['correos'];
        //echo $emails;
        array_map(array($mail, 'AddAddress'), explode(';', $emails));

        $mail->SetFrom(htmlspecialchars($config['correo']), htmlspecialchars($config['NombreMostrar']));
        $mail->Subject = htmlspecialchars($config['asunto']);
        $mail->AltBody = '<b>Para ver el mensaje, por favor use un visor HTML compatible.</b>'; // 
        $mail->MsgHTML($content);
        $mail->Send();

        $respuesta = "El correo se envio correctamente";
    }
    catch(phpmailerException $e)
    {
        $respuesta = "No se envio el correo electronico";

        header("HTTP/1.1 500 internal");
    }
    catch(Exception $e)
    {
        $respuesta = "No se envio el correo electronico";
        header("HTTP/1.1 500 internal");
    }

	echo $respuesta;
?>