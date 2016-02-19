#Javascript

##jQuery 

All of our sites include jQuery by default. We load in jQuery 1.4.4

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

If you need something that does not work with 1.4.4 please see John or Nicole before moving forward with it. 

##jQuery UI 

https://jqueryui.com/
All of our sites include jQuery UI by default. We load in jQuery UI 1.8.6. There two CSS files loaded for jQuery UI. We have loaded in some of our own themes for the widgets and other goodies that we load in. 

In the site settings in the CMS we have an option for tabs. Depending on which one is selected it will load an additional stylesheet like what is on line 3 below.  The options are Default, Bar and Light Bar. 


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/core/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/jquery-ui-default.css" />


##jQuery Plugins 

If you are using a jQuery plugin. Please load the external script below the [core] tag so it loads after our version of jQuery.  If you can download the script and upload it into the file manager. You can also use a CDN such as https://cdnjs.com/

##Inline-JS 

If you want to inline a script in the CMS please use a custom code module on the page. This will allow people to be able to switch back and forth between wysiwg and code view easily.  If you inline JS in a page please make sure to comment the code so we know why you did something. Below is an example with a comment.


    <script>
    //I wrote a function to save kittens
    $(document).ready(function(){
       loopKitties();
    });
    </script>


Javascript Components Library
Sliders 

Example Site: http://www.gsmsince1927.com/

Fade In/Out Images 

Example Site: http://www.carolinaenergyconservation.com/solatube-daylighting-systems/solatube-daylighting-products.html

    <script>
    function slideLoop(){
        $('.slide-ul > li:gt(0)').hide();
        setInterval(function(){
          $('.slide-ul > li:first-child').fadeOut(1000)
             .next('li').fadeIn(1000)
             .end().appendTo('.slide-ul');}, 
          5000);
    }
    $(document).ready(function(){
       slideLoop();
    });
    </script>


    <ul class="slide-ul">
    <li>
      <img src="#" alt="" />
    </li>
    <li>
    <img src="#" alt="" />
    </li>
    <li>
    <img src="#" alt="" />
    </li>
     <li>
    <img src="#" alt="" />
    </li>
    </ul>


    .slide-ul {
        padding: 0px;
        list-style: none;
    }
    .slide-ul > li {
        position:absolute; 
        left:0; 
        top:0;
    }

