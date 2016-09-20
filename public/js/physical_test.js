$('document').ready(function(){
    today = new Date();
    day = today.getDate();
    month = today.getMonth()+1;
    year = today.getFullYear();
    $('#app_date').text(year);

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

    $('#cintura').on('change',function(){
        var c = $('#cintura').val();
        var q = $('#quadril').val();
        var cq = get_cintura_quatril(c,q);
        $('#rel_cin_qua').val(cq);
    });

    $('#quadril').on('change',function(){
        var c = $('#cintura').val();
        var q = $('#quadril').val();
        var cq = get_cintura_quatril(c,q);
        $('#rel_cin_qua').val(cq);
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


function get_cintura_quatril(cintura,quatril){
    var cq;
    console.log(cintura);
    console.log(quatril);
    if (cintura && quatril) {
        cq = cintura/quatril;
    } else {
        cp = 0;
    }
    return cq;
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
  showAndHiddenFields(idade,sexo);

});

function showAndHiddenFields(idade, sexo){
    switch (sexo) {
      case '1':
          $('.peso_corporal_total').css('display','');
          $('.peso_a_perder').css('display','');
          $('.total_agua_corpo').css('display','');
          $('.perc_agua_massa_magra').css('display','');
          $('.dc_tricepts').css('display','none');
          $('.soma_dc_triceps_subescapular').css('display','none');
          $('.soma5_dc').css('display','');
        break;
      case '2':
          $('.peso_corporal_total').css('display','none');
          $('.peso_a_perder').css('display','none');
          $('.total_agua_corpo').css('display','none');
          $('.perc_agua_massa_magra').css('display','none');
          $('.soma5_dc').css('display','');
          $('.dc_tricepts').css('display','');

          if(idade >= 15 && idade <= 19){
              $('.dc_tricepts').css('display','none');
          }

          if(idade >= 20 && idade <= 29){
            $('.soma_dc_triceps_subescapular').css('display','');
          }

          if(idade >= 30 && idade <= 39){
              $('.perc_agua_massa_magra').css('display','');
          }

          if(idade >= 50 && idade <= 59){
              $('.soma5_dc').css('display','none');
              $('.dc_tricepts').css('display','none');
          }
        break;
    }
}

function popoverClassificacao(idade, sexo) {
    if(idade >= 15 && idade <= 19){
      switch (sexo) {
        case '1':
            var content = '18 a 26 Excelente';
            $('#classificacao').attr('data-content',content);
            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 32 - Máximo: 58');
            $('#h_circunferencia').attr('data-content','Mínimo: 90 - Máximo: 116');
            $('#h_cintura').attr('data-content','< 90');
            $('#h_quadril').attr('data-content','Mínimo: 90 - Máximo: 104');
            $('#h_gordura').attr('data-content','Mínimo: 8 - Máximo: 20');
            $('#h_forca_abdominal').attr('data-content','> 37 rep.');
            $('#h_forca_mmii').attr('data-content','> 38 cm');
            $('#h_flexibilidade').attr('data-content','> 33 cm');
            $('#h_forca_mmss').attr('data-content','> 23 rep.');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 80');
            $('#h_pressao_sis').attr('data-content','< 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 95');
            $('#h_potencia_aerobica').attr('data-content','> 44');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-8/100);
            var maxPeso = parseInt(g) / (1-20/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
        case '2':
            var content = '18 a 21,6 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 25');
            $('#h_soma5_dc').attr('data-content','Mínimo: 46 - Máximo: 72');
            $('#h_circunferencia').attr('data-content','Mínimo: 74 - Máximo: 100');
            $('#h_cintura').attr('data-content','Mínimo: 56 - Máximo: 79');
            $('#h_quadril').attr('data-content','Mínimo: 80 - Máximo: 105');
            $('#h_rel_cin_qua').attr('data-content','Mínimo: < 0.75 - Máximo: 0.77');
            $('#h_gordura').attr('data-content','Mínimo: 13 - Máximo: 24');
            $('#h_forca_abdominal').attr('data-content','Mínimo: 30');
            $('#h_forca_mmii').attr('data-content','Mínimo: 22');
            $('#h_flexibilidade').attr('data-content','Mínimo: 33');
            $('#h_forca_mmss').attr('data-content','Mínimo: 18');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 90');
            $('#h_pressao_sis').attr('data-content','Mínimo: 80 - Máximo: 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 90');
            $('#h_potencia_aerobica').attr('data-content','Mínimo: 36');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-13/100);
            var maxPeso = parseInt(g) / (1-24/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
      }
    }

    if(idade >= 20 && idade <= 29){
      switch (sexo) {
        case '1':
            var content = '18 a 23 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 32 - Máximo: 58');
            $('#h_circunferencia').attr('data-content','Mínimo: 90 - Máximo: 120');
            $('#h_cintura').attr('data-content','< 90');
            $('#h_quadril').attr('data-content','Mínimo: 90 - Máximo: 110');
            $('#h_gordura').attr('data-content','Mínimo: 8 - Máximo: 20');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 80');
            $('#h_pressao_sis').attr('data-content','< 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 95');
            $('#h_potencia_aerobica').attr('data-content','> 40');
            $('#h_forca_abdominal').attr('data-content','> 33 rep.');
            $('#h_forca_mmii').attr('data-content','> 37 cm');
            $('#h_flexibilidade').attr('data-content','> 32 cm');
            $('#h_forca_mmss').attr('data-content','> 22 rep.');


            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-8/100);
            var maxPeso = parseInt(g) / (1-20/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);


          break;
        case '2':
            var content = '18 a 22 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 25.9');
            $('#h_soma5_dc').attr('data-content','Mínimo: 46 - Máximo: 80.9');
            $('#h_circunferencia').attr('data-content','< 97 Excelente');
            $('#h_cintura').attr('data-content','< 80');
            $('#h_quadril').attr('data-content','< 100 Excelente');
            $('#h_rel_cin_qua').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 13 - Máximo: 26');
            $('#h_forca_abdominal').attr('data-content','Mínimo: 25');
            $('#h_forca_mmii').attr('data-content','Mínimo: 21');
            $('#h_flexibilidade').attr('data-content','Mínimo: 33');
            $('#h_forca_mmss').attr('data-content','Mínimo: 15');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 90');
            $('#h_pressao_sis').attr('data-content','Mínimo: 80 - Máximo: 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 90');
            $('#h_potencia_aerobica').attr('data-content','Mínimo: 36');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-13/100);
            var maxPeso = parseInt(g) / (1-26/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
      }
    }

    if(idade >= 30 && idade <= 39){
      switch (sexo) {
        case '1':
            var content = '18 a 24 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 32 - Máximo: 58');
            $('#h_circunferencia').attr('data-content','< 43 Excelente');
            $('#h_cintura').attr('data-content','< 90');
            $('#h_quadril').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 8 - Máximo: 20');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 80');
            $('#h_pressao_sis').attr('data-content','< 150');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 95');
            $('#h_potencia_aerobica').attr('data-content','> 36');
            $('#h_forca_abdominal').attr('data-content','> 25 rep.');
            $('#h_forca_mmii').attr('data-content','> 32 cm');
            $('#h_flexibilidade').attr('data-content','> 32 cm');
            $('#h_forca_mmss').attr('data-content','> 13 rep.');


            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-8/100);
            var maxPeso = parseInt(g) / (1-20/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);


          break;
        case '2':
            var content = '18 a 22.6 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 24.9');
            $('#h_soma5_dc').attr('data-content','Mínimo: 46 - Máximo: 72');
            $('#h_circunferencia').attr('data-content','< 97 Excelente');
            $('#h_cintura').attr('data-content','< 80');
            $('#h_quadril').attr('data-content',' ');
            $('#h_rel_cin_qua').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 13 - Máximo: 25');
            $('#h_forca_abdominal').attr('data-content','Mínimo: 20');
            $('#h_forca_mmii').attr('data-content','Mínimo: 20');
            $('#h_flexibilidade').attr('data-content','Mínimo: 32');
            $('#h_forca_mmss').attr('data-content','Mínimo: 13');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 90');
            $('#h_pressao_sis').attr('data-content','Mínimo: 80 - Máximo: 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 90');
            $('#h_potencia_aerobica').attr('data-content','Mínimo: 35');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-13/100);
            var maxPeso = parseInt(g) / (1-25/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
      }
    }

    if(idade >= 40 && idade <= 49){
      switch (sexo) {
        case '1':
            var content = '18 a 24 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 32 - Máximo: 74.9');
            $('#h_circunferencia').attr('data-content',' ');
            $('#h_cintura').attr('data-content','< 90');
            $('#h_quadril').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 8 - Máximo: 22');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 80');
            $('#h_pressao_sis').attr('data-content',' ');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 95');
            $('#h_potencia_aerobica').attr('data-content','> 33');
            $('#h_forca_abdominal').attr('data-content','> 17 rep.');
            $('#h_forca_mmii').attr('data-content','> 25 cm');
            $('#h_flexibilidade').attr('data-content','> 32 cm');
            $('#h_forca_mmss').attr('data-content','> 10 rep.');


            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-8/100);
            var maxPeso = parseInt(g) / (1-22/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
        case '2':
            var content = '18 a 23 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 46 - Máximo: 72');
            $('#h_circunferencia').attr('data-content','Mínimo: 74 - Máximo: 100');
            $('#h_cintura').attr('data-content','< 80');
            $('#h_quadril').attr('data-content','Mínimo: 80 - Máximo: 105');
            $('#h_rel_cin_qua').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 13 - Máximo: 25');
            $('#h_forca_abdominal').attr('data-content','Mínimo: 15');
            $('#h_forca_mmii').attr('data-content','Mínimo: 19');
            $('#h_flexibilidade').attr('data-content','Mínimo: 32');
            $('#h_forca_mmss').attr('data-content','Mínimo: 11');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 90');
            $('#h_pressao_sis').attr('data-content','Mínimo: 80 - Máximo: 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 90');
            $('#h_potencia_aerobica').attr('data-content','Mínimo: 35');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-13/100);
            var maxPeso = parseInt(g) / (1-25/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
      }
    }

    if(idade >= 50 && idade <= 59){
      switch (sexo) {
        case '1':
            var content = '18 a 24 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 32 - Máximo: 76.9');
            $('#h_circunferencia').attr('data-content',' ');
            $('#h_cintura').attr('data-content','< 90');
            $('#h_quadril').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 8 - Máximo: 23');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 80');
            $('#h_pressao_sis').attr('data-content','< 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 95');
            $('#h_potencia_aerobica').attr('data-content','> 30');
            $('#h_forca_abdominal').attr('data-content','> 13 rep.');
            $('#h_forca_mmii').attr('data-content','> 23 cm');
            $('#h_flexibilidade').attr('data-content','> 32 cm');
            $('#h_forca_mmss').attr('data-content','> 7 rep.');


            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-8/100);
            var maxPeso = parseInt(g) / (1-23/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
        case '2':
            var content = '18 a 23.6 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_circunferencia').attr('data-content','< 97 Excelente');
            $('#h_cintura').attr('data-content','< 80');
            $('#h_quadril').attr('data-content','Mínimo: 80 - Máximo: 105');
            $('#h_rel_cin_qua').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 13 - Máximo: 25');
            $('#h_forca_abdominal').attr('data-content','Mínimo: 11');
            $('#h_forca_mmii').attr('data-content','Mínimo: 18');
            $('#h_flexibilidade').attr('data-content','Mínimo: 32');
            $('#h_forca_mmss').attr('data-content','Mínimo: 8');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 90');
            $('#h_pressao_sis').attr('data-content','Mínimo: 80 - Máximo: 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 90');
            $('#h_potencia_aerobica').attr('data-content','Mínimo: 28');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-13/100);
            var maxPeso = parseInt(g) / (1-26/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
      }
    }

    if(idade >= 60 && idade <= 69){
      switch (sexo) {
        case '1':
            var content = '18 a 26 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26.5');
            $('#h_soma5_dc').attr('data-content','Mínimo: 32 - Máximo: 80.9');
            $('#h_circunferencia').attr('data-content',' ');
            $('#h_cintura').attr('data-content','< 90');
            $('#h_quadril').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 8 - Máximo: 25');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 80');
            $('#h_pressao_sis').attr('data-content','< 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 95');
            $('#h_potencia_aerobica').attr('data-content','> 23');
            $('#h_forca_abdominal').attr('data-content','> 6 rep.');
            $('#h_forca_mmii').attr('data-content','> 21 cm');
            $('#h_flexibilidade').attr('data-content','> 32 cm');
            $('#h_forca_mmss').attr('data-content','> 4 rep.');


            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-8/100);
            var maxPeso = parseInt(g) / (1-25/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
        case '2':
            var content = '18 a 26 Excelente';
            $('#classificacao').attr('data-content',content);

            $('#h_imc').attr('data-content','Mínimo: 18 - Máximo: 26');
            $('#h_soma5_dc').attr('data-content','Mínimo: 46 - Máximo: 80.9');
            $('#h_circunferencia').attr('data-content','Mínimo: 74 - Máximo: 100');
            $('#h_cintura').attr('data-content','< 80');
            $('#h_quadril').attr('data-content','Mínimo: 80 - Máximo: 105');
            $('#h_rel_cin_qua').attr('data-content',' ');
            $('#h_gordura').attr('data-content','Mínimo: 13 - Máximo: 26');
            $('#h_potencia_aerobica').attr('data-content','Mínimo: 22');
            $('#h_forca_abdominal').attr('data-content','Mínimo: 9');
            $('#h_forca_mmii').attr('data-content','Mínimo: 16');
            $('#h_flexibilidade').attr('data-content','Mínimo: 32');
            $('#h_forca_mmss').attr('data-content','Mínimo: 5');
            $('#h_frequencia_card_rep').attr('data-content','Mínimo: 60 - Máximo: 90');
            $('#h_pressao_sis').attr('data-content','Mínimo: 80 - Máximo: 140');
            $('#h_pressao_dis').attr('data-content','Mínimo: 45 - Máximo: 90');

            var g = $('#massa_magra').val();
            var minPeso = parseInt(g) / (1-13/100);
            var maxPeso = parseInt(g) / (1-26/100);
            $('#h_peso').attr('data-content','Mínimo: '+minPeso+' - Máximo: '+maxPeso);

          break;
      }
    }
}
