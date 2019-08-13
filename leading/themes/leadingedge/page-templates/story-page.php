<?php
/*
 Display Template Name: Story Page
*/
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('banner_header_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 
<div class="left-part">
 
 <div class="inner-pages-content-table">
 
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
<?php the_title(); ?>
 </h1>
 <div class="content_part"><?php the_content();?></div>
</div>
</div>
</div>
</div>
<?php endwhile;?> 

<div class="story-page-section">
	<div class="container">
	
		<?php
		$i = 0;
		  while(have_rows('our_story_repeater')): the_row();
		  $image = get_sub_field('story_image');
		?>
		<?php 
		if($i % 2 == 0)
         {
		?>
        	<div class="row">
			<div class="col-md-6">
				<img src="<?php echo $image['url'];?>">
			</div>
			<div class="col-md-6">
				<div class="story-page-content table">
<div class="table-cell">
				 
                <h2><?php the_sub_field('story_title');?></h2>
					<?php the_sub_field('story_content');?>
				</div>
			</div>
            </div>
            </div>
            <?php } else { ?>
           	<div class="row">
            
              <div class="col-md-6 m-show">
				<img src="<?php echo $image['url'];?>">
			</div>
            
            
			<div class="col-md-6">
							<div class="story-page-content right table">
<div class="table-cell">
                <h2><?php the_sub_field('story_title');?></h2>
					<?php the_sub_field('story_content');?>
				</div>
			</div>
            </div>
            <div class="col-md-6 d-show">
				<img src="<?php echo $image['url'];?>">
			</div>
            </div>
          <?php } ?>

		<?php $i++; endwhile; ?>
		 
	</div>
</div>


<?php
get_footer();
?>