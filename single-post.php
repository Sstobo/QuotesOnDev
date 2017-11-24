<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <div class="single-post-wrapper">
    <?php get_header(); ?>
    <div class="quote-wrapper">
    <p id="quote"></p> 
    <span id="author"></span><span id="source"></span><span id="link"></span>
    </br>   
    <button type="button" id="new-quote-button"> Show Me Another </button> 
</div>    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
