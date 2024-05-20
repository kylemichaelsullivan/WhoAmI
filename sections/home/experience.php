<?php
/**
 * Homepage section content: Experience
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(have_rows( 'jobs', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Experience</h2>
		<?php while( have_rows( 'jobs', 'options' ) ): the_row(); ?>
			<div class="w-full mx-auto">
				<?php while( have_rows( 'job' ) ): the_row(); ?>
					<?php if( get_sub_field('title') || get_sub_field('dates') || get_sub_field('company') || get_sub_field('location') ) : ?>
						<div class="flex flex-col pt-2 pb-4">
							<?php if( get_sub_field('title') || get_sub_field('dates') ) : ?>
								<div class="flex justify-between">
									<?php
										printf( '<h3 class="text-2xl">%s</h3>', get_sub_field('title') );
										printf( '<h4 class="text-xl">%s</h4>', get_sub_field('dates') );
									?>
								</div>
							<?php endif; ?>

							<?php if( get_sub_field('company') || get_sub_field('location') ) : ?>
								<div class="flex justify-between">
									<?php
										printf( '<h4 class="text-xl">%s</h4>', get_sub_field('company') );
										printf( '<h4 class="text-xl">%s</h4>', get_sub_field('location') );
									?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if( have_rows( 'bullets' ) ) : ?>
						<ul class="list-disc pl-8">
							<?php while( have_rows( 'bullets' ) ) : the_row();
								printf( '<li>%s</li>', get_sub_field( 'bullet' ) );
							endwhile; ?>
						</ul>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;
