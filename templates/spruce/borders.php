<?php

//Update these links for your site
$favicon = '<link rel="icon" href="">';

$logo = '<a href="/"><img src="http://placehold.it/350x150" alt="[company]" title="[company]" border="0"></a>';

$mainVideo= '<iframe width="560" height="315" src="https://www.youtube.com/embed/YTIDGOESHERE?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';

$credFooter ='
<div class="small-6 medium-3 columns">
    <span><img src="http://placehold.it/150x150" alt=""></span>
</div>
<div class="small-6 medium-3 columns">
    <span><img src="http://placehold.it/150x150" alt=""></span>
</div>
<div class="small-6 medium-3 columns">
    <span><img src="http://placehold.it/150x150" alt=""></span>
</div>
<div class="small-6 medium-3 columns">
    <span><img src="http://placehold.it/150x150" alt=""></span>
</div>
';

?>

<!doctype html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>[[title]]</title>
    	<meta name="description" content="[[description]]">
    	<meta name="keywords" content="[[keywords]]">
    	<?php echo $favicon; ?>
    	<link rel="alternate" title="News and Events" href="/feeds.xml" type="application/rss+xml" />
    	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" defer></script>
    	<link rel="stylesheet" type="text/css" href="/core/jquery-ui.css" />
    	<link rel="stylesheet" type="text/css" href="/core/v2/jquery-ui-default.css" />
    	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    	<script src="/core/js/jquery.thScrollable.js" type="text/javascript" defer></script>
    	<!-- Fonts and icons -->
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<!-- ColorBox -->
    	<script type="text/javascript" src="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/colorbox/jquery.colorbox-min.js" defer></script>
    	<link rel="stylesheet" type="text/css" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/colorbox/colorbox.css" />
    	<!--End ColorBox-->
    	<link rel="stylesheet" type="text/css" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/toolbox.css" />
    	<link rel="stylesheet" type="text/css" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/inline-widgets.css" />
    	<link rel="stylesheet" type="text/css" href="/core/v2/sidebar-widgets.css" />
    	<link rel="stylesheet" type="text/css" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/modules.css" />
    	<link rel="stylesheet" type="text/css" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/template.css" />
    	<link rel="stylesheet" href="/core/v3/foundation.min.css">
    	<!--Mobile Overrides -->
    	<link rel="stylesheet" media="screen and (max-width: 960px)" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/mobile.css" />
    	<link rel="stylesheet" href="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/nav.css" />
    	<link rel="stylesheet" type="text/css" href="/inc/sb-styles.css">
    </head>
    
    
    <body>
        <div id="template-wrap">
            <div class="container" id="header">
                <div class="row collapse">
                    <div class="large-5 columns" id="logo">
                         <?php echo $logo; ?>
                    </div>
                    <div class="large-7 columns" id="contact" data-equalizer-watch>
                        <div class="row collapse" id="header-service-wrap">
                            <div class="large-9 large-offset-3 columns" id="header-service-area">
                                <p onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="columns" id="phone">

                                    <?php
                                        $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                                        $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                                        if($iphone || $android  == true)
                                        {
                                        ?>
                                        <a href="tel:<?php echo $phonenumber; ?>" class="phone_link">

                                        <?
                                        }
                                        else
                                        { ?>

                                        <a href="/free-estimate.html" class="phone_link">
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    $times = get_open_time();
                                    if($times or isset($_GET['open']))
                                    {
                                    ?>

                                    <div class="opensign"><span>open</span></div>

                                    <?php
                                    }
                                    ?>

                                    [phone]
                                </a>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="columns" id="header-btn">
                                <a class="button" href="/free-estimate.html">or <span>Contact Us Online</span></a>
                            </div>
                        </div>

                    </div><!-- end #contact -->
                </div>
            </div><!-- end #header -->
                
<!-- SUPER NAV TOOL -->            
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
<!-- END SUPER NAV TOOL -->                        
                        
                        
                        <?php if ($thePage == "index") { ?>
                        
                        <div class="container" id="main-message">
                            <div class="row">
                              <div class="columns hero-txt main-txt">
                                <p>Super Cool Tagline <span>Goes Right Here</span></p>
                                <a class="button" href="/free-estimate.html">Schedule A Free Estimate</a>
                              </div>
                            </div>
                        </div><!-- /#main-message -->
                        
                         <div class="container" id="services">
                            <div class="row">
                              <div class="small-4 columns">
                                <div class="service-item">
                                    <a href="#"><img src="http://placehold.it/150x150">
                                    <p class="service-title">Service 1</p></a>
                                    <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
                                </div>
                              </div>
                              <div class="small-4 columns">
                                <div class="service-item">
                                    <a href="#"><img src="http://placehold.it/150x150">
                                    <p class="service-title">Service 2</p></a>
                                    <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
                                </div>
                              </div>
                              <div class="small-4 columns">
                                <div class="service-item">
                                    <a href="#"><img src="http://placehold.it/150x150">
                                    <p class="service-title">Service 3</p></a>
                                    <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
                                </div>
                              </div>
                            </div>
                        </div><!-- /#services -->

                        <div class="container home" id="choose-us">
                                <div class="row">
                                    <div class="columns">
                                        <p class="home-section-title">Why [territory] homeowners choose us</p>
                                    </div>
                                </div>
                                <div class="row choose-wrap">
                                    <div class="medium-6 large-3 columns">
                                        <div class="choose-item"><i class="fa fa-truck" aria-hidden="true"></i><p>Something about the company?</p></div>
                                    </div>
                                    <div class="medium-6 large-3 columns">
                                        <div class="choose-item"><i class="fa fa-trophy" aria-hidden="true"></i><p>Something about awards?</p></div>
                                    </div>
                                    <div class="medium-6 large-3 columns">
                                        <div class="choose-item"><i class="fa fa-users" aria-hidden="true"></i><p>Something about the employees or customers?</p></div>
                                    </div>
                                    <div class="medium-6 large-3 columns">
                                        <div class="choose-item"><i class="fa fa-file-text" aria-hidden="true"></i><p><a href="/free-estimate.html">Free inspections and cost estimates</a> for all work!</p></div>
                                    </div>
                                </div>
                            </div>   <!-- end #choose-us --> 
                        
                        <div class="container home" id="widgets">
                            <div class="row">
                                <div class="columns"><p class="home-section-title">Recent Projects in [territory]</p></div>
                            </div>
                                
                                <?php
                                $meta = array();
                                $meta['useGeo'] = true;
                                $meta['manualAssetPage'] = false;
                                $meta['useFeatured'] = true;
                                $meta['siloMode'] = false;
                                $meta['qty'] = 3;
                                $templates = array();
                                $templates['main'] = array('
                                
                                    <div class="row" id="widget-slider">
                                            [[items]]
                                    </div>
                                    <div class="row">
                                        <div class="columns">
                                            <p class="more-assets"><a href="[[moreurl]]" title="View All Before & After photos">View All Before &amp; After photos</a></p>
                                        </div>
                                    </div>
                                ');
                                $templates['item'] = array('
                                <div class="widget-item">
                                    <div  class="tabs_[[num]]">            
                                        <div class="medium-5 medium-offset-1 large-6 large-offset-0 columns">
                                            <div class="widget-img">
                                                <img src="http://img1.teambasementsystems.com/uploads/before_after/700_525/[[company_id]]/[[before-photo]]" alt="[[alt]]" />
                                                <span>Before</span>  
                                            </div>
                                        </div>
                                         <div class="medium-5 large-6 columns">
                                            <div class="widget-img">
                                                <img src="http://img1.teambasementsystems.com/uploads/before_after/700_525/[[company_id]]/[[after-photo]]" alt="[[alt]]" />
                                                <span>After</span>
                                            </div>
                                         </div>
                                        <h3>[[title]]</h3>
                                        <p>[[text-full]]</p>
                                    </div>
                                </div>
                                    ');
                                $title = 'BA';
                                require_once('widgets/before_after_sidebar_widget.php');
                                echo($output);
                                ?>
                        
                        </div><!-- end #widgets.container -->
                                        
                        <div class="container home" id="customers">
                            <div class="row">
                                <div class="columns">
                                    <p class="home-section-title">Happy Customers in [territory]</p>
                                </div>
                            </div>
                                    
                            <?php
                                $meta = array();
                                    $meta['useGeo'] = true;
                                    $meta['manualAssetPage'] = false;
                                    $meta['useFeatured'] = false;
                                    $meta['siloMode'] = false;
                                    $meta['qty'] = 3;
                                    $meta['template'] = 5587;
                                $templates = array();
                                $templates['main'] = array('
                                    <div class="row" id="home-reviews">
                                            
                                                 [[items]]

                                            <p class="more-assets">
                                                <a href="[[moreurl]]">View All Reviews</a>
                                            </p>
                                        </div>');
                                  $templates['item'] = array('
                                 <div class="columns large-4">
                                     <div class="review_item" class="tabs_[[num]]">
                                        <div class="review_item_details">
                                            <div class="small_review_stars_grouping">[[stars]]</div>
                                            <div class="review_customer">[[author]]</div>
                                            <div class="review_location_date">[[location]]</div>
                                        </div>
                                        <div class="widget_item_right">
                                            <div class="text review_preview"><a href="[[url]]">[[text]]</a></div>
                                        </div>
                                    </div>
                                </div>');
                                $title = 'Reviews';
                                require_once('widgets/reviews_sidebar_widget.php');
                                echo($output);
                            ?>
                            </div><!-- end customer reviews/testimonials -->  
                                                        
                                            <div class="container" id="page-wrap">
                                                <div class="row">
                                                    <div class="columns homepage-content" id="content-wrap">
                                                                    
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"free-estimate"))
                                                    {
                                                    ?>
                                                    <div class="container" id="page-wrap">
                                                        <div class="row">
                                                            <div class="columns free-estimate" id="content-wrap">
                                                                
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                    <?php
                                                    if (stristr($thePage,"about-us"))
                                                    {
                                                    ?>
                                                        <div id="about" class="silo-page-wrap">
                                                        
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"spray-foam-insulation"))
                                                    {
                                                    ?>
                                                        <div id="spray-foam" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"attic-insulation"))
                                                    {
                                                    ?>
                                                        <div id="attic-insulation" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"ice-damming"))
                                                    {
                                                    ?>
                                                        <div id="ice-damming" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"crawl-space-insulation"))
                                                    {
                                                    ?>
                                                        <div id="crawl-space-insulation" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"home-insulation"))
                                                    {
                                                    ?>
                                                        <div id="home-insulation" class="silo-page-wrap">
                                                                
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"windows-doors"))
                                                    {
                                                    ?>
                                                        <div id="windows-doors" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"indoor-air-quality"))
                                                    {
                                                    ?>
                                                        <div id="indoor-air-quality" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"home-energy-evaluation"))
                                                    {
                                                    ?>
                                                        <div id="home-energy-evaluation" class="silo-page-wrap">
                                                              <?php
                                                    }
                                                    elseif (stristr($thePage,"roof-repair"))
                                                    {
                                                    ?>
                                                    <div id="roof-repair" class="silo-page-wrap">

                                                      <?php
                                                      }
                                                      elseif (stristr($thePage,"roof-replacement"))
                                                      {
                                                      ?>
                                                    <div id="roof-replacement" class="silo-page-wrap">
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"commercial-roofing"))
                                                    {
                                                    ?>
                                                    <div id="commercial-roofing" class="silo-page-wrap">

                                                      <?php
                                                      }
                                                      elseif (stristr($thePage,"gutters-and-downspouts"))
                                                      {
                                                      ?>
                                                      <div id="gutters-and-downspouts" class="silo-page-wrap">
                                                      <?php
                                                      }
                                                      elseif (stristr($thePage,"siding"))
                                                      {
                                                      ?>
                                                    <div id="siding" class="silo-page-wrap">
                                                      <?php
                                                      }
                                                      elseif (stristr($thePage,"windows-doors"))
                                                      {
                                                      ?>
                                                    <div id="windows-doors" class="silo-page-wrap">
                                                      <?php
                                                      }
                                                      elseif (stristr($thePage,"remodeling"))
                                                      {
                                                      ?>
                                                    <div id="remodeling" class="silo-page-wrap">
                                                                            
                                                    <?php
                                                    }
                                                    elseif (stristr($thePage,"service-area"))
                                                    {
                                                    ?>
                                                        <div id="territory" class="silo-page-wrap">
                                                                                
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                        <div id="about" class="silo-page-wrap">
                                                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="container" id="silo-header">
                                                        <div class="row">
                                                            <div class="columns">
                                                                <span class="page-title"><?php echo $cmsPageData['page.name']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end #silo-header -->
                                                    <div class="container" id="page-wrap">
                                                        <div class="row">
                                                            <div class="medium-9 medium-push-3 columns body" id="content-wrap">
                                                                <?php
                                                                }
                                                                ?>
                                                                [[content]]    
                                                            </div>
                                                            <div class="medium-3 medium-pull-9 columns" id="subnav-left">
                                                                [[single_silo_nav]]
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php if (($thePage != "free-estimate")&&($thePage != "index")) { ?>
                                                        </div><!-- end #silo-page-wrap -->
                                                    <?php
                                                            }
                                                            ?>

                                                    <?php if (($thePage == "index")) { ?>
                                                    
                                                    <div class="container" id="hp-features">                              
                                                        <div class="row">
                                                            <div class="medium-6 columns">
                                                                <div class="feature-item">
                                                                    <a href="#">
                                                                        <h3>Callout 1</h3>
                                                                        <p>Special service callout details here</p></a>
                                                                </div>
                                                            </div>
                                                            <div class="medium-6 columns">
                                                                <div class="feature-item">
                                                                    <a href="#">
                                                                        <h3>Callout 2</h3>
                                                                        <p>Special service callout details here</p></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                                                    <?php
                                                    }
                                                    ?>

                                                    <?php if (($thePage != "service-area")) { ?>
                                                
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
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                    <?php if (($thePage == "index")) { ?>
                                                        
                                                    <div class="container" id="cred">
                                                        <div class="row">
                                                            <?php echo $credFooter ?>
                                                        </div>
                                                    </div><!-- end credibility -->
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                            
                                                            <div class="container home" id="footer">
                                                                <div class="row" data-equalizer>
                                                                    <div class="large-7 large-push-5 columns" data-equalizer-watch>
                                                                
                                                                <!-- SUPER FOOTER TOOL -->
                                                                    <div id="footer-links">
                                                                        <?php
                                                                        $superNav = new nav();
                                                                        $superNav->superMode = 'bottom';
                                                                        echo $superNav->generateSuperMarkup();
                                                                        ?>
                                                                        
                                                                        [[social_footer]]
                                                                    </div>
                                                                <!-- END SUPER FOOTER TOOL -->
                                                                
                                                                    </div>
                                                                    <div class="large-5 large-pull-7 columns" data-equalizer-watch>
                                                                        <div id="footer-contact">
                                                                            <a href="/free-estimate.html" id="footer-btn">get a free quote</a>
                                                                            <p class="footer-phone">Or call us at
                                                                                <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                                                                            </p>
                                                                            <p class="footer-address">
                                                                                &copy; <?php echo(date('Y')); ?> [[display_addresses]]</p>
                                                                            <p>
                                                                              Contractor ID: [license number]
                                                                            </p>
                                                                            <div class="center">
                                                                                [[cn-logo]]
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        
                                                                </div>
                                                            </div>

                                                            
                                                            <a id="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i>Top</a>
                                                        </div>
                                                        
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script> 
<script src="http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/template.js"></script> 
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script> 

<script>
//Before & After Homepage Widget Slider
    $('#widget-slider').slick({
        autoplay: false,
        dots: true,
        infinite: true,
        speed: 500,
        fade: false,
        cssEase: 'ease',
        responsive: [
            {
              breakpoint: 640,
              settings: {
                arrows: false
              }
            }
        ]
    });

//Map Scroll Zoom Preventer
    $('#home-city-list-wrap').click(function(){
       $(this).css('pointer-events','none');
       $('#home-city-list').css('pointer-events','visible');
    });

</script>                                                  
                                                        
                                                        
                                                    </body>
                                                </html>
