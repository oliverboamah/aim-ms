$(document).ready(function() {
    $('#find_direction').on('click',function(){
        
        var form = $("#bookingForm");
        form.validate();
        if (form.valid() == true) {
            $(".load_icon").removeClass('display_none'); 
            calcRoute();
           }
        
        
    });
    $('#show_map').on('click',function(){
         $('#result_content').addClass('display_none'); 
         $('.map_div').removeClass('display_none');
         calcRouteSmall();
    });
    $('.close_map').on('click',function(){        
         $('#result_content').removeClass('display_none'); 
         $('.map_div').addClass('display_none');
    });
    $('#next_step').on('click',function(){
         
    });
});