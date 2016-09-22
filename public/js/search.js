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
					$('#telefone').val(data.telefone);
					$('#telemovel').val(data.telemovel);
					$('#sexo').val(data.sexo);
					var dt_test = new Date($('#dt_test').val());
					if(dt_test != undefined){
						var idade = get_idade(dt_test,data.dt_nasc);
						$('#age').val(idade);
						changeSexo(''+data.sexo,idade);
					}

		  	});

			// 	$('#dt_test').val('')
			//	$('#peso').val(data.peso);
			//	$('#estatura').val(data.estatura);

		}
	});
});
