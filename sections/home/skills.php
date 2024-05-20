<?php
/**
 * Homepage section content: Skills
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(have_rows( 'categories', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Skills</h2>
		<?php while( have_rows( 'categories', 'options' ) ) : the_row(); ?>
			<div class="w-full mx-auto">			
				<h3 class="text-2xl"><?php echo get_sub_field( 'category' ); ?></h3>
				<?php if(have_rows( 'skills' )) : ?>
					<ul class="list-disc pl-8">
						<?php while( have_rows( 'skills' ) ): the_row();
							printf( '<li>%s</li>', get_sub_field('skill') );
						endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;
