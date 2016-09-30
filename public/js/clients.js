
//BOTÃO ADICIONAR CLIENTE
$('#add-client').click(function(){
  saveClient('clients','create');
});

//BOTÃO EDITAR CLIENTE
$('#edit-client').click(function(){
  saveClient('clients','update');
});

//FUNÇÃO QUE GUARDA NOVO REGISTO DE CLIENTE E ACTUALIZA OS DADOS
//PARAMENTROS:
//    FORM -> O FORMULARIO EM QUE ESTAS CHAMANDO ELA: EX: TESTS, CLIENTS OU Handout
//    FORM_TYPE -> TIPO DE FORMULARIO NESSE CASO REFERE-SE AO FORMULARIO DE CLIENTE E PODE SER: CREATE OR UPDATE
//
// OBS: ESSA FUNÇÃO PODE SER CHAMADA EM QUALQUER PARTE DO PROGRAMA EM QUE SE DESEJA CRIAR UM NOVO CLIENTE.
//      BASTA PASSAR OS PARAMENTROS NECESSARIO ELA ESTARA APTA PARA DESEMPENHAR A SUA FUNÇÃO

function saveClient(form,form_type) {
  var type = "POST";
  var my_url_cli;
  if(form_type === 'create'){
    my_url_cli = "/clients";
  }
  if(form_type === 'update'){
    my_url_cli = "/clients/"+$('#client_id').val();
    type = 'PATCH';
  }


  var token = $('meta[name="csrf_token"]').attr('content');
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': token
      }
  });

  var formDataCli = {
      name : $('#name').val(),
      email : $('#email').val(),
      dt_nasc : $('#dt_nasc').val(),
      sexo: $('#sexo').val(),
      telefone: $('#telefone').val(),
      telemovel: $('#telemovel').val(),
      morada: $('#morada').val(),
  }

  $.ajax({
      type: type,
      url: my_url_cli,
      data: formDataCli,
      dataType: 'json',
      success: function (data) {
        // console.log(data);
          if(form === 'clients'){
            if(form_type === 'create'){
              var successHtml = 'Client saved with success';
              $('#add-client').css('display','none');
              toastr.success(successHtml,{timeOut: 5000} ).css("width","300px");
            }

            if(form_type === 'update'){
              var successHtml = 'Client updated with success';
              $('#edit-client').css('display','none');
              toastr.success(successHtml,{timeOut: 5000} ).css("width","300px");
            }
          }
          if(form === 'tests'){
            save_test(data.id,type);
          }
      },
      error: function (data) {
          console.log('Error:', data);
          if( data.status === 422 ) {
              $errors = data.responseJSON;
              var errorsHtml= '';
              $.each( $errors, function( key, value ) {
                  errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
              });
              toastr.error(errorsHtml,{timeOut: 5000} ).css("width","500px");
          }
      }
  });
}
