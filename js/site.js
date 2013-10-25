jQuery(document).ready(function($) {
	
	$('p > img').unwrap();
	$('p > a > img').parent().unwrap();

	$('code, pre').addClass('prettyprint');
	prettyPrint();

});