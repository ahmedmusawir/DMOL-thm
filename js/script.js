jQuery(document).ready(function($) {

  $( '#content' ).fadeIn(600);	

	new WOW().init();
});

jQuery(document).ready(function($) {

	$('#left-inner-content-div').slimScroll({
        height: '810px'
    });
});

jQuery(document).ready(function($) {

	$('#right-inner-content-div').slimScroll({
        height: '810px'
    });
});