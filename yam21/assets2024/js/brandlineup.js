// 追従ボタン表示
$(document).ready(function(){
	var $footer = $('footer');
	var $leftside = $('.brandlineup_wrap .leftside');
	function checkFooterVisibility(){
		var footerTop = $footer.offset().top;
		var scrollTop = $(window).scrollTop() + $(window).height();
		
		return (scrollTop > footerTop);
	}
	
    $(window).scroll(function(){
        if ($(this).scrollTop() > 800 && !checkFooterVisibility()) {
            $('.brandlineup_wrap .leftside').addClass('show');
        } else {
            $('.brandlineup_wrap .leftside').removeClass('show');
        }
    });
});

// 追従メニュー切替
$(document).ready(function() {
    function isElementInView(element) {
        var elementTop = $(element).offset().top - 100;
        var elementBottom = elementTop + $(element).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    function updateLinkActiveStates() {
        $('.link').each(function() {
            var targetId = $(this).attr('href').replace('#', '');
            if (isElementInView($('#' + targetId))) {
                $('.link').removeClass('active');
                $(this).addClass('active');
                return false;
            }
        });
    }

    updateLinkActiveStates();

    $(window).scroll(function() {
        updateLinkActiveStates();
    });

    $(window).resize(function() {
        updateLinkActiveStates();
    });
});