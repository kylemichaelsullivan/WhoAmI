<?php
/**
 * Homepage section content: Education
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(have_rows( 'institutions', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Education</h2>
		<?php while( have_rows( 'institutions', 'options' ) ): the_row(); ?>
			<div class="w-full mx-auto">
				<?php while( have_rows( 'institution' ) ): the_row(); ?>
					<?php printf( '<h3 class="text-2xl">%s</h3>', get_sub_field( 'credential' ) ); ?>					
					<?php printf( '<h4>%s</h4>', get_sub_field( 'name' ) ); ?>					
					<?php printf( '<h4>%s</h4>', get_sub_field( 'location' ) ); ?>					
				<?php endwhile; ?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;
