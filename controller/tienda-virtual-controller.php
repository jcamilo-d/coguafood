<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$solicitud = $_POST['solicitud'];

if (isset($solicitud)) {

 switch ($solicitud) {
  case 'enviarMsj':
   enviarMsj();
   break;

  default:
   print_r(json_encode(array('respuesta' => "error", 'mensaje' => "Lo sentimos, no tienes acceso a este apartado")));
   break;
 }

} else {
 print_r(json_encode(array('respuesta' => "error", 'mensaje' => "Lo sentimos, no tienes acceso a este apartado")));
}

function enviarMsj()
{
 require_once '../vendor/autoload.php';

 try {
  // Se envía el correo
  $getCaptcha_response = getCaptcha($_POST['g_token']);
  $email_local = $_POST['email_contacto'];

  if ($getCaptcha_response['success'] == false) {
   $jsonResponse = array(
    'respuesta' => "ok",
    'mensaje' => 'grecaptcha-error',
    'content' => $getCaptcha_response['error-codes'],
   );

  } else {
   $mail_HTML = '<table style="height: 43px; margin-left: auto; margin-right: auto;" border="1px solid #FD551" width="700">
							<tbody>
							<tr style="height: 37px;">
							<td style="width: 323.295px; height: 37px;"><span style="color: #ff6600;"><strong>Mensaje:</strong></span></td>
							<td style="width: 333.295px; height: 37px;">' . $_POST['msj'] . '</td>
							</tr>
							</tbody>
							</table>
							<p style="text-align: center;">&nbsp;</p>
							<p style="text-align: center;"><span style="color: #ff6600;"><strong>Este mensaje fu&eacute; generado desde tienda virtual la casona</strong></span></p>';

   $mail = new PHPMailer;
   $mail->Host = "localhost";
   $mail->From = $email_local;
   $mail->FromName = "Tienda virtual la casona";
   $mail->addAddress($email_local);

   $mail->CharSet = 'UTF-8';
   $mail->Subject = ("¡Tienda virtual La Casona!");
   $mail->MsgHTML($mail_HTML);

   // $log_mails_file = "../../logs_mails/log_mails.log";

   if ($mail->Send()) {

    $jsonResponse = array(
     'respuesta' => "ok",
     'mensaje' => 'grecaptcha-ok',
     'content' => array(
      'title' => "¡HEMOS RECIBIDO TU PEDIDO!",
      'text' => "GRACIAS POR COMUNICARTE CON NOSOTROS",
     ),
    );

   } else {
    $jsonResponse = array(
     'respuesta' => "error",
     'mensaje' => 'grecaptcha-ok',
     'content' => array(
      'title' => "El correo no se pudo enviar por: ",
      'text' => "$mail->ErrorInfo",
     ),
    );
   }
  }

  print_r(json_encode($jsonResponse));

 } catch (Exception $e) {
  print_r(json_encode(array('respuesta' => "error", 'mensaje' => "Surgió un error al enviar el correo. ")));
 }
}

function getCaptcha($secret_token)
{
 $gr_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcgmfAUAAAAAGTJGPsA8I7d7iCkomlCjcFv-uiQ&response={$secret_token}");

 return $gr_response;
}
