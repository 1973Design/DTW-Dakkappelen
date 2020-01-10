jQuery(document).ready(function($) {
    $(window).scroll( function(){
        if($(window).scrollTop()>100){
        
            $('nav').addClass('fixed-top');
            $('nav').addClass('nav-mobile');
            
         
        }
        else{
        
            $('nav').removeClass('fixed-top');
            $('nav').removeClass('nav-mobile');
          
        }
    });


});