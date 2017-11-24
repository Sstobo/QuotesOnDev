<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

<!-- Wrapper of archive items - lists -->
    <div id="archive-wrapper">
          

          <h1 class="tag-list">
          <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
                  </header><!-- .page-header -->
      
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
          
          
          
          
          
          <span class="archive-title"> Quote Authors  </span>  <br>    
                <?php
                $posts = get_posts( 'posts_per_page=-1' );
                foreach( $posts as $post ) : setup_postdata( $post );
                  ?>
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endforeach; wp_reset_postdata(); ?>           
           </h1>

          <h1 class="tag-list"><span class="archive-title"> Categories  </span>  <br>
          <?php wp_list_categories('title_li='); ?>  
          </h1>
       

           <h1 class="tag-list"><span class="archive-title"> Tags </span>   <br>
            <?php
             $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC') );
                foreach ( $tags as $tag ) {
                echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '' . ' </a></li>';
                }?>
          </h1>
    </div>
 
  

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
