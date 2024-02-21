<?php

/**
 * Title: contact-form
 * Slug: globalgaap/contact-form
 * Categories: featured
 */
?>
<!-- wp:html -->
<form action="your-server-side-handler" method="POST" class="cform-container">
    <h3>Contáctanos</h3>
    <p>Conéctate con el experto indicado para llevar tus proyectos</p>
    <div class="cform-nameContainer">
        <input type="text" id="cform-name" name="name" required placeholder="Nombre">
        <input type="email" id="cform-email" name="email" required placeholder="Email">
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

    <button type="submit">Enviar</button>
</form>
</div>
<!-- /wp:html -->