# SVG Open Sign
 Save out SVG code below to a .svg file
 Upload file to CMS file manager
 Paste url in PHP code below: *echo file_get_contents("xxx.svg");*
    
   SVG Code

    <svg class="open-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 40.3"><path class="bkg-color" d="M5 40.3h40c2.8 0 5-2.3 5-5V5c0-2.8-2.3-5-5-5H5C2.3 0 0 2.3 0 5v30.3C0 38.1 2.3 40.3 5 40.3z"/><path class="text-color" d="M6.1 17.3L4.4 9.9h1.5L7 15l1.4-5.1h1.8l1.3 5.2 1.1-5.2h1.5l-1.8 7.5h-1.6l-1.5-5.6 -1.5 5.6H6.1z"/><path class="text-color" d="M14.9 17.3V9.9h5.5v1.3h-4v1.7h3.7v1.3h-3.7v2h4.2v1.3H14.9z"/><path class="text-color" d="M31.1 17.3h-1.6l-0.7-1.7h-3l-0.6 1.7h-1.6l2.9-7.5h1.6L31.1 17.3zM28.4 14.4l-1-2.8 -1 2.8H28.4z"/><path class="text-color" d="M31.9 17.3V9.9h3.2c0.8 0 1.4 0.1 1.7 0.2s0.7 0.4 0.9 0.7c0.2 0.3 0.3 0.7 0.3 1.2 0 0.6-0.2 1-0.5 1.4 -0.3 0.4-0.8 0.6-1.5 0.7 0.3 0.2 0.6 0.4 0.8 0.6s0.5 0.6 0.9 1.2l0.9 1.5h-1.8l-1.1-1.6c-0.4-0.6-0.7-0.9-0.8-1.1 -0.1-0.2-0.3-0.3-0.5-0.3 -0.2-0.1-0.4-0.1-0.8-0.1h-0.3v3.1H31.9zM33.4 13h1.1c0.7 0 1.2 0 1.4-0.1 0.2-0.1 0.3-0.2 0.4-0.3 0.1-0.1 0.2-0.3 0.2-0.6 0-0.3-0.1-0.5-0.2-0.6 -0.1-0.2-0.3-0.3-0.6-0.3 -0.1 0-0.5 0-1.1 0h-1.2V13z"/><path class="text-color" d="M39.5 17.3V9.9H45v1.3h-4v1.7h3.7v1.3H41v2h4.2v1.3H39.5z"/><path class="text-color" d="M4.9 25.7c0-1.1 0.2-2 0.5-2.7 0.2-0.5 0.6-1 1-1.4 0.4-0.4 0.9-0.7 1.4-0.9 0.7-0.3 1.4-0.4 2.3-0.4 1.5 0 2.8 0.5 3.7 1.4 0.9 1 1.4 2.3 1.4 4 0 1.7-0.5 3-1.4 4s-2.1 1.4-3.7 1.4c-1.6 0-2.8-0.5-3.7-1.4S4.9 27.4 4.9 25.7zM7.1 25.7c0 1.2 0.3 2.1 0.8 2.7 0.5 0.6 1.2 0.9 2.1 0.9 0.8 0 1.5-0.3 2.1-0.9 0.5-0.6 0.8-1.5 0.8-2.7 0-1.2-0.3-2.1-0.8-2.7 -0.5-0.6-1.2-0.9-2.1-0.9 -0.9 0-1.6 0.3-2.1 0.9C7.4 23.6 7.1 24.5 7.1 25.7z"/><path class="text-color" d="M16.7 30.9V20.5h3.4c1.3 0 2.1 0.1 2.5 0.2 0.6 0.2 1.1 0.5 1.5 1 0.4 0.5 0.6 1.2 0.6 2 0 0.6-0.1 1.2-0.3 1.6s-0.5 0.8-0.9 1c-0.4 0.3-0.7 0.4-1.1 0.5 -0.5 0.1-1.2 0.1-2.2 0.1h-1.4v3.9H16.7zM18.8 22.2v3H20c0.8 0 1.4-0.1 1.7-0.2 0.3-0.1 0.5-0.3 0.7-0.5 0.2-0.2 0.2-0.5 0.2-0.8 0-0.4-0.1-0.7-0.3-0.9 -0.2-0.2-0.5-0.4-0.8-0.5 -0.3 0-0.8-0.1-1.5-0.1H18.8z"/><path class="text-color" d="M26.5 30.9V20.5h7.8v1.8h-5.6v2.3h5.2v1.8h-5.2v2.8h5.8v1.8H26.5z"/><path class="text-color" d="M36.2 30.9V20.5h2.1l4.3 7v-7h2v10.5h-2.1l-4.2-6.8v6.8H36.2z"/></svg>
   PHP Code    
   Add code between class="opensign" and class="tagline" in Borders

    <?php echo file_get_contents("xxx.svg"); ?>


    
   Add/adjust CSS
   

     /* Custom SVG class */
        .open-svg {
        	width: 72px;
        	position: absolute;
        	top: 13px;
        	left: 4px;
        }
        
        /*Adjust background color*/
        .bkg-color{
        	fill:#FFDF00;
        }
        /*Adjust text color*/
        .text-color{
        	fill:#005589;
        }
    
   Remove background image from *.opensign, .top-contact* class

    .opensign, .top-contact {
      background: transparent url(/core/images/universal/open-sign/open-sign-greenlight.png) no-repeat 0 4px;
    }


