1. Log-in to basementsystems@gmail.com  
2. Follow instructions here: https://www.google.com/recaptcha/admin#list


```php
<?php
if (!empty($_POST)) {
  

$url = 'https://www.google.com/recaptcha/api/siteverify';
$privatekey = "your-privatekey";
$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$data = json_decode($response);

if (isset($data->success) AND $data->success==true) {
      
            $subject = "Commercial FSI Project Form - ".$_POST['Name']." ".$_POST['Project_Name'];
          	$message .= "Name:".$_POST['Name']."<br>
";
          	$message .= "Job Title: ".$_POST['Title']."<br>
";
          	$message .= "Type Of Company: ".$_POST['Company_Type']."<br>
";
          	$message .= "Street: ".$_POST['Street']."<br>
";
          	$message .= "City: ".$_POST['City']."<br>
";
          	$message .= "State: ".$_POST['State']."<br>
";
          	$message .= "Zip Code: ".$_POST['Zip_Code']."<br>
";
          	$message .= "E-mail: ".$_POST['Email_Address']."<br>
";
          	$message .= "Phone: ".$_POST['Phone']."<br>
";
          	$message .= "Project_Location: ".$_POST['Project_Name']."<br>
";
            $message .= "Project_Location: ".$_POST['Project_Location']."<br>
";
            $message .= "Start_Date: ".$_POST['Start_Date']."<br>
";
          	$message .= "Message: ".$_POST['Message']."<br>
";
          	$message .= "Design: ".$_POST['Design']."<br>
";

          	$headers = "Content-type: text/html; charset=utf-8
";
          	$headers .= "MIME-Version: 1.0
";
          	$headers .= "Bcc: basementsystems.emailcache@gmail.com
";
          	$headers .= "From: ".$_POST['Email_Address']."
";
          	$headers .= "Reply-To: ".$_POST['Email_Address']."
";
          	$headers .= "Return-Path: ".$_POST['Email_Address']."
";
          	// now lets send the email.
          	$to = "croselli@basementsystems.com";
          	mail($to, $subject, $message, $headers);

          	echo '
            <style>
              .hide-form {
                display:none;
              }
            </style>
          	<div id="contact-co-info">
          		<h1>Thank You For Contacting Commercial [company]</h1>
          		<p>We will be in contact with you shortly.</p>
          	</div>
          	';

            
} else {
  
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again.");

  }
}

?>
<div class="hide-form">

<h1>Preliminary Design Request</h1>

<p>[company] can address your current project needs or any future site development needs. Contact us today to let us review your project and provide you with an assessment of your project.



<p>All fields with (<font size="2" face="verdana" color="#ff0000">*</font>) are required. </p>

<form method="post">

<script type="text/javascript" src="/core/js/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	jQuery.validator.addMethod('notEqualTo', function(value, element, param) {
		return this.optional(element) || value != $(param).val();
	}, 'First and last name cannot be the same.');

			jQuery.validator.addMethod('zip', function(zip, element) {
			return this.optional(element) || zip.match(/(^\d{5}(-\d{4})?$)$/);
		}, 'Please enter a valid zip code.');

		jQuery.validator.addMethod('phone', function(phone, element) {
			return this.optional(element) || phone.match(/^[01]?[- .]?\(?[2-9]\d{2}\)?[- .]?\d{3}[- .]?\d{4}$/);
		}, 'Please enter a valid phone number.');
			$('#main-contact').validate({
		rules: {
			Email_Address: {
				email: true
			},
			First_Name : {
				notEqualTo: '#Last_Name'
			},
			Zip_Code: {
				zip: true
			},
			Phone: {
				phone: true
			}
		}
	});

		$('#main-contact').submit(function() {
		if($('#main-contact').valid() === true)
		{
			$('#main-contact .submit').attr('disabled', 'disabled');
		}
	});
});
</script>

  <table cellspacing="1" cellpadding="6" border="0" align="center" id="main-contact" width="100%">

    <tbody>

      <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Name:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your first name." validate="text" required="yes" required maxlength="50" size="25" name="Name"/></td>

      </tr>

      <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Title:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your title" validate="text" required="yes" required maxlength="50" size="25" name="Title"/></td>

      </tr>

      <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Type Of Company:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your type of company." validate="text" required="yes" required name="Company_Type" size="25" maxlength="50"/></td>

      </tr>

      <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Street:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your street." validate="text" required="yes" required name="Street" size="25" maxlength="50"/></td>

      </tr>

	    <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>City:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your city." validate="text" required="yes" required name="City" size="25" maxlength="50"/></td>

      </tr>

      <tr class="purple">

      <td align="right" valign="top" bgcolor="#F2F2F2">  <font size="2" face="verdana" color="#ff0000">*</font>State, Zip:  </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your state." validate="text" required="yes" required maxlength="2" size="2" name="State"/>,

        <input message="Please enter your zip code." validate="text" required="yes" maxlength="5" size="8" name="Zip_Code"/></td>

      </tr>



      <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Phone:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your phone number." validate="int" required="yes" required name="Phone" size="25" maxlength="50"/></td>

      </tr>

      <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Email:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your email address." validate="email" required="yes" required maxlength="50" size="25" name="Email_Address"/></td>

      </tr>

         <tr>

        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Project Name:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your project name." validate="text" required="yes" required maxlength="50" size="25" name="Project_Name"/></td>

      </tr>

      </tr>

<tr>


        <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Project Location:   </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your project location." validate="text" required="yes" required maxlength="50" size="25" name="Project_Location"/></td>

      </tr>

      <tr>
  <td align="right" valign="top" bgcolor="#F2F2F2"><font size="2" face="verdana" color="#ff0000">*</font>Construction start date:  </td>

        <td align="left" bgcolor="#F2F2F2"><input message="Please enter your start date." validate="text" required="yes" required maxlength="50" size="25" name="Start_Date"/></td>

      </tr>

      </tr>

  <tr>

        <td colspan="2" align="middle" valign="top" bgcolor="#F2F2F2"><center><b>Project Description: </b></center> </td>

      </tr>

      <tr>

        <td colspan="2" align="middle" bgcolor="#F2F2F2"><center><textarea cols="50" rows="6" name="Message"/></textarea></center>

              </td>

      </tr>




<tr>

        <td colspan="2" align="middle" valign="top" bgcolor="#F2F2F2"><center><b>*Design Considerations: </b></center> </td>

      </tr>

      <tr>

        <td colspan="2" align="middle" bgcolor="#F2F2F2"><center><textarea cols="50" rows="6" name="Design"/></textarea></center>

              </td>

      </tr>


      <tr>

        <td colspan="2" align="center" bgcolor="#F2F2F2">
          <div class="g-recaptcha" data-sitekey="your-publickey"></div>

					<input type="submit" name="save" value="Send Mail" onclick="validate(this.form); return document.formSubmit;" />

		<input type="hidden" name="submit" value="save" />

		</td>

      </tr>

    </tbody>

  </table>

</form>
</div>
```
