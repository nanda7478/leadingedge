<?php
/*
 Display Template Name: Inventory Page
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

<div class="inventory-page-section">
 <div class="container">
 
  <?php $tab =  (isset($_GET['tab']) && ($_GET['tab'] > 0) && ($_GET['tab'] < 4))?$_GET['tab']:1;  ?>



  <ul class="quick-list nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link  <?php echo ($tab == 1)?'active show':''; ?>" href="#sale" role="tab" data-toggle="tab">For Sale</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo ($tab == 2)?'active show':''; ?>" href="#sold" role="tab" data-toggle="tab">Sold</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo ($tab == 3)?'active show':''; ?>" href="#wanted" role="tab" data-toggle="tab">Wanted</a>
  </li>
</ul>


<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in <?php echo ($tab == 1)?'active show':''; ?>" id="sale">
<div class="row">
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
<?php $args = array(
           'post_type' => 'our-inventory' ,
           'order' => 'ASC' ,
           'posts_per_page' => 6,
           'paged' => $paged,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'inventory_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'for-sale'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-6">
        <div class="inventory-image-content">
        <div class="inventory-image-block">
        	<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
        </div>
        <div class="inventory-content-block">
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<div class="inventory-price"><?php the_field('price');?></div>
			<div class="raw-bar-content">
             <?php the_content();?>
			</div>
			</div>
                        <div class="clr"></div>
         </div>
        </div>
        


			<?php endwhile; ?>
      
       <div class="nav-links">
       <?php
		echo paginate_links( array(
			'type'      => 'our-inventory',
			'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
		) );
		?>
		</div>
		<?php wp_reset_postdata(); ?>

 </div>
</div><!-- tabpanel end -->

<div role="tabpanel" class="tab-pane fade <?php echo ($tab == 2)?'active show':''; ?>" id="sold">
<div class="row">
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
<?php $args = array(
           'post_type' => 'our-inventory' ,
           'order' => 'ASC' ,
           'posts_per_page' => 6,
           'paged' => $paged,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'inventory_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'sold'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-6">
        <div class="inventory-image-content">
        <div class="inventory-image-block">
        	<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
        </div>
        <div class="inventory-content-block">
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<div class="inventory-price"><?php the_field('price');?></div>
			<div class="raw-bar-content">
             <?php the_content();?>
			</div>
			</div>
                        <div class="clr"></div>
         </div>
        </div>
        


			<?php endwhile; ?>
   
       <div class="nav-links">
        <?php
		echo paginate_links( array(
			'type'      => 'our-inventory',
			'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
		) );
		?>
		</div>
		<?php wp_reset_postdata(); ?>

 </div>

</div><!-- tabpanel end -->

<div role="tabpanel" class="tab-pane fade <?php echo ($tab == 3)?'active show':''; ?>" id="wanted">
<div class="row">
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
<?php $args = array(
           'post_type' => 'our-inventory' ,
           'order' => 'ASC' ,
           'posts_per_page' => 6,
           'paged' => $paged,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'inventory_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'wanted'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-6">
        <div class="inventory-image-content">
        <div class="inventory-image-block">
        	<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
        </div>
        <div class="inventory-content-block">
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<div class="inventory-price"><?php the_field('price');?></div>
			<div class="raw-bar-content">
             <?php the_content();?>
			</div>
			</div>
            <div class="clr"></div>
         </div>
        </div>
        


	<?php endwhile; ?>
       <div class="nav-links">
        <?php
		echo paginate_links( array(
			'type'      => 'our-inventory',
			'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
		) );
		?>
		</div>
		<?php wp_reset_postdata(); ?>

 </div>

</div><!-- tabpanel end -->

</div>
</div>
</div>
<?php
get_footer();
?>