(function($){

    jQuery(document).ready(function(){
        jQuery(window).scroll(function(){

            var divDis = jQuery(window).scrollTop();
    
            if(divDis > 100){
                jQuery(".scroll-to-top").fadeIn();
            }else{
                jQuery(".scroll-to-top").fadeOut();
            }
        });

        jQuery(".scroll-to-top").on('click', function(){
            jQuery("html, body").animate({'scrollTop' : 0}, 500);

            return false;
        });
    });

}(jQuery))
