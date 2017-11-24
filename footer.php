<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				
		
				
			</footer><!-- #colophon -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
					<span><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></span>
				
					<span class="footer-span footer-title">Brought to you by </span><span class="green footer-title"> RED Academy</span>
				</nav><!-- #site-navigation -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
