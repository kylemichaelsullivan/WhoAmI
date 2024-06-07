<?php
/**
 * Homepage sections
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php
$sections = array(
	'summary',
	'skills',
	'knowledge',
	'experience',
	'education',
	'links',
	'samples'
);

if( ! isset($sections) ) {
	$sections_home = get_stylesheet_directory() . '/sections/home';
	$files = glob( "$sections_home/*.php" );
	$sections = array();
	foreach($files as $file) {
		$pathParts = explode(DIRECTORY_SEPARATOR, $file);
		$fileName = end($pathParts);
		$sections[] = rtrim($fileName, '.php');
	}
}

foreach( $sections as $section ) {
	get_template_part( "sections/home/$section" );
}

/* if( have_posts() ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Posts</h2>
		<?php while( have_posts() ) : the_post(); ?>
			<div>
				<?php printf( '<h3 class="text-2xl"><a href="%2$s" title="%1$s">%1$s</a></h3>', get_the_title(), get_permalink() ); ?>
				<?php the_excerpt(); ?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; */ ?>
