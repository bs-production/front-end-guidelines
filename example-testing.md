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

The below snippet should go into before borders. The customtemplateid should match whatever number your site has in the custom template editors. 

```php
 <?php
if (!empty($_GET['test']) and $_GET['test'] == 1) {
    $customTemplateId = 11;
}
?>

```



If you add the below code right before the closing body tag. It will make all your links have the ?test for debugging purposes. Please make sure you delete before things are live otherwise we will have a million problems. 
```js
     <script>
         var links = document.querySelectorAll('[href]');
                for (var i = 0; i < links.length; i++) {
                  links[i].href += '?test=1';
                }
      </script>
      ```
      
      ```
