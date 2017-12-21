<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="main-wrap">
	<main class="main-content greyBackground powderBlueBackground">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/single-pastevent' ); ?>
			<div class="width-80 width-60-desktop padding-left-lg-tablet padding-left-lg-desktop"> 
			<?php comments_template(); ?>
			<div>
		<?php endwhile;?>
	</main>
</div>
<?php get_footer();
