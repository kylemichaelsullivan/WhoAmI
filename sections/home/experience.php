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
						<div class="flex flex-col flex-wrap justify-between gap-2 pt-2 pb-4 sm:flex-row sm:gap-0 sm:items-center">
							<?php
								if( get_sub_field('title') ) {
									printf( '<h3 class="text-2xl sm:order-1 sm:w-7/12">%s</h3>', get_sub_field('title') );
								}

								if( get_sub_field('company') ) {
									printf( '<h4 class="text-xl pl-1 sm:order-3 sm:w-1/2 sm:pl-0">%s</h4>', get_sub_field('company') );
								}
								
								if( get_sub_field('dates') ) {
									printf( '<h4 class="text-xl pl-1 sm:order-2 sm:text-right sm:w-5/12 sm:pl-0">%s</h4>', get_sub_field('dates') );
								}
								
								if( get_sub_field('location') ) {
									printf( '<h4 class="text-xl pl-1 sm:order-4 sm:text-right sm:w-1/2 sm:pl-0">%s</h4>', get_sub_field('location') );
								}
							?>
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
