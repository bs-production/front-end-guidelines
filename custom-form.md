# Custom Forms

### Form Builder 

http://codepen.io/siwicki/live/zqyVdX


For your form you need to name your inputs "form_logger_" , any from inputs should be named accordingly.

For example, '<input name="form_logger_first_name" />' 

```html
    <form action="" post>
      <input name="form_logger_first_name" />
      <label>First Name</label>
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
