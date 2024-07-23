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

    require 'config.php';

	$respuesta = array();

    $Asunto = $_REQUEST['Asunto'];
	$Nombre = $_REQUEST['Nombre'];
	$Email = $_REQUEST['Email'];
	$Mensaje = $_REQUEST['mensaje'];
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
                <p>El usuario <b><?php echo $Nombre; ?> </b>solicito comunicarse al siguiente correo: <?php echo $Email; ?>.</p>
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
        $mail->Host = $ServidorSMTP;
        $mail->SMTPDebug = $Debuggear;
        $mail->SMTPSecure = $Seguridad;
        $mail->SMTPAuth = $Autenticar;
        $mail->Port = $Puerto;
        $mail->Username = $Correo;
        $mail->Password = $Contraseña;

        $emails = 'natalia.garcia@ossc.com.mx';
        array_map(array($mail, 'AddAddress'), explode(';', $emails));

        $mail->SetFrom($Correo, $NombreMostrar);
        $mail->Subject = $Asunto;
        $mail->AltBody = '<b>Para ver el mensaje, por favor use un visor HTML compatible.</b>'; // 
        $mail->MsgHTML($content);
        $mail->Send();

        $respuesta['error'] = "no";
        $respuesta['msg'] = "El correo se envio correctamente";
    }
    catch(phpmailerException $e)
    {
        $respuesta['error'] = "si";
        $respuesta['msg'] = "No se envio el correo electronico";

        //echo $e;
    }
    catch(Exception $e)
    {
        $respuesta['error'] = "si";
        $respuesta['msg'] = "No se envio el correo electronico (ex) <br>".$e."";

        echo $e;
    }

	echo json_encode($respuesta);
?>