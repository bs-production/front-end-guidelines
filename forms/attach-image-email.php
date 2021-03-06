<?php
if (!empty($_POST))
{

require_once ENV_ROOT.'/vendor/swiftmailer/swiftmailer/lib/swift_required.php';

$image = $_POST['signature'];
$image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

$emailBody = '
   <p>First Name: '.$_POST['form_logger_First_Name'].'</p>
   <p>Last Name: '.$_POST['form_logger_Last_Name'].'</p>
   <p>Street: '.$_POST['form_logger_Street'].'</p>
   <p>City: '.$_POST['form_logger_City'].'</p>
   <p>State: '.$_POST['form_logger_State'].'</p>
   <p>Zip Code: '.$_POST['form_logger_Zip_Code'].'</p>
   <p>Phone: '.$_POST['form_logger_Phone'].'</p>
';

$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());
$message = Swift_Message::newInstance();
$message->setFrom(array('no-reply@contractornation.com' => 'No Reply'));
$message->setTo(array('', '' => 'A name'));
$message->setBcc('basementsystems.emailcache@gmail.com');
$message->setSubject('Completion Approval Form');
$message->setBody($emailBody, 'text/html');
$message->attach(Swift_Attachment::newInstance($image, 'signature.png', 'image/png'));
$mailer->send($message);

echo '<h2>Thank you for submitting the Completion Approval form.</h2>';

}
?>
