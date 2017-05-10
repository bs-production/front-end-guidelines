##SuperNAV

### Mega Nav Link Columns

In some cases, when your mega nav links dont' flow into nice even columns, try this fix:
*(column-break-inside is not supported by Firefox. Please check all browsers before committing to this solution.)

```css
ul.m-menu ul li {
        margin-bottom: 20px;
        display: list-item;
        float: none;
        -webkit-column-break-inside:avoid;
        -moz-column-break-inside:avoid;
        -o-column-break-inside:avoid;
        -ms-column-break-inside:avoid;
        column-break-inside:avoid;
    }
```

### Default Snippet 
Example http://www.connecticutbasementsystems.com/

This snippet will output the entire Nav chunk

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

### You can force child pages


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


### If you need Our Work and About Us 
```php
<?php
$superNav = new nav();
$superNav->superMode = 'top';
$superNav->superSplitAboutWork = true;
$superNav->superItems = array(
    'Services' => array(
        'target' => 'services'
    ),
    'Our Work' => array(
        'target' => 'work'
    ),
    3780 => array(
        'target' => 'about',
        'show_about_link' => true
    ),
    'Service Area' => array(
        'target' => 'map',
    ),
    'Free Quote' => array(
        'class' => 'quote',
        'target' => 'contact'
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


