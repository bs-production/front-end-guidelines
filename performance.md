# Performance and Optimization 

Example site: http://www.weathertitesystems.com/

## Our Goals 

First meaningful paint under 1.25 seconds. 

## Tools 

https://www.webpagetest.org/

G

### Scripts 
Defer and async as many scripts as possible. 

Defer means script is executed when the page has finished parsing.
Async means script will be executed while the page continues the parsing.


```html
<script src="demo_defer.js" defer></script>
<script src="demo_async.js" async></script>
```

### Image Compression 
https://www.jpeg.io/

https://tinypng.com/

https://imageoptim.com/mac

http://getoptimage.com/



### Responsive Images
http://www.responsivebreakpoints.com/

### SVG Compression
https://jakearchibald.github.io/svgomg/


# Accessibiity 

If the image is decorative and does not convey any information to the surrounding content, however, you may leave this "alt" attribute empty, or specify a "role" attribute with a value of "presentation."

```
<img src="http://0a7fabe38ae1ce229b14-5c67249f93bb503413209d779c0cd266.r58.cf1.rackcdn.com/7.png" alt="">
<img src="http://0a7fabe38ae1ce229b14-5c67249f93bb503413209d779c0cd266.r58.cf1.rackcdn.com/7.png" role="presentation">
```

