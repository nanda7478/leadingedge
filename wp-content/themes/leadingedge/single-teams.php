<?php
/**
 * The template for displaying all single teams and attachments
 */

get_header(); ?>

<div class="single-team-header">
<div class="container">
<div class="row">
<?php
while(have_posts()): the_post();
?>

<div class="col-md-5">
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
<div class="col-md-7">
<div class="teams-header-title-image">
 <h2><span> <?php the_title();?> </span>  <?php the_field('team_position');?></h2>
</div>
</div>

<?php
endwhile;
?>
</div>
</div>
</div>

<div class="team-post-section">
	<div class="container">
<div class="row">
<?php
while(have_posts()): the_post();
?>

<div class="col-lg-12">
 <h2><?php the_title();?> <span class="socials">
 <?php
 while(have_rows('social_profile')): the_row();
 ?> 
 <a href="<?php the_sub_field('social_link');?>"><i class="fa fa-linkedin"></i></a> 
<?php endwhile;?>
 </span> </h2>  
<div class="content-section">
	<?php the_content();?>
</div>
</div>

<?php
endwhile;
?>
</div>

<div class="row"><div class="col-sm-12">
 <div class="back-to-news">
   <br /> <a href="<?php echo site_url();?>/team/"> <i class="fa fa-long-arrow-left"></i> Back </a>
    </div>
    </div>
</div>

</div>
</div>

<?php
get_footer();
?>