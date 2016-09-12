$('document').ready(function(){
    today = new Date();
    day = today.getDate();
    month = today.getMonth()+1;
    year = today.getFullYear();
    $('#app_date').text(year);


  //  date = month+'-'+day+'-'+year;
  //  $('#dt_test').val(date);


    $('#dt_nasc').on('change',function(){
    	var dt_test = new Date($('#dt_test').val());
    	var dt_nasc = new Date($('#dt_nasc').val());
        var idade = get_idade(dt_test,dt_nasc);
        console.log($('#dt_nasc').val());
        $('#age').val(idade);
    });

    $('#peso').on('change',function(){
        var peso = $('#peso').val();
        if (peso) {
            var estatura = $('#estatura').val();
            var imc = get_imc(peso,estatura);
            $('#imc').val(imc);
            var idade = $('#age').val();
            if (((idade >= 15) || (idade <= 19)) &&  ((imc >= 18) || (imc <= 21.6)) ){
                $('#class').val('Exelente');
            }else{
                $('#class').val(' ');
            }
        }
    });

    $('#estatura').on('change',function(){
        var estatura = $('#estatura').val();
        if (estatura) {
            var peso = $('#peso').val();
            var imc = get_imc(peso,estatura);
            var idade = $('#age').val();
            $('#imc').val(imc);
            if (((idade >= 15) || (idade <= 19)) &&  ((imc >= 18) || (imc <= 21.6)) ){
                $('#class').val('Exelente');
            }else{
                $('#class').val(' ');
            }
        }
    });

    $('#gordura').on('change',function(){
        var g = $('#gordura').val();
        var p = $('#peso').val();
        var pg = get_peso_gordura(g,p);
        $('#peso_gordura').val(pg);

        var mm = get_massa_magra(p,pg);
        $('#massa_magra').val(mm);
    });

    $('#peso_gordura').on('change',function(){
        var pg = $('#peso_gordura').val();
        var p = $('#peso').val();
        var mm = get_massa_magra(p,pg);
        $('#massa_magra').val(mm);
    });

});

function get_idade(date_test,date_nasc){
	var idade;
    var dt_test = new Date(date_test);
    var dt_nasc = new Date(date_nasc);
    console.log(date_nasc);
    test = dt_test.getDate()+(dt_test.getMonth()*30)+(dt_test.getFullYear()*365);
    var nasc = dt_nasc.getDate()+(dt_nasc.getMonth()*30)+(dt_nasc.getFullYear()*365);
    idade = (test - nasc)/365;
    return idade;
}

function get_imc(peso,estatura){
    var imc = peso/(estatura/100*estatura/100);
    return imc;
}

function get_peso_gordura(gordura,peso){
    var pg = gordura/100*peso;
    return pg;
}

function get_massa_magra(peso,pesso_gordura){
    var mm = peso-pesso_gordura;
    return mm;
}

//POPOVER
$(function () {
  $('[data-toggle="popover"]').popover()
});



//CRIAR POPOVER DE CLASSIFICAÇÃO CONSOANTE A IDADE DE SEXO
$(document).on('change','#sexo',function() {
  sexo = $(this).val();
  idade = $('#age').val();
  if(idade == ""){
    alert('Insira a sua data de nascimento');
    return false;
  }

  //SEXO == 1 => MASCULINO
  //SEXO == 2 => FEMININO
  //SEXO == 0 => OPÇÃO DEFAULT

  popoverClassificacao(idade,sexo);

});

function popoverClassificacao(idade, sexo) {
    if(idade >= 18 && idade <= 19){
      switch (sexo) {
        case '1':
            var content = '18 a 23 - Excelente Minimo: 18 Máximo: 26';
            $('#classificacao').attr('data-content',content);
          break;
        case '2':
            var content = '18 a 21,6 - Excelente';
            $('#classificacao').attr('data-content',content);
          break;
      }
    }

    if(idade >= 20 && idade <= 29){
      switch (sexo) {
        case '1':
            var content = '18 a 23 - Excelente | Minimo: 18 - Máximo: 26';
            $('#classificacao').attr('data-content',content);
          break;
        case '2':
            var content = '18 a 21,6 - Excelente';
            $('#classificacao').attr('data-content',content);
          break;
      }
    }

    if(idade >= 30 && idade <= 39){
      switch (sexo) {
        case '1':
            var content = '18 a 24 - Excelente | Minimo: 18 - Máximo: 26';
            $('#classificacao').attr('data-content',content);
          break;
        case '2':
            var content = '18 a 21.6 - Excelente';
            $('#classificacao').attr('data-content',content);
          break;
      }
    }

    if(idade >= 40 && idade <= 49){
      switch (sexo) {
        case '1':
            var content = '18 a 24 - Excelente | Minimo: 18 - Máximo: 26';
            $('#classificacao').attr('data-content',content);
          break;
        case '2':
            var content = '18 a 21.6 - Excelente';
            $('#classificacao').attr('data-content',content);
          break;
      }
    }

    if(idade >= 50 && idade <= 59){
      switch (sexo) {
        case '1':
            var content = '18 a 24 - Excelente | Minimo: 18 - Máximo: 26';
            $('#classificacao').attr('data-content',content);
          break;
        case '2':
            var content = '18 a 21.6 - Excelente';
            $('#classificacao').attr('data-content',content);
          break;
      }
    }

    if(idade >= 60 && idade <= 69){
      switch (sexo) {
        case '1':
            var content = '18 a 25 - Excelente | Minimo: 18 - Máximo: 26.5';
            $('#classificacao').attr('data-content',content);
          break;
        case '2':
            var content = '18 a 21,6 - Excelente';
            $('#classificacao').attr('data-content',content);
          break;
      }
    }
}
