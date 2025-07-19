<?php
	get_header();
			function featured_img_url() {
				if (has_post_thumbnail()) {
					the_post_thumbnail_url();
				}
			}
?>
<!--Hero Here--->
<section class="py-5 bg-white bg-gradient hero">
    <div class="container px-4 text-center hero-content">
      <h1 class="title text-dark"><?php the_title(); ?></h1>
      <p class="lead">WordPress Developer | Tech Admin | AI Enthusiast</p>
      <div class="buttons">
                <button class="portfolio-btn">View my portfolio</button>
                <button class="hire-btn">Hire me</button>
      </div>
    
    <!--<div class="row align-items-center">
      
      <!-- Left Column: Text --
      <div class="col-lg-6 mb-4 mb-lg-0 hero-content">
        <h1 class="display-5 fw-bold text-dark"><?php //the_title(); ?></h1>
        <p class="lead text-muted mb-4">WordPress Developer | Tech Admin | AI Enthusiast</p>
        <div class="buttons">
                <button class="portfolio-btn">View my portfolio</button>
                <button class="hire-btn">Hire me</button>
            </div>
      </div>
      
      <!-- Right Column: Image --
      <div class="col-lg-6 text-center">
        <img src="<?php //echo featured_img_url(); ?>" class="hero-img" srcset="">
      </div>-->
    </div>
    </div>
  </div>
</section>

<!--Main Content Here-->
    <div class="container">
        <?php get_template_part('template-parts/fpsection', 'content'); ?>
    </div>
</section>
<?php 
get_footer();
?>