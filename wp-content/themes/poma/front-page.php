

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>



<div class="main-wrap width-100">
	<main class="main-content ">


    <?php get_template_part( 'template-parts/home-banner' ); ?>
		<?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
       <div class="text-align-center flex flex-direction-column  ">
           <h1 class="text-align-center boldoswald padding-top-med whiteBorder padding-bottom-med lgFont greyBackground oswald "> <?php the_title(); ?> </h1>
           <div class= " homeDescription text-align-center padding-med lato flex-tablet blackBackground whiteText smp3Font justify-content-center-tablet flex-desktop justify-content-center-desktop ">
            <?php the_content(); ?> 
            </div>
        </div>


        <?php endwhile; ?>
        <?php get_template_part( 'template-parts/home-testimonials' ); ?>
        <?php get_template_part( 'template-parts/home-journal' ); ?>
        <?php get_template_part( 'template-parts/home-artists' ); ?>
        <?php get_template_part( 'template-parts/home-mailchimp' ); ?>
        





	</main>


</div>

<?php get_footer();
