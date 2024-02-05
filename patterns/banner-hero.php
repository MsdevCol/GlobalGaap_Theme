<?php

/**
 * Title: banner-hero
 * Slug: globalgaap/banner-hero
 * Categories: featured
 */
?>
<!-- wp:template-part {"slug":"header","theme":"GlobalGaap","tagName":"header"} /-->

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":30,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center","isDark":false,"align":"full","className":"bhero-backgroundImage"} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center bhero-backgroundImage" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","level":2} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size">
            <?php echo esc_html_x('A commitment to innovation and sustainability', 'Heading of the hero section', 'twentytwentyfour'); ?>
        </h2>
        <!-- /wp:heading -->

    </div>
</div>
<!-- /wp:cover -->