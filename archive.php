<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			
					<div class="content">	<?php echo get_the_content();  ?></div>
					<span class="author"><?php echo '-', get_the_title(); ?> </span>
<?php
					get_template_part( 'template-parts/content' );
					?><br><?php 
				
					echo get_the_title( post );
				?><br>
				<div class="border"><div>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<?php	get_header(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
