<div class="width-100 flex justify-content-center">
                <h1 class="text-align-center padding-med oswald medFont uppercase underlineGold medFont-tablet  "> Follow our blog and keep up with the latest news </h1>
                </div>


<div class="blogshomepage powderBlueBackground padding-top-lg flex flex-direction-column justify-content-space-around flex-tablet flex-direction-row-tablet  flex-desktop flex-direction-row-desktop ">

            <?php
            global $query_string;
                    query_posts ('posts_per_page=3');
            while ( have_posts() ) : the_post();  ?>
            <div class ="width-100 flex flex-direction-column align-items-center  width-45-tablet width-25-desktop">
                <div class="bloghomepage solidgreyborderallaround padding1rem margin-xsm width-100" 
                style="height:250px;background:  url('<?php the_post_thumbnail_url(); ?>');background-size:cover; background-position:center;">
                
                 <?php if ( 'post' === get_post_type() ) : ?>
                         <div class="entry-meta">
                         </div><!-- .entry-meta -->

                 <?php endif; ?>


                    </div>
        
                    <h3 class="uppercase oswald journalTitleHome text-align-center medFont tealText "><?php the_title(); ?> </h3>
                    <?php
                    echo '<h4 class="lato400 greyText smFont"><a   href="'.get_permalink().'"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>READ ENTRY </a> </h4> '; ?>
            </div>

            <?php endwhile; ?>

</div>