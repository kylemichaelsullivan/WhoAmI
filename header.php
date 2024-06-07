<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whoami
 */

 $blog_name = get_bloginfo( 'name' ) ?? "Who Am I";
 $blog_description = get_bloginfo( 'description', 'display' );
 $home_url = esc_url( home_url( '/' ) );
 $site_title_link = sprintf( '<a href="%1$s" rel="home" title="%2$s">%2$s</a>', $home_url, $blog_name );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://gmpg.org/xfn/11" rel="profile">
	<meta name="description" content="Attorney & Full-Stack Developer">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://kylemichaelsullivan.com">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Kyle Michael Sullivan">
	<meta property="og:description" content="Attorney & Full-Stack Developer">
	<meta property="og:image" content="https://kylemichaelsullivan.com/wp-content/uploads/2024/05/Kyle-Michael-Sullivan.jpeg">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="kylemichaelsullivan.com">
	<meta property="twitter:url" content="https://kylemichaelsullivan.com">
	<meta name="twitter:title" content="Kyle Michael Sullivan">
	<meta name="twitter:description" content="Attorney & Full-Stack Developer">
	<meta name="twitter:image" content="https://kylemichaelsullivan.com/wp-content/uploads/2024/05/Kyle-Michael-Sullivan.jpeg">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site" id="page">
	<a href="#primary" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'whoami' ); ?></a>

	<header class="site-header sticky border-b border-black" id="masthead">
		<div class="site-branding flex flex-col justify-between items-center p-4 sm:flex-row">
			<h1 class="site-title text-2xl">
				<?php echo $site_title_link; ?>
			</h1>

			<?php if( $blog_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
	</header>
