$(document).on('ajax:success', '.btn[data-remote]', function(e, data, status, xhr) {

  var target = $('#modal');
  target.find('.modal-body').html(xhr.responseText);
  target.modal('show');

  target.on('ajax:success', 'form[data-remote]', function(e, data, status, xhr) {
    $('#content').html(xhr.responseText);
    target.modal('hide');
    location.reload();
  });

  target.on('ajax:error', 'form[data-remote]', function(e, data, status, xhr) {
    target.find('#alert-box')
      .show()
      .find('ul')
      .html(toList(data.responseJSON));
  });
  
});

function toList(messages) {
  var converted = '';
  $.each(messages, function(key, value)
  {
    converted += '<li>' + value + '</li>';
  });
  return converted;
}

$('document').ready(function(){

    //triggered when modal is about to be shown
  $('#confirmDelete').on('show.bs.modal', function(e) {
      //get data-id attribute of the clicked element
      var url = "/products/";
      console.log(url);
      var productId = $(e.relatedTarget).data('product_id');
      var productName = $(e.relatedTarget).data('product_name');
      $("#confirmDelete #pName").val( productName );
      console.log(productName);
      console.log(productId);
      var modal = $(this)
      modal.find('.modal-body #pName').text(productName)
      //modal.find('.modal-footer #pName').val(productName)
      $("#delForm").attr('action', url + productId );//e.g. 'domainname/products/' + productId
  });
});

$('#destroy-btn').bind('ajax:success', function(e, data, status, xhr){
    $(e.target).closest('tr').remove();
    console.log("Deleted resource #"+data);
});