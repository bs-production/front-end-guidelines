**Table of Contents**  

- [Add Territory to BS Site Header Above Phone](#)
	- [For Willow Template](#)
		- [Example: http://connecticutbasementsystems.com?dev_template=1&variationid=522](#)
- [Optional Affiliations Slider](#)
	- [Best used if dealer wants it or has a lot of affiliations](#)
		- [Example: http://visionairewindows.com?dev_template=0&cache=0](#)
- [Optional Before & After Photo Comparison Slider](#)
	- [Best used for great roofing, siding, remodeling photos that showcase dramatic results.](#)
		- [Example: http://devtest11.basementsite.com/demo/before-after-reveal.html?cache=0](#)
- [Alternate Homepage Services Layout](#)
	- [For any new template, follow these instructions to implement the alternate layout as seen on http://midwestbasementsystems.com, http://cowleys.com, http://quality1stbasementsystems.com?test=1](#)
- [New Alternate Service Area Layout](#)
	- [For any new template, follow these instructions to implement the alternate layout as seen on http://midwestbasementsystems.com or http://halcoenergy.com](#)
- [Equalizer fix for long tabbed content](#)
- [Google Map Token for New Templates](#)
- [New Template Tokens](#)
- [Superwide Nova Madness](#)




## Add Territory to BS Site Header Above Phone
### For Willow Template
#### Example: http://connecticutbasementsystems.com?dev_template=1&variationid=522

1.) Add CSS to Header Section in Template CSS
```css
p.header-service-area {
    margin-bottom: 10px;
    color: grey;
}
p.header-service-area.show-for-medium-down {
    text-align: center;
    margin: 20px auto 0;
}
```

2.) Add the following HTML to borders file:
```html
<!--For Medium Down: Place inside </div> of #logo -->
<p class="header-service-area show-for-medium-down" onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>

<!--For Large Up: Place inside #phone before <a class="phone_link"> -->
<p class="header-service-area show-for-large-up" onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>

```


## Optional Affiliations Slider
### Best used if dealer wants it or has a lot of affiliations
#### Example: http://visionairewindows.com?dev_template=0&cache=0

1.) Replace entire div#cred html with the following:
```
	<div class="container" id="cred">
	  <?php
		$meta = array();
		    $meta['useGeo'] = true;
		    $meta['manualAssetPage'] = false;
		    $meta['useFeatured'] = false;
		    $meta['siloMode'] = false;
		    $meta['qty'] = 20;
		    $meta['template'] = 5493;
		$templates = array();
		$templates['main'] = array('
		    <div class="row" id="inline-affil-slider">
			    [[items]]
		    </div>');
		  $templates['item'] = array('
		    <div class="columns widget-item">
			<div class="widget-affil-img">
			    [[logo]]
			</div>
		    </div>');
		$title = 'Affiliations';
		require_once('widgets/affiliations_sidebar_widget.php');
		echo($output);
	    ?>
	</div><!-- end credibility -->
```
2.) Add this script before ```</body>```
```php
<?php if (($thePage == "index")) { ?>

	<script>
		$('#inline-affil-slider').slick({
			autoplay: true,
			arrows: true,
			infinite: true,
			speed: 1000,
			cssEase: 'ease',
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
			    {
			    breakpoint: 640,
			    settings: {
				    speed: 500,
				    slidesToShow: 1,
				    slidesToScroll: 1
				}
			    }
			]
		    });
	 </script>
	 
<?php
}
?>
```
3.) Replace css for Homepage Widget Content in template.css file with the following:
```css
/***------------------------------------------- Cred Bar -------------------------------------------***/

#cred {
    box-sizing: border-box;
    background: url('/core/images/templates/health/cred-bg.png') #fff no-repeat center top;
    overflow: auto;
    padding: 0px 40px;
}
#inline-affil-slider {
    width: 100%;
    margin: 40px auto;
    padding-bottom: 0;
    position: relative;
}
#inline-affil-slider .slick-slider {
    padding-bottom: 0;
    margin-bottom: 0;
}
#inline-affil-slider p.more-assets {
    position: absolute;
    bottom: auto;
    left: auto;
    top: 0;
    right: 0;
}
#inline-affil-slider p.more-assets a {
    font-size: 12px;
    display: inline-block;
}
#inline-affil-slider p.more-assets a::before {
    content: "+";
    border: 1px solid #2da4d0;
    height: 12px;
    width: 12px;
    line-height: 0;
    text-align: center;
    padding: 4px 0px 0px 1px;
    margin: 3px 5px 0 0;
    box-sizing: border-box;
}
@media screen and (max-width: 640px){
    #inline-affil-slider p.more-assets {
        top: auto;
        left: 0;
        bottom: 0
    }
}
#inline-affil-slider .widget-item h3{
    margin: 20px 15px 0px;
    color: #fff;
    display: inline-block;
}
#inline-affil-slider span.widget-affil-title {
    font-size: 14px;
    color: #777;
    line-height: 1.2em;
    display: block;
    text-align: center;
}
#inline-affil-slider .widget-item .widget-affil-img {
    height: 120px;
    position: relative;
    margin: 10px auto;
    overflow: hidden;
}
#inline-affil-slider .widget-item .widget-affil-img img {
    display: block;
    margin: 0px auto;
    position: absolute;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
}

#inline-affil-slider .widget-item .widget-affil-img span {
    position: absolute;
    z-index: 1;
    color: #353535;
    font: 600 18px/20px sans-serif;
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0px -2px 5px rgba(0, 0, 0, .35);
    padding: 8px 10px;
    bottom: 0;
    left: 50%;
    overflow: visible;
    transform: translateX(-50%);
    border-radius: 3px 3px 0 0;
}

/* Affil slider arrow styles */
#inline-affil-slider button.slick-arrow {
    background: rgba(0,0,0,.1);
    height: 30px;
    width: 30px;
    border-radius: 50%;
    border-style: none;
    padding: 0px;
    position: absolute;
    z-index: 10;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    top: 50%;
    font-size: 0;
    outline: none;
    transition: all .2s ease;
}

#inline-affil-slider button.slick-prev {
    left: -30px;
}
#inline-affil-slider button.slick-next {
    right: -30px;
}
#inline-affil-slider button.slick-arrow::before {
    content: "";
    display: block;
    border-style: solid;
    border-color: rgba(0,0,0,.2);
    transform: rotate(45deg);
    width: 12px;
    height: 12px;
    transition: all .2s ease;
}

#inline-affil-slider button.slick-next::before {
    border-width: 3px 3px 0 0;
    margin: 0px 0 0 7px;
}
#inline-affil-slider button.slick-prev::before {
    border-width: 0 0 3px 3px;
    margin: 0px 0px 0px 10px;
}
#inline-affil-slider button.slick-arrow:hover {
    background: rgba(0,0,0,.3);
}
#inline-affil-slider button.slick-arrow:hover::before {
    border-color: rgba(255,255,255,1);
}
/* Affil slider dot styles */
#inline-affil-slider .slick-dots {
    bottom: -30px !important;
}
#inline-affil-slider .slick-dots li button {
    padding: 0px !important;
}
#inline-affil-slider .slick-dots li button:before {
    position: relative;
    top: auto;
    left: auto;
}
#inline-affil-slider .slick-dots li button:before,
#inline-affil-slider .slick-dots li.slick-active button:before {
    color: #333;
}
```

## Optional Before & After Photo Comparison Slider
### Best used for great roofing, siding, remodeling photos that showcase dramatic results.
#### Example: http://devtest11.basementsite.com/demo/before-after-reveal.html?cache=0

1.) Replace entire php snippet for Before & After with the following:
```
	
	<?php
                $meta = array();
                $meta['useGeo'] = true;
                $meta['manualAssetPage'] = false;
                $meta['useFeatured'] = true;
                $meta['siloMode'] = false;
                $meta['qty'] = 2;
                $templates = array();
                $templates['main'] = array('
                
                    <div class="row" id="widget-items-wrap">
                        <div class="columns">
                            <div class="row">
                                    [[items]]
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="columns">
                            <p class="more-assets"><a href="[[moreurl]]" title="View All Before & After photos">View All Before &amp; After photos</a></p>
                        </div>
                    </div>
                ');
                $templates['item'] = array('
                    <div class="columns medium-6 widget-item">
                            <div  class="tabs_[[num]]">   
                                <div class="widget-img">
                                    <div class="twentytwenty-container">    
                                        <img src="http://img1.teambasementsystems.com/uploads/before_after/700_525/[[company_id]]/[[before-photo]]" alt="" />
                                        <img src="http://img1.teambasementsystems.com/uploads/before_after/700_525/[[company_id]]/[[after-photo]]" alt="" />
                                    </div> 
                                    <div class="widget-item-text">
                                        <h3>[[title]]</h3><a href="[[url]]">Learn more</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    ');
                $title = 'BA';
                require_once('widgets/before_after_sidebar_widget.php');
                echo($output);
            ?>
```
2.) Add the following .css file to ```<head>```
```html
	<link href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/plugins/twenty-twenty-slider/css/twentytwenty.css" rel="stylesheet" type="text/css" />

```
3.) Add the following .js scripts inside ```</body>```
```js
<script type="text/javascript" src="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/plugins/twenty-twenty-slider/js/jquery.event.move.js"></script>
<script type="text/javascript" src="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/plugins/twenty-twenty-slider/js/jquery.twentytwenty.js"></script>
<script>
$(window).load(function() {
  $(".twentytwenty-container").twentytwenty();
});
</script>

```
4.) Replace css for Homepage Widget Content in template.css file with the following:
```css
/***--------------------------------------- Homepage Widget Content ------------------------------------------***/

#widgets {
    padding: 60px 0px;
}
#widgets a {
    text-decoration: underline;
}
#widget-items-wrap, #widget-items-wrap + .row {
    max-width: 90rem;
}
.widget-item a, .widget-item h3 {
    display: inline;
}

.widget-item a {
    font-size: 12px;
    padding-left: 10px;
    position: absolute;
    display: block;
    right: 15px;
    top: 15px;
    background: #efefef;
    padding: 15px 10px;
    line-height: 0;
    text-align: center;
    display: block;
}

.widget-item h3 {
    font-size: 16px;
    line-height: 1.2em;
}

.widget-item-text {
    padding: 15px;
    background: #fff;
    position: relative;
    padding-right: 110px;
    overflow: hidden;
}

.widget-img {
    margin-bottom: 40px;
    box-shadow: 0 0 30px rgba(0,0,0,.2);
}

.twentytwenty-container {
    max-height: 400px;
}
.widget-img img {
    width: 100%;
    box-shadow: 0 0 30px rgba(0,0,0,.25);
    max-width: 100%;
    position: absolute;
    transform: translate(-50%,-50%);
    display: block;
    top: 50%;
    left: 50%;
}

@media screen and (min-width: 1025px){
    .widget-item {
        padding-top: 0.9375rem;
        padding-bottom: 0.9375rem;
    }
}
@media screen and (max-width: 640px){
    #widgets {
        background-attachment: scroll;
    }
}
```

## Alternate Homepage Services Layout
### For any new template, follow these instructions to implement the alternate layout as seen on http://midwestbasementsystems.com, http://cowleys.com, http://quality1stbasementsystems.com?test=1

1.) In borders file, paste the following HTML inside ```html <div class="container" id="services">```
```html
	<div class="row" id="service-items-wrap">
	    <div class="small-6 large-3 columns">
	        <div class="service-item service1">
	            <a href="#">
	                <div class="srv-icon"><?php echo file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"); ?></div>
	                <div class="srv-text"><p class="service-title">Service 1</p>
	                <p class="description">Service 1 description goes here. Make it good! Not too long and not too short.</p></div>
	            </a>
	        </div>
	    </div>
	    <div class="small-6 large-3 columns">
	        <div class="service-item service2">
	            <a href="#">
	                <div class="srv-icon"><?php echo file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"); ?></div>
	                <div class="srv-text"><p class="service-title">Service 2</p>
	                <p class="description">Service 2 description goes here. Make it good! Not too long and not too short.</p></div>
	            </a>
	        </div>
	    </div>
	    <div class="small-6 large-3 columns">
	        <div class="service-item service3">
	            <a href="#">
	                <div class="srv-icon"><?php echo file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"); ?></div>
	                <div class="srv-text"><p class="service-title">Service 3</p>
	                <p class="description">Service 3 description goes here. Make it good! Not too long and not too short.</p></div>
	            </a>
	        </div>
	    </div>
	    <div class="small-6 large-3 columns">
	        <div class="service-item service4">
	            <a href="#">
	                <div class="srv-icon"><?php echo file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"); ?></div>
	                <div class="srv-text"><p class="service-title">Service 4</p>
	                <p class="description">Service 4 description goes here. Make it good! Not too long and not too short.</p></div>
	            </a>
	        </div>
	    </div>
	</div>
```

2.) Replace entire block of CSS for Homepage Services with the following:
```css
/***------------------------------------------- Homepage Services -------------------------------------------***/

#services {
    background:none;
    padding: 60px 0px 40px;
}
#service-items-wrap {
    margin-top: 30px;
    max-width: 90rem;
}
/* Service Box image backgrounds */
.service-item.service1 {background-image:url('http://placehold.it/500x300');}
.service-item.service2 {background-image:url('http://placehold.it/500x300');}
.service-item.service3 {background-image:url('http://placehold.it/500x300');}
.service-item.service4 {background-image:url('http://placehold.it/500x300');}

/* SVG Adjust Colors */
.svg-service-icons {
   width: 100%;
   height: 150px;
}
.background {
 fill: transparent;
}
.foreground {
 fill: #fff;
}
.ring {
 fill: transparent;
}

/* Service item box styles */
.service-item {
    text-align: center;
    position: relative;
    margin-bottom: 30px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    box-shadow: 0px -60px rgba(150,150,150, 0.8) inset, 0 0 30px rgba(0,0,0,.2);
    transition: box-shadow .3s ease;
    overflow: hidden;
    max-height: 300px;
}

.service-item a {
    display: block;
}

.service-item .srv-icon {
    opacity: 0;
    padding-top: 20px;
    transition: all .3s ease;
}
.srv-text {
    color: #fff;
    padding: 0px 10px 30px;
    position: relative;
    bottom: -75px;
    transition: all .3s ease;
}
.srv-text p.service-title {
    font-size: 22px;
    margin: 0px auto 20px;
    font-weight: 600;
}
.service-item p.description {
    line-height: 1.5rem;
    margin-bottom: 0;
    padding: 0px 20px;
    opacity: 0;
    transition: opacity .2s ease;
}
.service-item:hover {
    box-shadow: 0px -350px rgba(150,150,150,.8)inset, 0 0 30px rgba(0,0,0,.2);
}
.service-item:hover .srv-icon {
    opacity: 1;
}
.service-item:hover .srv-text {
    bottom: 20px;
}
.service-item:hover p.description {
    opacity: 1;
}
@media screen and (max-width: 640px),
screen and (max-height: 736px){
    .service-item {
        box-shadow: 0px -175px rgba(150, 150, 150, 0.8) inset;
        height: 150px;
    }
    .service-item a {
        height: 150px;
    }
    .service-item .srv-icon {
        padding-top: 10px;
        opacity: 1;
    }
    .svg-service-icons {
        height: 85px;
    }
    .srv-text {
        position: absolute;
        bottom: 0px;
        width: 100%;
        padding: 0 25px;
    }
    .srv-text p.service-title {
        line-height: 1.2em;
        font-size: 16px;
    }
    .service-item p.description {
        display: none;
    }
}
```

## New Alternate Service Area Layout
### For any new template, follow these instructions to implement the alternate layout as seen on http://midwestbasementsystems.com or http://halcoenergy.com

1.) In borders file, replace Service Area HTML with the following:
```html
	<div class="container home" id="service-area">
		<div class="container home" id="home-city-list-wrap">
		  <div class="row collapse">
		    <div class="large-3 columns">
		      <div id="home-city-list">
			<p class="home-section-title">our service area</p>
			[[city_scroll:50]]
		      </div>
		    </div>
		  </div>
		</div>
		<div class="container home" id="service-map">
		  <div id="gmap-wrap">[[service_area_google_map]]</div>
		</div>
	      </div><!-- end #service-area -->
```
2.) Replace the entire block of CSS for Service Area in template.css :
```css
/***------------ Service Area ------------***/

#service-area {
    position: relative;
    height: 450px;
    overflow: hidden;
    border-top: 5px solid rgb(180,180,180);;
    box-sizing: content-box;
}

#service-area p.home-section-title {
    color: #fff;
    text-shadow: 0px -1px 0px rgba(0,0,0,.3);
    text-align: left;
    margin-bottom: 15px;
    font-size: 22px;
    text-transform: uppercase;
}
#service-area p.more-assets {
    left: 0;
    z-index: 1;
    bottom: -20px;
    position: absolute;
}
#service-area p.more-assets a {
    color: #fff;
}

/* Geo City List */
#service-area #home-city-list-wrap {
    position: absolute;
    z-index: 1;
    background: transparent;
    width: 100%;
}

#home-city-list {
    height: 450px;
    background: #b4b4b4;
    position: relative;
    padding: 20px 20px;
    box-sizing: border-box;
    pointer-events: visible;
}

.city_scroll_list_container {
    position: relative;
}

#home-city-list h3 {
    color: #353535;
    font: 500 16px sans-serif;
    margin: 0px auto 20px;
}
#home-city-list h3 a,
.city_scroll_list a {
    color: #fff;
    border-bottom: 1px dotted rgba(255,255,255,0);
    transition: border .2s ease;
}
#home-city-list h3 a:hover, .city_scroll_list a:hover {
    border-bottom: 1px dotted #fff;
}
.city_scroll_list_content {
    height: 300px;
    overflow-y: scroll;
    padding-bottom: 50px;
}
.city_scroll_list {
    list-style: none;
    margin: 0px;
    line-height: 1.3em;
    overflow: auto;
}

.city_scroll_list_title {
    color: #353535;
    margin: 20px auto 0px;
    font-weight: 500;
    display: inline-block;
}
.city_scroll_list_title:first-of-type {
    margin-top: 0px;
}
.city_scroll_list li {
    font: 200 16px/16px sans-serif;
    color: #777;
    display: block;
    padding: 15px 0;
    margin: 0;
    border-bottom: 1px solid rgba(100,100,100,.2);
}

.city_scroll_list_local_phone {
    color: rgba(0,0,0,.5);
    font-size: 12px;
    font-weight: 500;
    display: block;
    clear: both;
    padding-top: 20px;
}
#gmap-wrap {
    width: 100%;
    height: 450px;
    margin: 0 auto;
}

#service-area .gm-style {
    border-radius: 0;
}
/* Google map on Service Area Page */
#content-wrap #gmap-wrap {
    width: 300px;
    height: 300px;
    margin: 0px 0px 30px 30px;
    float: right;
}
@media screen and (max-width: 1024px) {
    #service-area {
        height: auto;
    }
    #service-area #home-city-list-wrap {
        position: relative;
    }
    #home-city-list {
        pointer-events: none;
    }
}
@media screen and (min-width: 641px) and (max-width: 1024px){
    #home-city-list {
        padding: 30px 20px 60px;
        height: auto;
    }
    .city_scroll_list_content {
        height: 110px;
    }
    .city_scroll_list {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
}
@media screen and (max-width: 640px) {
    /* Service Area Page Map */
    #content-wrap #gmap-wrap {
        margin: 30px auto;
        float: none;
        width: 100%;
        height: 350px;
    }
}

```
## Equalizer fix for long tabbed content
###If you've been told that tabbed or accordion content gets cut off update the template as follows:

####Oak Template (AFS Template)
1. In borders file: 
	- Remove ```data-equalizer``` from ```<div id="page-wrap">```
	- Remove ```data-equalizer-watch``` from ```<div id="content-wrap">```
	- Remove ```data-equalizer-watch``` from  ```<div id="subnav-left">```
2. In template.css:
 	- Remove ```border-right``` style on ```#subnav-left```
	- Then add the following CSS below ```#page-wrap```
```css
    @media screen and (min-width: 641px){
        #page-wrap > .row::before {
            content: "";
            position: absolute;
            display: block;
            background-image: repeating-linear-gradient(to bottom,#d81d22, #d81d22 3px, white 3px,white 6px);
            width: 1px;
            height: 100%;
        }
    }
    @media screen and (min-width: 1025px) {
        #page-wrap > .row::before {
            left: 16.5%;
        }
    }
    @media screen and (min-width: 641px) and (max-width: 1024px) {
        #page-wrap > .row::before {
            left: 24.5%;
        }
    }
```
####Spruce, Dogwood, Dogwood Lite (CN & DES Templates)
1. In borders file: 
	- Remove ```data-equalizer``` from ``` <div id="page-wrap"> ```
	- Remove ```data-equalizer-watch``` from ``` <div id="content-wrap"> ```
	- Remove ```data-equalizer-watch``` from  ``` <div id="subnav-left"> ```
2. In template.css:
 	- Remove ```background``` and ```border-right``` styles on ```#subnav-left```
	- Then add the following CSS below ```#page-wrap```
```css
	@media screen and (min-width: 641px){
	    #page-wrap > .row::before {
	        content: "";
	        position: absolute;
	        display: block;
	        background-image: linear-gradient(to left,rgb(230, 230, 230) 1px, rgb(234, 232, 232)1px, rgb(248, 248, 248) 15px);
	        height: 100%;
	        width: 24.9%;
	    }
	}
```
## Google Map Token for New Templates

For ALL Templates
1. Generate Map - set fill color to rgba(204, 65, 37, 0.65)
2. Paste this code in service-area.html, after h1
```html
    <div id="gmap-wrap">[[service_area_google_map]]</div>
```

For OLD templates

1. Add this CSS to the screen.css file:
```css
    #gmap-wrap {
        width: 300px;
        height: 300px;
        margin: 0px 0px 30px 30px;
        float: right;
    }
  ```
For NEW templates made BEFORE 2/18/15:
1. In Borders file: Replace the .widget_map div with this:
```html
    <div class="large-7 columns service-map">
    <div id="gmap-wrap" onclick="location.href='/service-area.html';" style="cursor:pointer;">[[service_area_google_map]]</div>
    </div>
```
2. In template.css: Replace this css:
```css
    /* Service Area Section - Replace the last 2 css declarations with this */
    #service-area .service-map {
        background: url('/core/images/templates/')no-repeat center;
        background-size: contain;
    }
    #service-area #gmap-wrap {
        width: 350px;
        height: 350px;
        margin: 30px auto;
    }
    #service-area #gmap-wrap > div {
        border-radius: 50%;
        box-shadow: 0px 15px 20px rgba(0,0,0,.25);
    }
    /******************************************/
    /***** Content Section - Add this: *****/
    #content-wrap #gmap-wrap {
        width: 300px;
        height: 300px;
        margin: 0px 0px 30px 30px;
        float:right;
    }
    /******************************************/
    /***** Add this to mobile section - @media screen and (max-width: 640px) *****/
    /* Service Area Page Map */
    #content-wrap #gmap-wrap {
    margin: 30px auto;
    float:none;
    width: 100%;
    height: 350px;
    }
```
## New Template Tokens

Geo City Scroll
```
[[city_scroll:xx]]
xx is the number of cities to display between 1 and 100.
```
Single Silo Nav (currently for BamBam template only)

```
[[single_silo_nav]] 
```
BamBam

Example: http://www.alabamafoundationrepair.com/?variationid=490

If you need a slider for your main message please use the following. 
For this template we need to use J instead of the $ for jQuery for compatibility issues. 

```html
    <!-- Place snippets before </body> tag in following order or slider won't work -->
    <!-- First snippet goes after foundation JS snippets -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    
    <!-- Place next snippet after jQuery.noConflict script inside </body> tag -->
    <script>
     j('#main-message').slick({
                                autoplay: true,
                                arrows: true,
                                infinite: true,
                                speed: 500,
                                fade: true,
                                cssEase: 'linear',
                                responsive: [
                                    {
                                      breakpoint: 640,
                                      settings: {
                                        arrows: false
                                      }
                                    }
                                ]
                            });
    </script>
```
----------
## Superwide Nova Madness

Examples: http://www.kingdomquality.com/
http://www.eccroofing.com/
http://luxurybathkc.basementsite.com/

A little snippet to speed up building a Superwide Main Message. Customize classes/CSS to suit your designs.

``` html
    <!-- SAMPLE SNIPPET FROM NOVA THAT YOU WILL REPLACE, lines 54 to 101-->
        <div id="wrapper">
          <div id="container">
            <div id="content-wrap">
              <?php
              if($thePage == 'index')
              {
                ?>
                <div class="inside-splash">
                  <?php 
                  if (stristr($_SESSION['searchedkeyword'],"crawl") || stristr($_SESSION['entrypage'],"crawl-space") )
                  { ?>
                  <a href="/crawl-space-repair.html"><img src="http://placehold.it/700x239" alt="We are the [state] Crawl Space Experts!" title="We are the [state] Crawl Space Experts!" width="700" height="239" /></a><?php
                  }
                  elseif(stristr(parse_url($_SESSION['searchedkeyword'],PHP_URL_PATH),"basement")) // IF viewer searches anything "basement" then show this feature combo, strip domain to avoid false positives on connecticutbasementsystems.com, etc
                  {
                    ?><a href="/basement-waterproofing.html"><img src="http://placehold.it/700x239" alt="We are the [state] basement waterproofing experts!" title="We are the [state] basement waterproofing experts!" width="700" height="239" /></a><?php
                  }
                  else // OTHERWISE show this feature combo
                  {
                    ?><img src="http://placehold.it/700x239" alt="We are the [state] Basement Waterproofing Experts!" border="0" title="We are the [state] Basement Waterproofing Experts!" width="700" height="239" /><?php
                  }
                  // End search sensitive feature swap
                  ?>
                </div>
                <?php
              }
              else
              {
                ?>
                <div id="inside-splash">
    
    <!-- NEW SNIPPET THAT REPLACES THE ABOVE NON-SUPER MARKUP -->
          <?php
          if($thePage == 'index')
          {
            ?>
            <div class="main-message-wrap">
              <div class="inside-splash" title="">
              <h1>ROOF REPLACEMENT, REPAIR, SIDING &amp; WINDOWS</h1>
              <a class="mm-cta-button" href="/free-estimate.html"><img src="http://placehold.it/271x67" alt="Free Estimates by [company]" title="Free Estimates by [company]" width="271" height="67" /></a>
              <div class="thm-strip">
                    <a class="thm" href="/"><img src="http://placehold.it/152x91" alt="Service in [Territory]" title="Service in [Territory]" width="152" height="91"></a>
                    <a class="thm" href="/"><img src="http://placehold.it/152x91" alt="Service in [Territory]" title="Service in [Territory]" width="152" height="91"></a>
                    <a class="thm" href="/"><img src="http://placehold.it/152x91" alt="Service in [Territory]" title="Service in [Territory]" width="152" height="91"></a>
                </div>
              </div>
            </div>
    
            <div id="wrapper">
              <div id="container">
                <div id="content-wrap">
    
              <?php
            }
            else
            {
              ?>
        <div id="wrapper">
          <div id="container">
            <div id="content-wrap">
                <div id="inside-splash">

```
```css
    /* A LITTLE CSS TO START YOU OFF ON YOUR SUPER ADVENTURE */
    /* Main Message */
    .main-message-wrap {
        width: 100%;
        height: 350px;
        background-image: url(http://placehold.it/1920x350);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .inside-splash {
        height: 350px;
        width: 960px;
        margin: 0 auto;
        text-align: center;
        position: relative;
    }
    .inside-splash h1 {
        color: #fff;
        font-size: 40px;
        line-height: 42px;
        padding: 45px 125px 15px;
    }
    .mm-cta-button {
        display: inline-block;
        margin: 0 0 20px;
        opacity: 1;
        border: 1px solid black;
        -webkit-transition: opacity 300ms ease;
        -moz-transition: opacity 300ms ease;
        -ms-transition: opacity 300ms ease;
        -o-transition: opacity 300ms ease;
        transition: opacity 300ms ease;
    
        }
    .mm-cta-button:hover {
        opacity: .8;
        -webkit-transition: opacity 300ms ease;
        -moz-transition: opacity 300ms ease;
        -ms-transition: opacity 300ms ease;
        -o-transition: opacity 300ms ease;
        transition: opacity 300ms ease;
    
        }
    .thm-strip a {
        width: 152px;
        height: 91px;
        display: inline-block;
        margin: 0 25px;
    }
    .thm {
        background: url(http://placehold.it/152x91) no-repeat;
        border: 1px solid #000;
    }
    /* End Main Message */
```
