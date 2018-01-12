<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-wrap">
	<main class="main-content padding-bottom-med">
	<h1 class="text-align-center lgFont  blackBackground whiteText padding-top-lg padding-bottom-lg uppercase oswald"> Browse through our past events </h1>
	<div class="allPastEvents flex-tablet flex-wrap-tablet justify-content-center-tablet flex-desktop flex-wrap-desktop justify-content-center-desktop padding-lg ltgreyBackground">
	<?php if ( have_posts() ) : ?>

	<?php echo do_shortcode( '[wmls name="pastevents" id="3"]' ); ?>

		<?php else : ?>
			<?php echo '<h1 class = "text-align-center goldText underlineTeal padding-top-xl padding-bottom-xlg blackBackground width-100 " >Please Check Back Later </h1>' ?>

		<?php endif; // End have_posts() check. ?>

</div>	

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
