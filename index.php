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
 * @package whoami
 */

get_header();
?>

<main class="site-main" id="primary">
	<div class="flex flex-col gap-4 py-4">
		<?php get_template_part( 'sections/home' ); ?>
	</div>
</main>

<?php
get_footer();
