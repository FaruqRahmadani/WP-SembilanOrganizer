<?php
  function load_theme()
  {
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/main.css');
  }

  add_action( 'wp_enqueue_scripts', 'load_theme' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus(array(
    'main_menu'   => 'Menu Utama',
    'portfolio_menu' => 'Menu Portofolio'
  ));

  function main_menu(){
    $args = array(
      'theme_location'  => 'main_menu',
      'container'       => false,
      'items_wrap' => '%3$s',
    );
    if ( has_nav_menu( 'main_menu' ) ) :
      wp_nav_menu($args);
    else:
      echo '<li><a href="'.admin_url().'nav-menus.php" class="page-scroll">ADD MENU</a></li>';
    endif;
  }

  function portfolio_menu(){
    $args = array(
      'theme_location'  => 'portfolio_menu',
      'container'       => false,
      'items_wrap' => '%3$s',
    );
    if ( has_nav_menu( 'portfolio_menu' ) ) :
      wp_nav_menu($args);
    else:
      echo '<li><a href="'.admin_url().'nav-menus.php" class="page-scroll">ADD MENU</a></li>';
    endif;
  }
?>
