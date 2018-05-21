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
      <?php portfolio_menu() ?>
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
          <?php portfolio_menu() ?>
        </ul>
      </div>
    </nav>
  </div>
</header>

<div id="main">
  <div id="portfolio">
    <div class="container">
      <h1 class="title text-center"><?= $categoryName = single_cat_title() ?></h1>
        <ul id="list-portfolio">
          <?php
            if( have_posts() ):
              while( have_posts() ): the_post();
          ?>
            <li class="portfolio-item">
                <a href="<?= the_permalink() ?>"><?= wp_trim_words(get_the_title(), 10, '') ?></a>
            </li>
          <?php
              endwhile;
            endif;
          ?>
        </ul>
        <div class="btn-pagination">
          <?php previous_posts_link()  ?>
        </div>
        <div class="btn-pagination">
          <?php next_posts_link();  ?>
        </div>

    </div>
  </div>
</div>

<?php get_footer() ?>
