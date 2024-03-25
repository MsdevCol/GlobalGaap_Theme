<?php

/**
 * Title: contact-form
 * Slug: globalgaap/contact-form
 * Categories: featured
 */
?>
<!-- wp:html -->

<form class="flex flex-col justify-start items-center mt-10 lg:px-80 px-4" id="contact-form" autocomplete="off">
    <input type="hidden" name="form_type" value="contact_form">

    <h3 class="font-semibold lg:text-3xl"> Contáctanos</h3>

    <p class="text-sm lg:text-xl font-normal mt-2  text-center  text-neutral-700">
        Conéctate con el experto indicado para llevar tus
        proyectos
    </p>
    <div class="flex  w-full lg:mb-9 lg:mt-10 mt-4 flex-col lg:justify-between lg:flex-row">

        <input
            class=" lg:text-base text-sm border-b border-b-neutral-400 h-9 lg:w-12/25 focus:outline-none focus:border-b-black mb-6 lg:m-0"
            type="text" id="cform-name" name="cform-name" required placeholder="Nombre">

        <input
            class="lg:text-base text-sm border-b border-b-neutral-400 h-9 lg:w-12/25 focus:outline-none focus:border-b-black mb-6  lg:m-0"
            type="email" id="cform-email" name="cform-email" required placeholder="Email">
    </div>
    <div class="flex justify-between w-full lg:mb-9 flex-col lg:flex-row">

        <input
            class="lg:text-base text-sm border-b border-b-neutral-400 h-9 lg:w-8/25 focus:outline-none focus:border-b-black mb-7  lg:m-0"
            type="tel" id="cform-phone" name="cform-phone" placeholder="Telefono">

        <select
            class=" lg:text-base text-sm lg:w-8/25 border-b border-b-neutral-400 focus:outline-none focus:border-b-black mb-7  pb-2  lg:m-0"
            id="cform-service" name="cform-service">
            <!-- Option values should be updated according to actual services -->
            <option value="" selected disabled hidden>Servicio</option>
            <option value="BPO">BPO</option>
            <option value="Impuestos">Impuestos</option>
            <option value="Consultoria - NIIF">Consultoria - NIIF</option>
            <option value="Auditoria y revision fiscal">Auditoria y revision fiscal</option>
        </select>

        <select
            class="lg:text-base lg:w-8/25 text-sm border-b border-b-neutral-400 focus:outline-none focus:border-b-black mb-6 pb-2 lg:m-0"
            id="cform-country" name="cform-country">
            <!-- Option values should be updated according to actual countries -->
            <option value="" selected disabled hidden>País</option>
            <option value="Alemania">Alemania</option>
            <option value="Colombia">Colombia</option>
            <option value="Estados Unidos">Estados Unidos</option>
        </select>
    </div>

    <textarea id="cform-message" name="cform-message" required placeholder="Mensaje"
        class=" lg:text-base border-b text-sm border-b-neutral-400 focus:outline-none focus:border-b-black h-9 w-full"></textarea>

    <button class="flex w-40 text-sm justify-center items-center text-white font-bold bg-GOrange rounded ml-1 h-10 mt-8"
        type="submit" name="submit" value="submit" id="cform-button">Enviar</button>
</form>

</div>

<!-- /wp:html -->