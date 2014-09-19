	<?php if ( is_active_sidebar( 'sidebar-primary' ) ) : ?>
	<aside id="primary-widgets" role="complementary">
		<section class="container widget-area">
			<?php dynamic_sidebar( 'sidebar-primary' ); ?>
		</section>
	</aside>
	<?php endif; ?>
