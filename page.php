<?php 
get_header();
?>

<?php $headerimage = wp_get_attachment_image_src(get_field('events_header_image','option'), 'header-image'); ?>
<div class="wide-container hero <?php the_field('header_size');?>" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
  <div class="hero-inner reveal">
      <h1><?php the_title();?></h1>
  </div>
</div>

<div class="wide-container content-section <?php the_sub_field('padding_setting'); ?>">
	<div class="container">		
		
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>		
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
		
	</div>
</div>



<?php get_footer(); ?>