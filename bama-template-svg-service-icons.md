# Bama Template SVG Service Icons
## SVG Core Links
**Basement Waterproofing**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/bsi.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg
```  
**Crawl Space**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/cs.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/cs.svg
```  
**Engress Windows**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/engress.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/egress_windows.svg
```  
**Flood Damage**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/flood_damage.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/flood_damage.svg
```  
**Foundation Supportworks**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/fsi.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/fsi.svg
```  
**Insulation**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/insulation.png)  
``` html
http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/insulation.png`  
```  
**Mold**

![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/mold.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/mold.svg
```  
**Concrete Leveling**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/polylevel.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/polylevel.svg
```  
**Sump Pump**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/sump_pump.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/sump_pumps.svg
```  
**Total Basement Finishing**  
![alt text](http://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.r80.cf1.rackcdn.com/804/tbf.png)  
``` html
http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/tbf.svg
```  
## Static PHP Example
``` html
<div class="medium-6 large-3 columns">
  <div class="srv-box">
    <a href="/basement-waterproofing.html" alt="Basement Waterproofing">
      <div>
         <?php echo file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"); ?>
       </div>
       <h3>Basement Waterproofing</h3>
       <p>We have the most effective solutions for wet basements.</p>
    </a>
   </div>
 </div>
 ```

## PHP Array Example
 Update array from top of borders file
 ``` php
 $serCount = 3;
     $arr = array(

         array(
                 "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/fsi.svg"),
                 "service-link" => "/foundation-repair.html",
                 "service-name" => "Foundation Repair",
                 "service-desc" => "We'll find the right solution for your foundation problems."
             ),
             array(
                 "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/basement_waterproofing.svg"),
                 "service-link" => "/basement-waterproofing.html",
                 "service-name" => "Basement Waterproofing",
                 "service-desc" => "We have the most effective solutions for wet basements."
             ),
             array(
                 "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/cs.svg"),
                 "service-link" => "/crawl-space-repair.html",
                 "service-name" => "Crawl Space Repair",
                 "service-desc" => "We offer complete crawl space encapsulation &amp; repair services."
             ),
             array(
                 "service-img" => file_get_contents("http://b388022801b3244fdbae-c913073b3759fb31d6b728a919676eab.r15.cf1.rackcdn.com/v3/templates/icons/sump_pumps.svg"),
                 "service-link" => "/sump-pump.html",
                 "service-name" => "Sump Pump Systems",
                 "service-desc" => "We install patented sump pump systems."
             )

);
 ```
 Update PHP *for loop* from middle of borders file
 ``` php
 <?php
     $count = $serCount;
     for ($x = 0; $x <= $count; $x++) {
         echo '<div class="medium-6 large-3 columns">';
         echo '<div class="srv-box">';
         echo '<a href="'.$arr[$x]['service-link'].'" alt="'.$arr[$x]['service-name'].'">';
         echo '<div>'.$arr[$x]['service-img'].'</div>';
         echo '<h3>'.$arr[$x]['service-name'].'</h3>';
         echo '<p>'.$arr[$x]['service-desc'].'</p>';
         echo '</a>';
         echo '</div>';
         echo '</div>';
     }
     ?>
 ```
## CSS Styles
 Adjust colors  
 Add css styles to Screen CSS file
 ``` css
 /* SVG Adjust Colors */
.svg-service-icons {
   width: 100%;
   height: 150px;
}
.background {
 fill: #0F5090;
}
.foreground {
 fill: #fff;
}
.ring {
 fill: #D50208;
}
```
