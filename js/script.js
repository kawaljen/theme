( function() {
	var timeoutSearch;
	
	jQuery( document ).ready(function() {
		bindUIactions();
		
	
	});

	function bindUIactions(){
		jQuery('.btnPinIt').click(function() {
			pinIt(jQuery(this));
			return false;
		});
		
		//~ jQuery(window).on('scroll', function() {
			//~ var scrollTop = jQuery(this).scrollTop();
//~ 
			//~ if ( scrollTop > 100) {
				//~ jQuery('#masthead').addClass('triggerRespMenu');
			//~ }
			//~ else{
				//~ jQuery('#masthead').removeClass('triggerRespMenu');		
			//~ }
//~ 
		//~ });		
		
		
	}
	function pinIt(that){
		var url = that.attr('href');
		var media = that.attr('data-image');
		var desc = that.attr('data-desc');
		window.open("//www.pinterest.com/pin/create/button/"+
		"?url="+url+
		"&media="+media+
		"&description="+desc,"_blank"); 
	}
});
