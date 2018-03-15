var cwoContact = (function(){
	/** Private **/
	// Contact Options
	var contact = {
		nameField  : false,
		emailField : false,
		messageField : false,
		errors: [],
		modal: false,
		sendBtn: false,
	};

	function buildOptions(){
		// All Fields
		contact.nameField = $('#name');
		contact.emailField = $('#email');
		contact.messageField = $('#message');
		contact.response = $('#cwo_modal');
		contact.sendBtn = $('#sendbtn');
	}

	function buttonResponse(disabled,btnText){
		// Class Update
		if(disabled)
			contact.sendBtn.addClass('btn disabled');
		else
			contact.sendBtn.removeClass('btn disabled');

		// Text Update
		contact.sendBtn.val(btnText);
	}

	function clearContact(){
		contact.nameField.val(null);
		contact.emailField.val(null);
		contact.messageField.val(null);
	}

	function formIsValid(){
		// Clear Errors
		contact.errors = [];

		// Validate Name
		var nameRegEx = /^\w{3,}/;
		if(!nameRegEx.test(contact.nameField.val()))
			contact.errors.push('Name muss mindestens 2 Stellen enthalten');

		// Validate Email
		var mailRegEx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-z]{2,5})$/;
		if(!mailRegEx.test(contact.emailField.val()))
			contact.errors.push('Die eingegebene Mailadresse ist ungültig');

		// Validate Message
		var messageRegEx = /^\w{3,}/;
		if(!messageRegEx.test(contact.messageField.val()))
			contact.errors.push('Bitte gib eine Nachricht ein.');

		// Return if is valid or not
		return contact.errors.length === 0;
	}

	function formSubmitted(event){
		// Prevent form from submitting
		event.preventDefault();

		// Form is Valid
		if(formIsValid() === true){
			// Button Response
			buttonResponse(true,'Bitte warten...');
			// Send Mail
			sendContactMail()
		}

		else {
			showFormResponse(contact.errors,'red')
		}


	}

	function sendContactMail(){
		$.ajax({
        url: defaults.ajax_url,
        method: 'POST',
        data: {
            'action': 'contact_ajax_request',
        	'name'  : contact.nameField.val(),
        	'email' : contact.emailField.val(),
        	'message' : contact.messageField.val()
        },

        success: function (res){
        	console.log(res);
        	showFormResponse([res],'green');
        	clearContact();
        	buttonResponse(false,'Senden');
        },

        error: function (errorThrown) {
            showFormResponse([errorThrown],'red');
            buttonResponse(false,'Senden');
        }
    });
	}

	function showFormResponse(messageArray,textColor){
		var the_modal_body = $('#the_modal_body');

		// Set Color
		the_modal_body.css('color',textColor);

		// Build Message
		var output = '';
		messageArray.forEach(function(current){
			output+= '<p>'+current+'</p>'
		});
		the_modal_body.html(output);

		// Show Modal
		contact.response.modal('show');
	}

	/** Public **/
	function setup(){
		// Build Options
		buildOptions();


		// Form Submit
		$('#cwo_contact').on('submit',formSubmitted);
	}

	return {
		setup:setup
	}
})();