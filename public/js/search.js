//Javascript
$(function()
{
	$( "#name" ).autocomplete({
	    source: "/search/autocomplete",
	    minLength: 3,
	    autoFocus: true,
	    select: function(event, ui) {
		  	$('#name').val(ui.item.value);
		  	$('#client_id').val(ui.item.id);
		  	console.log(ui.item.id);
		  	$.getJSON('/clients/'+ui.item.id, function(data){
		  		console.log(data);
		  		$('#email').val(data.email);
		  		$('#dt_nasc').val(data.dt_nasc);
		  	});
		}
	});
});