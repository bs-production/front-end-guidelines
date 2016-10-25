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

##Global Variables
```php
$isCityPage  - Detect City Pages
$isTrafficPpc  - Detech for PPC Traffic Only
$thePage  - Check The Current Page 
$isInHouse - Hide From Building Traffice
```

##URL Parameters
```php
?force_source=ppc - force what a page would look like in ppc
?overlay=superawesome  - if you are logged into portal you get some cool shit
?opensign=1  - Test Opensign switch to 0 for closed
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
