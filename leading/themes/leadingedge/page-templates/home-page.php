<?php
/*
  Display Template Name: Home Page
*/
get_header();
?>
<div class="slider_section">
  <div class="row">
  <div class="col-md-12">
  <div class="wireship_slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
           <?php
              $z = 0;            
              while( have_rows('home_slider') ): the_row();            
              $image = get_sub_field( 'slider_image' ); ?>       
            
         <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>" style="background-image: url(<?php echo $image['url']; ?>); ">
                 
            <div class="container carousel-caption-table">
            <div class="carousel-caption-table-cell text-left">                          
            <h1><?php the_sub_field('slider_title');?></h1>   
            </div>
           </div>   
         </div>
         <?php
         $z++;           
        endwhile; ?>
      </div>
</div>
</div>
</div>
</div>
</div>

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

<div class="history-planning-section">
<?php
  if( have_rows('history_section') ): 
    while ( have_rows('history_section') ) : the_row();
    if( get_row_layout() == 'history_image_and_title' ):
     ?>
   <?php $image = get_sub_field('history_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="container">
 <div class="icon-title-button">
 <h2 class="big_white_heading"><?php the_sub_field('history_title');?></h2>
 <a class="btn btn-lg btn-primary" href="<?php the_sub_field('history_button_url');?>" role="button" target="_blank"><?php the_sub_field('history_button_title');?></a>
  </div>
 </div>


</div>

<div class="aircraft-business-section">
	<div class="container">
		<div class="row">
		<?php
         while(have_rows('aircraft_business')) : the_row();
         $image = get_sub_field('business_icon');
		?>
			<div class="col-md-4">
				<img src="<?php echo $image['url'];?>">
				<div class="business-total"><span class="count"><?php the_sub_field('business_total');?></span><?php the_sub_field('business_unit');?></div>
				<div class="business-type"><?php the_sub_field('business_type');?></div>
			</div>

		<?php endwhile; ?>
		</div>
	</div>
</div>


<div class="our-inventory-section">
<div class="container">
<h2 class="main-head">Our Inventory</h2>
 <div class="row">
 <?php
  while(have_rows('our_inventory_section')) : the_row();
  $image = get_sub_field('inventory_image');
 ?>
 <div class="col-md-4">
 <img src="<?php echo $image['url'];?>">
 <h4 class="inventory-heading"><?php the_sub_field('inventory_title');?></h4>
 </div>

<?php endwhile;?>
</div>
<a class="btn btn-lg btn-primary colored_outline_btn colored_outline_btn_hover" role="button" href="#">Our Inventory</a>
</div>
</div>

<div class="industry-experience-section">
<div class="container">
 <div class="row">
	 <div class="col-md-12 inner-block">
	 	<?php echo get_field('industry_experience'); ?>
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


<?php
get_footer();
?>