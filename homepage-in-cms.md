#Building a Spruce Homepage in the CMS for a brand new site:

1. Generate your borders.php and template.css using the Spruce Generator
2. Use the Copy Tool to duplicate the Home page from devtest11 into your site.
    http://www.bsiadmin.com/portal/utility/cms_copy.php?dothis=confirmed
3. Cut each homepage section from your borders file and paste into the appropriate custom code module in your new home page. 
***UPDATE: Due to a flooky bug that causes the first custom code module to disappear... To edit a custom code module, select Page Modules from the right sidebar and click the module you would like to edit.***
4. Save your page and Rejoice!



#Building a Spruce Homepage in the CMS for an existing site:

1. Generate your borders.php and template.css using the Spruce Generator
2. Use the Copy Tool to duplicate the Home page from devtest11 into your site.
    http://www.bsiadmin.com/portal/utility/cms_copy.php?dothis=confirmed
3. Immediately Rename new homepage "index2"
4. Immediately Hide new homepage from Nav
5. Immediately Delete index2 redirect (site rewrites)
6. In borders, find "index" and replace with "index2"
    (Widgets will not appear on index2)
7. Cut each homepage section from your borders file and paste into the appropriate custom code module in your new home page. 
***UPDATE: Due to a flooky bug that causes the first custom code module to disappear... To edit a custom code module, select Page Modules from the right sidebar and click the module you would like to edit.***
8. When sending site for review, add note to view homepage on index2.html
9. After reviewed and approved, in borders file, find "index2" replace with "index"
9. When it's time to go live, delete original index (existing homepage), and rename your new homepage to "index"
10. Check for funky index redirects (site rewrites), if any.
11. Save your page and Rejoice!
