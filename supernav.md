##SuperNAV


### Default Snippet - Example http://www.connecticutbasementsystems.com/

```php
  <?php
    $superNav = new nav();
    $superNav->superMode = 'top';
    echo $superNav->generateSuperMarkup();
?>
```

## Custom Top 

```php
<?php
$superNav = new nav();
$superNav->superMode = 'top';
$superNav->superItems = array(
    'Services' => array(
        'target' => 'services'
    ),
    'Our Company' => array(
        'target' => 'about',
        'show_about_link' => true
    ),
    'Service Area' => array(
        'target' => 'map',
    ),
    'Free Quote' => array(
        'class' => 'quote',
        'target' => 'contact'
    ),
    43049 => array(
        'grandchildren' => true
    )
);
?>
echo $superNav->generateSuperMarkup();
```
##Super Footer
```php
 <div id="footer-links">
    <?php
    $superNav = new nav();
    $superNav->superMode = 'bottom';
    echo $superNav->generateSuperMarkup();
    ?>
      <?php echo $socialFooter ?>
</div>

```


