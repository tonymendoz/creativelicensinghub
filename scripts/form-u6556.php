<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.0.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario ¡Únete hoy!',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => 'index.html',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_reCAPTCHA2_private_key' => 'Clave privada de reCAPTCHA 2.0 no válida.',
		'invalid_reCAPTCHA2_server_response' => 'Respuesta de servidor de reCAPTCHA 2.0 no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'info@creativelicensinghub.com',
		'to' => 'info@creativelicensinghub.com'
	),
	'fields' => array(
		'custom_U6571' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Nombre\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Correo electrónico',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Correo electrónico\' es obligatorio.',
				'format' => 'El campo \'Correo electrónico\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U6593' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Empresa',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Empresa\' es obligatorio.'
			)
		),
		'custom_U6579' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Mensaje (opcional)',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Mensaje (opcional)\' es obligatorio.'
			)
		),
		'custom_U6698' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Teléfono móvil',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Teléfono móvil\' es obligatorio.'
			)
		),
		'custom_U6714' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Sitio web',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U6730' => array(
			'order' => 7,
			'type' => 'checkboxgroup',
			'label' => '¿En qué área estás interesado?',
			'required' => true,
			'optionItems' => array(
				'Tengo una propiedad (Creativo)',
				'Quiero adquirir una propiedad (Empresa)'
			),
			'errors' => array(
				'required' => 'El campo \'¿En qué área estás interesado?\' es obligatorio.',
				'format' => 'El campo \'¿En qué área estás interesado?\' contiene un valor no válido.'
			)
		)
	)
);

process_form($form);
?>
