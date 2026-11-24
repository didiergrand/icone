<?php
/**
 * Title: Pied de page du site
 * Slug: icone/pied-de-page
 * Categories: icone
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package Icone
 */

// Lien vers la déclaration de protection des données, seulement une fois la page publiée.
$icone_confidentialite = get_page_by_path( 'protection-des-donnees' );
$icone_confidentialite = ( $icone_confidentialite && 'publish' === $icone_confidentialite->post_status ) ? get_permalink( $icone_confidentialite ) : '';
?>
<!-- wp:group {"className":"icone-pied","backgroundColor":"anthracite","textColor":"gris","layout":{"type":"constrained","contentSize":"1170px"}} -->
<div class="wp-block-group icone-pied has-gris-color has-anthracite-background-color has-text-color has-background"><!-- wp:columns {"className":"icone-pied__colonnes"} -->
<div class="wp-block-columns icone-pied__colonnes"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"icone-pied__titre"} -->
<h3 class="wp-block-heading icone-pied__titre">La société Icone</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Institut de consultation notariale Sàrl a été constituée en 1997. La constitution de cette société est le fruit de discussions qui ont été menées par un groupe de travail chargé par les Chambres cantonales romandes d’étudier la possibilité de mettre en place, en Suisse romande, un système de consultation notariale.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"icone-pied__titre"} -->
<h3 class="wp-block-heading icone-pied__titre">Connexion/Déconnexion</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vous êtes déjà enregistré ?<br>Connectez-vous ci-dessous</p>
<!-- /wp:paragraph -->

<!-- wp:loginout /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"icone-pied__titre"} -->
<h3 class="wp-block-heading icone-pied__titre">Contact</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Institut de consultation notariale Sàrl<br>CP 237<br>Rue de Vevey 8<br>CH-1630 Bulle</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Téléphone : 026 913 78 70<br>Fax : 026 912 78 60<br>E-mail : <a href="mailto:info@icone-consultation-notariale.ch">info@icone-consultation-notariale.ch</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"className":"icone-pied__bas"} -->
<p class="icone-pied__bas">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Icone – Institut de consultation notariale Sàrl<?php if ( $icone_confidentialite ) : ?> · <a href="<?php echo esc_url( $icone_confidentialite ); ?>">Protection des données</a><?php endif; ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
