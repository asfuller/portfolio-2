<?php
/**
 * Template Name: About Page
 */
	get_header();
?>
		<section class="about-wrap">
			<?php
				if(have_posts()) {
					while(have_posts()) {
						the_post();
						get_template_part('template-parts/content', 'pages');
					}
				}
			?>
	    </section>
	<?php
	get_footer();
	?>