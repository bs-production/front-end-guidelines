<!doctype html>
<html class="nojs" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="">
    <title>[[title]]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/normalize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/vendor/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />
    <script src="https://use.typekit.net/qsd3wvs.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    [[core]]
    <link rel="icon"  href="/core/images/universal/favicon/tbf-favicon.ico">

    <?php
        if ($_SERVER['REQUEST_URI'] != "/free-estimate.html") {
            ?>
        <script>
        $( document ).ready(function() {
           $('button').click(function() {
            $('html, body').stop();
        });
        });
        </script>

    <? } ?>

  </head>

  <body>
    <div class="header">
      <div class="row">
        <div class="large-6 columns logo-wrap">
          <a href="/"><img src="http://placehold.it/350x150"></a>
        </div>
        <div class="large-6 columns">
          <div class="header-contact" onclick="location.href='/free-estimate.html';" style="cursor:pointer;">
              <?php
                $times = get_open_time();
                if($times or isset($_GET['open']))
                {
                    ?>

                <div class="opensign"><span>open</span></div>

                <?php
                }
                    ?>
            Free Estimates - Contact Us
            <div class="header-phone">
              [phone]
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="top-nav container" >
      <div class="row collapse" id="nav-bar">
        <div class="columns top-nav">
             <nav class="top-bar" data-topbar role="navigation" data-options="">
            <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
              </li>
              <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
              <!-- Right Nav Section -->
              <ul class="right" id="top-nav-list">
                <li class="has-dropdown">
                  <a href="/basement-finishing.html">Basement Finishing</a>
                  <ul class="dropdown m-menu">
                    <li><div class="row">
                      <div class="columns">
                        <ul class="m-menu-ul">
                          <li><a class="important-nav" href="/basement-finishing/reasons-to-remodel.html">Reasons To Remodel</a></li>
                          <li><a class="important-nav" href="/basement-finishing/basement-finishing-do-donts.html">Basement Finishing Do's &amp; Dont's</a></li>
                          <li><a class="important-nav" href="/basement-finishing/easy-remodeling.html">Easy Remodeling</a></li>
                          <li><a class="important-nav" href="/basement-finishing/green-remodeling.html">Green Remodeling</a></li>
                          <li><a class="important-nav" href="/basement-finishing/installation-finishing.html">Installing Your System</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  </ul><!-- end .m-menu -->
                </li>

                  <li class="has-dropdown">
                  <a href="#">Remodeling Products</a>
                  <ul class="dropdown m-menu">
                    <li><div class="row">
                      <div class="columns">
                        <ul class="m-menu-ul">


                          <li><a class="important-nav" href="/remodeling-products/remodeled-flooring.html">Remodeled Flooring</a>
                          <ul>
                             <li><a href="/remodeling-products/remodeled-flooring/finishing-sub-floor-tiles.html">Finishing Sub Floor Tiles</a></li>
                             <li><a href="/remodeling-products/remodeled-flooring/basement-carpeting.html">Basement Carpeting</a></li>
                             <li><a href="/remodeling-products/remodeled-flooring/flooring-tiles.html">Floring Tiles</a></li>
                             <li><a href="/remodeling-products/remodeled-flooring/wood-finish-floor.html">Wood Finish Floor</a></li>
                             <li><a href="/remodeling-products/remodeled-flooring/insulated-subfloor.html">Insulated Subfloor</a></li>
                             </ul>
                          </li>
                          <li><a class="important-nav" href="/remodeling-products/wall-panels.html">Wall Panels</a>
                          <ul>
                              <li><a href="/remodeling-products/wall-panels/drywall-restoration.html">Drywall Restoration</a></li>
                          </ul>
                          </li>
                            <li><a class="important-nav" href="/remodeling-products/insulated-basement-wall-paneling.html">Insulated Basement Wall Paneling</a></li>
                          <li><a class="important-nav" href="/remodeling-products/ceiling-tiles.html">Ceiling Tiles</a></li>
                          <li><a class="important-nav" href="/remodeling-products/finishing-touches.html">Finishing Touches</a></li>

                        </ul>
                      </div>
                    </div>
                  </li>
                  </ul><!-- end .m-menu -->
                </li>

                  <li><a href="/pictures-gallery.html">Photo Gallery</a></li>



                <li><a href="/service-area.html">Service Area</a></li>
                <li class="has-dropdown">
                  <a href="/about-us.html">About Us</a>
                  <ul class="dropdown m-menu">
                    <li>
                      <div class="row">
                        <div class="columns">
                          <ul class="m-menu-ul">
                          <li><a href="/about-us/basement-finishing-network.html">About TBF</a></li>
                          <li><a href="/about-us/basement-contractor.html">Hiring A Contractor</a></li>
                            <li><a href="/about-us/meet-the-team.html">Meet the Team</a></li>
                            <li><a href="/about-us/reviews.html">Reviews</a></li>
                            <li><a href="/about-us/testimonials.html">Testimonials</a></li>
                            <li><a href="/about-us/before-after.html">Before &amp; After</a></li>
                            <li><a href="/about-us/photo-gallery.html">Photo Gallery</a></li>
                            <li><a href="/about-us/awards.html">Awards</a></li>
                            <li><a href="/about-us/financing.html">Financing</a></li>
                            <li><a href="/about-us/financing.html">Videos</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="quote"><a href="/free-estimate.html">Free Estimate</a></li>
              </ul>
            </section>
            </nav><!-- END Nav -->
          </div>
        </div>
      </div>
      <?php
      if($thePage == 'index') //if homepage show main splash
      {
      ?>
      <div class="main-message">
        <div class="row">
          <div class="columns hero-txt main-txt">
            <p>Transform Your Basement into <span>A Brand New Space</span></p>
            <a class="btn" href="/free-estimate.html">Schedule A Free Estimate</a>
          </div>
        </div>
      </div><!-- /.main-message -->

      <div class="main-facts">
        <div class="row">
          <div class="large-4 text-center columns">
            <a href="#"><img src="http://placehold.it/150x150">
            <h2>Service 1</h2></a>
            <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
          </div>
          <div class="large-4 text-center columns">
            <a href="#"><img src="http://placehold.it/150x150">
            <h2>Service 1</h2></a>
            <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
          </div>
          <div class="large-4 text-center columns">
            <a href="#"><img src="http://placehold.it/150x150">
            <h2>About Us</h2></a>
            <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
          </div>
        </div>
      </div>




      <div id="splash">
        <div id="slideit" style="width:100%;height:460px;background-image:url('http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/798/before-and-after.jpg');">
        </div>
        <div id="slideit-offset" style="width:100%;height:460px;"></div>
      </div>
      <div class="main-before-after">
        <div class="row">
          <div class="medium-9 columns">
            <h2>Products?</h2>
            <p>Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin. Bacon ipsum dolor amet tri-tip turducken meatloaf pastrami boudin.</p>
          </div>
          <div class="medium-3 columns special-learn">
            <a class="learn-btn" href="#">Learn More</a>
          </div>
        </div>
      </div>
      <?php
      }
      else
      {
      if(substr($thePage, 0, 8) == 'about-us')
      {
      ?>
      <div class="silo about-us">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>About Us</span>
          </div>
        </div>
      </div>
      <?php
      }
      elseif(substr($thePage, 0, 12) == 'service-area')
      {
      ?>
      <div class="silo about-us">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>Service Area</span>
          </div>
        </div>
      </div>
      <?php
      }
      elseif(substr($thePage, 0, 11) == 'crawl-space')
      {
      ?>
      <div class="silo crawl-space">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>Crawl Space Repair</span>
          </div>
        </div>
      </div>
      <?php
      }
      elseif(substr($thePage, 0, 19) == 'remodeling-products')
      {
      ?>

      <div class="silo finishing-products">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>Basement Remodeling Products</span>
          </div>
        </div>
      </div>
      <?php
      }
      elseif(substr($thePage, 0, 39) == 'basement-finishing-system/photo-gallery')
      {
      ?>

      <div class="silo basement-finishing">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>Picture Gallery</span>
          </div>
        </div>
      </div>
      <?php
      }
      elseif(substr($thePage, 0, 18) == 'basement-finishing')
      {
      ?>

      <div class="silo basement-finishing">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>Basement Finishing</span>
          </div>
        </div>
      </div>

      <?php
      }
      elseif(stristr($_SERVER['REQUEST_URI'], '/service-area/'))
      {
      ?>
      <div class="silo about-us">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span>Service Area</span>
          </div>
        </div>
      </div>
      <?php
      }
      elseif(stristr($_SERVER['REQUEST_URI'], '/free-estimate.html'))
      {
      ?>
      <?php
      }
      else //default header to show on all other pages
      {
      ?>
      <div class="silo about-us">
        <div class="row">
          <div class="medium-12 columns silo-text">
            <span> </span>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
  </div><?php
  }
  ?>

  <div class="content-wrap">
    <div class="row">

      <div class="large-9 columns main-content">
        [[content]]
      </div>

      <div class="large-3 columns sidebar">
        [[sidebar]]
      </div>

    </div>
  </div>
  <div class="footer">
    <div class="row">
      <div class="medium-12 columns">
        <div id="footer-info">
          [[footer]]
          <div class="small">
            &copy; <?php echo(date('Y')); ?> [[company]] | [[address street]], [[address city]], [[address state]] [[address zip]] | [[phone]]
          </div>
        </div>
      </div>
    </div>
    </div>  <!-- END FOOTER -->
    <script type="text/javascript">
    $(window).load(function() {
        var counter = 0;
        var currentImage = 0;
        var images = [
            'http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/798/before-and-after.jpg',
            'http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/798/before-and-after-2.jpg',
            'http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/798/before-and-after-3.jpg'
        ];
        var imageReference = null;
        var imageMain = $('#slideit');
        var imageOffset = $('#slideit-offset');

        setInterval(function() {
            if (counter % 2 == 0) {
                imageReference = imageOffset;
            } else {
                currentImage++;
                imageReference = imageMain;
            }

            imageReference.fadeOut(1000, function () {
                imageReference.css('background-image', 'url(' + images [currentImage] +')');
                imageReference.fadeIn(1000);
                counter++;
            });

            if (currentImage == images.length) {
                currentImage = 0;
            }

        }, 2500);
    });
    </script>




<script>
// Thingy Linky Script - remove if unwanted
$(document).ready(function($) {


newElement1 = $('<div/>').attr("class", "point").html(" </div><h4>Customer testimonial</h4><iframe width=\"200\" height=\"113\" src=\"https://www.youtube.com/embed/XT40_-7h9As?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>");

newElement2 = $('<div/>').attr("class", "point").html("<h4>Why water and mold resistance is important to every basement</h4><iframe width=\"200\" height=\"113\" src=\"https://www.youtube.com/embed/gg0xfFXqwU4?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>");

newElement3 = $('<div/>').attr("class", "point").html("<h4>ThermalDry Insulated Floor Decking</h4><p>The world's only insulated and waterproof basement floor decking material is completely inorganic, so to it's also resistant to mold.</p>");

newElement4 = $('<div/>').attr("class", "point").html("<h4>Reimagine Your Basement</h4><p>With the award-winning Total Basement Finishing system you can plan the basement of your dreams.  TBF can help make your basement a new room that is as comfortable as your upstairs.</p>");

newElement5 = $('<div/>').attr("class", "point").html("<h4>Easy access to walls</h4><p>Being a panel system, TBF grants quick and easy access to walls.  No cutting, patching and repainting of drywall is necessary.</p>");

newElement6 = $('<div/>').attr("class", "point").html("<h4>No-sag ceiling tiles</h4><p>Choose from bright-white Prestige or Linen ceiling tiles that come with a 30-year warranty against mold and mildew.  Both ceiling tile styles resist the absorption of water vapor, so they are not subject to sagging. </p>");

var newDivs = [newElement1, newElement2, newElement3, newElement4, newElement5, newElement6];

$icon0 = "<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>";
$icon1 = "<div class=\"main-point\"><i class=\"fa fa-youtube-play pulsor\"></i></div>";
$icon2 = "<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>";
$icon3 = "<div class=\"main-point\"><i class=\"fa fa-heart pulsor\"></i></div>";
$icon4 = "<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>";
$icon5 = "<div class=\"main-point\"><i class=\"fa fa-info-circle pulsor\"></i></div>";

var newIcons = [$icon0, $icon1, $icon2, $icon3, $icon4, $icon5];

$(function() {
  //Lets make some dots
  for (var i = 0; i < 6; i++) {
    $(".main-message").append(newIcons[i]);
  };

  //Let us add some content and position to dots
  $('.main-point').each(function(i) {
    $(this).addClass('new-' + i);
    $(this).append(newDivs[i]);
  });


  
  //Show and hide content on hover
 $('.main-point').hover(
  function() {
    $(this).children(".point").css('display', 'block');
  },
  function() {
     $(this).children(".point").css('display', 'none');
  });


});


$(window).scroll(function() {
    $(".fa").css({
    'opacity' : 1-(($(this).scrollTop())/375)
    });
});


});
// End of Thingy Linky Script
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/vendor/modernizr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
    <script>
        var j = jQuery.noConflict(true);
        j(document).foundation();
    </script>
    <script>

        j(document).ready(function(){
        j('ul#top-nav-list > li').find('.m-menu').hide();

        j('ul#top-nav-list > li').hover(function(){

        j(this).siblings().find('.m-menu').hide();
        j(this).find('.m-menu').toggle();

        });
    });
    </script>

  </body>
</html>
