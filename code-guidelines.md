#Code Guidelines

Best practices and guidelines for writing HTML and CSS with approachable formatting, syntax, and more.

- All code has to be lowercase: This applies to HTML element names, attributes, attribute values, CSS selectors, properties, and property values.
- Paragraphs of text should always be placed in a <p> tag. Never use multiple <br> tags.
- Items in list form should always be in ul, ol or dl. Never use a set of div or p.

##HTML Guidelines 

```html
    <!--Bad News-->
    <div class="breakout" style="margin-top:10px;padding:10px">


    <!--Good News-->
    <div class="breakout box-space"></div>
```

##CSS Guidelines

```css 

    /* Bad News */
    #main-column { display: inline; float: left; width: 30em; }
    
    /* Good News */
    #main-column { 
      display: inline; 
      float: left; 
      width: 30em; 
    }
```

## JS Guidelines 

We have a whole section dedicated to +Javascript 
```js
    <script>
    //Always comment your JS because it might end up in strange places
    </script>
```

##Helper Classes

All of our sites come with these helper classes.

```css
    .left {
        float: left;
        margin: 0 20px 5px 0;
        overflow: hidden;
    }
    .right {
        float: right;
        margin: 0 0 5px 20px;
        overflow: hidden;
    }
    .center {
        text-align: center;
        margin: 25px auto;
        overflow: hidden;
    }
    .clear {
        clear: both;
    }
    .bold {
        font-weight:bold; 
    }
```

“Only go so far as the time you have allows” - Nicole Lynch
