/**
 * navigation.js
 *
 * add 4 first posts to each second level category
 * show then on hover
 */
( function() {
	var timeoutSearch;
	
	jQuery( document ).ready(function() {
		
		addPostToMenu();
		bindUIactions();
		jQuery('.sticky').Stickyfill();
		eventPage();
		appendPinterest();
	});
		
	// bind ui actions	
	function bindUIactions(){
		// menu posts
		jQuery('.ubermenu-item-level-1').hover(
			function(){
				jQuery('.container-menuPost').removeClass('open');
				jQuery(this).find('.container-menuPost').addClass('open');
			},function(){
				//jQuery(this).find('.container-menuPost').removeClass('open');
				//console.log(4);
			}
		);	
		jQuery(window).on('scroll', function() {
			var scrollTop = jQuery(this).scrollTop();
			if(jQuery(window).width() > 480){
				if ( scrollTop > 100) {
					jQuery('#masthead').removeClass('triggerRespMenu');
				}
				else{
					jQuery('#masthead').addClass('triggerRespMenu');		
				}
			}

		});		
				
		// menu search form
		jQuery('.menu-social-item.menu-search').hover(
			  function() {
				clearTimeout(timeoutSearch);
				jQuery(this).find('#menu-searchform').addClass('open');
			  }, function() {
				  clearTimeout(timeoutSearch);
				timeoutSearch = setTimeout(function(){
					  jQuery('#menu-searchform').removeClass('open');
				}, 500);
			  }				
		);	
		jQuery('#menu-searchform').hover(
			function() {
				clearTimeout(timeoutSearch);
				jQuery(this).find('#menu-searchform').addClass('open');
			}, function() {
				clearTimeout(timeoutSearch);
				timeoutSearch = setTimeout(function(){
					  jQuery('#menu-searchform').removeClass('open');
			}, 500);
				
		});			
		jQuery('.btnPinIt').click(function() {
			pinIt(jQuery(this));
			return false;
		});	
	}

	// add Post To Menu	
	function addPostToMenu(){
		var cat=[];
		jQuery.ajax({
			url: ajaxurl,
			data: "action=getMenuItems",
			type: "POST",
			success: function(data) {
				var posts = jQuery.parseJSON( data );
				jQuery.each(posts.result, function() {
					cat.push(this.cat);
				});
				jQuery.each(jQuery('.ubermenu-item-level-1'), function() {
					var ul = jQuery('<ul/>')
							.addClass('container-menuPost')
							.appendTo(jQuery(this));
					id = jQuery(this).attr('id').split("-").pop();
					if(jQuery.inArray(id, cat)){
						for(var i =0; i<posts.result.length ; i++){							
							if(posts.result[i].cat == id){
								var li = jQuery('<li/>')
										.addClass('menuPost')
										.html(posts.result[i].content)
										.appendTo(ul);
							}
						}
						
					}	
					if(jQuery(this).is(':first-child')) {
						ul.addClass('default');
					}  
				});
				bindUIactions();
			},
			error: function() {
				console.log('Cannot retrieve data.');
			}
		});			
	}

	function eventPage() {

		var pageurl = jQuery('#post-144');
		if (pageurl.length){
			/*new checkbox in the form*/
			var termscheck ='<div id="checkticket"><h3>terms and conditions</h3><div class="em-warning em-warning-errors error" id="checkboxcustom"><p>Please check the terms and conditions box</p></div><input type="checkbox" id="tickets"/><p> By clicking submit, you agree that Made in Shoreditch magazine may edit your event details and that you can provide Made in Shoreditch team with 2 press tickets upon request.</p></div>';
			jQuery('.event-form-image').append(termscheck);

			jQuery( "#event-form" ).submit(function( event ) {
				if(!jQuery("#tickets").is(':checked')){
				
					document.getElementById('checkboxcustom').style.display="block";
					event.preventDefault();
				}
			
			});
			/*confirmation after sending event */
			if (document.URL.indexOf("success=1") >1){
				var test = jQuery('.em-warning-confirms');
				if (test.length){}
				else{
					var sendconfirm = "<div class='statusnotice'><div class='em-warning em-warning-confirms updated'><p>2You have successfully submitted your event, which will be published pending approval.</p></div></div>";
					jQuery('#post-144').prepend(sendconfirm);
				}
				}
			}
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
	function appendPinterest(){
		var bouton = jQuery('#social-holder').html();
		jQuery('.mashsb-buttons').append(bouton);
	}
	
} )();
