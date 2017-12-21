<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<h1 class="text-align-center padding-bottom-med padding-top-med oswald lgFont singleBlogHeading goldText underlineTeal"> BLOG </h1>

<div class="main-wrap flex flex-direction-column flex-direction-row-tablet flex-direction-row-desktop">
    

	<main class="main-content padding-med bluegreyBackground">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/single-blog' ); ?>
			<div class="commentsBlog width-75-desktop  padding-left-lg-desktop">
            <?php comments_template(); ?>
            </div>
		<?php endwhile;?>
    </main>

    <div class="sidebarBlog greyBorderLeft width-25 displayNone displayBlock-tablet ltgreyBackground padding-top-lg">
        <?php get_sidebar(); ?>
    </div>

</div>
<?php get_footer();
