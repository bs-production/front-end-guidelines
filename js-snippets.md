# JavaScript Snippets 

```js 
	//if url has the work radon in it 
	if (window.location.href.indexOf("radon") > -1) {
    	 // Do Things
 	};  
```



### Add Class On Scroll
```js
   $(function() {
    //caches a jQuery object containing the header element
    var header = $(".topbar");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
            header.addClass("purpleshadow");
        } else {
            header.removeClass("purpleshadow").addClass('noshadow');
        }
    });
});
 
```
##Google Anaytics Event Track 

```js 
ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);

//example usage 
onclick="ga('send', 'event', 'click', 'hp-btn', 'homepage');"
```


