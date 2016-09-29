<?php
// this is here to prevent loading extra homepage content. Remove when we copy stuff into index
global $thePage, $cmsPageData;
if ($thePage == 'index') {
   $cmsPageData['page.body_content'] = '';
}
?>

<?php

//Update these links for your site
$favicon = '<link rel="icon" href="/core/images/universal/favicon/des-favicon.ico">';

$logo = '<a href="/"><img src="http://placehold.it/350x150" alt="[company]" title="[company]" border="0"></a>';

$mainVideo= '<iframe width="560" height="315" src="https://www.youtube.com/embed/hMb8FFjM02k?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';

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

$socialFooter ='
<a href="#" title="Like Us on Facebook">
<img src="/core/images/templates/health/fb-icon-light.png" alt="Facebook"></a>
<a href="#" title="Follow Us on Twitter">
<img src="/core/images/templates/health/tw-icon-light.png" alt="Twitter"></a>
<a href="#" title="Add us on Google+">
<img src="/core/images/templates/health/goog-icon-light.png"></a>
<a href="#" title="Share on LinkedIn">
<img src="/core/images/templates/health/linkedin-icon.png" alt="LinkedIn"></a>
<a href="#" title="Subscribe to us on YouTube">
<img src="/core/images/templates/health/yt-icon-light.png" alt="YouTube"></a>';


$serCount = 7; //counter starts at 0
$arr = array(

array(
"service-img" => "",
"service-link" => "/spray-foam-insulation.html",
"service-name" => "Spray Foam Insulation",
),
array(
"service-img" => "",
"service-link" => "/attic-insulation.html",
"service-name" => "Attic Insulation",
),
array(
"service-img" => "",
"service-link" => "/ice-damming.html",
"service-name" => "Ice Damming",
),
array(
"service-img" => "",
"service-link" => "/crawl-space-insulation.html",
"service-name" => "Crawl Space Insulation",
),
array(
"service-img" => "",
"service-link" => "/home-insulation.html",
"service-name" => "Home Insulation",
),
array(
"service-img" => "",
"service-link" => "/windows-doors.html",
"service-name" => "Windows &amp; Doors",
),
array(
"service-img" => "",
"service-link" => "/indoor-air-quality.html",
"service-name" => "Indoor Air Quality",
),
array(
"service-img" => "",
"service-link" => "/home-energy-evaluation.html",
"service-name" => "Home Energy Evaluation",
)

); // end array



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
    	<script src="https://use.typekit.net/kge6pme.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
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

    <?php
		if($thePage == 'free-estimate') { // for homepage zip field
		?>
		<?php if (isset($_POST['Zip']))  { ?>
    		<script>
        		$(document).ready(function() {
        		$("<p class='confirm-service'>Thank you for your interest in our <strong> <?php echo @$_POST['services-drop']; ?> </strong> services.</p>").prependTo(".bar");
        		$("#Zip").val("<?php echo @$_POST['Zip']; ?>");
        		lookupCity();
        		$('.step_2').addClass('current');
        		$('.step_1').removeClass('current');
        		$('.step_2').css('display','block');
        		$('.step_1 button').css('display','none');
        		$('#Street-label').focus();
        		});

    		</script>
		<?php } ?>
	<?php } ?>

    <body>
        <div id="template-wrap">
            <div class="container" id="header">
                <div class="row medium-uncollapse large-collapse" data-equalizer>
                    <div class="large-5 columns" id="logo" data-equalizer-watch>
                    <!-- Show this Logo for tablet and desktop only -->
                        <div class="row hide-for-small " data-equalizer>
                            <div class="medium-7 medium-centered large-12 large-uncentered columns" data-equalizer-watch>
                                <?php echo $logo; ?>
                            </div>
                        </div>
                <!-- Show this Logo and service area text on mobile only -->
                        <div class="row show-for-small">
                            <div class="small-5 columns">
                                <?php echo $logo; ?>
                            </div>
                            <div class="small-7 columns">
                                <p onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>
                            </div>
                        </div>
                    </div><!-- end #logo -->
                    <div class="large-7 columns" id="contact" data-equalizer-watch>
                <!-- Hide this Service Area text on mobile -->
                        <div class="row collapse hide-for-small" id="header-service-wrap">
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

                                    <div class="open-hours">
                                        <p class="today"><?php echo $times['language']; ?></p>
                                    </div>

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
                        'show_about_link' => true
                    ),
                    //Replace With Page ID of Financing Page
                    54980 => array(
                        'grandchildren' => false
                    ),
                    //Replace with Page ID of Reviews Page
                    54983 => array(
                        'grandchildren' => false
                    ),
                    'Service Area' => array(
                        'target' => 'map',
                    ),
                    //Replace with Page ID of Abou Us Page
                    54983 => array(
                        'grandchildren' => false
                    )
                );

                echo $superNav->generateSuperMarkup();
                ?>


                        <?php if ($thePage == "index") { ?>

                        <div class="container" id="main-message">
                            <div class="row">
                                <div class="hide-for-small medium-6 large-7 columns main-text">
                                    <p class="sub">Cold floors, drafty windows, high energy bills?</p>
                                    <p class="head"><img src="/core/images/templates/des/we-fix-lg.png"></p>
                                    <div class="main-cta">
                                        <p>You deserve a comfortable home!<span>Get started with a free in-home estimate</span></p>
                                        <form method="post" action="/free-estimate.html">
                                            <input type="text" name="Zip" size="16" placeholder="Enter Zip Code">
                                            <input type="submit" class="submit" value="GO">
                                        </form>
                                    </div>
                                </div>
                                <div class="medium-6 large-5 columns main-img">
                                    <div class="main-text show-for-small-only"><p class="head"><img src="/core/images/templates/des/we-fix-lg.png"></p></div>
                                    <img src="/core/images/templates/des/larry-clipboard-full.png" alt="Larry Janesky, Owner/Founder<br>of Dr. Energy Saver">
                                    <p>Larry Janesky<span>Owner/Founder of Dr. Energy Saver</span></p>
                                </div>
                            </div>
                        </div><!-- end main message -->

                        <div class="container hide-for-small" id="usp-wrap">
                            <div class="row">
                                <div class="medium-4 columns">
                                    <div class="usp-item usp1">
                                        <img src="/core/images/templates/des/icons/temperature-icon.png" alt="Comfortable room temperatures">
                                        <p>Even, comfortable<br>room temperatures</p>
                                    </div>
                                </div>
                                <div class="medium-4 columns">
                                    <div class="usp-item usp2">
                                        <img src="/core/images/templates/des/icons/airq-icon.png" alt="Healthy indoor air quality">
                                        <p>Cleaner, healthier<br>indoor air quality</p>
                                    </div>
                                </div>
                                <div class="medium-4 columns">
                                    <div class="usp-item usp3">
                                        <img src="/core/images/templates/des/icons/savings-icon.png" alt="Energy bill savings">
                                        <p>Lower energy bills<br>all year-round</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end USP section -->

                                <div class="container home" id="services">
                                    <div class="row">
                                        <div class="columns">
                                            <div class="home-text">
                                                <h1>H1 content goes here please and thank you</h1>
                                                <h2>H2 content goes here thanks again for your cooperation</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                                                <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <?php
                                        $count = $serCount;
                                        for ($x = 0; $x <= $count; $x++) {
                                        echo '<div class="small-6 medium-4 columns service-item">';
                                            echo '<div class="srv-box">';
                                                echo '<a href="'.$arr[$x]['service-link'].'">';
                                                    //echo '<img src="'.$arr[$x]['service-img'].'" alt="'.$arr[$x]['service-name'].'">';
                                                    echo '<h3>'.$arr[$x]['service-name'].'</h3>';
                                                echo '</a>';
                                            echo '</div>';
                                        echo '</div>';
                                        }
                                        ?>

                                    </div>
                                </div><!-- end services -->

                                <div class="container home hide-for-small" id="feature">
                                    <div class="row">
                                        <div class="columns">
                                            <div id="content-wrap">
                                                [[horizontal_des_counter]]
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bonus Box for featured info
                                    <div class="row">
                                        <div class="feature-item">
                                            <div class="columns medium-3"><img src="http://images.ctdrenergysaver.com/325/fix-homes-white.png"></div>
                                            <div class="columns medium-9">
                                                <h3>Dr. Energy Saver is on a mission to help fix 100,000 uncomfortable homes by the year 2020.</h3>
                                                <a class="button tiny" href="/" target="_blank">Learn more</a>
                                            </div>
                                        </div>
                                    </div>-->
                                </div><!-- end Feature section -->

                                    <div class="container home" id="service-area">
                                        <div class="row">
                                            <div class="large-5 columns">
                                                <div id="home-city-list">
                                                    <h2>our service area</h2>
                                                    [[city_scroll:75]]
                                                </div>
                                            </div>
                                            <div class="large-7 columns service-map">
                                                <div id="gmap-wrap" onclick="location.href='/service-area.html';" style="cursor:pointer;">[[service_area_google_map]]</div>
                                            </div>
                                        </div>
                                    </div><!-- end #service-area -->

                                    <div class="container home" id="customers">
                                        <div class="row">
                                            <div class="columns">
                                                <h2>Happy Customers in [territory]</h2>
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
                                            <div class="row">
                                                <div class="columns">
                                                    <div class="home-text">
                                                        <h2>H2 content goes here thanks again for your cooperation</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                                                        <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end reviews/testimonials -->

                                        <div class="container home" id="widgets">
                                            <div class="row">
                                                <div class="columns"><h2>Completed Home Energy Projects in [territory]</h2></div>
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


                                            <div class="container home" id="choose-us">
                                                <div class="row">
                                                    <div class="columns">
                                                        <h2>Why [territory] homeowners choose us</h2>
                                                    </div>
                                                </div>
                                                <div class="row checked-wrap">
                                                    <div class="medium-6 large-3 columns">
                                                        <div class="checked-item"><i class="fa fa-truck" aria-hidden="true"></i><p>Experienced company with certified home energy specialists</p></div>
                                                    </div>
                                                    <div class="medium-6 large-3 columns">
                                                        <div class="checked-item"><i class="fa fa-trophy" aria-hidden="true"></i><p>Award-winning, patented systems</p></div>
                                                    </div>
                                                    <div class="medium-6 large-3 columns">
                                                        <div class="checked-item"><i class="fa fa-users" aria-hidden="true"></i><p>Local service, national support</p></div>
                                                    </div>
                                                    <div class="medium-6 large-3 columns">
                                                        <div class="checked-item"><i class="fa fa-file-text" aria-hidden="true"></i><p><a href="/free-estimate.html">Free inspections and cost estimates</a> for all work!</p></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="large-6 columns">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                                                        <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>
                                                    </div>
                                                    <div class="large-6 columns">
                                                        <div id="home-vid">
                                                            <div class="flex-video widescreen vimeo">
                                                                <div class="youtube-container">
                                                                   <div class="youtube-player" data-id="hMb8FFjM02k"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   <!-- end #choose-us -->
                                            <script>
                                                (function() {
                                                            var v = document.getElementsByClassName("youtube-player");
                                                            for (var n = 0; n < v.length; n++) {
                                                                var p = document.createElement("div");
                                                                p.innerHTML = labnolThumb(v[n].dataset.id);
                                                                p.onclick = labnolIframe;
                                                                v[n].appendChild(p);
                                                            }
                                                        })();

                                                        function labnolThumb(id) {
                                                            return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
                                                        }

                                                        function labnolIframe() {
                                                            var iframe = document.createElement("iframe");
                                                            iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
                                                            iframe.setAttribute("frameborder", "0");
                                                            iframe.setAttribute("id", "youtube-iframe");
                                                            this.parentNode.replaceChild(iframe, this);
                                                        }
                                            </script><!-- end video script -->

                                            <div class="container" id="cred">
                                                <div class="row">
                                                    <?php echo $credFooter ?>
                                                </div>
                                            </div><!-- end credibility -->

                                            <div class="container" id="home-content-wrap">
                                                <div class="row">
                                                    <div class="columns">

                                                    <?php
                                                    }
                                                    elseif ((stristr($thePage,"free-estimate")) || ($isCityPage == true))
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

                                                    <?php if (($thePage != "service-area")&&($thePage != "index")) { ?>

                                                    <div class="container home" id="service-area">
                                                        <div class="row">
                                                            <div class="large-5 columns">
                                                                <div id="home-city-list">
                                                                    <h2>our service area</h2>
                                                                    [[city_scroll:50]]
                                                                </div>
                                                            </div>
                                                            <div class="large-7 columns service-map">
                                                                <div id="gmap-wrap" onclick="location.href='/service-area.html';" style="cursor:pointer;">[[service_area_google_map]]</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end #service-area -->

                                                    <?php
                                                    }
                                                    ?>

                                                            <div class="container home" id="footer">
                                                                <div class="row" data-equalizer>
                                                                    <div class="large-7 large-push-5 columns" data-equalizer-watch>
                                                                         <div id="footer-links">
                                                                            <?php
                                                                            $superNav = new nav();
                                                                            $superNav->superMode = 'bottom';
                                                                            echo $superNav->generateSuperMarkup();
                                                                            ?>
                                                                            [[social_footer]]
                                                                        </div>
                                                                    </div>
                                                                    <div class="large-5 large-pull-7 columns" data-equalizer-watch>
                                                                        <div id="footer-contact">
                                                                            <a href="/free-estimate.html" id="footer-btn">get a free quote</a>
                                                                            <p class="footer-phone">Or call us at
                                                                                <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                                                                            </p>
                                                                            <p class="footer-address">
                                                                                &copy; <?php echo(date('Y')); ?> [[company]]<br>
                                                                                [[address street]]<br>
                                                                            [[address city]], [[address state]] [[address zip]]</p>

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
                                    arrows: false
                                  }
                                }
                            ]
                        });
</script>

                                                    </body>
                                                </html>
