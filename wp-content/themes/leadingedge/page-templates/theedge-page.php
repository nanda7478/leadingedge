<?php
/*
 Display Template Name: The Edge
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

<div class="the-edge-section">
 <div class="container">
  <div class="row">
  <?php
   if(have_rows('the_edge_flexible')):
   while(have_rows('the_edge_flexible')): the_row();
   if(get_row_layout() == 'the_edge_image_and_content'):
   	$image = get_sub_field('the_edge_image')
  ?>
  <div class="col-md-6">
  <div class="right-aircraft table">
<div class="table-cell">
  <h2 class="colored_heading"><?php the_sub_field('the_edge_title'); ?></h2>
  	<?php the_sub_field('the_edge_content'); ?>
  </div>
  </div>
  </div>
  <div class="col-md-6">
  	<div class="the-edge-image img-right">
     <img src="<?php echo $image['url']; ?>">
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

<div class="the-edge-list-section">

 <?php
 	 while(have_rows('the_edge_repeater')): the_row();
 	 $image = get_sub_field('edge_repeater_image');
 	?>
 	<div class="the-edge-block">
 	 <div class="container">
     <div class="row">
 		<div class="col-md-4">
<div class="table">
<div class="table-cell">
 			<img src="<?php echo $image['url'];?>">
            </div>
            </div>
 		</div>
 		<div class="col-md-8">
 			<?php the_sub_field('edge_repeater_content');?>
 		</div>
 	</div>
    </div>
 	</div>
 	<?php endwhile;?>
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