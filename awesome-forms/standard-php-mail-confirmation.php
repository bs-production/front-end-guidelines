<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   $time = time();
$form_time = $_POST['time'];
$threshold = 5; // Anything filling out the form in fewer than this number of seconds is likely a bot.

if( ($time - $form_time) < $threshold )
{
echo "<p>Sorry, your entry appeared too similar to a robot. If you're not a robot, please hit back and try again.</p>";
}
else
{


 
$email_data[] = array('email' => 'nolan@redeemersgroup.com');
$mailer = new massMailer($email_data);
$mailer->from = "no-reply@redeemersgroup.com";
$mailer->subject = 'The Redeemers Group Service Request: '.$_POST['First_Name'].' '.$_POST['Last_Name'];
$mailer->message .= "First Name: ".$_POST['First_Name']."<br>";
$mailer->message .= "Last Name: ".$_POST['Last_Name']."<br>";
$mailer->message .= "Email Address: ".$_POST['Email_Address']."<br>";
$mailer->message .= "Address: ".$_POST['Address']."<br>";
        $mailer->message .= "City: ".$_POST['City']."<br>";
        $mailer->message .= "State: ".$_POST['State']."<br>";
        $mailer->message .= "Home Phone: ".$_POST['Home_Phone_Number']."<br>";
        $mailer->message .= "Cell: ".$_POST['Cell_Phone_Number']."<br>";
        /* $mailer->message .= "Service Type: ".$_POST['Service_Type']."<br>"; */
        $mailer->message .= "Briefly Describe Your Requested Service: ".$_POST['Special_Instructions']."<br>";
$mailer->send();


echo '<h1>Thanks for contacting us!</h1>';
echo '<p>Thank you for submitting a service request! The [company] team is on it. You will be contacted shortly to confirm we have received the information.</p>';
}
}
else
{
echo '
<p>Unable to access this page directly.</p>
';
}
?>