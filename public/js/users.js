$(document).on("click", '#save-name',function () {
  var url = '/update/user/field';
  $('.loader-name').css('display','block');
  $('#field-name').css('display','none');
  $.ajax({
    url:url,
    data:{field:'name',name:$('#name').val()},
    type: 'POST',
    dataType: 'json',
    success: function(data) {
      $('.loader-name').css('display','none');
      if(data.type === 'success'){
        toastr.success(data.message,{timeOut: 5000} ).css("width","300px");
      }

      if(data.type === 'error'){
        toastr.error(data.message,{timeOut: 5000} ).css("width","300px");
      }

      $('#name').val(data.field_value);
      $('#save-name').parents(".popover").popover('hide');
      $('.name').text(data.field_value);
    }
  });
  return false;
});

$(function(){
    setPopOver('name');
    setPopOver('email');
});

$(document).on('show.bs.popover','#user-name',function () {
  $.get('/edit/user/field/name',function (data) {
          $('.popover-name').html(data);
  });
});

$(document).on('show.bs.popover','#user-email',function () {
  $.get('/edit/user/field/email',function (data) {
    $('.popover-email').html(data);
  });

});

function setPopOver(field) {
  if(field === 'name'){
    $('#user-name').popover({
      html:true,
      content: '',
      title:'Edit',
      footer:'Footer',
      placement:'right',
      trigger:'click',
      template:'<div class="popover col-md-6"><button type="button" class="close close-popover" data-dismiss="modal" aria-label="Close" style="margin: 5px;"><span aria-hidden="true">×</span></button><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content popover-name"></div></div>',
    });
  }

  if(field === 'email'){
    $('#user-email').popover({
      html:true,
      content: '',
      title:'Edit',
      footer:'Footer',
      placement:'right',
      trigger:'click',
      template:'<div class="popover col-md-6"><button type="button" class="close close-popover" data-dismiss="modal" aria-label="Close" style="margin: 5px;"><span aria-hidden="true">×</span></button><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content popover-email"></div></div>',
    });
  }
}

$(document).on("click", ".close-popover" , function(){
       $(this).parents(".popover").popover('hide');
 });
