$(document).ready(function() {
	// setup the form validation
	$("#contactForm").validate({
		// debug option in jQuery's validator
		// rules dictate what is (in)valid
		rules   : {
			name: {
				required: true
			},

			email: {
				required: true,
				email   : true
			},

			msgArea: {
				required: true

			}


		},

		// messages are what are displayed to the user
		messages: {
			name   : "Please enter your name",
			email  : "Please enter a valid email"
		},

		submitHandler: function(form) {
			$(form).ajaxSubmit({
				type   : "GET",
				url    : "contactProcessor.php",
				data   : $(form).serialize(),
				success: function(ajaxOutput) {
					$(':input').attr('disabled', true);
					$("#outputArea").html(ajaxOutput);

					if($(".alert-success").length >= 1) {
						$(form).reset();
					}
				}
			});
		}
	});
});

