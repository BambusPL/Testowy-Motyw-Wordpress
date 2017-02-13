
  
    smoothScroll.init();

 
 

        jQuery(document).ready(function( $ ){
    
    'use strict';
    
    $(window).scroll(function(){
        'use strict';
        
        if($(window).scrollTop() < 80){
            
           $('.navbar').css ({
             'border-bottom': 'none',
               'opacity': '1'
               
           }); 
           
            $('.menu').css({
               'background-color': 'rgba(59,59,59, 0)' 
                
            });
            
        } else {
           $('.navbar').css ({
             'margin-top': '-0px',
               'opacity': '1'
               
           }); 
            
             $('.navbar').css({
               'background-color': 'rgba(59,59,59, 0.7)',
                 'border-bottom': '1px solid #444'
                 
                
            });
            
            $('navbar-brand img').css({
                'height': '35px',
                'padding-top': '0px',
                
            });
            
            $('navbar-nav > li > a').css({
               'padding-top': '15px' 
                
            });
        }
    });
});

 

jQuery(document).ready(function( $ ) {
$('.counter').counterUp({
    
delay: 10, // the delay time in ms
time: 1000 // the speed time in ms
});
});
