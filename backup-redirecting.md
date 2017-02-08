#Backing Up & Redirecting 

Mac - Site Sucker

Windows - HTTrack

Use one of the above programs to download a backup of the site you are currently working on. When you are done please place folder in the Marketing Drive in the folder Site Backups. 

Please make sure the folder is domain.com



##Wayback download 

If you need to grab something from wayback machine. This works really well 

https://github.com/hartator/wayback-machine-downloader

```
wayback_machine_downloader http://brandywineexteriors.com --to 20150427070206 --directory ~/Downloads/brandy
```


#Site Rewrites 

 /(.+) /  - Redirect Everything to the homepage 

 (.+) http://www.domain.com/  - Redirect everything every to an external domain. 



## PHP Status Codes

```php
<?php
header("HTTP/1.0 404 Page Not Found");
?>
The requested page has not found.
```

```php
<?php
header("HTTP/1.0 410 Gone");
?>
The requested page has been removed.
```

```php
<?php
header("HTTP/1.0 503 Service Unavailable");
?>
The requested page is unavailable.
```
