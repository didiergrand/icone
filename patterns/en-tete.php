<?php
/**
 * Title: En-tête du site
 * Slug: icone/en-tete
 * Categories: icone
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package Icone
 */

$icone_logo = get_theme_file_uri( 'assets/img/logo-icone.png' );
?>
<!-- wp:group {"className":"icone-entete","backgroundColor":"sable","layout":{"type":"constrained","contentSize":"1170px"}} -->
<div class="wp-block-group icone-entete has-sable-background-color has-background"><!-- wp:group {"className":"icone-entete__haut","layout":{"type":"default"}} -->
<div class="wp-block-group icone-entete__haut"><!-- wp:html -->
<a class="icone-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $icone_logo ); ?>" alt="Icone – Institut de consultation notariale" width="589" height="200" /></a>
<!-- /wp:html -->

<!-- wp:search {"label":"Rechercher","showLabel":false,"placeholder":"Rechercher","buttonText":"Rechercher","buttonPosition":"button-inside","buttonUseIcon":true,"className":"icone-recherche"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"icone-menu","backgroundColor":"nuit","textColor":"blanc","layout":{"type":"constrained","contentSize":"1170px"}} -->
<div class="wp-block-group icone-menu has-blanc-color has-nuit-background-color has-text-color has-background"><!-- wp:navigation {"textColor":"blanc","overlayBackgroundColor":"nuit","overlayTextColor":"blanc","className":"icone-navigation","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<!-- wp:navigation-link {"label":"Présentation générale","type":"page","id":7,"url":"/","kind":"post-type"} /-->

<!-- wp:navigation-submenu {"label":"Demandes de consultations","type":"page","id":1016,"url":"/les-consultations/","kind":"post-type"} -->
<!-- wp:navigation-link {"label":"Les consultations","type":"page","id":1016,"url":"/les-consultations/","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"Formulaire de demande de consultation","type":"page","id":1400,"url":"/demande-de-consultation/","kind":"post-type"} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Consultations publiées","type":"page","id":1197,"url":"/consultations-publiees/","kind":"post-type"} /-->

<!-- wp:navigation-submenu {"label":"Conférences","type":"page","id":1300,"url":"/textes-des-conferences/","kind":"post-type"} -->
<!-- wp:navigation-link {"label":"Prochaines conférences","url":"/textes-des-conferences/#prochaines_conferences","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Inscription aux conférences","type":"page","id":1759,"url":"/inscription-aux-conferences/","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"Textes des conférences","url":"/textes-des-conferences/#textes_conferences","kind":"custom"} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Liens divers","type":"page","id":1130,"url":"/liens/","kind":"post-type"} /-->

<!-- wp:navigation-link {"label":"Se déconnecter","url":"#icone-deconnexion","kind":"custom","className":"icone-si-connecte"} /-->

<!-- wp:navigation-link {"label":"Connexion à l’espace membre","type":"page","id":1335,"url":"/identifiez-vous-pour-acceder-a-lespace-membre/","kind":"post-type","className":"icone-si-visiteur"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->
