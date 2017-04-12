<?php
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http') {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: $url");
    die();
}
?>

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
$siteTokens['http://maps.google.com'] = 'https://maps.google.com'; 
$siteTokens['http://ajax.googleapis.com/ajax'] = 'https://ajax.googleapis.com/ajax'; 
$siteTokens['http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com'] = 'https://a80427d48f9b9f165d8d-c913073b3759fb31d6b728a919676eab.ssl.cf1.rackcdn.com'; 
$siteTokens['http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/1431/'] = 'https://dc69b531ebf7a086ce97-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com/1431/'; 
$siteTokens['http://img.youtube.com/vi/'] = 'https://img.youtube.com/vi/';

?>
