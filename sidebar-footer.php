	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
	<aside id="footer-widgets" role="complementary">
		<section class="container widget-area">
			<div class="grid">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</div>
		</section>
	</aside>
	<?php endif; ?>