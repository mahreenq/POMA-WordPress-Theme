<?php
function register (){
    $a = array( 'programs' =>'Program Type' ,
                'artists' => 'Artists Type',
                'past events' => 'Event Type',
              );
                          foreach  ( $a as $key => $value )  {
                          $args= get_post_args($key);
                          $taxarg = my_product_taxonomy($value);
                          register_post_type($key, $args, 0);
                          register_taxonomy( $value , $key , $taxarg);
                        }
  }
  add_action( 'init', 'register', 0 );

  
  ?>