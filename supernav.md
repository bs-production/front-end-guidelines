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

### You can force children now 

```php
<?php
$superNav = new nav();
$superNav->superMode = 'top';
$superNav->superItems = array(
    'Services' => array(
        'target' => 'services'
    ),
    'Free Quote' => array(
        'class' => 'quote',
        'target' => 'contact'
    ),
    43049 => array(
        'children' => array(1,23234,23423)
    )
);

echo $superNav->generateSuperMarkup();
?>

```
##Version 2 Top Nav with Sliding sticky bar
```php
<?php
$superNav = new nav();
$superNav->superTemplateId = 3;
$superNav->superMode = 'top';
$superNav->superItems = array(
	'Services' => array(
        'target' => 'services'
    ),
    'Our Work' => array(
        'target' => 'about',
        'show_about_link' => false
    ),
    //Replace With Page ID of Financing Page
    12345 => array(
        'grandchildren' => false
    ),
    //Replace with Page ID of Reviews Page
    12345 => array(
        'grandchildren' => false
    ),
    'Service Area' => array(
        'target' => 'map',
    ),
    //Replace with Page ID of About Us Page
    12345 => array(
        'grandchildren' => false
    )
);

echo $superNav->generateSuperMarkup();
?>
```
####Use this script to make Services top nav dropdown full width if it only displays top level service links and no children
<!-- For this site - remove .short class on service dropdown until we figure it out dynamically -->
```
<script>
    $('ul#top-nav-list li:first-child .short').removeClass('short');
</script>
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


