$(document).ready(function(){

	$.get(
			'/pawstumes/get_all/' + 1, function(res){
				$('#results').html(res);
				$('#1').addClass("Active");
	});

	$(document).on('click', '.page_search', function(){
		var page = $(this).attr('alt');
		$.get(
			'/pawstumes/get_all/' + page, function(res){
				$('#results').html(res);
				$('#'+page).addClass("Active");
		});
		return false;
	})






})