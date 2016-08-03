#Sticky Navbar

Here's some code to create a Sticky Navbar.

```js
    <script>
    $(document).ready(function() {
      $(window).bind('scroll', function () {
          if ($(window).scrollTop() > 140) { // Match number to height of header
              $('.top-nav').addClass('fixed');
          } else {
              $('.top-nav').removeClass('fixed');
          }
      });
    });
    </script>
```

Add CSS class to style sheet only.

```css

    .fixed {
    position: fixed;
    top: 0;
    }
```
