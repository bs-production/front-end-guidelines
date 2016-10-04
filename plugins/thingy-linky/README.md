# Thingy Linky Plugin

Use these links to add to your site. Place after core token either header or footer 

```html 
<script src="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/plugins/thing-link/jquery.thinglink.js"></script>
<link rel="stylesheet" type="text/css" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/plugins/thing-link/thing-link.css" />
``` 
Next, lets call our plugin to our main message 


```js
   $(document).ready( function($) {
    //Call on your Main Message Wrapper
      	$('#main-message').thingLink();
  });
```

Below is the default content for the plugin. You can alter any section you like. The class names from the icons come from Font Awesome. 

```js
$('#main-message').thingLink({
    main: '#main-message > .row',

    content0: '</div><h4>Customer testimonial</h4><iframe width=\"290\" height=\"163\" src=\"https://www.youtube.com/embed/XT40_-7h9As?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>',

    content1: '<h4>Why water and mold resistance is important to every basement</h4><iframe width=\"290\" height=\"163\" src=\"https://www.youtube.com/embed/gg0xfFXqwU4?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>',

    content2: '<h4>MillCreek Basement Flooring</h4><p>MillCreek Flooring™ uses a patented process that gives the same look, feel and touch as a hardwood floor, all while being suited for basement environments.</p>',

    content3: '<h4>Reimagine Your Basement</h4><p>With the award-winning Total Basement Finishing system you can plan the basement of your dreams.  TBF can help make your basement a new room that is as comfortable as your upstairs.</p>',

    content4: '<h4>Easy access to walls</h4><p>Being a panel system, TBF grants quick and easy access to walls.  No cutting, patching and repainting of drywall is necessary.</p>',

    content5: '<h4>No-sag ceiling tiles</h4><p>Choose from bright-white Prestige or Linen ceiling tiles that come with a 30-year warranty against mold and mildew.  Both ceiling tile styles resist the absorption of water vapor, so they are not subject to sagging. </p>',

    icon0: '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
    icon1: '<div class=\"main-point\"><i class=\"fa fa-youtube-play pulsor\"></i></div>',
    icon2: '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
    icon3: '<div class=\"main-point\"><i class=\"fa fa-heart pulsor\"></i></div>',
    icon4: '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
    icon5: '<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>',
    fontStyle: null
});
```
