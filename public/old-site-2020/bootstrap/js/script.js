//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

		$('#contact-form').validate({
	    rules: {
		  rs: {
	        minlength: 4,
	        required: true
	      },
		  nom: {
	        minlength: 4,
	        required: true
	      },
		  prenom: {
	        minlength: 4,
	        required: true
	      },
		  fonction: {
	        minlength: 4,
	        required: true
	      },
		  adresse: {
	        minlength: 4
	      },
		  cp: {
	        minlength: 5,
	        number: true
	      },
		  ville: {
	        minlength: 4
	      },
		  pays: {
	        minlength: 4,
	        required: true
	      },
		  phone: {
			minlength: 10,
	        number: true
	      },
		  portable: {
			minlength: 10,
	        number: true
	      },
		  fax: {
			minlength: 10,
	        number: true
	      },
		  objet: {
	        minlength: 4,
	        required: true
	      },
		  message: {
			minlength: 4
	      },
	      email: {
	        required: true,
	        email: true
	      },
		  examen: {
			required: true
	      },
		  date: {
			required: true,
			date: true
	      }
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready