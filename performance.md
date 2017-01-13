# Performance and Optimization 


## Our Goals 

First meaningful paint under 1.25 seconds. 



## Tools 

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

### Responsive Images
http://www.responsivebreakpoints.com/

### SVG Compression
https://jakearchibald.github.io/svgomg/

