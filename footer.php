<?php wp_footer(); ?>
<div id="contact">
  <div class="container">
    <div class="row">
      <h1 class="title text-center">Contact</h1>
      <div class="col-md-6 info">
        <h3>OFFICE :</h3>
				<p>Jl. Rambai Timur No.47 RT.03/03 Kel. Guntug Paikat Kec. Banjarbaru Selatan Kota Banjarbaru - Kalimantan Selatan</p><br>

				<h3>TELEPHONE :</h3>
				<p>0511-5910-183 (Office)</p>
				<br>

				<h3>MOBILE :</h3>
				<p>0811-5114-999 (Mr. Nanda)</p>
				<p>0812-5510-0089 (Mr. Ady)</p>
				<p>0821-5554-6049 (Mrs. Sinta)</p>
				<br>

				<h3>MAILS :</h3>
				<p>sembilan.organizer@gmail.com<br>
				sembilan.adm@gmail.com</p><br>

        <h3>SOCIAL MEDIA :</h3>
        <ul class="sosmed">
          <li><a href="https://www.instagram.com/sembilanorganizer" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/medsos/ig.svg" alt="instagram"></a></li>
					<li><a href="https://www.instagram.com/inicinema_" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/medsos/ig.svg" alt="instagram"></a></li>
					<li><a href="https://www.youtube.com/channel/UCxTeNSWXysxnQNxBQoZv9Vg" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/medsos/yt.svg" alt="youtube"></a></li>
        </ul>
      </div>

      <div class="col-md-6 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1794.6608217739622!2d114.83514839718539!3d-3.446611648230692!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681716654ab6f%3A0x40ade5776c65f0e8!2sSembilan+Organizer!5e0!3m2!1sen!2sid!4v1526873773806" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container text-center">
    &copy; 2018 - Sembilan Organizer | Powered by <strong>Vision Studio</strong>
  </div>
</footer>

<script src="<?= get_template_directory_uri().'/js/plugins.js' ?>"></script>
<script src="<?= get_template_directory_uri().'/js/main.js' ?>"></script>

<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='https://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
