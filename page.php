<?php get_header(); ?>

	<main role="main">
		<div class="container">

			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title"><?php the_title(); ?></h2>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				
				<div class="entry-meta">
					<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</div>
			</article>

			<?php endwhile; ?>

			<nav role="navigation">
				<?php posts_nav_link(); ?>
			</nav>

			<?php endif; ?>					

		</div> <!-- end .container -->
	</main>

<?php get_footer(); ?>