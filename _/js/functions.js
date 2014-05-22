(function($){
	
	var event_type;
	
	if (Modernizr.touch){
	
	 event_type = 'touchstart';
	  
	} else {
	 
	 event_type = 'click';	
	 
	}

	$('body').on(event_type,'button#nav-btn', function(e){
	
		console.log($(this));
	
		$('.side-nav').toggleClass( 'nav-open nav-closed');
		$('.content').toggleClass( 'side-nav-open side-nav-closed');
	     	     			
		return false;
		
	});
	
	$('.panel-feed-wrap').slimScroll({
        height: '180px',
        alwaysVisible: true,
    });
    
    $('body').on(event_type,'#profile-panel > h3', function(e){
    	$(this).parent().toggleClass('closed open');
    });
    
    $('body').on(event_type,'#search-box-panel > h3', function(e){
    	$(this).parent().toggleClass('closed open');
    });

	/* DOCUMENT READY FUNCTIONS */
	$(document).ready(function (){	
	
	});
	
	/* WINDOW RESIZE FUNCTIONS */
	$(window).on("resize", function(e){
	
	});
	
})(window.jQuery);