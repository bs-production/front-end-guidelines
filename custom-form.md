# Custom Forms
### Remove "What Prompted" Dropdown from PPC Contact Form
```js
<script>
    $('.what-prompted').remove();
</script>
```

### Form Builder 

http://codepen.io/siwicki/live/zqyVdX


For your form you need to name your inputs "form_logger_" , any form inputs should be named accordingly.

For example, '<input name="form_logger_first_name" />' 

```html
   <form action="" method="post">
      <label for="first-name">First Name</label>
      <input name="form_logger_first_name"  id="first-name" />
 </form>
```
 Place the following above a HTML form.
```php
    <?php
    if (!empty($_POST)) {
        global $siteData, $siteDefineData;
        require_once ENV_ROOT.'/portal/libraries/formLogger.api.php';
        $logger = new formLoggerApi();
        $logger->setSiteId($siteData['site.id']);
        $logger->setSessionId($siteDefineData['cms_tracking_sessions']['session.id']);
        $logger->setFormId('form_logger_');
        $logger->setFormName('Form Name');
        $logger->setcustomEmailSubject('Subject');
        $logger->setNotificationEmailAddresses('john@john.com');    
        if ($logger->saveData($_POST)) {
            echo '<h1>Thank you!!</h1>';
            echo '<p>Extra content?</p>';
        } else {
            echo '<h1>It looks like something went wrong.</h1>';
        }
    }
    ?>
  ```


## Standard Free Estimate 

Need a little extra Juice for your Free Estimate pages? Note the hidden input as well as the name attribute for the form elements. Anything 

```html
 
<input type="hidden" value="How did you hear about us?" name="custom_field_1_name" />
 <div class="servicetype">
 <label for="custom_field_1">How did you hear about us?</label>
 <select class="required" name="custom_field_1">
 <option value="" selected="selected">Please Select...</option>
  <option>Ads (Online)</option>
  <option>Angie's List</option>
  <option>Other</option>
 </select>
 </div>
```



### Send Data To Another Source

```php
<?php
// matchup up your fields with new source
  $data = array(
        'firstname'  => $_POST['form_logger_First_Name'],
        'lastname' => $_POST['form_logger_Last_Name'],
        'phone1' => $_POST['form_logger_Phone'],
        'email1' => $_POST['form_logger_Email_Address'],
        'streetaddress' => $_POST['form_logger_Street'],
        'city' => $_POST['form_logger_City'],
        'state' => $_POST['form_logger_State'],
        'zip' => $_POST['form_logger_Zip_Code']
    );

    $serialize = http_build_query($data);
    //
    $request = curl_init('url here');
    curl_setopt($request, CURLOPT_POST, 1);
    curl_setopt($request, CURLOPT_POSTFIELDS, $serialize);
    curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($request);
    curl_close($request);

?>

```


## Auto-update Lead Association in Portal  

Need to add a "type of service" field to free estimate form that automatically changes association in portal Lead.
Add to "before borders":

```html
 
<?php
if (!empty($_POST)  || ($_SERVER['REQUEST_URI'] == "/free-estimate/confirmation.html") )
{
    global $siteData;
    $siteData['association.id'] = $_POST['association'];
}
?>
```

Add to "borders" before </html> - make sure value="x" matches the association you need 

```html
 
<?php if(stristr($thePage,"free-estimate")) { ?> 
    <script>
        $(document).ready(function() {
            $("<input type=\"hidden\" value=\"What service are you contacting us about?\" name=\"form_logger_What_Service_ID_name\" /><div class=\"servicetype\"><label for=\"What_Service_ID\">What service are you contacting us about? <span>*</span></label><select class=\"required\" name=\"association\"><option value=\"\"   class=\"service_selected\">Please Select...</option><option value=\"1\" data-assoc=\"1\">Basement Waterproofing</option><option value=\"3\" data-assoc=\"1\">Crawl Space Repair</option><option value=\"4\" data-assoc=\"1\">Foundation Repair</option><option value=\"130\" data-assoc=\"1\">Concrete Lifting</option><option value=\"2\" data-assoc=\"1\">Basement Finishing</option></select></div>").insertAfter("#display_lead_what_prompted_followup");
        });
    </script>
<?php } ?>
```
