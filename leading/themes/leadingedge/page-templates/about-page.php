<?php
/*
 Display Template Name: About Page
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

<div class="flexible-block-container">
 <div class="container-fluid">
 	<?php
	 	$counter = 0;
 	 if(have_rows('flexible_content')):
 	 	while(have_rows('flexible_content')): the_row();
 	 if(get_row_layout() == 'flexible_content_image_and_content'):
 	 	$image = get_sub_field('flexible_content_image');
 	?>
 		<div id="<?php echo 'row-'.$counter; ?>" class="row">
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
 	$counter++;
 	endwhile;
 	endif;
 	?>
 	</div>
</div>

<div class="row">
<?php
  if( have_rows('our_mission') ):
  while ( have_rows('our_mission') ) : the_row();
  if( get_row_layout() == 'our_mission_image_and_content' ):
 ?>

<div class="col-md-6 desktop-view-div">
<?php $image = get_sub_field('our_mission_image'); ?>
<img src="<?php echo $image['url'];?>">
</div>

<div class="col-md-6">
<div class="right-who table">
<div class="table-cell">
<h2 class="colored_heading"><?php the_sub_field('our_mission_title');?></h2>
<div class="who-content">
<?php the_sub_field('our_mission_content');?>
</div>
<a class="btn btn-lg btn-primary colored_outline_btn colored_outline_btn_hover" role="button" href="<?php the_sub_field('our_mission_button_url');?>"><?php the_sub_field('our_mission_button_title');?></a>
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

  <div class="nara-section">
  <div class="container">
  <div class="row">
  <?php
  if( have_rows('nara_section') ):
  while ( have_rows('nara_section') ) : the_row();
  if( get_row_layout() == 'nara_content_and_title' ):
  	$image = get_sub_field('nara_logo');
  	$image2 = get_sub_field('nara_logo_2');
 ?>
  	<div class="col-lg-12">
  		<div class="nara-image">
  		<img src="<?php echo $image['url'];?>">
  		<img src="<?php echo $image2['url'];?>">
  		</div>
  		<div class="nara-content">
       <?php the_sub_field('nara_content_one');?>
  		</div>
  		<div class="nara-content-one">
       <h2><?php the_sub_field('nara_title');?></h2>
       <?php the_sub_field('nara_content_two');?>
       <a class="btn btn-lg btn-primary colored_outline_btn colored_outline_btn_hover" role="button" href="<?php the_sub_field('nara_button_url');?>"><?php the_sub_field('nara_button_title');?></a>
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



<?php
get_footer();
?>