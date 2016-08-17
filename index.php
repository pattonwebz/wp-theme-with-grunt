<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="main">
			<?php if ( have_posts() ) :

				// Start the loop.
				while ( have_posts() ) : the_post();

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</header><!-- .entry-header -->

						<?php twentysixteen_post_thumbnail(); ?>

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php
								edit_post_link();
							?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

				<?php
				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'wp-theme' ,
					'next_text'          => __( 'Next page', 'wp-theme' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'wp-theme' ) . ' </span>',
				) );

			else : ?>
				<p>Sorry, no posts found.</p>
			<?php
			endif;
			?>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
