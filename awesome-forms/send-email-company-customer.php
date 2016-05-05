<?php
if (isset($_POST['signup']))
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
 
 		$to = 'jsiwicki@basementsystems.com';
		$bcc_email = 'basementsystems.emailcache@gmail.com';

		$subject =  'Whitepaper Download: '.$_POST['Company']. "\r\n";

		
	
		$headers =  'Content-type: text/html; charset=utf-8'. "\r\n";
		$headers .= 'MIME-Version: 1.0'. "\r\n";
		$headers .= 'From: '.$_POST['Email_Address']. "\r\n";
		$headers .= 'Reply-To: '.$_POST['Email_Address']. "\r\n";
		$headers .= 'Return-Path: '.$_POST['Email_Address']. "\r\n";
		$headers .=  'Bcc: '.$bcc_email. "\r\n";
 
		$message = 'Email Address: '.$_POST['Email_Address']."<br>";
		$message .= "Company: ".$_POST['Company']."<br>";
        
	
		mail($to, $subject, $message, $headers);
 

 		$to = $_POST['Email_Address']. "\r\n";

	    $subject = 'Confirmation: Whitepaper'. "\r\n";
		$headers = 'Content-type: text/html; charset=utf-8'. "\r\n";
		$headers .= 'MIME-Version: 1.0'. "\r\n";
		$headers .= 'From: spelizzari@contractornation.com'. "\r\n";
		$headers .= 'Reply-To: spelizzari@contractornation.com'. "\r\n";
		$headers .= 'Return-Path: no-replay@basementsystems.com'. "\r\n";
		$headers .=  'Bcc: '.$bcc_email. "\r\n";

 
		$message = '
		<p>Hello,</p>

			<p>You will shortly receive a second email with a link to the 5 Steps for Any Contractor to Increase Profits.</p>

			<p>You may also be interested in immediately reading:</p>
			<p>https://www.contractornation.com/blog/11249-leads-for-your-contracting-business-machine.html</p>
			<p>https://www.contractornation.com/blog/10720-managing-leads-and-appointments-during-busy-times.html</p>
			<p>https://www.contractornation.com/blog/10297-guaranteed-seo-and-ppc-results.html</p>

			<p>Best regards, and you can definitely feel free to reply to this email with any questions, comments, or just questions about marketing your contracting company.</p>

			<p>Stephanie Pelizzari <br>
			Contractor Nation<br>
			203-463-9677<br>
			http://www.ContractorNation.com<br>
			https://www.ContractorNation.com/blog.html</p>
		';
        
	
	mail($to, $subject, $message, $headers);
		
		
		echo '<h1>Thanks for contacting us!</h1><p>We have received your information, and one of our specialists will contact you soon  regarding our Whitepaper</p>';
	}
}
else
{
	echo '
		<p>Unable to access this page directly.</p>
	';
}
?>