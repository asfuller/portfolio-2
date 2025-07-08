<?php
	get_header();
			function featured_img_url() {
				if (has_post_thumbnail()) {
					the_post_thumbnail_url();
				}
			}
?>
<!--Content Here--->
<section class="content">
    <div class="hero" style="background: url(<?php echo featured_img_url(); ?>) 
        no-repeat top center fixed rgba(0,0,0,0.3); background-size:cover; 
        background-position: center !important; background-blend-mode: multiply !important;">
        
        <div class="hero-content">
            <h1 class="title"><?php the_title(); ?></h1>
            <p class="sub-title">WordPress Developer | Tech Admin | AI Enthusiast</p>
        </div>
        

    </div>
    <div class="container">
        <?php get_template_part('template-parts/fpsection', 'content'); ?>
    </div>
</section>
<?php 
get_footer();
?>