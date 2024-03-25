<?php


add_action('wp_enqueue_scripts', 'globalgaap_enqueue_styles');

function globalgaap_enqueue_styles()
{
    wp_enqueue_style(
        'tailwind_output',
        get_parent_theme_file_uri('dist/output.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}


function globalgaap_enqueue_scripts()
{
    wp_enqueue_script('dynamic-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0.0', true);

    //Script for carousel hero
    wp_enqueue_script('carrousel-hero', get_template_directory_uri() . '/assets/js/carrousel-hero.js', array(), '1.0.0', true);
    $translation_array = array(
        'theme_url' => get_template_directory_uri() . '/assets/images/hero/'
    );
    wp_localize_script('carrousel-hero', 'globalGaap', $translation_array);

    //Script for carousel contact-form
    wp_enqueue_script('contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array(), '1.0.0', true);
    wp_localize_script('contact-form', 'my_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('my_ajax_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'globalgaap_enqueue_scripts');


function globalgaap_configuracion_smtp($phpmailer)
{

    $phpmailer->isSMTP();
    $phpmailer->Host = '';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 25;
    $phpmailer->Username = '';
    $phpmailer->Password = '';
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->From = 'info@globalgaap.com.co';
    $phpmailer->FromName = "Info GlobalGaap";
}
add_action('phpmailer_init', 'globalgaap_configuracion_smtp');
add_action('wp_ajax_submit_form', 'globalgaap_handle_form_submission');

add_action('wp_ajax_nopriv_submit_form', 'globalgaap_handle_form_submission'); // For non-logged-in users

function globalgaap_handle_form_submission()
{
    check_ajax_referer('my_ajax_nonce', '_ajax_nonce');


    $nombre = $_POST['cform-name'];
    $email = $_POST['cform-email'];
    $telefono = $_POST['cform-phone'];
    $servicio = $_POST['cform-service'];
    $pais = $_POST['cform-country'];
    $mensaje = $_POST['cform-message'];

    $to = 'info@globalgaap.com.co';
    if ($servicio == "BPO") {
        $to = 'sergio.gomez2000@hotmail.com';
    } else if ($servicio == "Impuestos") {
        $to = 'sd.gomez400@gmail,com';
    } else if ($servicio == "Consultoria - NIIF") {
        $to = 'sd.gomez400@gmail,com';
    } else if ($servicio == "Auditoria y revision fiscal") {
        $to = 'sd.gomez400@gmail,com';
    }

    $subject = 'Nueva Solicitud de Contacto';
    $message = "Estimado equipo,

    Se ha recibido una nueva solicitud de contacto con la siguiente información:

    - Nombre: " . $nombre . "
    - Email: " . $email . "
    - Teléfono: " . $telefono . "
    - Servicio: " . $servicio . "
    - País: " . $pais . "
    - Mensaje: " . $mensaje . "

    Por favor, procedan a dar seguimiento correspondiente.

    Saludos cordiales,
    [Sistema Automático de Notificación]";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Enviar el correo electrónico.
    wp_mail($to, $subject, $message, $headers);

    wp_send_json_success(array('success' => true));
}
