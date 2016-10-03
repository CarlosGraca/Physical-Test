var form = $('.invoice'),  cache_width = form.width(),  a4  =[ 595.28,  841.89];  // for a4 size paper width and height
$(document).on('click','#btn-download',function(){
     $('.loader').css('display','block');
     $('body').scrollTop(0);
     createPDF('download');
     return false;
});


//create pdf
function createPDF(type){
  console.log(type);
  $('.no-print').css('display','none');
  $('.invoice').css('border','none');
  form.width((a4[0]*1.33333) -80).css('max-width','none');
  html2canvas($("#download-content"), {
     useCORS: true,
     allowTaint: true,
     imageTimeout : 2000,
     removeContainer : true,
      onrendered: function(canvas) {
            canvas.webkitImageSmoothingEnabled = false;
            canvas.mozImageSmoothingEnabled = false;
            canvas.imageSmoothingEnabled = false;
            var img = canvas.toDataURL("image/jpeg");
            //console.log(img);
            doc = new jsPDF('portrait','mm','a4');
            //doc.addImage(img, 'JPEG', 15, 40, 180, 160);
            doc.addImage(img, 'JPEG', 5, 10, 0, 0);
            if(type === 'download'){
              doc.save(''+$('.report').find('title').text()+'.pdf');
                $('.loader').css('display','none');
              toastr.success('PDF Generated and Downloaded with success!',{timeOut: 5000} ).css("width","300px");
            }
            if(type === 'send'){
              var email = $('#email').text();
              var name = $('#name').text();
              var documents = $('#document').text();
              var data = new FormData();
              var pdf = btoa(doc.output());
              data.append("data" , pdf);
             // data.append("id", id);
              data.append("email" , email);
              data.append("name", name);
              data.append("document", documents);
              sendMail(data);
              //return pdf;
            }

            $('.no-print').css('display','block');
            $('.invoice').css('border','1px solid #f4f4f4');
            form.width(cache_width);
           }
       });
 }