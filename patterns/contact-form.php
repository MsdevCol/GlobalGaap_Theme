<?php

/**
 * Title: contact-form
 * Slug: globalgaap/contact-form
 * Categories: featured
 */
?>
<!-- wp:html -->
<?php
pre_r($_POST);
if (isset($_POST['submit'])) {


    //user posted variables
    $name = $_POST['cform-name'];
    $email = $_POST['cform-email'];
    $message = $_POST['message'];

    //php mailer variables
    $to = 'sergio.gomez2000@hotmail.com';
    $subject = "Some text in subject...";
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

    //Here put your Validation and send mail
    $sent = wp_mail($to, $subject, strip_tags($message), $headers);

    if ($sent) {
        echo '//message sent!  ';
    } else {
        echo '//message wasnt sent  ';
    }
}
?>
<form method="POST" class="cform-container" id="contact-form">
    <input type="hidden" name="form_type" value="contact_form">
    <h3>Contáctanos</h3>
    <p>Conéctate con el experto indicado para llevar tus proyectos</p>
    <div class="cform-nameContainer">
        <input type="text" id="cform-name" name="cform-name" required placeholder="Nombre">
        <input type="email" id="cform-email" name="cform-email" required placeholder="Email">
    </div>
    <div class="cform-phoneContainer">
        <input type="tel" id="cform-phone" name="phone" placeholder="Telefono">

        <select id="cform-service" name="service">
            <!-- Option values should be updated according to actual services -->
            <option value="" selected disabled hidden>Servicio</option>
            <option value="BPO">BPO</option>
            <option value="Impuestos">Impuestos</option>
            <option value="Consultoria">Consultoria - NIIF</option>
            <option value="Auditoria">Auditoria y revision fiscal</option>
        </select>

        <select id="cform-country" name="country">
            <!-- Option values should be updated according to actual countries -->
            <option value="" selected disabled hidden>País</option>
            <option value="country1">País 1</option>
            <option value="country2">País 2</option>
            <option value="country3">País 3</option>
        </select>
    </div>

    <textarea id="cform-message" name="message" required placeholder="Mensaje"></textarea>

    <button type="submit" name="submit" value="submit">Enviar</button>
</form>
</div>

<!-- /wp:html -->
<?php
function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
