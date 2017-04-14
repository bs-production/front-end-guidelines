<?php
  if (!empty($_POST))
  {
  require_once ENV_ROOT.'/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
  //Name of Image input
  $image = $_POST['image_1'];
  $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));
  $emailBody = '
     <p>Name '.$_POST['form_logger_9'].'</p>
     <p>Zip Code '.$_POST['form_logger_10'].'</p>
     <p>Email '.$_POST['form_logger_11'].'</p>
     <p>Phone '.$_POST['form_logger_12'].'</p>
     <p>Comments '.$_POST['form_logger_0text'].'</p>
  ';
  	$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());
  	$message = Swift_Message::newInstance();
  	$message->setFrom(array('no-reply@.com' => 'No Reply'));
  	$message->setTo(array('info@' => 'Company Name'));
    $message->setBcc('basementsystems.emailcache@gmail.com');
  	$message->setSubject('Subject');
  	$message->setBody($emailBody, 'text/html');
  	if(!empty($image))
		{
		    $message->attach(Swift_Attachment::newInstance($image, 'image.png', 'image/png'));
		}
  	$mailer->send($message);


  // Store data in logger image won't be saved
  	 global $siteData, $siteDefineData;
          require_once ENV_ROOT.'/portal/libraries/formLogger.api.php';
          $logger = new formLoggerApi();
          $logger->setSiteId($siteData['site.id']);
          $logger->setSessionId($siteDefineData['cms_tracking_sessions']['session.id']);
          $logger->setFormId('form_logger_');
          $logger->setFormName('Form Name');
          $logger->setcustomEmailSubject('Subject');

           if ($logger->saveData($_POST)) {
              echo '<h1>Thank you for contacting us!!</h1>';
              echo '<p>A representative will be in touch shortly</p>';
          } else {
              echo '<h1>It looks like something went wrong. Please go back and try again</h1>';
          }

  }
  ?>
