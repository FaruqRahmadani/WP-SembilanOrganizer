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
		<div id="events">
      <div class="container">
				<div class="col-md-8">
					<h2 class="title"><?= the_title() ?></h2>
            <?php
              if( have_posts() ):
                while( have_posts() ): the_post();
								$categoryName = get_the_category()[0]->name;
								$categoryId = get_the_category()[0]->term_id;
            ?>
                <div class="description"><? the_content() ?></div>
            <?php
                endwhile;
              endif;
            ?>
				</div>
				<div class="col-md-4">
					<div id="widget">
						<div class="box-widget">
							<h3 class="title-widget"><?= $categoryName ?></h3>
							<div id="service-widget">
								<div class="list-widget">
									<?php
										$query = new WP_Query( array( 'category_name' => $categoryName ) );
										if( $query->have_posts() ):
											while( $query->have_posts() ): $query->the_post();
									?>
										<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
									<?php
											endwhile;
										endif;
									?>
								</div>
								<?php if (strtolower($categoryName) == 'portfolio'): ?>
									<a href="<?= get_category_link($categoryId) ?>" class="show">Show All</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
      </div>
    </div>
	</div>

<?php get_footer(); ?>
