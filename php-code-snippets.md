- [Direct Traffic](#direct-traffic)
- [Swap By Month](#swap-by-month)
  * [certain dates each year](#certain-dates-each-year)
- [Display Open Sign by setting Time Zone, Hours & Weekdays](#display-open-sign-by-setting-time-zone--hours---weekdays)
- [Global Variables](#global-variables)
- [URL Parameters](#url-parameters)
- [Custom Tokens](#custom-tokens)
  * [HTTP to HTTPS](#http-to-https)
  * [CRM Custom Data](#crm-custom-data)
  
  
  


## Direct Traffic 

```php
<?php global $isTrafficDirect;
if($isTrafficDirect) {  ?>

 <?php } ?>
```

## Swap By Month

```php
<?php
    $now   = new DateTime();
    $month = (int)$now->format("m");
    if ($month >= 4 AND $month <= 9) {    
?>
 
Stuff

<?php  }  ?>
```


### certain dates each year

```php
  <?php
  		if ( time() >= strtotime(date('Y').'-03-10 00:01') && time() < strtotime(date('Y').'-04-06 23:59') )  
  		{         // March / April
	?>
     
<?php
	} // month swap
?>


   <?php if ( time() >= strtotime('2016-05-30 00:01') && time() < strtotime('2016-06-15 23:59') )
            {
            ?>
     <?php
	} // month swap
?>       
            
```

## Display Open Sign by setting Time Zone, Hours & Weekdays

```php
<?php
 date_default_timezone_set('US/Eastern');
 $currenttime = date('h:i:s:u');
 list($hrs,$mins,$secs,$msecs) = split(':',$currenttime);
 /*echo " => $hrs:$mins:$secs\n";*/
?>

<?php
 $now   = new DateTime();
 $hours = (int)$now->format("h");
 $weekdays = (int)$now->format("w");
 if ($hours >= 7 AND $hours <= 17 AND $weekdays >= 1 AND $weekdays <= 5) {
?>

 <div class="opensign"><span>open</span></div>

<?php  }  ?>
```

## Global Variables
```txt
$isCityPage  - Detect City Pages
$isTrafficPpc  - Detech for PPC Traffic Only
$thePage  - Check The Current Page 
$isInHouse - Hide From Building Traffice
```

## URL Parameters
```php
?force_source=ppc - force what a page would look like in ppc
?force_source=blended - force what a site would like blended
?overlay=superawesome  - if you are logged into portal you get some cool shit
?opensign=1  - Test Opensign switch to 0 for closed

/free-estimate/confirmation.html?test=style  - Style Confirmation Pages 

http://www.greenhomeslongisland.com/sitemap.xml?rebuild=nigh - This will rebuild a site map
```


## Custom Tokens 
```php

<?php
	global $siteTokens;
	$siteTokens['http://bonedry.com'] = 'https://www.bonedry.com';  
?>
```
 
### HTTP to HTTPS 
```php
<?php
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http') {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: $url");
    die();
}
?>
```

### CRM Custom Data 
```php
$siteTokens["[[token_name_here]]"] = "Value"
Then in portal you are going to add the label (e.g. crm_label) you want on the left hand column (in crm management) and the token [[token_name_here]] from above in the right hand column. This will get $_POST['crm_label'] = 'Value' sent to the url along with the other data.
```
