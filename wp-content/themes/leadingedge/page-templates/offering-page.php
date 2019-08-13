<?php
/*
 Display Template Name: Offering Page
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

<div class="leas-offerings-section">
 <div class="container">
  <div class="row">
  <?php
   if(have_rows('leas_offerings')):
   while(have_rows('leas_offerings')): the_row();
   if(get_row_layout() == 'leas_offerings_image_and_content'):
   	$image = get_sub_field('leas_offerings_image')
  ?>
  <div class="col-lg-6">
  <div class="right-aircraft table">
  <div class="table-cell">
<h6>  	<?php the_sub_field('leas_offerings_content'); ?> </h6>
</div>
</div>
  </div> 
  <div class="col-lg-6 col-bg" style="background-image: url(<?php echo $image['url']; ?>);">
 

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