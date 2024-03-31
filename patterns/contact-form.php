<?php

/**
 * Title: contact-form
 * Slug: globalgaap/contact-form
 * Categories: featured
 */
?>
<!-- wp:html -->

<form class="flex flex-col justify-start items-center mt-10 xl:px-80 px-4 lg:px-40" id="contact-form"
    autocomplete="off">
    <input type="hidden" name="form_type" value="contact_form">

    <h3 class="font-semibold lg:text-3xl"> Contáctanos</h3>

    <p class="mt-2 text-center text-sm font-normal text-neutral-700 lg:text-base xl:text-xl">
        Conéctate con el experto indicado para llevar tus proyectos
    </p>

    <div class="mt-4 flex w-full flex-col lg:mb-9 lg:mt-10 lg:flex-row lg:justify-between">

        <input
            class="mb-6 h-9 border-b border-b-neutral-400 text-sm focus:border-b-black focus:outline-none lg:m-0 lg:w-12/25 lg:text-base"
            type="text" id="cform-name" name="cform-name" required placeholder="Nombre">

        <input
            class="mb-6 h-9 border-b border-b-neutral-400 text-sm focus:border-b-black focus:outline-none lg:m-0 lg:w-12/25 lg:text-base"
            type="email" id="cform-email" name="cform-email" required placeholder="Email">
    </div>
    <div class="flex w-full flex-col justify-between lg:mb-9 lg:flex-row">

        <input
            class="mb-7 h-9 border-b border-b-neutral-400 text-sm focus:border-b-black focus:outline-none lg:m-0 lg:w-8/25 lg:text-base"
            type="tel" id="cform-phone" name="cform-phone" placeholder="Telefono">

        <select
            class="mb-7 border-b border-b-neutral-400 pb-2 text-sm focus:border-b-black focus:outline-none lg:m-0 lg:w-8/25 lg:text-base"
            id="cform-service" name="cform-service">
            <!-- Option values should be updated according to actual services -->
            <option value="" selected disabled hidden>Servicio</option>
            <option value="BPO">BPO</option>
            <option value="Impuestos">Impuestos</option>
            <option value="Consultoria - NIIF">Consultoria - NIIF</option>
            <option value="Auditoria y revision fiscal">Auditoria y revision fiscal</option>
        </select>

        <select
            class="mb-6 border-b border-b-neutral-400 pb-2 text-sm focus:border-b-black focus:outline-none lg:m-0 lg:w-8/25 lg:text-base"
            id="cform-country" name="cform-country">
            <!-- Option values should be updated according to actual countries -->
            <option value="" selected disabled hidden>País</option>
            <option value="Alemania">Alemania</option>
            <option value="Colombia">Colombia</option>
            <option value="Estados Unidos">Estados Unidos</option>
        </select>
    </div>

    <textarea id="cform-message" name="cform-message" required placeholder="Mensaje"
        class="h-9 w-full border-b border-b-neutral-400 text-sm focus:border-b-black focus:outline-none lg:text-base"></textarea>

    <button class="ml-1 mt-8 flex h-10 w-40 items-center justify-center rounded bg-GOrange text-sm font-bold text-white"
        type="submit" name="submit" value="submit" id="cform-button">Enviar</button>
</form>

</div>

<!-- /wp:html -->