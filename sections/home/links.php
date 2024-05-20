<?php
/**
 * Homepage section content: Links
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(have_rows( 'links', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<h2 class="text-3xl font-bold text-center">Links</h2>
		<?php if( have_rows( 'links', 'options' ) ): ?>
			<ul class="flex gap-4 w-full mx-auto">
				<?php while( have_rows( 'links', 'options' ) ): the_row(); ?>
					<li>
						<?php while( have_rows( 'link' ) ) : the_row(); ?>
							<?php if( get_sub_field( 'link' ) ) : $link = get_sub_field( 'link' );
								$href = $link['url'] ?? '';
								$target = $link['target'] ?? '';
								$title = $link['title'] ?? '';
								$content = get_sub_field( 'icon' ) . "<span>$title</span>";
								printf( '<a href="%s" class="combo-link flex gap-1 items-center" target="%s" title="%s">%s</a>', $href, $target, $title, $content );
							endif; ?>
						<?php endwhile; ?>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
<?php endif;
