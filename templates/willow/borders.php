<?php
// this is here to prevent loading extra homepage content. Remove when we copy stuff into index
global $thePage, $cmsPageData;
if ($thePage == 'index') {
   $cmsPageData['page.body_content'] = '';
}
?>

<?php
        //Set your sites main services to generate some nav and footer links
        // options: water, foundation, concrete, mold, finishing, com-foundation, radon
        //water = crawl,sump,waterproofing
        $ms = array("water", "foundation", "concrete", "mold", "com-foundation");

        //Update these links for your site
        $favicon = '<link rel="icon" href="/core/images/universal/favicon/bs-favicon.ico">';

        $logo = '<a href="/"><img src="http://placehold.it/350x150" alt="[company]" title="[company]" border="0"></a>';

        $umbrella = '<img src="http://placehold.it/300x450">';

        //cred under ATB make sure class is grayscale on image

        $heroCred = '<div class="small-6 medium-3 columns">
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

        //customer video
        $vidIframe = '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZCHOn59QYbw" frameborder="0" allowfullscreen></iframe>';


    //Create the service boxes underneath the hero
    $serCount = 5; //counter starts at 0
    $arr = array(
            array(
                "service-img" => "/core/images/templates/health/waterproofing-icon.png",
                "service-link" => "/basement-waterproofing.html",
                "service-name" => "Basement Waterproofing",
                "service-desc" => "We have the most effective solutions for wet basements."
            ),
            array(
                "service-img" => "/core/images/templates/health/crawlspace-icon.png",
                "service-link" => "/crawl-space-repair.html",
                "service-name" => "Crawl Space Repair",
                "service-desc" => "We offer complete crawl space encapsulation & repair services."
            ),
            array(
                "service-img" => "/core/images/templates/health/sump-icon.png",
                "service-link" => "/sump-pump.html",
                "service-name" => "Sump Pump Installation",
                "service-desc" => "Our sump pump systems are engineered to get water out."
            ),
            array(
                "service-img" => "/core/images/templates/health/foundation-icon.png",
                "service-link" => "/foundation-repair.html",
                "service-name" => "Foundation Repair",
                "service-desc" => "We'll find the right solution for your foundation problems."
            ),
            array(
                "service-img" => "/core/images/templates/health/concrete-icon.png",
                "service-link" => "/concrete-lifting.html",
                "service-name" => "Concrete Lifting &amp; Leveling",
                "service-desc" => "Quickly &amp; effectively stabilize your sinking, settling concrete!"
            ),
            array(
                "service-img" => "/core/images/templates/health/mold-removal-icon.png",
                "service-link" => "home-mold.html",
                "service-name" => "Home Mold",
                "service-desc" => "Protect yourself by preventing mold growth before it begins!"
            )
        );


            $socialFooter ='
            <a href="#" title="Like Us on Facebook" target="_blank">
            <img src="/core/images/templates/health/fb-icon-light.png" alt="Facebook"></a>
            <a href="#" title="Follow Us on Twitter" target="_blank">
            <img src="/core/images/templates/health/tw-icon-light.png" alt="Twitter"></a>
            <a href="#" title="Add us on Google+" target="_blank">
            <img src="/core/images/templates/health/social-icons/goog-icon-light.png"></a>
            <a href="#" title="Subscribe to us on YouTube" target="_blank">
            <img src="/core/images/templates/health/social-icons/yt-icon-light.png" alt="YouTube"></a>';


        //Match Up Wiget pages

        $footAbout = '
             <li><a href="/about-us.html">About Us</a></li>
             <li><a href="/about-us/news-events.html">News Events</a></li>
             <li><a href="/about-us/meet-the-team.html">Meet The Team</a></li>
             <li><a href="/about-us/videos.html">Videos</a></li>
             <li><a href="/about-us/job-opportunities.html">Job Opportunities</a><li>
             <li><a href="/about-us/coupons.html">Coupons</a></li>
             <li><a href="/about-us/press-release.html">Press Release</a></li>
             <li><a href="/about-us/awards.html">Awards</a></li>
             <li><a href="/about-us/homeshows.html">Homeshows</a></li>
             <li><a href="/about-us/financing.html">Financing</a></li>
             <li><a href="/sitemap.html">Site Map</a></li>
             <li><a href="/privacy-policy.html">Privacy Policy</a></li>
        ';


          $footOurWork = '
            <li><a href="/about-us/photo-gallery.html">Photo Gallery</a></li>
            <li><a href="/about-us/before-after.html">Before &amp; After</a></li>
            <li><a href="/about-us/case-studies.html">Case Studies</a></li>
            <li><a href="/about-us/reviews.html">Reviews</a></li>
            <li><a href="/about-us/testimonials.html">Testimonials</a></li>
        ';

?>


    <?php
    // this is here to prevent loading extra homepage content. Remove when we copy stuff into index
    global $thePage, $cmsPageData;
    if ($thePage == 'index') {
       $cmsPageData['page.body_content'] = '';
    }
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
        	<link rel="stylesheet" type="text/css" href="/inc/sb-styles.css"> <!-- Comment out when working in custom template-->
            <!--  <link rel="stylesheet" type="text/css" href="/inc/sb-styles.css?custom_template_id=XX"> Uncomment and update template ID when working in custom template -->

        </head>
    <body>

        <div id="homepage-template <?php echo $siteData['site.id']; ?>">
            <div class="container" id="header">
                <div class="row collapse">
                    <div class="large-4 columns" id="logo">
                        <?php echo $logo; ?>
                    </div>
                    <div class="large-8 columns" id="phone">
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

                            <div class="opensign" onclick="location.href='/free-estimate.html';" style="cursor:pointer;"><span>open</span></div>

                            <?php
                            }
                                ?>

                        [phone]
                        </a>
                    </div>
                </div>
            </div><!-- end #header -->

<!---------- TOP NAV ------------------------------->

        <?php
            $superNav = new nav();
            $superNav->superMode = 'top';
            echo $superNav->generateSuperMarkup();
        ?>

<!--------- END TOP NAV ---------------------------->


<?php if ($thePage == "index") { ?>

<div class="container" id="main-message">
<div class="row">

<div class="medium-5 medium-offset-1 columns" id="owner-bg">
    <?php echo $umbrella; ?>
</div>

<div class="medium-7 medium-offset-5 columns" id="main-text">
    <p class="we-are">we are your local expert for</p>
    <img src="/core/images/templates/health/atb-bg-new.png">
     <p class="main-service-text">
   			<?php if (in_array("water", $ms)) { ?>
             	   <span class="main-service-item"><a href="/basement-waterproofing.html">Basement Waterproofing</a></span>
              		<span class="main-service-item"><a href="/sump-pump.html">Sump Pumps</a></span><br>
                 	<span class="main-service-item"><a href="/crawl-space-repair.html">Crawl Space Repair</a></span>
                    <?php } ?>

                    <?php if (in_array("foundation", $ms)) { ?>
                    <span class="main-service-item"><a href="/foundation-repair.html">Foundation Repair</a></span>
                    <?php } ?>

                     <?php if (in_array("finishing", $ms)) { ?>
                     <span class="main-service-item"><a href="/basement-finishing.html">Basement Finishing</a></span>
                    <?php } ?>

                    <?php if (in_array("concrete", $ms)) { ?>
              		  <span class="main-service-item"><a href="/concrete-lifting.html">Concrete Lifting</a></span>
                 <?php } ?>
                  <?php if (in_array("mold", $ms)) { ?>
              		  <span class="main-service-item"><a href="/home-mold.html">Mold Problems</a></span>
                 <?php } ?>

            </p>
    <a class="button" href="/free-estimate.html" title="Contact us for a Free Quote">Contact us for a Free Quote</a>
</div>


</div>
</div><!-- end main message -->
<div class="container" id="service-area-bar">
    <div class="row">
        <div class="columns"><p class="main-service-area"><a href="/service-area.html"> proudly serving [state] - including [major cities 1]</a></p></div>
    </div>
</div><!-- end service area text -->
<div class="container" id="cred">
<div class="row">
 <?php echo $heroCred; ?>

</div>
</div><!-- end credibility -->
<div class="container home" id="services">
        <div class="row">
            <div class="home-text columns">
                <h1>H1 content goes here please and thank you</h1>
                <h2>H2 content goes here thanks again for your cooperation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>
            </div>
        </div>
                        <div id="services-container" class="row">

                            <?php
                            $count = $serCount;
                            for ($x = 0; $x <= $count; $x++) {
                                echo '<div class="medium-6 large-4 columns">';
                                echo '<div class="srv-box">';
                                echo '<a href="'.$arr[$x]['service-link'].'">';
                                echo '<img src="'.$arr[$x]['service-img'].'" alt="'.$arr[$x]['service-name'].'">';
                                echo '<h3>'.$arr[$x]['service-name'].'</h3>';
                                echo '<p>'.$arr[$x]['service-desc'].'</p>';
                                echo '<span>learn more</span></a>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>



                        </div><!-- end #services-container -->
                        <div class="row">
                            <div class="medium-6 columns"><!-- FREE ESTIMATE -->
                                <div class="service-feature">
                                    <a href="/free-estimate.html">
                                        <h3>Free Estimates</h3>
                                        <p>We offer a free, in-home inspection and cost estimate for all our <em>"Basementy" services.</em></p></div>
                                    </a>
                                </div>
                                <div class="medium-6 columns"><!-- FINANCING OR COUPONS OR WHATEVER -->
                                    <div class="service-feature financing">
                                        <a href="/about-us/financing.html">
                                            <h3>Financing Available</h3>
                                            <p>From basement waterproofing to foundation repair, we can offer financing options for practically any job.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end services -->

                        <div class="container home" id="choose-us">
                            <div class="row">
                                <div class="columns">
                                <h2>Why Homeowners Choose Us</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-10 columns">

                                    <p class="check">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p class="check">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p class="check">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="medium-2 columns">
                                    <div class="bbb">
                                        <a href="#" target="_blank">
                                            <img src="http://placehold.it/150x150">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                        		<div class="home-text columns">
                        		    <h2>H2 content goes here thanks again for your cooperation</h2>
                    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                                    <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>
                                </div>
                            </div>
                        </div><!-- End Choose Us -->

                        <div class="container home" id="customers">
                            <div class="row">
                                <div class="columns">
                                    <h2>thousands of satisfied customers</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-6 columns">
                                    <div id="home-vid">
                                        <div class="flex-video widescreen vimeo">
                                            <?php echo $vidIframe; ?>

                                        </div>
                                        <p class="more-assets"><a href="/about-us/testimonials.html">more testimonials</a></p>
                                    </div>
                                </div>
                                <div class="large-6 columns">

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
                                        <div id="home-reviews">
                                                <div class="review_item">
                                                     [[items]]
                                                </div>
                                                <p class="more-assets">
                                                    <a href="[[moreurl]]">More Reviews</a>
                                                </p>
                                            </div>');
                                      $templates['item'] = array('
                                     <div class="review_item" id="tabs_[[num]]">
                                        <div class="review_item_details">
                                            <div class="small_review_stars_grouping">[[stars]]</div> <div class="review_customer">[[author]]</div><div class="review_location_date">[[location]]</div>
                                        </div>
                                        <div class="widget_item_right">
                                            <div class="text review_preview"><a href="[[url]]">[[text]]</a></div>
                                        </div>
                                    </div>');
                                    $title = 'Reviews';
                                    require_once('widgets/reviews_sidebar_widget.php');
                                    echo($output);
                                ?>

                    </div>
                </div>
                        <div class="row">
            <div class="home-text columns">
                <h2>H2 content goes here thanks again for your cooperation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>
            </div>
        </div>
            </div><!-- end reviews/testimonials -->
<div class="container" id="home-content-wrap">
    <div class="row">
        <div class="columns">

<?php
}
elseif (stristr($thePage,"free-estimate"))
{
    ?>
    <div class="container" id="content-wrap">
        <div class="row">
            <div class="columns">

<?php
}
else
{
    ?>
    <div class="container" id="silo-header">
        <div class="row">
            <div class="medium-10 large-7 medium-centered large-uncentered columns" id="subnav">
                <span class="page-title"><?php echo $cmsPageData['page.name']; ?></span>
                [[navigation_children]]
            </div>
        </div>

        <?php
        if (stristr($thePage,"about-us"))
        {
            ?>
                    <div class="silo-bg about"></div>

        <?php
        }
        elseif (stristr($thePage,"basement-waterproofing"))
        {
            ?>
                    <div class="silo-bg waterproofing"></div>

        <?php
        }
        elseif (stristr($thePage,"foundation-repair"))
        {
            ?>
                    <div class="silo-bg foundation"></div>

        <?php
        }
        elseif (stristr($thePage,"crawl-space-repair"))
        {
            ?>
                    <div class="silo-bg crawl-space"></div>

        <?php
        }
        elseif (stristr($thePage,"sump-pump"))
        {
            ?>
                    <div class="silo-bg sump-pump"></div>

        <?php
        }
        elseif (stristr($thePage,"mold-removal"))
        {
            ?>
                    <div class="silo-bg mold"></div>

        <?php
        }
        elseif (stristr($thePage,"basement-finishing"))
        {
            ?>
                    <div class="silo-bg finishing"></div>

        <?php
        }
        elseif (stristr($thePage,"flood-vents"))
        {
            ?>
                    <div class="silo-bg flood-vents"></div>

                      <?php
        }
        elseif (stristr($thePage,"radon"))
        {
            ?>
                    <div class="silo-bg radon"></div>

            <?php
        }
        elseif (stristr($thePage,"concrete"))
        {
            ?>
                    <div class="silo-bg concrete"></div>

        <?php
        }
        elseif (stristr($thePage,"water-damage-restoration"))
        {
            ?>
                    <div class="silo-bg water-damage"></div>
        <?php
        }
        else
        {
            ?>
                    <div class="silo-bg about"></div>
        <?php
        }
        ?>

</div><!-- end #silo-header -->

<div class="container" id="content-wrap">
    <div class="row">
        <div class="columns">[[breadcrumbs]]</div>
    </div>
    <div class="row">
        <div class="columns">
<?php
}
?>
                [[content]]

        </div>
    </div>
</div>

<!-- END Silo/SubNav Swap -->
    <?php if ($thePage != "service-area") { ?>
<div class="container home" id="service-area">
    <div class="row">
        <div class="large-5 columns">
            <div id="home-city-list">
                <h2>our service area</h2>
                [[city_scroll:50]]
            </div>
        </div>
        <div class="large-7 columns service-map">
        	<div id="gmap-wrap">[[service_area_google_map]]</div>
        </div>
    </div>
</div>

    <?php
    }
    ?>

            <div class="container home" id="footer">
                <div class="row" data-equalizer>
                    <div class="large-7 large-push-5 columns" data-equalizer-watch>

                            <div id="footer-links">

                <!---------- FOOTER LINKS ------------------------------->

                                <?php
                                $superNav = new nav();
                                $superNav->superMode = 'bottom';
                                echo $superNav->generateSuperMarkup();
                                ?>
                                  <?php echo $socialFooter ?>

                <!--------- END FOOTER LINKS ---------------------------->

                            </div>

                    </div>
                    <div class="large-5 large-pull-7 columns" data-equalizer-watch>
                        <div id="footer-contact">
                            <a href="/free-estimate.html" id="footer-btn">get a free quote</a>
                            <p class="footer-phone">Or call us at
                                <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                            </p>
                            <p class="footer-disclaimer"></p>
                            <p class="footer-address">
                                 &copy; <?php echo(date('Y')); ?>  [[display_addresses]]<br>
                            [phone]</p>
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
                        speed: 100
                      }
                    }
                ]
            });
</script>




    </body>
</html>
