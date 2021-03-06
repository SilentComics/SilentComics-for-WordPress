<?php
/**
 * Archive all comics
 *
 * Comic pages archives, an overview to peruse all stories.
 * It has links to custom comic posts in a second loop.
 *
 * @package WordPress
 * @subpackage Strip
 */

get_header(); ?>
	<section id="primary"
		<main id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
							printf(
								esc_html( 'STORIES %s', 'strip' ), '<span>' .
								single_cat_title( '', false ) . '</span>'
							);
						?>
					</h1>

					<h3 class="taxonomy-description">
						<a href="<?php echo esc_url( home_url( '/series/' ) ); ?>">
						<?php '<span class="meta-nav"' . printf( esc_html_e( 'Series', 'strip' ) ) . '</span>'; ?>
						</a>
					</h3>

					<h4 class="series-title">
					<a href="<?php echo esc_url( home_url( '/story/exile/' ) ); ?>">ExIle</a></h4>
					<h4 class="series-title">
					<a href="<?php echo esc_url( home_url( '/story/tofu/' ) ); ?>">Morning Tofu Chase</a></h4>
					<h3 class="series-title">
					<a href="<?php echo esc_url( home_url( '/story/sentient-drone/' ) ); ?>">Sentient Drone</a></h3>

				<?php
					// Show an optional term description.
					$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					'<div class="taxonomy-description"' . printf( esc_html( '%s', $term_description ) ) . '</div>';
				endif;
				?>
			</header><!-- .page-header -->

<?php
	// Create and run first loop in reverse order.
	$comic = new WP_Query();
	$comic = new WP_Query(
		array(
					'post_type'      => 'comic',
					'posts_per_page' => 12, // optional, changes default Blog pages number set in "reading settings" dashboard.
					'paged'          => $paged,
					'orderby'        => 'title',
					'order'          => 'DESC',
		)
	);

while ( $comic->have_posts() ) : $comic->the_post();
	get_template_part( 'content-comic' );
	// change to 'content' to style it like the blog entry page.
		?>
	<?php endwhile;
						wp_reset_postdata(); ?>

						<div class="wrap">
								<?php the_posts_pagination(); ?>
				</div>

	<?php else : ?>

	<?php get_template_part( 'no-results', 'archive-comic' ); ?>

	<?php endif;
			wp_reset_postdata(); ?>

		</main><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
