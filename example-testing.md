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
      
      
     
### Before and After - Fake Widget

```php
<div class="container">
    <div class="row">
<?php
$meta = array();
$meta['useGeo'] = true;
$meta['manualAssetPage'] = false;
$meta['useFeatured'] = false;
$meta['siloMode'] = false;
$meta['qty'] = 1;
$templates = array();
$templates['main'] = array('
<div class="before_after_hp">
    <div class="widget_items">
            [[items]]
    </div>
    <div class="b-a-controls">
        <div class="widget_more">
            <a href="[[moreurl]]" title="View All Before & After photos">View More</a>
        </div>
    </div>
</div>
');
$templates['item'] = array('
 <div  id="tabs_[[num]]">
                      <h3>[[title]]</h3>
            <div class="large-6 columns">
                <img src="http://img1.teambasementsystems.com/uploads/before_after/700_525/[[company_id]]/[[before-photo]]" alt="[[alt]]" />
                <h2>Before</h2>   
            </div>
             <div class="large-6 columns">
                <img src="http://img1.teambasementsystems.com/uploads/before_after/700_525/[[company_id]]/[[after-photo]]" alt="[[alt]]" />
                <h2>After</h2>
             </div>
            <p>[[text-full]]</p>
        </div>
 
    ');
$title = 'BA';
require_once('widgets/before_after_sidebar_widget.php');
echo($output);
?>
    </div>
</div>
```
