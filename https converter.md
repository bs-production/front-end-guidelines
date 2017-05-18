# HTTP to HTTPS:


## NEW SYSTEM

Site Mangement in Portal has a checkbox.


```
To Process Your CSS Make Sure You Change Site Id and then run this tool
http://bsiadmin.com/portal/cron/update_cms_css_ssl_urls.php?site_ids=1458
```


## LEGACY

### Redirect 

Please use this when it is final site is in place. Check with John when the right time is. 

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

This is a good way to change links we don't have access to. http = https verison. We are working on ways to automate all of this. 

```php
<?php
global $siteTokens;

$siteTokens['http://advancedroofing.biz'] = 'https://www.advancedroofing.biz'; // non-https domain
$siteTokens['http://www.advancedroofing.biz'] = 'https://www.advancedroofing.biz'; // non-https www.domain
$siteTokens['http://schema.org'] = 'https://schema.org'; // non-https schema.org reference
$siteTokens['http:\/\/schema.org'] = 'https:\/\/schema.org'; // non-https escaped schema.org reference
$siteTokens['http://img1.advancedroofing.biz'] = 'https://assets.treehouseinternetgroup.com'; // non-https img1 reference
$siteTokens['http://img1.basementsite.com'] = 'https://assets.treehouseinternetgroup.com'; // non-https img1 reference
$siteTokens['http://img1.teambasementsystems.com'] = 'https://assets.treehouseinternetgroup.com'; // non-https img1 reference
$siteTokens['http://images.advancedroofing.biz'] = 'https://dc69b531ebf7a086ce97-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com';

 // non-https cms images
$siteTokens['http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com'] = 'https://dc69b531ebf7a086ce97-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com'; // non-https cms images
$siteTokens['http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r15.cf1.rackcdn.com'] = 'https://dc69b531ebf7a086ce97-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com'; // non-https cms images
$siteTokens['http://0a7fabe38ae1ce229b14-5c67249f93bb503413209d779c0cd266.r58.cf1.rackcdn.com'] = 'https://a2bb4dcf4a45c37f6354-5c67249f93bb503413209d779c0cd266.ssl.cf1.rackcdn.com'; // non-https map images
$siteTokens['http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com'] = 'https://a80427d48f9b9f165d8d-c913073b3759fb31d6b728a919676eab.ssl.cf1.rackcdn.com'; 
$siteTokens['http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/1431/'] = 'https://dc69b531ebf7a086ce97-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com/1431/'; 

//third party assets
$siteTokens['http://maps.google.com'] = 'https://maps.google.com'; 
$siteTokens['http://maps.googleapis.com'] = 'https://maps.googleapis.com';
$siteTokens['http://ajax.googleapis.com/ajax'] = 'https://ajax.googleapis.com/ajax'; 
$siteTokens['http://img.youtube.com/vi/'] = 'https://img.youtube.com/vi/';
$siteTokens['http://www.youtube.com'] = 'https://www.youtube.com';
$siteTokens['http://assets.pinterest.com/js/pinit.js'] = 'https://assets.pinterest.com/js/pinit.js';
$siteTokens['http://s7.addthis.com/js/250/addthis_widget.js'] = 'https://s7.addthis.com/js/250/addthis_widget.js';
?>

```
