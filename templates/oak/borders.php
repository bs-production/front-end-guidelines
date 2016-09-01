<?php
// this is here to prevent loading extra homepage content. Remove when we copy stuff into index
global $thePage, $cmsPageData;
if ($thePage == 'index') {
   $cmsPageData['page.body_content'] = '';
}
?>

<?php

       //Update these links for your site
        $favicon = '<link rel="icon" href="/core/images/universal/favicon/bs-favicon.ico">';

        $logo = '<a href="/"><img src="http://placehold.it/350x150" alt="[company]" title="[company]" border="0"></a>';


        $mainVideo= 'TFFUg3I-mLY';

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


        $serCount = 3;
            $arr = array(

                array(
                        "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/fsi.svg"),
                        "service-link" => "/foundation-repair.html",
                        "service-name" => "Foundation Repair",
                        "service-desc" => "We'll find the right solution for your foundation problems."
                    ),
                    array(
                        "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"),
                        "service-link" => "/basement-waterproofing.html",
                        "service-name" => "Basement Waterproofing",
                        "service-desc" => "We have the most effective solutions for wet basements."
                    ),
                    array(
                        "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/cs.svg"),
                        "service-link" => "/crawl-space-repair.html",
                        "service-name" => "Crawl Space Repair",
                        "service-desc" => "We offer complete crawl space encapsulation &amp; repair services."
                    ),
                    array(
                        "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/polylevel.svg"),
                        "service-link" => "/concrete-lifting.html",
                        "service-name" => "Concrete Leveling",
                        "service-desc" => "Quickly &amp; effectively stabilize your sinking, settling concrete!"
                    )

       );



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
        <body>
            <div id="steel-template">
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

                                    <div class="opensign"><span>open</span></div>

                                <?php
                                }
                                    ?>

                                [phone]

                            </a>
                            <p onclick="location.href='/service-area.html';" style="cursor:pointer;" id="header-service-area">Serving [territory], [major cities 3]</p>

                        </div>
                    </div>

                </div>

<!---------- TOP NAV ------------------------------->

        <?php
            $superNav = new nav();
            $superNav->superMode = 'top';
            echo $superNav->generateSuperMarkup();
        ?>

<!--------- END TOP NAV ---------------------------->

    <?php if ($thePage == "index") { ?>

    <div class="container" id="main-message">
        <div class="main-slide slide1">
        </div>

    </div><!-- end main message -->
    <div class="container" id="main-cta">
        <div class="row">
            <div class="large-7 columns">
                <p>expert waterproofing &amp; foundation<span>specialists you can trust</span></p>
            </div>
            <div class="large-5 columns">
                <a class="button" href="/free-estimate.html" title="Contact us for a Free Quote">Contact us for a Free Quote</a>
            </div>
            </div>
        </div>
    </div><!-- end main call to action -->

    <div class="container home" id="services">
                    <div class="row">
                        <div class="home-text columns">
                            <h1>H1 content goes here please and thank you</h1>
                            <h2>H2 content goes here thanks again for your cooperation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                            <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>

                        </div>
                    </div>
    <div class="row">


      <?php
          $count = $serCount;
          for ($x = 0; $x <= $count; $x++) {
              echo '<div class="medium-6 large-3 columns">';
              echo '<div class="srv-box">';
              echo '<a href="'.$arr[$x]['service-link'].'" alt="'.$arr[$x]['service-name'].'">';
              echo '<div>'.$arr[$x]['service-img'].'</div>';
              echo '<h3>'.$arr[$x]['service-name'].'</h3>';
              echo '<p>'.$arr[$x]['service-desc'].'</p>';
              echo '</a>';
              echo '</div>';
              echo '</div>';
          }
          ?>


            </div>
        </div><!-- end services -->
                            <div class="container home" id="choose-us">
                                <div class="row">
                                    <div class="columns"><h2><span>Why choose us</span></h2></div>
                                </div>
                                <div class="row">
                                    <div class="medium-10 medium-offset-1 large-5 columns"><p class="check">Transferable Lifetime Warranty for Basement Waterproofing Systems</p></div>
                                    <div class="medium-10 medium-offset-1 large-5 large-offset-0 end columns"><p class="check">Fast and effective installation of all our products and services</p></div>
                                </div>
                                <div class="row">
                                    <div class="medium-10 medium-offset-1 large-5 columns"><p class="check">Savings of Up to 50% Over Other Methods</p></div>
                                    <div class="medium-10 medium-offset-1 large-5 large-offset-0 end columns"><p class="check"><a href="/free-estimate.html">FREE Written Estimates</a> and Inspections</p></div>
                                </div>
                    <div class="row">
                        <div class="home-text columns">
                            <h2>H2 content goes here thanks again for your cooperation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget molestie magna, vel varius metus. Sed pretium tellus at lacinia efficitur. Vestibulum laoreet metus in felis aliquam ornare.</p>
                            <p>Nam volutpat arcu vitae sagittis posuere. Maecenas ultricies massa vel ultricies sollicitudin. Cras eu est orci. Praesent rutrum sodales sem in porta. Duis a lacus ut diam iaculis varius. Mauris lacinia, neque fringilla placerat tempus, magna magna ornare erat, nec viverra mi erat ut odio. Donec ac porta turpis. Aliquam eu ipsum ut nulla placerat porta et dignissim lorem.</p>

                        </div>
                    </div>
                            </div><!-- end why choose us -->
                            <div class="container home" id="customers">
                                <div class="row">
                                    <div class="columns">
                                        <h2><span>Our customers think we're great</span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-6 columns">
                                        <div id="home-vid">
                                            <div class="flex-video widescreen vimeo">


                                                <div class="youtube-container">
                                                  <div class="youtube-player" data-id="<?php echo $mainVideo ?>"></div>
                                                </div>


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
                                                            return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/maxresdefault.jpg"><div class="play-button"></div>';
                                                        }

                                                        function labnolIframe() {
                                                            var iframe = document.createElement("iframe");
                                                            iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&rel=0&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=1&showinfo=0");
                                                            iframe.setAttribute("frameborder", "0");
                                                            iframe.setAttribute("id", "youtube-iframe");
                                                            this.parentNode.replaceChild(iframe, this);
                                                        }
                                            </script><!-- end video script -->

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
            elseif (stristr($thePage,"basement-waterproofing"))
            {
                ?>
                        <div id="waterproofing" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"commercial-foundation-repair"))
            {
                ?>
                        <div id="commercial-foundation" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"foundation-repair"))
            {
                ?>
                        <div id="foundation" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"concrete-lifting"))
            {
                ?>
                        <div id="concrete" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"crawl-space-repair"))
            {
                ?>
                        <div id="crawl-space" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"sump-pump"))
            {
                ?>
                        <div id="sump-pump" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"radon-gas-mitigation"))
            {
                ?>
                        <div id="radon" class="silo-page-wrap">

            <?php
            }
            elseif (stristr($thePage,"flood-vents"))
            {
                ?>
                        <div id="flood-vents" class="silo-page-wrap">

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

            <div class="medium-9 medium-push-3 large-10 large-push-2 columns body" id="content-wrap">
    <?php
    }
    ?>
                    [[content]]

            </div>
            <div class="medium-3 medium-pull-9 large-2 large-pull-10 columns" id="subnav-left">
                    [[single_silo_nav]]
            </div>
        </div>
    </div>

    </div><!-- end #silo-page-wrap -->

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

                <!---------- FOOTER LINKS ------------------------------->

                                <?php
                                $superNav = new nav();
                                $superNav->superMode = 'bottom';
                                echo $superNav->generateSuperMarkup();
                                ?>
                            <div class="social-footer"> <?php echo $socialFooter ?></div>

                <!--------- END FOOTER LINKS ---------------------------->

                            </div>

                        </div>
                        <div class="large-5 large-pull-7 columns" data-equalizer-watch>
                            <div id="footer-contact">
                                <a href="/free-estimate.html" id="footer-btn">get a free quote</a>
                                <p class="footer-phone">Or call us at
                                    <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                                </p>

                                <p class="footer-address">
                                     &copy; <?php echo(date('Y')); ?>  [[display_addresses]] </p>

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
                    $('#main-message').slick({
                            autoplay: false,
                            dots: false,
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
