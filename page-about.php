<?php
/**
 * The main template file.
 * Template Name: About Page
 * @package QOD_Starter_Theme
 */

 ?>
  <?php get_header(); ?>
  
	<div id="primary" class="content-area">

<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


		<main id="main" class="site-main" role="main">


 

   
</main><!-- #main -->
</div>
  

<?php get_footer(); ?>
