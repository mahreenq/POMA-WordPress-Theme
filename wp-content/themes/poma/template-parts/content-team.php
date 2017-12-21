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


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header >
    
    <div class="teamHeader flex align-items-center" style="height: 500px;background-size: cover;background: url('<?php echo $backgroundImg[0] ?>');">
        <div class=" padding-lg transparentBlackBg width-75-tablet width-50-desktop">
                <h4 class="entry-title oswald goldText medlgFont text-align-center text-align-left-tablet "><?php the_title(); ?></h4>
                <h3 class="whiteText lato smFont text-align-center text-align-left-tablet padding-left-med-tablet "> <?php the_content(); ?></h3>
        </div>
</div>
       
	</header>
	<div class="entry-content blackBackground ">

                            <div class= " teamMembers blackBackground padding-top-xl-desktop padding-right-xlg-desktop padding-left-xlg-desktop padding-bottom-lg">

                        <?php 
                            $fields = CFS()->get( 'team_members' );
                    
                             ?>
                
                            <?php  $i=0;
                            foreach($fields as $field) {
                            $group="d-direction-row-tablet d-direction-row-desktop text-align-left-tablet text-align-left-desktop";
                                if($i % 2 !== 0){$group ="d-direction-row-reverse-tablet d-direction-row-reverse-desktop text-align-right-tablet text-align-right-desktop";}  ?>

                                <div class="flex-tablet align-items-center-tablet flex-desktop align-items-center-desktop <?php echo $group ?> ">

                                    <div class= "width-50-tablet" style="height:700px;background:  url('<?php echo $field[picture]; ?>');background-size:cover; background-position:center;">
                                    </div>


                                    <div class= " padding-lg flex flex-direction-column align-self-center width-50-tablet ">
                                        <span class="goldText padding-top-sm lato400 smFont"> <?php echo $field[role]; ?></span>
                                        <span class="whiteText oswald medFont padding-top-sm underlineGold"><?php echo $field[name] ?></span>
                                        <span class="whiteText smFont padding-top-sm lato400 greyText"><?php echo $field[bio]; ?></span>
                                            <div class= "flex padding-top-med medFont smFont-tablet tealText <?php echo $group ?>  ">
                                                <a href="<?php echo $field[instagram_url]; ?>"> <i class="fa fa-instagram greenText padding-right-med " aria-hidden="true"></i>  </a>
                                                <a href="<?php echo $field[twitter_url] ;?>"> <i class="fa fa-twitter greenText padding-right-med " aria-hidden="true"></i> </a>
                                                <a href=" <?php echo$field[facebook_url];?> "> <i class="fa fa-facebook greenText padding-right-med" aria-hidden="true"></i> </a>
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
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>


 



