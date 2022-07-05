jQuery(document).ready(function ($) {

    var emailDefault = 'Enter Email-ID';
    var contactnoDefault = 'Enter Contact No.';
	// Setting up existing forms

    setupforms();

    function setupforms() {
        // Applying default values
        setupDefaultText('#email', emailDefault);
		setupDefaultText('#contactno', contactnoDefault);
		
		// Focus / Blur check against defaults
       focusField('#name');
		focusField('#email');
		focusField('#contactno');
		focusField('#message');
		}

    function setupDefaultText(fieldID, fieldDefault) {
        $(fieldID).val(fieldDefault);
        $(fieldID).attr('data-default', fieldDefault);
    }

    function evalDefault(fieldID) {
        if ($(fieldID).val() != $(fieldID).attr('data-default')) {
            return false;
        }
        else { return true; }
    }

    function hasDefaults(formType) {
        switch (formType) {
            case "contact":
if (evalDefault('#name') && evalDefault('#email') && evalDefault('#contactno') && evalDefault('#message')) { return true; }
                else { return false; }

            default:
                return false;
        }
    }

    function focusField(fieldID) {
        $(fieldID).focus(function (evaluation) {
            if (evalDefault(fieldID)) { $(fieldID).val(''); }
        }).blur(function (evaluation) {
            if (evalDefault(fieldID) || $(fieldID).val() === '') { $(fieldID).val($(fieldID).attr('data-default')); }
        });
    }

    /*	$('#submit-contact').click(function(event) {
    $('#submit-contact').fadeOut()							
    event.preventDefault();
    });*/

    $('#submit-contact').bind('click', function () {
        if (!hasDefaults('contact')) {
            $('#form-contact').submit();
           
        }
    });

    $("#form-contact").validate({
        rules: {
           
            email: {
                required: true,
                email: true
            },
            contactno: {
                required: true,
                minlength: 8
            },
            message: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            
            email: {
                required: "Please enter your email address.",
                email: "This is not a valid email address format."
            },
            contactno: {
                required: "Please enter your contact number.",
                minlength: "This is not a valid contact number."
            },
            
        }

    });

    function validateContact() {
        if (!$('#form-contact').valid()) { return false; }
         else { return true; }
       //return true;
    }

    $("#form-contact").ajaxForm({
        beforeSubmit: validateContact,
        type: "POST",
        url: "contact-form-process.php",
        data: $("#form-contact").serialize(),
        success: function (msg) {
            $("#form-message").ajaxComplete(function (event, request, settings) {
                if (msg == 'OK') // Message Sent? Show the 'Thank You' message
                {
					window.location = "";
					result = '';
                    clear = true;
                }
                else {
					result = '<span class="form-message-error"><i class="icon-thumbs-down"></i> ' + msg + '</span>';
                    clear = false;
                }
                $(this).html(result);

                if (clear == true) {
                    $('#name').val('');
                    $('#email').val('');
                    $('#contactno').val('');
				   $('#message').val('');
					
                                    }
            });
        }
    });
});