$('document').ready(function(){
    today = new Date();
    day = today.getDate();
    month = today.getMonth()+1;
    year = today.getFullYear();
    $('#app_date').text(year);


  //  date = month+'-'+day+'-'+year;
  //  $('#dt_test').val(date);


    $('#gerar_idade').on('click',function(){
    	var dt_test = new Date($('#dt_test').val());
    	var dt_nasc = new Date($('#dt_nasc').val());
        gerar_idade(dt_test,dt_nasc);
        console.log($('#dt_nasc').val());
    });

});

function gerar_idade(date_test,date_nasc){
	var idade;
    var dt_test = new Date(date_test);
    var dt_nasc = new Date(date_nasc);
    console.log(date_nasc);
    test = dt_test.getDate()+(dt_test.getMonth()*30)+(dt_test.getFullYear()*365);
    var nasc = dt_nasc.getDate()+(dt_nasc.getMonth()*30)+(dt_nasc.getFullYear()*365);
    idade = (test - nasc)/365;
    console.log(idade);

    $('#age').val(idade);


}
