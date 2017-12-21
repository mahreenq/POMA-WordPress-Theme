<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" class="greyBackground whiteBorder borderRadius-sm width-50-tablet width-32-desktop padding-sm ">

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    <div style="height: 300px;background: url('<?php echo $backgroundImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
	</div>

	<div class="entry-content">

        <h2 class="text-align-center medFont oswald greyText underlineGold uppercase"> <?php the_title(); ?> </h2>
        <div class="text-align-center smFont lato padding-top-sm"> <?php the_excerpt(); ?> </div>
        <?php echo '<div class=" text-align-center oswald "> <a class="underlineTeal medFont" href="'.get_permalink().'"> READ MORE</a> </div> '; ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>

</article>
