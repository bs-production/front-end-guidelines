 <?php
if (!empty($_POST)) {
 
 		$recaptcha_secret = "6LdKIR8TAAAAAGxMjmvWpu7chQit-BzMwLRubCst";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
              echo "Form Code";
        }
        else
        {
            echo "You are a robot";
        }



        ?>