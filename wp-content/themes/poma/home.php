<?php
/**

 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');?>
<div class="main-wrap "> 

<div class=" flex align-items-center" style=" height: 500px; background-size: 100%;background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo $backgroundImg[0] ?>'); background-position:center;">
        <div class="width-50 padding-lg padding-left-xlg  transparentBlackBg">
                <h1 class="entry-title oswald goldText uppercase letterSpacingMed lgFont "><?php single_post_title(); ?></h1>
        </div>
</div>
	<main class="main-content flex flex-wrap padding-lg justify-content-space-around-tablet justify-content-space-around-desktop padding-right-lg-desktop padding-left-lg-desktop bluegreyBackground">
	<?php echo do_shortcode( '[wmls name="blogposts" id="1"]' ); ?>
	
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</main>


</div>

<?php get_footer();


