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
```
