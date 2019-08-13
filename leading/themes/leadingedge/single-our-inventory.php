<?php
/**
 * The template for displaying all single our-inventory and attachments
 */

get_header(); ?>

<div class="single-inventory-header inner-pages-banner">
<div class="container">
<div class="row">
<?php
while(have_posts()): the_post();
?>

<div class="col-lg-6">
	<a class="blog-thumb-img" href="<?php the_permalink();?>" title="">
					<?php
			if ( has_post_thumbnail() ) {
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />'; 
           }
          }
         ?>
		</a>
</div>
<div class="col-lg-6">
 <div class="inner-pages-content-table">
<div class="inner-pages-content-table-cell">
<h1>Inventory</h1>
 <div class="content_part">  <?php the_title();?> </div>
 <div class="pdf-button">
<a class="btn-2" href="<?php the_field('pdf_url');?>">View Pdf</a>
</div>
</div>

</div>
</div>
<?php
endwhile;
?>
</div>
</div>
</div>

<div class="airfram-inventory-section">
  <div class="container">
  <?php
  while(have_posts()) : the_post();
  ?>
  <?php
  while(have_rows('airframe_repeater')) : the_row();
  ?>
  	<div class="row">
  		<div class="col-lg-12"> 
  		<h2 class="sub-tittle"><span> <?php the_sub_field('airframe_title');?></span> </h2>
  		<div class="inventory-price"><?php the_sub_field('airframe_price');?></div>
			<div class="raw-bar-content">
             <?php the_sub_field('airframe_content');?>
			</div>
  			
  		</div>
  	</div>
  <?php endwhile;?>

  <div class="pdf-btn">
<a class="btn-2" href="<?php the_field('pdf_url');?>">View Pdf</a>
</div> 
  	<?php
  	endwhile;
  	?>
  </div>	
</div>


<?php
get_footer();
?>