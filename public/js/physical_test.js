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
