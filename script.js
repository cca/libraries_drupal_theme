$(function () {
	// staff page? elsewhere?
	$('.togg-link, .togg-link2').click(function() {
		$('.field-content-toggle, .togg-link').toggle('slow');
		return false;
	});
	// search box on home page
	$("#toggle, #toggle2").click(function(){
		$("#searchbox, #catalogsearch").toggle('slow');
  	});
	// Online Resources more =>
	$("#toggle3, #toggle4").click(function(){
		$("#more, #hide, .all").toggle('slow');
		return false;
	});
});
