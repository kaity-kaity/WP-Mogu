  <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

	<footer class="footer">
		<div class="container">
			<div class="footer_inner">
				<nav>
					<?php
					$args = array(
					'menu' => 'global-navigation',
					'menu_class' => '',
					'container' => false,
					);
					wp_nav_menu($args);
					?>
				</nav>
				<div class="footer_copyright">
					<small>&copy; MOGU All rights reserved.</small>
				</div>
			</div>
		</div>
	</footer>

	<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

  <?php wp_footer(); ?>
</body>
</html>