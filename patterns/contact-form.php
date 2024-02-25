<?php

/**
 * Title: contact-form
 * Slug: globalgaap/contact-form
 * Categories: featured
 */
?>
<!-- wp:html -->

<form class="cform-container" id="contact-form">
    <input type="hidden" name="form_type" value="contact_form">
    <h3>Contáctanos</h3>
    <p>Conéctate con el experto indicado para llevar tus proyectos</p>
    <div class="cform-nameContainer">
        <input type="text" id="cform-name" name="cform-name" required placeholder="Nombre">
        <input type="email" id="cform-email" name="cform-email" required placeholder="Email">
    </div>
    <div class="cform-phoneContainer">
        <input type="tel" id="cform-phone" name="cform-phone" placeholder="Telefono">

        <select id="cform-service" name="cform-service">
            <!-- Option values should be updated according to actual services -->
            <option value="" selected disabled hidden>Servicio</option>
            <option value="BPO">BPO</option>
            <option value="Impuestos">Impuestos</option>
            <option value="Consultoria - NIIF">Consultoria - NIIF</option>
            <option value="Auditoria y revision fiscal">Auditoria y revision fiscal</option>
        </select>

        <select id="cform-country" name="cform-country">
            <!-- Option values should be updated according to actual countries -->
            <option value="" selected disabled hidden>País</option>
            <option value="Alemania">Alemania</option>
            <option value="Colombia">Colombia</option>
            <option value="Estados Unidos">Estados Unidos</option>
        </select>
    </div>

    <textarea id="cform-message" name="cform-message" required placeholder="Mensaje"></textarea>

    <button type="submit" name="submit" value="submit" id="cform-button">Enviar</button>
</form>

</div>

<!-- /wp:html -->