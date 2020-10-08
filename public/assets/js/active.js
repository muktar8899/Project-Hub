$(document).ready(function() {
/* FAQ SECTION*/
// $(".reply-form").hide();
$("button.comment-reply").on("click", function() {
    
    $(this).siblings(".reply-form").show();

});
$(".close-form i").on("click", function() {
    $(this).parent().parent(".reply-form").hide();
});

// Menu
	$(".navbar-nav li a").on("click", function (event) {
        if (!$(this).parent().hasClass('dropdown'))
            $(".navbar-collapse").collapse('hide');
	});
	

}); 

/* Fixed Menu */
$(document).on('scroll', function() {
    var scrollPos = $(this).scrollTop();

    if( scrollPos > 50 ) {
        $('.navbar-area').addClass('navbar-home');
    }

    else {
        $('.navbar-area').removeClass('navbar-home');
    }
});
