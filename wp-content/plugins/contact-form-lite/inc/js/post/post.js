jQuery(document).ready(function($){
	
	setTimeout(function(){
		
		$.confirm({
				'title'         : ecf_popup.content,
				'acceptTitle'   : 'OKAY',
				'rejectTitle'	: '',
				'acceptBtnCol'  : 'confirm-blue',
				'rejectBtnCol'  : '',
				'acceptAction'  : function() {
					
					$.post( ajaxurl, {
						action: 'ecf_hide_notify'
					});
					
				}
		});
	
	}, 2500);
	
});

!function(t){t.confirm=function(c){if(t(".cd-popup").length)return t(".cd-popup").addClass("is-visible"),!1;var i=['<div class="cd-popup" role="alert">','<div class="cd-popup-container">',"<p>",c.title,"</p>",'<ul class="cd-buttons">','<li><a class="accept_notify accept ',c.acceptBtnCol,'">',c.acceptTitle,"</a></li>",'<li><a class="reject ',c.rejectBtnCol,'">',c.rejectTitle,"</a></li>","</ul>","</div>","</div>"].join("");t(i).appendTo("body"),c.rejectTitle||(t(".cd-popup .cd-buttons li:last-child").hide(),t(".cd-popup .cd-buttons li:first-child").css("width","100%")),setTimeout(function(){t(".cd-popup").addClass("is-visible")},10),t(".accept").click(function(){return c.acceptAction(),t.confirm.hide(),!1}),t(".reject").click(function(){return c.rejectAction(),t.confirm.hide(),!1})},t.confirm.hide=function(){t(".cd-popup").removeClass("is-visible"),setTimeout(function(){t(".cd-popup").remove()},200)}}(jQuery);