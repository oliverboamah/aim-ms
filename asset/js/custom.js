
/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".landing, .action, .contact").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();

/* set parallax background-position */
function parallaxPosition(e){
    var heightWindow = $(window).height();
    var topWindow = $(window).scrollTop();
    var bottomWindow = topWindow + heightWindow;
    var currentWindow = (topWindow + bottomWindow) / 2;
    $(".parallax").each(function(i){
        var path = $(this);
        var height = path.height();
        var top = path.offset().top;
        var bottom = top + height;
        // only when in range
        if(bottomWindow > top && topWindow < bottom){
            var imgW = path.data("resized-imgW");
            var imgH = path.data("resized-imgH");
            // min when image touch top of window
            var min = 0;
            // max when image touch bottom of window
            var max = - imgH + heightWindow;
            // overflow changes parallax
            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
            top = top - overflowH;
            bottom = bottom + overflowH;
            // value with linear interpolation
            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
            // set background-position
            var orizontalPosition = path.attr("data-oriz-pos");
            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
            $(this).css("background-position", orizontalPosition + " " + value + "px");
        }
    });
}
if(!$("html").hasClass("touch")){
    $(window).resize(parallaxPosition);
    //$(window).focus(parallaxPosition);
    $(window).scroll(parallaxPosition);
    parallaxPosition();
}


    
/* smooth scroll */
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
       
  
    });

/* scrollspy */
$('body').scrollspy({ target: '#navbar-scroll' })
 
/* carousel */
$(document).ready(function() {
    /*  booking form validation rules 
     ---------------------------------- */
    $("#bookingForm").validate({
        errorClass: "statError",
        validClass: "stateSuccess",
        errorElement: "em",
        onkeyup: false,
        onclick: false,
        rules: {
            picking_up: {
                required: true,
                minlength: 2
            },
            dropping_off: {
                required: true,
                minlength: 2
            },
            pick_up_date: {
                required: true
            }
        },
        messages: {
            picking_up: {
                required: '',
            },
            dropping_off: {
                required: ''
            },
            pick_up_date: {
                required: '',
            } 
        },
        highlight: function (element, errorClass, validClass) {
            $(element).closest('.form-control').addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.form-control').removeClass(errorClass).addClass(validClass);
        }
    });
    
    
    $("#carssections").owlCarousel({
            items: 4,
            itemsCustom : [
                    [0, 1],
                    [480, 2],
                    [768, 3],
                    [992, 4]
                    ],
        });
    $("#owl-testi").owlCarousel
    ({
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            autoHeight : true,
            singleItem:true
    });
});


/* sticky navigation */
  $(document).ready(function(){
    $("#menu").sticky({topSpacing:0});
  });

jQuery(document).ready(function($){
    // site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function(){
            $('#preloader').fadeOut('slow',function(){$(this).remove();});
    }); 
    
    //booking buttons function  
    $(".btn-nxt-booking").on('click',function(){        
        $('.bkg-2').addClass('done');      
        $('.cars-data').addClass('hide');
        $('.client-data').removeClass('hide');
               
        $('.bkg-1 a').removeClass('selected');
        $('.bkg-2 a').removeClass('selected');       
        $('.bkg-3 a').addClass('selected');        
        $('.bkg-4 a').removeClass('selected'); 
    });  
    $("#client-booking-back").on('click',function(){      
        $('.bkg-2').removeClass('done');         
        $('.bkg-3').removeClass('done');           
        $('.cars-data').removeClass('hide');
        $('.client-data').addClass('hide');        
        
        $('.bkg-2 a').addClass('selected');         
        $('.bkg-3 a').removeClass('selected');       
        $('.bkg-4 a').removeClass('selected');       
        $('.bkg-1 a').removeClass('selected'); 
    });   
    
    $("#client-booking-next").on('click',function(){        
        $('.bkg-3').addClass('done');         
        $('.client-data').addClass('hide');
        $('.pay-data').removeClass('hide');
                      
        $('.bkg-2 a').removeClass('selected');         
        $('.bkg-3 a').removeClass('selected');       
        $('.bkg-4 a').addClass('selected');       
        $('.bkg-1 a').removeClass('selected'); 
    });     
    
    $("#pay-booking-back").on('click',function(){        
        $('.client-data').removeClass('hide');
        $('.pay-data').addClass('hide');             
        $('.bkg-1 a').removeClass('selected');  
        $('.bkg-2 a').removeClass('selected');         
        $('.bkg-3 a').addClass('selected');       
        $('.bkg-4 a').removeClass('selected');   
    });
    
    //booking menu functions 
     
    $(".bkg-2").on('click',function(){ 
        $('.direction-data').addClass('hide');
        $('.cars-data').removeClass('hide');
        $('.client-data').addClass('hide');
        $('.pay-data').addClass('hide');        
    });  
    $(".bkg-3").on('click',function(){
        $('.direction-data').addClass('hide');
        $('.cars-data').addClass('hide');
        $('.client-data').removeClass('hide');
        $('.pay-data').addClass('hide');
    });  
    $(".bkg-4").on('click',function(){  
        $('.direction-data').addClass('hide');
        $('.cars-data').addClass('hide');
        $('.client-data').addClass('hide');
        $('.pay-data').removeClass('hide');
    });  
     
});


	
/* scrollToTop */
$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 500) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
	
/* parallax background image http://www.minimit.com/articles/lets-animate/parallax-backgrounds-with-centered-content	
/* detect touch */
if("ontouchstart" in window){
    document.documentElement.className = document.documentElement.className + " touch";
}
if(!$("html").hasClass("touch")){
    /* background fix */
    $(".parallax").css("background-attachment", "fixed");
}
