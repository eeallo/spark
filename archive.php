<?php get_header(); ?>

	<main role="main">
		<div class="container">
			<div class="grid">
				<div class="unit two-of-three">
	
					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
							<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h2>Archive for <?php the_time('Y'); ?>:</h2>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h2>Author Archive</h2>
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h2>Blog Archives</h2>
					<?php } ?>
	
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

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
						
				</div>
				<div class="unit one-of-three">
					<?php get_sidebar(); ?>	
				</div> 
			</div> <!-- end .grid -->
		</div> <!-- end .container -->
	</main>

<?php get_footer(); ?>