<?php
/**
 * Homepage section content: Knowledge
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(have_rows( 'topics', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Knowledge</h2>
		<?php while( have_rows( 'topics', 'options' ) ) : the_row(); ?>
			<div class="w-full mx-auto">
				<?php while( have_rows( 'topic' ) ): the_row(); ?>
					<?php printf( '<h3 class="text-2xl">%s</h3>', get_sub_field('topic') ); ?>
					<ul class="list-disc pl-8">
						<?php while( have_rows( 'bullets' ) ) : the_row();
							printf( '<li>%s</li>', get_sub_field( 'bullet' ) );
						endwhile; ?>
					</ul>
				<?php endwhile; ?>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;
