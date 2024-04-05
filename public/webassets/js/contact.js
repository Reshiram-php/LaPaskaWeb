/*
Template Name: La Paska
Author: Ingrid Kuhn
Author URI: themeforest/user/ingridk
Version: 1.0
*/
"use strict";
jQuery(document).ready(function($) {

    $("#submit_btn").on("click", function() {

		//spinner
		$('#spinner-form').css('display','inline-block');

        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields
        $("#contact-form input[required],#contact-form select[required], #contact-form textarea[required]").each(function() {
            $(this).css('background-color', '');
            if (!$.trim($(this).val())) { //if this field is empty
                $(this).css('background-color', 'rgb(255 222 222 / 31%)'); //change border color to rgb(255 222 222 / 21%)
                proceed = false; //set do not proceed flag
				 $("#spinner-form").hide();
					document.getElementById('contact_results').innerHTML = '<div class="alert alert-danger mb-4">Por favor llena todos los campos requeridos</div>';
            }

            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if ($(this).attr("type") === "email" && !email_reg.test($.trim($(this).val()))) {
                $(this).css('background-color', 'rgb(255 222 222 / 31%)'); //change border color to rgb(255 222 222 / 21%)
                proceed = false; //set do not proceed flag
				 $("#spinner-form").hide();
				document.getElementById('contact_results').innerHTML = '<div class="alert alert-danger mb-4">Por favor ingresa un correo válido</div>';


            }
        });

        if (proceed) //everything looks good! proceed...
        {
            //get input field values data to be sent to server
            var post_data = {
                'name': $('input[name=name]').val(),
                'email': $('input[name=email]').val(),
                'option': $('select[name=option]').val(),
                'message': $('textarea[name=message]').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            };

            //Ajax post data to server
            $.post('messagepost', post_data, function(response) {
                if (response.status == 1) {
                    //load json data from server and output message
                    var output = '<div class="alert alert-danger"><i class="fas fa-circle-exclamation text-danger"></i>Could not send mail! Please check your mail configuration.</div>';
					 $("#error-message,#spinner-form").hide();
                } else {

                    var output = '<div class="alert alert-success" role="alert"><i class="fas fa-check-circle text-success"></i>Gracias por tu mensaje, nos contactaremos contigo pronto.</div>';
                    //reset values in all input fields and hide error
                    $("#contact-form input, #contact-form textarea").val('');
					 $("#error-message,#spinner-form").hide();

                }

                $("#contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });


});

