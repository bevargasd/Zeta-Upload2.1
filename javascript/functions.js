$(window).load(function(){
	$('.loading-wrap').fadeOut("slow");
	$('.animate').animate({
		opacity: 1,
		}, 1200);
});

//	 	COPY CLIPBOARD & DISPLAY ANIMATION		//
$(document).ready(function(){
	function unlock () {
    	locked = false; };
	var locked = false;

	$("#copy").click(function(){
		if(!locked){
			locked = true
			setTimeout(unlock, 1800);
			value = $(this).data('clipboard-text');
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val(value).select();
			document.execCommand("copy");
			$temp.remove();

			var $copied = $('<p class="copied">IP copied to clipboard.</p>');
			$copied.appendTo($('body')).animate(
				{bottom: 80, opacity: 1},
				800
				)
				.delay(800)
				.animate(
					{bottom: 0, opacity: 0},
					800
				);
			};
	});
});

//		ROTATING SERVER STATS		//
var divs = $('p[id^="content-"]').hide(),
    i = 0;
(function cycle() { 
    divs.eq(i).fadeIn(500)
              .delay(3000)
              .fadeOut(500, cycle);
    i = ++i % divs.length;
})();

//		ROTATING ANNOUNCEMENT TEXT		//
(function($){
    $.fn.extend({ 
        rotaterator: function(options) {
            var defaults = {
                fadeSpeed: 500,
                pauseSpeed: 100,
				child:null
            };
            var options = $.extend(defaults, options);
            return this.each(function() {
                  var o =options;
                  var obj = $(this);                
                  var items = $(obj.children(), obj);
				  items.each(function() {$(this).hide();})
				  if(!o.child){var next = $(obj).children(':first');
				  }else{var next = o.child;
				  }
				  $(next).fadeIn(o.fadeSpeed, function() {
						$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
							var next = $(this).next();
							if (next.length == 0){
									next = $(obj).children(':first');
							}
							$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
						})
					});
            });
        }
    });
})(jQuery);
 $(document).ready(function() {
        $('#rotate').rotaterator({fadeSpeed:800, pauseSpeed:4000});
 });