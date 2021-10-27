$(document).ready(function () {
    
    // Toast Initialize
     $('#successToast').toast({
         animation:true,
         delay:2000,
     });


     $(".navbar .nav-link").on("click", function(){
        $(".navbar").find(".active").removeClass("active");
        $(this).addClass("active");
     });
    
     $('#messageForm').on('submit',function(event){
        event.preventDefault();
        let form_data = $(this).serialize();
        console.log(form_data);
    
        $.ajax({
            type: "post",
            url: base_url+"main/submit_message",
            data: form_data,
            dataType: "JSON",
            beforeSend:function(){
                disable_form();
            },
            success: function (response) {
                if(response.status=="ok"){
                    $('#messageForm').trigger('reset');
                    $('#successToast').toast('show');
                }
                else if(response.status=="error"){
                    $.each(response.description, function (i, v) { 
                        $('[name="'+i+'"]').closest('.mb-3').find('.text-error').html(v);
                    });
                }
    
                enable_form();
            },
            error:function(xhr,textStatus){
                enable_form();
            },
            timeout:10000,
        });
    
     })
    
     function disable_form(){
        $('.btn-submit').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
        $('.btn-submit').attr('disabled',true);
        $('input, textarea').attr('disabled',true);
     }
    
     function enable_form(){
        $('.btn-submit').html('Submit');
        $('.btn-submit').attr('disabled',false);
        $('input, textarea').attr('disabled',false);
     }
    

});
 
