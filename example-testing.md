Sample Testing Code
```php
    <?php
    displaytest(210);  // calls test and 193 = test id
    if(testGetVariation(210) == 436)   // do some stuff for on variation 436 = variation# 
    {  ?>
    <?php
    }
    ?>

```


## Setting up New Templates 

```php
 <?php
if (!empty($_GET['test']) and $_GET['test'] == 1) {
    $customTemplateId = 11;
}
?>

```
