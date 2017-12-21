<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



                <div class="eventsHeader flex align-items-center " 
                        style=" height:500px; background-position: center !important; background-size:cover !important; background: url('<?php echo $backgroundImg[0] ?>');" >
                        <div class="width-75 padding-lg padding-left-xlg transparentBlackBg width-50-desktop ">
                                <h1 class="entry-title oswald goldText lgFont uppercase "><?php the_title(); ?></h1>
                                <h3 class="teamDescription lato aboutDesc whiteText padding-top-med smFont"> <?php the_content(); ?></h3>
                        </div>
                </div>

		
                <div class="entry-content padding-right-sm padding-left-sm greyBackground ">

                            <div class= " padding-top-lg padding-bottom-lg padding-right-lg-desktop padding-left-lg-desktop">

                        <?php 
                            $fields = CFS()->get( 'events' );
                    
                             ?>
                
                            <?php  $i=0;
                            foreach($fields as $field) {
                            $group="d-direction-row-tablet";
                                if($i % 2 !== 0){$group ="d-direction-row-reverse-tablet text-align-right justify-content-flex-start-tablet";}  ?>

                                <div class="whiteBackground goldBorder margin-top-sm flex padding-sm align-items-center flex-direction-column <?php echo $group ?> ">

                                    <div class= "width-100 borderRadius-sm height-500 height-600-desktop" style="background:  url('<?php echo $field[picture]; ?>');background-size:cover; background-position:center;">
                                    </div>


                                    <div class= "width-100 padding-med flex flex-direction-column align-self-center blackText">
                                        <span class="tealText padding-top-sm oswald medFont letterSpacingMed"> <?php echo $field[title]; ?></span>
                                        <span class=" smFont padding-top-med greyText line-height30 lato400"><?php echo $field[description] ?></span>
                                        <span class=" smFont padding-top-med lato400 blackText "><?php echo $field[date]; ?></span>
                                        <span class="smFont padding-top-sm lato400 blackText "><?php echo $field[time]; ?></span>
                                        <span class=" smFont padding-top-med lato400 tealText "><?php echo $field[venue]; ?></span>
                                        <span class=" smFont padding-top-sm lato400 "><?php echo $field[address]; ?></span>
                                        
                                          <div class= "flex padding-top-med blackText font400 underlineTeal <?php echo $group ?>  ">
                                                <a class=<?php echo $group ?> href="<?php  echo $field[external_link]; ?>"> MORE DETAILS </a>
                                            </div>
                                    </div>
                                </div>
                                
                        <?php  $i+=1; } ?>
                    </div>
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

	</footer>
</article>

