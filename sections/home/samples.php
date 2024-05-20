<?php
/**
 * Homepage section content: Samples
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(have_rows( 'samples', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Samples</h2>
		<?php while( have_rows( 'samples', 'options' ) ) : the_row(); ?>
			<div class="w-full mx-auto">
				<?php
					$label = get_sub_field( 'label' );
					$links = get_sub_field( 'links' );
					$link = $links['interactive'] ?? $links['source'] ?? '/';
					printf( '<h3 class="text-2xl"><a href="%1$s" target="_blank" title="%2$s">%2$s</a></h3>', $link, $label );
				?>

				<?php if( get_sub_field( 'is_iframe' ) ) :
					printf( '<iframe src="%s" class="w-full"></iframe>', get_sub_field( 'iframe' ) );
				else:
					$img = get_sub_field( 'image' );
					printf( '<a href="%1$s" target="_blank" title="%3$s"><img src="%2$s" class="object-contain w-full max-h-screen" alt="%3$s" /></a>', $link, $img['url'] , $label );
				endif; ?>

				<?php if( have_rows( 'links' ) && $links['interactive'] || $links['source'] ) : ?>
					<div class="flex justify-start gap-4 py-4">
						<?php if( $links['interactive'] ) :
							printf( '<a href="%s" target="_blank" title="Sample in Action">Interactive Version</a>', $links['interactive'] );
						endif; ?>

						<?php if( $links['source'] ) :
							printf( '<a href="%s" target="_blank" title="See Source Code">Source Code</a>', $links['source'] );
						endif; ?>
					</div>
				<?php endif; ?>

				<?php if( get_sub_field( 'description' ) ) :
					printf( '<div>%s</div>' , get_sub_field( 'description' ) );
				endif; ?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;
