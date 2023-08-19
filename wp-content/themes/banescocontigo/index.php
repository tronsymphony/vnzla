<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package banescocontigo
 */

$page = get_page_by_path('blog');

get_header(); ?>

<?php if ( ( get_queried_object()->taxonomy ?? "" ) === "categoria-de-nota-de-prensa" ) : ?>
	<?php echo get_template_part( "template-parts/archive", "categoria-de-nota-de-prensa", [
		"root_slug" => "sala-de-prensa", /* Picks up the Gutenberg block attributes from this page. */
	]); ?>
<?php elseif (is_home() || is_category() || is_tag() || is_archive()) : ?>
	<main id="primary" class="site-main main">
		<?= do_blocks('<!-- wp:banescocontigo/blog /-->'); ?>

		<?php if (is_home()) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/videos {"paddings": {"desktop": {"top": "88px", "bottom": "90px"}, "mobile": {"top": "43px", "bottom": "47px"}},"gradient": "rgba(235,240,245,0.4)", "title": {"desktop": "Siguenos en nuestro canal de YouTube", "mobile": "", "mIncrease": false }, "items": [{"title": "Aprende cómo crearte un usuario en Banca Digital - Autoafiliación", "maxLines": "3", "text": "¿Aún no tienes usuario en Banca Digital? ¡Te enseñamos cómo hacerlo!", "image": {"url": "video-1.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Realiza tus transacciones bancarias", "maxLines": "3", "text": "Hasta desde el cine 🎬🍿 podrás hacer tus transacciones bancarias con nuestra nueva Banca Digital Banesco.", "image": {"url": "video-2.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Revisa tu cuenta desde donde estés", "maxLines": "3", "text": "Nada como poder gestionar tus productos desde donde te encuentres a través desde #BancaDigitalBanesco😎 ¡Nuestra Banca más moderna hasta ahora! ", "image": {"url": "video-3.jpg", "alt": ""}, "link": "/"}, {"title": "Campamento Infantil Banesco 2022", "maxLines": "4", "text": "Sus caritas lo dicen todo. 😄💚 Fueron unos días completos y llenos de diversión en el Campamento Banesco. Donde los niños de nuestros colaboradores disfrutaron de dinámicas educativas de la mano de @menasacademy.", "image": {"url": "video-4.jpg", "alt": ""}, "link": "/"}, {"title": "Fundación Nuestro Pequeños Hermanos I Banesco 2021", "maxLines": "4", "text": "La magia de la navidad se reflejó en cada sonrisa de los niños de la fundación Nuestro Pequeños Hermanos. 🌟", "image": {"url": "video-5.jpg", "alt": ""}, "link": "/"}]} /-->'); ?>
		<?php endif; ?>
		<?php if (is_post_type_archive('responsibilities')) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/videos-and-images {"paddings": {"desktop": {"top": "88px", "bottom": "90px"}, "mobile": {"top": "43px", "bottom": "47px"}},"gradient": "rgba(235,240,245,0.4)", "title": {"desktop": "Siguenos en nuestro canal de YouTube", "mobile": "", "mIncrease": false }, "videos": [{"title": "Aprende cómo crearte un usuario en Banca Digital - Autoafiliación", "maxLines": "3", "text": "¿Aún no tienes usuario en Banca Digital? ¡Te enseñamos cómo hacerlo!", "image": {"url": "video-1.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Realiza tus transacciones bancarias", "maxLines": "3", "text": "Hasta desde el cine 🎬🍿 podrás hacer tus transacciones bancarias con nuestra nueva Banca Digital Banesco.", "image": {"url": "video-2.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Revisa tu cuenta desde donde estés", "maxLines": "3", "text": "Nada como poder gestionar tus productos desde donde te encuentres a través desde #BancaDigitalBanesco😎 ¡Nuestra Banca más moderna hasta ahora! ", "image": {"url": "video-3.jpg", "alt": ""}, "link": "/"}, {"title": "Campamento Infantil Banesco 2022", "maxLines": "4", "text": "Sus caritas lo dicen todo. 😄💚 Fueron unos días completos y llenos de diversión en el Campamento Banesco. Donde los niños de nuestros colaboradores disfrutaron de dinámicas educativas de la mano de @menasacademy.", "image": {"url": "video-4.jpg", "alt": ""}, "link": "/"}, {"title": "Fundación Nuestro Pequeños Hermanos I Banesco 2021", "maxLines": "4", "text": "La magia de la navidad se reflejó en cada sonrisa de los niños de la fundación Nuestro Pequeños Hermanos. 🌟", "image": {"url": "video-5.jpg", "alt": ""}, "link": "/"}]} /-->'); ?>
		<?php endif; ?>
		<?php if (is_post_type_archive('library')) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/library {
				"paddings": {
					"desktop": {
						"top": "0px",
						"bottom": "112px"
					},
					"mobile": {
						"top": "40px",
						"bottom": "48px"
					}
				},
				"title": {
					"desktop": "Los más descargados",
					"mobile": ""
				},
				"items": [],
				"showMostViewed": true
			} /-->'); ?>
		<?php endif; ?>
		<?php if (is_post_type_archive('library')) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/collections {
				"paddings": {
					"desktop": {
						"top": "88px",
						"bottom": "89px"
					},
					"mobile": {
						"top": "51px",
						"bottom": "58px"
					}
				},
				"gradient": "rgba(235,240,245,0.4)",
				"title": {
					"desktop": "Nuestras colecciones",
					"mobile": ""
				}
			} /-->'); ?>
		<?php endif; ?>

	</main><!-- #primary -->
	
<?php else : ?>

	<main id="primary" class="site-main main">

		<?php the_content() ?>

	</main><!-- #primary -->

<?php endif; ?>

<?php get_footer();
