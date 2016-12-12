<?php

function papakannRessources(){
    // include stylesheets
      wp_enqueue_style('style', get_stylesheet_uri());
}


  // add stylesheets
  add_action('wp_enqueue_scripts', 'papakannRessources');
 ?>
