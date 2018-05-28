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
        <li><a href="#home" class="page-scroll" onclick="closeNav()">HOME</a></li>
        <li><a href="#about" class="page-scroll" onclick="closeNav()">ABOUT</a></li>
        <?php main_menu() ?>
        <li><a href="#service" class="page-scroll" onclick="closeNav()">SERVICE</a></li>
        <li><a href="#our-team" class="page-scroll" onclick="closeNav()">OUR TEAM</a></li>
        <li><a href="#contact" class="page-scroll" onclick="closeNav()">CONTACT</a></li>
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
            <li><a href="#home" class="page-scroll" onclick="closeNav()">HOME</a></li>
            <li><a href="#about" class="page-scroll" onclick="closeNav()">ABOUT</a></li>
            <?php main_menu() ?>
            <li><a href="#service" class="page-scroll" onclick="closeNav()">SERVICES</a></li>
            <li><a href="#our-team" class="page-scroll" onclick="closeNav()">OUR TEAMS</a></li>
            <li><a href="#contact" class="page-scroll" onclick="closeNav()">CONTACT</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <div id="main">
    <section id="showslide">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <?php
          $query = new WP_Query( array( 'category_name' => 'Slider' ) );
          if( $query->have_posts() ):
        ?>
          <ol class="carousel-indicators">
          <?php
            $index = 0;
            while( $query->have_posts() ): $query->the_post();
              if( has_post_thumbnail() ):
          ?>
            <li data-target="#myCarousel" data-slide-to="<?= $index ?>" class=" <?= $index == 0 ? 'active' : '' ?> ">
          <?php
                $index+=1;
              endif;
            endwhile;
          ?>
          </ol>

          <div class="carousel-inner">
            <?php
              $index = 0;
              while( $query->have_posts() ): $query->the_post();
                if( has_post_thumbnail() ):
            ?>
            <div class="item <?= $index == 0 ? 'active' : '' ?>">
              <img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= the_title() ?>" style="width:100%;">
            </div>
            <?php
                  $index+=1;
                endif;
              endwhile;
            endif;
            ?>
          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>

      <div id="about">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="<?= get_template_directory_uri() ?>/img/about2.jpg" alt="thumb">
            </div>
            <div class="col-md-6">
              <h1 class="title">About Us</h1>
              <p><strong>Sembilan Organizer</strong> di dukung oleh High Quality Concept dan Proffesionally Skilled &amp; Highly Motivated Developing Team.</p>
              <p>Kami berusaha untuk memberikan yang terbaik guna memenuhi komitmen kami dalah hal jasa pelayanan di bidang penyelenggaraan berbagai acara.</p>
              <p>Kami akan memberikan solusi bagi apapun jenis kegiatan anda, baik internal maupun eksternal dengan kreatifitas dan kualitas terbaik!</p>
              <a target="_blank" href="http://assets.sembilanorganizer.co.id/CompanyProfileSembilanOrganizer.pdf" class="show">Download Profil Lengkap Kami</a>
            </div>
          </div>
        </div>
      </div>

      <div id="service">
        <div class="container">
          <h1 class="title text-center">Services</h1>
          <div class="list-service">
            <?php
              $query = new WP_Query( array(
                'category_name' => 'Services',
                'posts_per_page' => 101012011,
              ) );
              if( $query->have_posts() ):
                while( $query->have_posts() ): $query->the_post();
            ?>
              <div class="service-item">
                <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
              </div>
            <?php
                endwhile;
              endif;
            ?>
          </div>
        </div>
      </div>

      <div id="client">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">
              <h1 class="title text-center">Clients</h1>
              <ul id="list-client">
                <?php
                  $query = new WP_Query( array(
                    'category_name' => 'Clients',
                    'posts_per_page' => 101012011,
                  ) );
                  if( $query->have_posts() ):
                    while( $query->have_posts() ): $query->the_post();
                      if( has_post_thumbnail() ):
                ?>
                <li><img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= the_title() ?>"></li>
                <?php
                      endif;
                    endwhile;
                  endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div id="our-team">
        <div class="container">
          <h1 class="title text-center">Our Team</h1>
          <div class="row">
            <ul id="list-team">
              <?php
                $query = new WP_Query( array(
                  'category_name' => 'Teams',
                  'posts_per_page' => 101012011,
                ) );
                if( $query->have_posts() ):
                  while( $query->have_posts() ): $query->the_post();
                    if( has_post_thumbnail() ):
                      $PostId  = get_the_ID();
                      $ImgSrc  = wp_get_attachment_url(get_post_thumbnail_id());
                      $Nama    = get_post_meta($PostId, 'Nama', true);
                      $Jabatan = get_post_meta($PostId, 'Jabatan', true);
              ?>
              <li class="team">
  							<img src="<?= $ImgSrc ?>" alt="<?= $Nama ?>" class="img-circle img-team"/>
  							<span class="name"><?= $Nama ?></span>
  							<span class="job"><?= $Jabatan ?></span>
  						</li>
              <?php
                    endif;
                  endwhile;
                endif;
              ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

<?php get_footer() ?>
