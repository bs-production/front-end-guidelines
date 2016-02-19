# Sliding Thumbnails

- Example: http://www.trademark-contractors.com

```html

    <div id="products">
            <ul>
              <li> <a class="roofingThm" href="/roof-repair.html"> <span class="prodTitle">Roofing</span> <span class="learnMore">LEARN MORE</span><img src="http://placehold.it/235x105"></a> </li>
              <li> <a class="sidingThm" href="/siding.html"> <span class="prodTitle">Siding</span> <span class="learnMore">LEARN MORE</span><img src="http://placehold.it/235x105"></a> </li>
              <li> <a class="paintingThm" href="/painting.html"> <span class="prodTitle">Painting</span> <span class="learnMore">LEARN MORE</span><img src="http://placehold.it/235x105"></a> </li>
              <li> <a class="remodelingThm" href="/remodeling.html"> <span class="prodTitle">Remodeling</span> <span class="learnMore">LEARN MORE</span><img src="http://placehold.it/235x105"></a> </li>
            </ul>
    </div>
    
    <style>
    #products ul li,
    #products span.prodTitle,
    #products ul,
    #products ul li a {
        position: relative;
    }
    #products {
        position: absolute;
        bottom: 0px;
        height: 114px;
    }
    #products ul {
        padding: 0px;
        margin: 0px;
        display: block;
        overflow: auto;
    }
    #products ul li {
        display: block;
        /*height: 205px;*/
        float: left;
    }
    #products ul li:last-of-type a {
        width: 235px;
    }
    #products ul li a {
        display: block;
        height: 114px;
        width: 245px;
        padding-top: 4px;
        overflow: hidden;
        margin-top: 69px;
        transition: margin-top .5s ease;
        text-decoration: none;
    }
    #products ul li a:hover {
        margin-top: 0px;
    }
    #products ul li a:after {
        content: "";
        display: block;
        height: 35px;
        width: 235px;
        background: -webkit-linear-gradient(90deg, rgba(0, 0, 0, 0.3) 5%, rgba(0, 0, 0, 0) 90%);
        background: -moz-linear-gradient(90deg, rgba(0, 0, 0, 0.3) 5%, rgba(0, 0, 0, 0) 90%);
        background: -o-linear-gradient(90deg, rgba(0, 0, 0, 0.3) 5%, rgba(0, 0, 0, 0) 90%);
        background: -ms-linear-gradient(90deg, rgba(0, 0, 0, 0.3) 5%, rgba(0, 0, 0, 0) 90%);
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.3) 5%, rgba(0, 0, 0, 0) 90%);
        position: absolute;
        bottom: 0px;
    }
    #products span.prodTitle {
        display: block;
        height: 35px;
        width: 235px;
        background: rgba(0, 0, 0, 0.8);
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, .1);
        text-align: center;
        padding-top: 6px;
        color: rgba(255, 255, 255, .9);
        text-transform: capitalize;
        font-size: 24px;
        font-weight: 200;
        line-height: 1em;
        text-shadow: 0 -2px 0 rgba(0, 0, 0, .25);
        box-shadow: 0px 3px 8px rgba(0, 0, 0, .5);
        z-index: 5;
        font-family: 'Montserrat Alternates', sans-serif;    
    }
    #products span.learnMore {
        font-size: 11px;
        text-transform: uppercase;
        position: absolute;
        color: #fff;
        bottom: 10px;
        text-align: center;
        left: 75px;
        text-shadow: 0px 1px 4px rgba(0, 0, 0, .8);
        z-index: 5;
        padding: 3px 8px;
        background: rgba(161, 29, 42, 0.88);
        font-family: 'Montserrat Alternates', sans-serif;
    }
    #products span.learnMore:after {
        content: "\279D";
        padding-left: 5px;
        font-size: 20px;
        position: relative;
        top: 2px;
        font-family: sans-serif;
    }
    </style>
```
