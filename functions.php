<?php
/**
 * Thème Icone – fonctions.
 *
 * Le thème ne contient que la présentation. Les règles d'accès (espace membres)
 * sont dans le plugin wp-content/mu-plugins/icone-membres.php, indépendant du thème.
 *
 * @package Icone
 */

namespace Icone\Theme;

defined( 'ABSPATH' ) || exit;

const VERSION = '1.2.0';

/** Version d'un fichier = date de modification (évite les problèmes de cache navigateur). */
function asset_version( string $path ): string {
	$file = get_theme_file_path( $path );
	return file_exists( $file ) ? (string) filemtime( $file ) : VERSION;
}

/**
 * Polices Lato et Prata hébergées sur le site (assets/fonts, licence OFL).
 * Aucun appel à Google Fonts : l'adresse IP des visiteurs n'est pas transmise.
 */
function enqueue_polices(): void {
	wp_enqueue_style( 'icone-polices', get_theme_file_uri( 'assets/css/polices.css' ), array(), asset_version( 'assets/css/polices.css' ) );
}

add_action(
	'after_setup_theme',
	static function (): void {
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_editor_style( array( 'assets/css/polices.css', 'assets/css/theme.css' ) );
		remove_theme_support( 'core-block-patterns' );
	}
);

add_action(
	'wp_enqueue_scripts',
	static function (): void {
		enqueue_polices();
		wp_enqueue_style( 'icone', get_theme_file_uri( 'assets/css/theme.css' ), array( 'icone-polices' ), asset_version( 'assets/css/theme.css' ) );
	}
);

/** Préchargement des deux polices visibles dès l'ouverture de la page (texte et titres). */
add_action(
	'wp_head',
	static function (): void {
		foreach ( array( 'lato-300-latin.woff2', 'prata-400-latin.woff2' ) as $font ) {
			printf( '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n", esc_url( get_theme_file_uri( 'assets/fonts/' . $font ) ) );
		}
	},
	2
);

/** Catégorie de compositions propre au site. */
add_action(
	'init',
	static function (): void {
		register_block_pattern_category( 'icone', array( 'label' => 'Icone' ) );

		// Styles de blocs utilisés dans le contenu.
		register_block_style( 'core/group', array( 'name' => 'encadre', 'label' => 'Encadré sable' ) );
		register_block_style( 'core/group', array( 'name' => 'carte', 'label' => 'Carte lien' ) );
		register_block_style( 'core/group', array( 'name' => 'info', 'label' => 'Message d\'information' ) );
		register_block_style( 'core/group', array( 'name' => 'a-la-une', 'label' => 'À la une (section mise en avant)' ) );
		register_block_style( 'core/group', array( 'name' => 'evenement', 'label' => 'Carte de conférence' ) );
		register_block_style( 'core/column', array( 'name' => 'sommaire', 'label' => 'Sommaire (fixe au défilement)' ) );
		register_block_style( 'core/column', array( 'name' => 'encadre', 'label' => 'Encadré latéral' ) );
		register_block_style( 'core/button', array( 'name' => 'sombre', 'label' => 'Sombre' ) );
	}
);

/* -------------------------------------------------------------------------
 * Page de connexion (wp-login.php) aux couleurs du site.
 * Remplace le plugin Login Customizer.
 * ---------------------------------------------------------------------- */

add_action(
	'login_enqueue_scripts',
	static function (): void {
		enqueue_polices();
		wp_enqueue_style( 'icone-login', get_theme_file_uri( 'assets/css/login.css' ), array(), asset_version( 'assets/css/login.css' ) );
		wp_add_inline_style(
			'icone-login',
			sprintf( '.login h1 a{background-image:url(%s)}', esc_url( get_theme_file_uri( 'assets/img/logo-icone.png' ) ) )
		);
	}
);
add_filter( 'login_headerurl', static fn() => home_url( '/' ) );
add_filter( 'login_headertext', static fn() => get_bloginfo( 'name' ) );
