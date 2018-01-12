<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="main-wrap">
	<main class="main-content ">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/single-artist' ); ?>
			
		<?php endwhile;?>
	</main>
</div>
<?php get_footer();
