<?php

/**
 * Title: membership
 * Slug: globalgaap/membership
 * Categories: featured
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:heading {"level":3, "className":"has-text-align-center font-semibold lg:text-3xl"} -->
    <h3 class="wp-block-heading has-text-align-center font-semibold lg:text-3xl">
        Miembros orgullosos de
    </h3>
    <!-- /wp:heading -->
    <!-- wp:html -->
    <div class="flex h-16 w-auto gap-4 overflow-x-scroll px-4 md:justify-center lg:h-36 lg:gap-10 lg:overflow-hidden">
        <a class="flex h-full w-40 shrink-0 items-center justify-center xl:w-80" href="https://www.ahk-colombia.com/es/" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/AHK.png" class="object-contain" />
        </a>
        <a class="flex h-full w-40 shrink-0 items-center justify-center xl:w-80" href="https://hollandhouse-colombia.com" target="_blank">
            <img class="object-contain" src="<?php echo get_template_directory_uri() ?>/assets/images/Holland House.png" />
        </a>
        <a class="mr-3 flex h-full w-40 shrink-0 items-center justify-center xl:w-80" href="https://auditbrain.com" target="_blank"><img class="object-contain" src="<?php echo get_template_directory_uri() ?>/assets/images/Audit Brain.png" />
        </a>
        <a class="flex h-full w-20 shrink-0 items-center justify-center xl:w-60" href="https://gpsa-international.com" target="_blank"><img class="object-contain" src="<?php echo get_template_directory_uri() ?>/assets/images/gpsa.png" />\
        </a>
    </div>
    <!-- /wp:html -->


</div>
<!-- /wp:group -->