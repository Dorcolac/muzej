<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">
	<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>

			<h2 class="rad-autor"><span>Приредио/ла: </span><br><span><?php the_field("autor"); ?></span></h2>
			<br>
			<hr>
			<h2 class="rad-faks"><span><?php the_field("fakultet"); ?></span></h2>
			<br>
			<hr>
			<h2 class="rad-izvori"><span>Извори: </span><br><span><?php the_field("izvori"); ?></span></h2>
			
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</aside><!-- #secondary -->
