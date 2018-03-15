<?php
function contact_ajax() {
	if ( isset( $_REQUEST ) ) {
		$to = CWO_MAILING_ADRESS;
		$subject = "Cwo Website - Neue Kontaktanfrage";
		$headers = 'From: '.$_REQUEST["name"].' <'.$_REQUEST["email"].'>';
		$message = $_REQUEST['message'];

		if(wp_mail($to,$subject,$message,$headers) === true){
			http_response_code(200);
			die("Die Nachricht wurde erfolgreich gesendet");
		}
		else{
			http_response_code(500);
			die("Leider ist etwas schiefgelaufen. Bitte kontaktiere uns über vorstand@cwo-ev.de");
		}
	}
	http_response_code(403);
	die();
}

add_action( 'wp_ajax_nopriv_contact_ajax_request', 'contact_ajax' );
add_action( 'wp_ajax_contact_ajax_request', 'contact_ajax' );