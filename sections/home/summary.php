<?php
/**
 * Homepage section content: Summary
 *
 * @link https://www.advancedcustomfields.com/resources/repeater/
 *
 * @package whoami
 */
?>

<?php if(get_field( 'summary', 'options' ) ) : ?>
	<div class="flex flex-col flex-nowrap gap-4 border-b px-4 pb-4">
		<?php printf( '<p class="text-justify max-w-6xl mx-auto">&ldquo;%s&rdquo;</p>' , get_field( 'summary', 'options' ) ); ?>
	</div>
<?php endif;
