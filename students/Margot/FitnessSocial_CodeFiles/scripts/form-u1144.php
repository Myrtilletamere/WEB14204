<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.3.2.295
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envoi de Formulaire Calendar4',
	'heading' => 'Envoi du nouveau formulaire',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Cochée',
		'checkbox_unchecked' => 'Non cochée',
		'submitted_from' => 'Formulaire envoyé depuis le site Web :%s',
		'submitted_by' => 'Adresse IP du visiteur :%s',
		'too_many_submissions' => 'Trop d\'envois effectués récemment à partir de cette adresse IP',
		'failed_to_send_email' => 'Echec de l\'envoi du courrier électronique',
		'invalid_reCAPTCHA_private_key' => 'Clé privée reCAPTCHA non valide',
		'invalid_field_type' => 'Type de champ inconnu « %s »',
		'unknown_method' => 'Méthode de requête inconnue du serveur'
	),
	'email' => array(
		'from' => 'margot_mc@hotmail.fr',
		'to' => 'margot_mc@hotmail.fr'
	),
	'fields' => array(
		'Email' => array(
			'order' => 1,
			'type' => 'email',
			'label' => 'Personnalisé :',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « Personnalisé : » est obligatoire.',
				'format' => 'Le champ « Personnalisé : » contient une adresse électronique non valide.'
			)
		)
	)
);

process_form($form);
?>
