<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_')

?>


	<div>
			<?php if( $source && $source_url ):  ?>

		<span class="source"> <a href="<?php echo $source_url; ?>">
					<?php echo $source; ?></a></span>

				<?php elseif( $source ): ?>

					<span class="source"> <a href="<?php echo $source_url; ?>">
					<?php echo $source; ?></a></span> 

		  <?php else: ?>

		    	<span class="source"></span> 

		<?php endif; ?>


</div>



</article><!-- #post-## -->

<?php if( is_home() || is_single() ): ?> 

	
<?php endif;?> 
