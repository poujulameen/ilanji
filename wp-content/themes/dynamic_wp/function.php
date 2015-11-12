<?php 
function register_my_menus() {
      register_nav_menus(
        array(
          'primary' => __( 'Primary' ),
          'secondary' => __( 'Secondary' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );
 ?>

    