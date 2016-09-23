## New Alternate Service Area Layout
### For any new template, follow these instructions to implement the alternate layout as seen on http://midwestbasementsystems.com

1.) In borders file, replace Service Area HTML with the following:
```html
	<div class="container home" id="service-area">
	    <div class="container home" id="home-city-list-wrap">
	        <div class="row small-collapse large-uncollapse">
	            <div class="large-3 columns">
	                <div id="home-city-list">
	                    <p class="home-section-title">our service area</p>
	                    [[city_scroll:100]]
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="container home" id="service-map">
	            <div id="gmap-wrap">[[service_area_google_map]]</div>
	    </div>
	</div><!-- end #service-area -->
```
2.) Add the following JS script inside ```html </body> ```:
```js
	<script>
	//Map Scroll Zoom Preventer
	        $('#home-city-list-wrap').click(function(){
	           $(this).css('pointer-events','none');
	           $('#home-city-list').css('pointer-events','visible');
	        });
	</script>
```
3.) Replace the entire block of CSS for Service Area in template.css :
```css
/***------------ Service Area ------------***/

#service-area {
    position: relative;
    height: 450px;
    overflow: hidden;
    border-top: 5px solid rgb(180,180,180);
    box-sizing: content-box;
}

#service-area p.home-section-title {
    color: #fff;
    text-shadow: 0px -1px 0px rgba(0,0,0,.3);
    text-align: left;
    margin-bottom: 15px;
    font-size: 28px;
    text-transform: uppercase;
}
#service-area p.more-assets {
    left: 0;
    z-index: 1;
    bottom: -30px;
    position: absolute;
}
#service-area p.more-assets a {
    color: #fff;
}

/* Geo City List - new token */
#service-area #home-city-list-wrap {
    position: absolute;
    z-index: 1;
    background: transparent;
    width: 100%;
}
#service-area #home-city-list-wrap .row {
    max-width: 90rem;
}
#home-city-list {
    height: 450px;
    background: rgb(180,180,180);
    position: relative;
    padding: 20px 30px;
    box-sizing: border-box;
    pointer-events: visible;
}

.city_scroll_list_container {
    position: relative;
}
.city_scroll_list_container::after {
    content: "";
    display: block;
    height: 50px;
    width: 100%;
    background: linear-gradient(to top,rgba(180,180,180,1),rgba(180,180,180,0)); /*creates the fade at bottom of city list */
    top: 200px;
    position: absolute;
}
#home-city-list h3 {
    color: #353535;
    font: 500 20px sans-serif;
    margin: 0px auto 20px;
}
#home-city-list h3 a,
.city_scroll_list a {
    color: #fff;
    border-bottom: 1px dotted rgba(255,255,255,0);
    transition: border .2s ease;
}
#home-city-list h3 a:hover, .city_scroll_list a:hover {
    border-bottom: 1px dotted rgba(255,255,255,1);
}
.city_scroll_list_content {
    height: 250px;
    overflow-y: scroll;
    padding-bottom: 50px;
}
.city_scroll_list {
    list-style: none;
    margin: 0px;
    line-height: 1.3em;
    overflow: auto;
    border-bottom: 1px solid rgba(0,0,0,.1);
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
    color: #353535;
    display: block;
    float: left;
    width: 50%;
    padding: 12px 0;
    margin: 0;
    border-bottom: 1px solid rgba(0,0,0,.1);
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

@media screen and (min-width: 641px) and (max-width: 1024px){
    .city_scroll_list li {
        width: 25%;
    }
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
