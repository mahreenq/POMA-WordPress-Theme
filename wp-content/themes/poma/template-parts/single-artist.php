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

<article id="post-<?php the_ID(); ?>" class=" padding-top-xl padding-bottom-xlg flex-tablet flex-direction-column align-items-center-tablet justify-content-center-tablet">


        <div class=" width-100 width-50-tablet width-50-desktop" 
                        style="height:600px;background:  url('<?php the_post_thumbnail_url(); ?>');background-size:contain; background-position:center; background-repeat: no-repeat;">
        </div>

		<div class=" flex-tablet flex-direction-column-tablet width-80-tablet width-60-desktop">
	<header class=" ">
	<?php if ( is_single() ) {		
		the_title( '<h1 class="entry-title padding-top-med oswald greyText lgFont text-align-center uppercase">', '</h1>' );
		} else {
		the_title( '<h2 class="entry-title oswald padding-top-med greyText text-align-center uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
	</header>
	<div class="entry-content padding-sm  text-align-center padding-bottom-med-tablet smFont lato">
    
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

		</div>
</article>
