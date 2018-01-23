<?php get_header(); ?>
<div id="btn-resv">
  <span onclick="openNav()" class="glyphicon glyphicon-align-justify" style="display: none"></span>
</div>


<div id="menu-resv" class="overlay">
  <div id="cls-resv">
    <span onclick="closeNav()">&times;</span>
  </div>

  <div class="overlay-content">
    <ul>
      <?php
        $args = array(
          'theme_location'  => 'events_menu',
          'container'       => false,
          'items_wrap' => '%3$s',
        );
        if ( has_nav_menu( 'events_menu' ) ) :
          wp_nav_menu($args);
        endif;
      ?>
    </ul>
  </div>
</div>

<header class="large">
  <div class="container">
    <div class="logo pull-left">
      <img src="<?= get_template_directory_uri() ?>/img/logo2.png" alt="Sembilan"/ class="animate">
    </div>

    <nav class="navbar">
      <div class="container">
        <ul class="nav navbar-nav pull-right">
          <?php
            $args = array(
              'theme_location'  => 'events_menu',
              'container'       => false,
              'items_wrap' => '%3$s',
            );
            if ( has_nav_menu( 'events_menu' ) ) :
              wp_nav_menu($args);
            else:
          ?>
              <li><a href="/" class="page-scroll">HOME</a></li>
          <?php
            endif;
          ?>
        </ul>
      </div>
    </nav>
  </div>
</header>

<div id="main">
  <div id="events">
    <div class="container">
      <h1 class="title text-center">EVENTS</h1>
        <ul>
          <?php
            if( have_posts() ):
              while( have_posts() ): the_post();
                $PostId = get_the_ID();
          ?>
            <li class="event-item">
              <a href="<?= the_permalink() ?>">
                <div class="date"><?= the_title() ?></div>
              </a>
              <div class="date"><?= get_post_meta($PostId, 'Waktu', true) ?></div>
              <div class="date"><?= get_post_meta($PostId, 'Lokasi', true) ?></div>
            </li>
          <?php
              endwhile;
            endif;
          ?>
        </ul>
    </div>
  </div>
</div>

<?php get_footer() ?>
