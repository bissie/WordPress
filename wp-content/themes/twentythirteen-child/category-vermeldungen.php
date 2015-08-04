<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
            <header class="archive-header">
                <div class="archive-title"><b><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></b></div>
            </header><!-- .archive-header -->

            <?php $post = get_last_category_post('vermeldungen'); ?>
            <div class="entry-header">
                <h2><a href="<?php the_permalink($postId); ?>" target="_self"><?php echo $post->post_title; ?></a></h2>
            </div>
            <div class="entry-content">
                <p><?php echo $post->post_content; ?></p>
            </div>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
