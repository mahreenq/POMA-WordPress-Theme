<?php $query = new WP_Query(array(
    'post_type' => 'artists',
));
if( $query->have_posts() ){
    echo ' <h1 class="text-align-center padding-med oswald medFont goldText letterSpacingMed greyBorder marginNone lgFont-tablet border-none-tablet "> FEATURED ARTISTS</h1>
          <div class="allArtistsHomePage padding-top-med flex width-100 flex-direction-column align-items-center flex-direction-row-tablet justify-content-space-around-tablet padding-top-med-tablet justify-content-space-around-desktop  padding-top-med-desktop">
       ';
} else {
    echo '';
}
?>



 <?php
        $args = array( 'post_type' => 'artists', 'posts_per_page' => 4 );
          $loop = new WP_Query( $args );
          $i=0;
         while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

          <div class="artistHomePage flex flex-direction-column align-items-center justify-content-flex-end width-90 width-45-tablet width-25-desktop " style="height:300px;background:  url('<?php echo $backgroundImg[0]; ?>');background-size:cover; background-position: center;">

         
                  <div class="transparentBlackBg text-align-center width-100 goldText  uppercase">
                        <div class="artistTitleHome medFont oswald ">
                            <a href="<?php echo get_permalink()?>"><?php the_title();?></a>
                        </div>
                </div>
           
                 

                
         </div>
    <?php  endwhile; ?>
</div>




<?php
if( $query->have_posts() ){
    echo ' <div class="padding-med text-align-center medFont oswald ">
    <a class="blackText underlineGold medFont-tablet" href="http://www.pieceofminearts.com/artists/"> MORE ARTISTS </a> 
  </div>';
} else {
    echo '';
}

?>