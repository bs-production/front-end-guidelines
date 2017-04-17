<?php
  if (!empty($_POST))
  {
  // make sure your form has <form enctype="multipart/form-data" 
  require_once ENV_ROOT.'/vendor/swiftmailer/swiftmailer/lib/swift_required.php';

  $emailBody = '
     <p>Name: '.$_POST['form_logger_Name'].'</p>
     <p>Address: '.$_POST['form_logger_Address'].'</p>
     <p>Military Branch: '.$_POST['form_logger_Branch'].'</p>
     <p>Military Rank: '.$_POST['form_logger_Rank'].'</p>
     <p>Date of Service: '.$_POST['form_logger_Service_Dates'].'</p>
     <p>Phone: '.$_POST['form_logger_Phone'].'</p>
     <p>Email: '.$_POST['form_logger_Email'].'</p>
     <p>Comments: '.$_POST['form_logger_Comments'].'</p>
  ';
    $mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());
    $message = Swift_Message::newInstance();
    $message->setFrom(array('no-reply@basementsystems.com' => 'Basement Systems'));
    $message->setTo(array('nlynch@basementsystems.com' => 'q1'));
    $message->setBcc('basementsystems.emailcache@gmail.com');
    $message->setSubject('A Hero Lives Here submission');
    $message->setBody($emailBody, 'text/html');

           if(!empty($_FILES['form_logger_Proof']['name']))

                 {
                   $maxUploadSize = 2097152; //2MB
                   $validFileExtensions = array('png', 'jpg', 'pdf', 'rtf', 'txt', 'odf');

                   $validFile = false;

                     $extension = strtolower(pathinfo($_FILES['form_logger_Proof']['name'], PATHINFO_EXTENSION));

                     if ($_FILES['form_logger_Proof']['size'] < $maxUploadSize and in_array($extension, $validFileExtensions)) {
                         $validFile = true;
                         $tempFile = '/tmp/'.uniqid().'-'.basename($_FILES['form_logger_Proof']['name']);
                          move_uploaded_file($_FILES['form_logger_Proof']['tmp_name'], $tempFile);
                          print($tempFile);
                         $message->attach(Swift_Attachment::fromPath($tempFile));
                      }
                }
    $mailer->send($message);


  // Store data in logger image won't be saved
          global $siteData, $siteDefineData;
          require_once ENV_ROOT.'/portal/libraries/formLogger.api.php';
          $logger = new formLoggerApi();
          $logger->setSiteId($siteData['site.id']);
          $logger->setSessionId($siteDefineData['cms_tracking_sessions']['session.id']);
          $logger->setFormId('form_logger_');
          $logger->setFormName('Hero_Entry');
          $logger->setcustomEmailSubject('A Hero Lives Here submission');   
      
      if ($logger->saveData($_POST)) {
            echo '<div>
                    <h1><span class="a-hero animate-fade-slide-right">Thank You</span> <span class="lives-here animate-fade-slide-left">for your entry!</span></h1>
                    <h2 class="animate-fade-up">A representative from Quality 1st Basement Systems will contact you shortly regarding the <span>A Hero Lives Here</span> program.</h2>
                </div>';
        } else {
            echo '<div><h1 class="oops">Oops, it looks like something went wrong.</h1>
            <a class="button nominate" href="/hero.html">Please resubmit your entry</a></div>';
        }



  }
  
?>
