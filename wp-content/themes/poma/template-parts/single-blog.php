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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <div class="" 
                        style="width:90%;height:500px;background:  url('<?php the_post_thumbnail_url(); ?>');background-size:contain; background-position:center; background-repeat: no-repeat;">
        </div>

	<header class=" padding-left-lg-desktop">
	<?php if ( is_single() ) {		
		the_title( '<h1 class="entry-title oswald greyText lgFont">', '</h1>' );
		} else {
		the_title( '<h2 class="entry-title oswald greyText "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
		<div class="xsm-font">
		<?php foundationpress_entry_meta(); ?>
		</div>
	</header>
	<div class="entry-content smFont blogContent width-80-desktop padding-left-lg-desktop">
    
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
