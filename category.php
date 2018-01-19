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
						'theme_location' 	=> 'events_menu',
						'container'				=> false,
						'items_wrap' => '%3$s',
					);
					wp_nav_menu($args);
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
								'theme_location' 	=> 'events_menu',
								'container'				=> false,
								'items_wrap' => '%3$s',
							);
							wp_nav_menu($args);
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
            ?>
              <li class="event-item">
                  <div class="date"><?= the_title() ?></div>
                  <div class="description"><? the_content() ?></div>
              </li>
            <?php
                endwhile;
              endif;
            ?>
        	</ul>
      </div>
    </div>
	</div>

<?php get_footer(); ?>
