<?php
    function register_svh_menus() {
        register_nav_menus([
            'main-menu' => __( 'Menu_chinh' )
        ]);
    }
    add_action('init', 'register_svh_menus');

    //Title
    add_action( 'after_setup_theme', 'gettitle' );
    function gettitle() {

        add_theme_support( 'title-tag' );

    }

    add_filter( 'wp_title', 'custom_titles', 10, 2 );
    function custom_titles( $title, $sep ) {

        //Check if custom titles are enabled from your option framework
        if ( ot_get_option( 'enable_custom_titles' ) === 'on' ) {
            //Some silly example
            $title = "Some other title" . $title;;
        }

        return $title;
    }
     //Translate 
     function Wpshare247_theme_setup(){
        load_theme_textdomain( 'Wpshare247_text_domain' ,get_template_directory() . '/languages' );
    }
    add_action( 'after_setup_theme', 'Wpshare247_theme_setup' );
    //background
    $args = array(
    'default-color' => '0000ff',
    'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
);
add_theme_support( 'custom-background', $args );

//
function wpb_reverse_comments($comments) {
    return array_reverse($comments);
}  
add_filter ('comments_array', 'wpb_reverse_comments');
    
?>