##SuperNAV


### Default Snippet 
Example http://www.connecticutbasementsystems.com/

This snipper will output the entire Nav chunk

```php
  <?php
    $superNav = new nav();
    $superNav->superMode = 'top';
    echo $superNav->generateSuperMarkup();
?>
```

## Custom Top 

When you go Custom there are a few options. There are three targets: services, about, map. If you need to add a special page to the supernav you can add its page ID and move it around in the array. 

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

echo $superNav->generateSuperMarkup();
?>
```
##Super Footer
```php
 <div id="footer-links">
    <?php
    $superNav = new nav();
    $superNav->superMode = 'bottom';
    echo $superNav->generateSuperMarkup();
    ?>
      <div class="social-footer"> <?php echo $socialFooter ?></div>
</div>

```


