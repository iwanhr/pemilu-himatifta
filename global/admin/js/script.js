function resizeAll() {
	$("input.full, select.full").width(function(n, c) {
		return ($(this).parent().width() - 120);
	});
	$("input.large, select.large").width(function(n, c) {
		return ($(this).parent().width() - 133) * 50 / 100;
	});
	$("input.medium, select.medium").width(function(n, c) {
		return ($(this).parent().width() - 146) * 100 / 3 / 100;
	});
	$("input.small, select small").width(function(n, c) {
		return ($(this).parent().width() - 159) * 25 / 100;
	});

	$('#page-content').css('min-height', $(window).height() - 162.4);
	$("#page-content-wrapper").css("minHeight", $(window).height() - 162.4 );	
}

// Sidebar close/open (with cookies)

function close_sidebar() {

	$("#sidebar").addClass('closed-sidebar');
	$("#page-content #page-content-wrapper").addClass("no-bg-image wrapper-full");
	$("#open_sidebar").show();
	$("#close_sidebar, .hide_sidebar").hide();
	resizeAll();
}

function open_sidebar() {
	$("#sidebar").removeClass('closed-sidebar');
	$("#page-content #page-content-wrapper").removeClass("no-bg-image wrapper-full");
	$("#open_sidebar").hide();
	$("#close_sidebar, .hide_sidebar").show();
	resizeAll();
}


$(document).ready(function() {
//	// $('#close_sidebar').click(function() {
//		// close_sidebar();
//		// if($.browser.safari) {
//			// location.reload();
//		// }
//		// $.cookie('sidebar', 'closed');
//		// $(this).addClass("active");
//	// });
//
//	// $('#open_sidebar').click(function() {
//		// open_sidebar();
//		// if($.browser.safari) {
//			// location.reload();
//		// }
//		// console.log($.browser);
//		
//		// $.cookie('sidebar', 'open');
//	// });
//	
//	$('#close_sidebar').click(function(){
//		//$('.btn ui-state-default full-link ui-corner-all').toggle();
//		close_sidebar();
//		$(".content-box").css("width","100%");
//		$(".inner-page-title").css("width","100%");
//
//		var sidebarHeight = $("#sidebar").height();
//		//alert(sidebarHeight);
//		$("#page-content-wrapper").css({"minHeight" : sidebarHeight });
//		/*if(jQuery.browser.safari) {
//		    location.reload();
//		}*/
//		$.cookie('sidebar', 'closed' );
//		$(this).addClass("active");
//	});
//
//	$('#open_sidebar').click(function(){
//		open_sidebar();
//		$(".content-box").css("width","100%");
//		$(".inner-page-title").css("width","100%");
//		var sidebarHeight = $("#sidebar").height();
//		//salert(sidebarHeight);
//		$("#page-content-wrapper").css({"minHeight" : sidebarHeight });
//		/*
//		if(jQuery.browser.safari) {
//		    location.reload();
//		}*/
//		$.cookie('sidebar', 'open' );
//	});
//	
//	var sidebar = $.cookie('sidebar');
//
//	if(sidebar == 'closed') {
//		close_sidebar();
//	};
//
//	if(sidebar == 'open') {
//		open_sidebar();
//	};
//
//	$("ul#nav").superfish({
//		delay : 1000,
//		animation : {
//			opacity : 'show',
//			height : 'show'
//		},
//		speed : 'fast',
//		autoArrows : true,
//		dropShadows : false
//	});
//	$("input.full").width(function(n, c) {
//		return ($(this).parent().width() - 120);
//	});
//	$("input.large").width(function(n, c) {
//		return ($(this).parent().width() - 133) * 50 / 100;
//	});
//	$("input.medium").width(function(n, c) {
//		return ($(this).parent().width() - 146) * 100 / 3 / 100;
//	});
//	$("input.small").width(function(n, c) {
//		return ($(this).parent().width() - 159) * 25 / 100;
//	});
//
//	$('#page-content').css('min-height', $(window).height() - 162.4);
//
//	$(window).resize(function() {
//		resizeAll();
//	});
	
})

/* tambahan */
$(document).ready(function(){
    $('#content').css('min-height', $(window).height() - 200);
    $(window).resize(function(){
        $('#content').css('min-height', $(window).height() - 200);        
    });

     
    $('.optional').change(function() {
        if ($(this).is(':checked')) {
            $('.form-hidden').show('slow');
        } else {
            $('.form-hidden').hide('slow');    
        }
    })
    
    
    $('.datepicker').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: 'c-10:c+10',
        dateFormat: 'yy-mm-dd'
    });
    
})

function format_number(pnumber,decimals){
    if (isNaN(pnumber)) 
        return 0;
    if (pnumber=='') 
        return 0;
    var snum = new String(pnumber);
    var sec = snum.split('.');
    var whole = parseFloat(sec[0]);
    var result = '';
    if(sec.length > 1){
        var dec = new String(sec[1]);
        dec = String(parseFloat(sec[1])/Math.pow(10,(dec.length - decimals)));
        dec = String(whole + Math.round(parseFloat(dec))/Math.pow(10,decimals));
        var dot = dec.indexOf('.');
        if(dot == -1){
            dec += '.';
            dot = dec.indexOf('.');
        }
        while(dec.length <= dot + decimals) {
            dec += '0';
        }
        result = dec;
    } else{
        var dot;
        var dec = new String(whole);
        dec += '.';
        dot = dec.indexOf('.');
        while(dec.length <= dot + decimals) {
            dec += '0';
        }
        result = dec;
    }
    return result;
}

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

