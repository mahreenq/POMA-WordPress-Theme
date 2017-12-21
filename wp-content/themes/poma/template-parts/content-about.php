<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



                <div class=" aboutHeader flex align-items-center" style="height: 500px; background-size: auto; background-repeat: no-repeat; background-position: center;background: url('<?php echo $backgroundImg[0] ?>');" >
                        <div class="transparentBlackBg width-75-tablet width-50-desktop ">
                                <h1 class="entry-title oswald goldText lgFont text-align-center padding-top-med text-align-left-tablet padding-left-med-tablet"><?php the_title(); ?></h1>
                                <h3 class="teamDescription aboutDesc padding-med text-align-center whiteText lato400 smFont-tablet text-align-left-tablet padding-left-lg-tablet"> <?php the_content(); ?></h3>
                        </div>
                </div>

		
        <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
          <h1 class="text-align-center padding-bottom-lg padding-top-lg oswald letterSpacingMed blackBackground goldText medFont blackBackground-tablet underlineTeal-tablet">PROGRAMMING</h1>
                    <div class=" width-100 padding-bottom-lg bluegreyBackground padding-top-med padding-bottom-med">

                        <div class="allProgramming flex flex-direction-column align-items-center justify-content-center flex-direction-row-tablet flex-wrap-tablet justify-content-space-around-tablet padding-left-xlg-desktop padding-right-xlg-desktop ">
                                <?php
                                    $args = array( 'post_type' => 'programs', 'posts_per_page' => 4 );
                                    $loop = new WP_Query( $args );
                                    $i=0;
                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                                            <div class ="padding-bottom-lg margin-xsm width-45-tablet goldBorder-tablet ">

                                                    <div class="programmingAboutPage borderRadius-med-tablet" style="height:350px;background:  url('<?php echo $backgroundImg[0]; ?>');background-size:cover; ">
                                                                
                                                                <div class="padding-bottom-lg">   </div>
                                                    </div>

                                                    <div class="flex flex-direction-column align-items-center">
                                                       <h4 class="text-align-center padding-bottom-sm padding-top-sm oswald medFont underlineGold"> <?php the_title(); ?> </h4>
                                                       <div class="text-align-center width-80 smFont lato400"> <?php the_content(); ?> </div>
                                                    </div>
                                             </div>
                                <?php  endwhile; ?>
                        </div>
                    </div>

                        <!-- <div class="padding-bottom-lg">
                        <a href="http://localhost:8888/pieceofminearts/?post_type=programs"> MORE PROGRAMS </a> 
                        </div> -->
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

	</footer>
</article>