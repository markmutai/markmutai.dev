<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

$captcha = $_POST['g-recaptcha-response'];
$secretKey = "6LcYFn8UAAAAAC5P_tfJMZgCMg2L9lxNEsdfHih8";
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
$responseKeys = json_decode($response, true);

session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];

if (intval($responseKeys["success"]) !== 1) {
  echo "fail";
} elseif (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST['comment'])) {
  echo "fail";
} elseif (preg_match("/(\S+\.(com|net|org|edu|gov)(\/\S+)?)/", $_POST['comment'])) {
  echo "fail";
} elseif (!empty($_POST['surname'])) {
  die();
} elseif (($_POST['name'] == 'James Lambert')) {
  die();
} else {
  $mail = new PHPMailer(true);
  //Server settings
  //$mail->SMTPDebug = 1;                      // Enable verbose debug output
  $mail->isSMTP();
  $mail->SMTPSecure = 'ssl';                                          // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Port       = 465;          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  $mail->Username   = 'markmutai@gmail.com';                     // SMTP username
  $mail->Password   = 'fpbopggzjssfqgir';                                  // SMTP password
  //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged


  $mail->setFrom('markmutai@gmail.com', 'Mutai');
  $mail->addAddress('markmutai@gmail.com');


  //Recipients
  // Add a recipient
  //$body  = $_POST["comment"];
  //$response = $_POST["g-recaptcha-response"];
  //$mail->addAddress('ellen@example.com');              // Name is optional
  $mail->addReplyTo($_POST['email']);
  //$mail->addReplyTo('info@example.com', 'Information');
  //$mail->addCC('cc@example.com');
  //$mail->addBCC('bcc@example.com');

  // Attachments
  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'New Message from mutai.me';
  $mail->Body    = "<b>From :</b><br/>" . $_POST['name'] . "<br/><br/><br/><b>E-mail :</b><br/>" . $_POST['email'] . "<br/><br/><br/><b>Service Enquiry :</b><br/>" . $_POST['services'] . "<br/><br/><br/><b>Message :</b><br/>" . $_POST['comment'];
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  $mail->send();
  echo "success";
  // } catch (Exception $e) {
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
