<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
 
  
    </main><!-- #main -->
   <form class="form">
  <input class="title" type="text" name="title">The Title<br>
  <input class="content" type="text" name="content">Your Quote<br>
  <input class="source" type="text" name="source">Your  Name<br>
  <input class="sourceUrl" type="text" name="sourceUrl">Your Email<br>
  
</form>
<button type="button" class="submit-quote"> Submit Quote </button>
	</div><!-- #primary -->
 

<?php get_footer(); ?>