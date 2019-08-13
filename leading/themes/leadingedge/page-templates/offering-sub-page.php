<?php
/*
  Display Template Name: Offering Sub Page
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
 Offerings
 </h1>
 
 <div class="content_part"><?php the_content();?></div>
</div>
</div>
</div>
</div>
<?php endwhile;?> 

<div class="flexible-block-container">
 <div class="container-fluid">
 	<?php
 	 if(have_rows('flexible_content')):
 	 	while(have_rows('flexible_content')): the_row();
 	 if(get_row_layout() == 'flexible_content_image_and_content'):
 	 	$image = get_sub_field('flexible_content_image');
 	?>
 		<div class="row">
 		<div class="col-md-12 col-lg-6 col-bg" style="background-image: url(<?php echo $image['url'];?>);">
 		</div>
 		<div class="col-md-12 col-lg-6">
        <div class="right-aircraft table">
        <div class="table-cell">
 			<h2 class="colored_heading"><?php the_sub_field('flexible_content_title');?></h2>
 			<?php the_sub_field('flexible_content_body');?>
 			<?php if(!empty(get_sub_field('flexible_content_button_url'))) :?>
 			<a class="btn btn-lg btn-primary colored_outline_btn colored_outline_btn_hover" role="button" href="<?php the_sub_field('flexible_content_button_url');?>"><?php the_sub_field('flexible_content_button_title');?></a>
 			<?php endif; ?>
            </div>
            </div>
 		</div>
 		</div>
 	<?php
 	endif;
 	endwhile;
 	endif;
 	?>
 	</div>
</div>

<div class="offering-subpage-section">
 <div class="container-fluid">
 <div class="subpage-block-row">
 	<?php
 	 if(have_rows('offering_sub_page_flexible')):
 	 	while(have_rows('offering_sub_page_flexible')): the_row();
 	 if(get_row_layout() == 'sub_page_image_and_content'):
 	 	$image = get_sub_field('sub_page_image');
 	?>
 		<div class="row">
 		<div class="col-md-12 col-lg-6 col-bg" style="background-image: url(<?php echo $image['url'];?>);">
 		</div>
 		<div class="col-md-12 col-lg-6">
        <div class="right-aircraft table">
        <div class="table-cell">
 			<h2 class="colored_heading"><?php the_sub_field('sub_page_title');?></h2>
 			<?php the_sub_field('sub_page_content');?>
 			<?php if(!empty(get_sub_field('sub_page_button_url'))) :?>
 			<a class="btn btn-lg btn-primary colored_outline_btn colored_outline_btn_hover" role="button" href="<?php the_sub_field('sub_page_button_url');?>"><?php the_sub_field('sub_page_button_title');?></a>
 			<?php endif; ?>
            </div>
            </div>
 		</div>
 		</div>
 	<?php
 	endif;
 	endwhile;
 	endif;
 	?>
 	</div>
 </div>

</div>

<div class="leading-offer-service">
 <div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<h2>Explore The Full Suite Of Services Leading Edge Has To Offer</h2>
 	</div>
 </div>
 </div>
</div>

<?php
get_footer();
?>