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
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

<div class="eventsHeader flex align-items-center" 
                        style="  height:500px; background-size:cover; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $backgroundImg[0] ?>');" >
                        <div class="width-75 padding-lg padding-left-xlg transparentBlackBg width-50-desktop">
                                <h1 class="entry-title oswald goldText lgFont"><?php the_title(); ?></h1>
                    
                        </div>
                </div>



	<div class="entry-content padding-right-lg padding-left-lg padding-bottom-med lato700 padding-top-lg blackBackground sm2Font whiteText text-align-center text-align-left-tablet">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
