<?php
/**
 * Plugin Name: Université Nomade
 * Description: Université Nomade du Réseau Dialog
 * Version: 1.0
 * Author: Félix-Antoine Pagé
 * Author URI: http://www.webeniste.com/
 */

  function universitenomade_remove_comment_bubble() {  
      global $wp_admin_bar;  
      $wp_admin_bar->remove_menu('comments');
      $wp_admin_bar->remove_node('new-post');
      $wp_admin_bar->remove_node('new-media');
  }  
  add_action( 'wp_before_admin_bar_render', 'universitenomade_remove_comment_bubble' );  


	add_action( 'admin_menu', 'universitenomade_remove_menu' );

	function universitenomade_remove_menu() {
	    remove_menu_page('edit.php'); 
      remove_menu_page('edit-comments.php');  
	}	



  add_filter('custom_menu_order', 'universitenomade_custom_menu_order');
  add_filter('menu_order', 'universitenomade_custom_menu_order');

   function universitenomade_custom_menu_order($menu_ord) {
       if (!$menu_ord) return true;
       return array(
       		'index.php',
       	//	'edit.php',
       		'edit.php?post_type=edition', // this is a custom post type menu
        	'edit.php?post_type=page',

    	);
   }



    add_action('admin_init', 'universitenomade_remove_dashboard_widgets');
    function universitenomade_remove_dashboard_widgets() {
        remove_action('welcome_panel', 'wp_welcome_panel');
        remove_meta_box('dashboard_welcome-panel', 'dashboard', 'normal'); 
        remove_meta_box('dashboard_activity', 'dashboard', 'normal'); 
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // right now
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // recent comments
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // incoming links
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // plugins
        remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); // quick press
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); // recent drafts
        remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // wordpress blog
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); // other wordpress news
    }


    
    add_action( 'init', 'universitenomade_register_post_type' );


    function universitenomade_register_post_type() {
        
        $labels = array(
          'name'          => "Éditions",
          'singular_name'     => "Édition",
          'menu_name'       => "Éditions",
          'add_new'       => "Ajouter une édition",
          'add_new_item'      => "Ajouter une nouvelle édition",
          'edit'          => "Modifier",
          'edit_item'       => "Modifier l'édition",
          'new_item'        => "Nouvelle édition",
          'view'          => "Voir les éditions",
          'view_item'       => "Voir l'édition",
          'search_items'      => "Recherche d'éditions",
          'not_found'       => "Édition non trouvée",
          'not_found_in_trash'  => "Aucune édition trouvée dans la corbeille",
          'parent'        => "Page parent",
        );
      
        $args = array(
          'labels'      => $labels,
          'public'    => true,
          'has_archive'   => false,
          'rewrite'     => array( 'slug' => 'edition', 'with_front' => false ),
          'supports'    => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
          'hierarchical'  => true,
          'menu_position' => 5,
          'menu_icon'   => "dashicons-book-alt",
          'show_in_nav_menus' => false
        );
      
        register_post_type( 'edition', $args );

        $labels = array(
          'name'          => "Colonnes",
          'singular_name'     => "Colonne",
          'menu_name'       => "Colonnes",
          'add_new'       => "Ajouter une colonne",
          'add_new_item'      => "Ajouter une nouvelle colonne",
          'edit'          => "Modifier",
          'edit_item'       => "Modifier la colonne",
          'new_item'        => "Nouvelle colonne",
          'view'          => "Voir les colonnes",
          'view_item'       => "Voir la colonne",
          'search_items'      => "Recherche de colonnes",
          'not_found'       => "Colonne non trouvée",
          'not_found_in_trash'  => "Aucune colonne trouvée dans la corbeille",
          'parent'        => "Page parent",
        );
      
        $args = array(
          'labels'      => $labels,
          'public'    => true,
          'has_archive'   => false,
          'rewrite'     => array( 'slug' => 'edition', 'with_front' => false ),
          'supports'    => array( 'title', 'editor' ),
          'hierarchical'  => false,
          'menu_position' => 5,
          'menu_icon'   => "dashicons-book-alt",
          'show_in_nav_menus' => false
        );
      
        register_post_type( 'colonne', $args );        
  
    }


?>