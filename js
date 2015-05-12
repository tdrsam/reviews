Some basic jQuery to make some of the functionality run. Change this, add to it, improve it.
Don't forget to add the jQuery file as well.

$('.read').click(function() {
	$('.displayReviews').toggle();
});

$(document).ready(function() {
    $('.write').click(function() {
			$('.writeForm').css("visibility","visible"),
            $('.writeForm').slideToggle("fast") ;
			$("html, body").animate({ scrollTop: $(document).height() }, 1000);
			return false;
    });
});
