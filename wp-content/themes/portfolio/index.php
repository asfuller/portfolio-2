<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="divider"></div>

	<section class="blog-page">
		<div class="wrap">

			<div class="page_content blog">

			  <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
              	<?php if(has_post_thumbnail()): ?>
						<div class="feat-img">
							<?php the_post_thumbnail( ); ?>
						</div>
						<?php endif; ?>
					
					<div class="article">
						<a class="blog_title" href="<?php the_permalink() ?>">
							<h2><?php the_title('',''); ?></h2>
						</a>
						<p class="date"><?php the_date(); ?></p>
						<?php the_excerpt(); ?>
						<a class="read-more" href="<?php the_permalink() ?>">Read more</a>
						<p class="tags">Categories: <?php the_category(', '); ?></p>
						<div class="divider"></div>
					</div>

				<?php endwhile; endif; ?>

				<div class="pagination">
					<?php
					global $wp_query;
					
					$big = 999999999; // need an unlikely integer
					
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );
					?>

				</div>

			</div> <!-- end of .page_content -->

			<div class="blogsidebar eventsbar">
				<?php dynamic_sidebar( 'blog_sidebar' ); ?>
			</div>

		</div> <!-- end of .wrap -->
	</section> <!-- end of .page -->

<?php get_footer();