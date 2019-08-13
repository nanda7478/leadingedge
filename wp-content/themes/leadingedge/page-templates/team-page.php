<?php
/*
 Display Template Name: Team Page
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

<div class="team-page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php the_field('team_page_content');?>
			</div>
		</div>
	</div>
</div>

<div class="team-post-section">
	<div class="container">
		<article>
          <?php $args = array(
           'post_type' => 'teams' ,
           'order' => 'DASC' ,
           'posts_per_page' => -1,
        
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
			<section>
				<a class="blog-thumb-img" href="<?php the_permalink();?>" title="">
          <div class="ssss"> </div>
					 <img class="hovers" src="<?php the_field('hover_effects_images'); ?>" />
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

    <div class="hover-title-position">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <span class="team-position"><?php the_field('team_position');?></span>
    </div>

     <!-- <?php
    if(get_field('hover_effects_images')):
    $wimg = get_field('hover_effects_images');?>
     <a class="blog-thumb-img image-hover-effects" href="<?php the_permalink();?>" title="">
     <img class="img-responsive flsd"  src="<?php echo $wimg['url']; ?>" />
     </a>
<?php endif;?> -->
    </section>
           <?php endwhile; ?>
           <?php endif; ?>
           <?php wp_reset_postdata(); ?>
		</article>
	</div>
</div>


<div class="history-planning-section">
<?php $args = array(
           'post_type' => 'page' ,
           'name' => 'team' ,
            ); ?>
<?php query_posts($args); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
  if( have_rows('history_spanning_flexible') ): 
    while ( have_rows('history_spanning_flexible') ) : the_row();
    if( get_row_layout() == 'history_spanning_image_and_content' ):
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

<?php
 endif;
endwhile;
endif;
  ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>

<style type="text/css">
  article {
 -moz-column-width: 234px;
 -webkit-column-width: 234px;
 -moz-column-gap: 1em;
 -webkit-column-gap: 1em; 
  
}

section {
 display: inline-block;
 margin:  0.25rem;
 padding: 0px;
 width:  100%; 
}

</style>
<?php
get_footer();
?>