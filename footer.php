<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whoami
 */

?>

	<footer class="site-footer items-center border-t border-black" id="colophon">
		<div class="site-info flex justify-between p-4">
			<p class="footer-copyright">&copy;
				<?php echo date_i18n(
						/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
						_x( 'Y', 'copyright date format', 'whoami' )
					); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
			</p>

      <a class="" title="To Top" id="to-top">
				<?php /* translators: %s: HTML character for up arrow. */
					printf( __( 'Top %s', 'whoami' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' ); ?>
      </a>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
