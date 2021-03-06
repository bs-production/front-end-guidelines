# Contractor Go!!

## Templates 
- http://contractorgodev.basementsite.com - Sprout  
- http://devtest48.basementsite.com/  - Arbor  
- http://devtest49.basementsite.com/  - Hazel  

## Tokens 

- [main_tagline]
- [secondary_tagline]

## How To Make Content Editable For Clients

```html
<p>[[cng-content:]]</p>
<h1>Heading 1</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>[[:cng-content]]</p>
```


## PSA
- Don't Use Typekit fonts only use Google Fonts so we are not domain specific. 

## HTTPS
https://a709966d2763e59b63d9-4b02aec4485eb16af457fbebe9081b2b.ssl.cf1.rackcdn.com

## Issues
cgo SPROUT:  
- http://images.contractornation.com/872/cn-go-footer.png needs to be updated to secure  
- Social media icons color sets  
- http://a1c23520d0263bdf29dc-4b02aec4485eb16af457fbebe9081b2b.r59.cf1.rackcdn.com/images/phone-icon.png needs to be updated to secure
- BBB badge homepage integration

cgo ARBOR:  
- dropdown needs to be updated with devtest48 
- BBB badge homepage integration
- Testimonials widget not full width (fixes added to devtest)
```css
/* Added to Content Section */
#homepage-content #page-wrap > .row { max-width: 100%; }
#homepage-content .full-width { padding-left: 0; padding-right: 0; }

/* Added to Homepage Features Section */
#customers .row { margin: 0 auto; max-width: 1060px; }
.home-row { max-width: 1060px !important; margin: 25px auto !important; }
```
- Mobile sticky nav fixes (fixes added to devtest)
```css
/* nav was not appearing until you scrolled way down the page */
/* Added to screen CSS - lines 509 - 511 */
    #top-nav {
        top: 0;
    }
/* li's set to inline-block and breaking functionality when you clicked on mobile */
/* Added to screen css - lines 523 - 528 */
@media screen and (max-width:640px) {
    .top-bar-section ul li {
        display: block;
        text-align: left;
    }
}
/* Left align dropdown links in nav */
/* replaced lines 138-141 */
.top-bar-section li:not(.has-form) a:not(.button) {
    padding: 0 1.9375rem;
    text-align: left;
}
/* sticky nav was repositioning when you clicked to expand - mobile only */
/* added to screen css - lines 188-192 */
.top-bar.expanded.fixed {
    position: fixed;
    top: 0;
    background: #fff;
}    
```
- Header height added for mobile sizes (fixes added to devtest)
```css
/* header height was too shallow on smaller screens and cutting off logo */
/* added lines 488-490 */
#header {
    height: 260px;
}
```
