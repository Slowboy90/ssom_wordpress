<?php

function ssom_football_clubs() {

  $singular = 'Football club';
  $plural = 'Football clubs';

  $labels = array(
    'name'               => $plural,
    'singular_name'      => $singular,
    'add_name'           => 'Add New',
    'add_new_item'       => 'Add New ' . $singular,
    'edit'               => 'Edit',
    'edit_item'          => 'Edit ' . $singular,
    'new_item'           => 'New ' . $singular,
    'view'               => 'View ' . $singular,
    'view_item'          => 'View ' . $singular,
    'search_item'        => 'Search ' . $plural,
    'parent'             => 'Parent ' . $singular,
    'not_found'          => 'No ' . $plural .' found',
    'not_found_in_trash' => 'No ' . $plural .' in Trash'
  );

  $args = array( 
    'labels'        => $labels,
    'public'        => true, 
    'menu_icon'     => 'dashicons-smiley',
    'menu_position' => 6,
    'rewrite'       => array(
      'slug' => 'clubs',
    ),
    'supports'      => array(
      'title'
    )
  );

  register_post_type( 'club', $args);
}
add_action( 'init', 'ssom_football_clubs');


function ssom_add_football_news_link() {
  global $wp_admin_bar;
  $wp_admin_bar->add_menu( array(
      'id'    => 'football_news',
      'title' => 'Football news',
      'href'  => 'http://voetbalzone.nl'
    ) );
}
add_action( 'wp_before_admin_bar_render', 'ssom_add_football_news_link' );

function ssom_register_taxonomy() {

  $plural = 'Locations';
  $singular = 'location';
  
  $labels = array(
    'name'                       => $plural,
    'singular_name'              => $singular,
    'search_items'               => 'Search ' . $plural,
    'popular_items'              => 'Popular ' . $plural,
    'all_items'                  => 'All ' . $plural,
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit ' . $singular,
    'update_item'                => 'Update ' . $singular,
    'add_new_item'               => 'Add New ' . $singular,
    'new_item_name'              => 'New ' . $singular . ' Name',
    'separate_items_with_commas' => 'Seperate ' . $plural . ' with commas',
    'add_or_remove_items'        => 'Add or remove ' . $plural,
    'choose_from_most_used'      => 'Choose from the most user ' . $plural,
    'not_found'                  => 'No ' . $plural .' found',
    'menu_name'                  => $plural
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'location' ),
  );

  register_taxonomy( 'location', 'club', $args);

};
add_action( 'init', 'ssom_register_taxonomy');
