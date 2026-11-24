<?php
/**
 * Title: Bandeau photo (page d'accueil)
 * Slug: icone/bandeau-accueil
 * Categories: icone
 * Inserter: no
 *
 * @package Icone
 */

$icone_bandeau = get_theme_file_uri( 'assets/img/bandeau-accueil.jpg' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $icone_bandeau ); ?>","dimRatio":30,"overlayColor":"nuit","minHeight":320,"minHeightUnit":"px","contentPosition":"center left","className":"icone-bandeau","layout":{"type":"constrained","contentSize":"1170px"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left icone-bandeau" style="min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-nuit-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $icone_bandeau ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"icone-bandeau__surtitre"} -->
<p class="icone-bandeau__surtitre">Institut de consultation notariale Sàrl</p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"icone-bandeau__titre"} /--></div></div>
<!-- /wp:cover -->
