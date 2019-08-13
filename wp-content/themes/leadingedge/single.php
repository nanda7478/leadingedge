<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php $image = get_field('banner_header_image', get_option('page_for_posts')); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
  <div class="left-part">
 
 <div class="inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
Blog
 </h1>
 <div class="content_part">The Cutting Edge</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="news-sub-page">

<div class="news-details">
<div class="row">
<div class="col-sm-12">
 <div class="back-to-news">
    <a href="<?php echo site_url();?>/blog/"><i class="fa fa-long-arrow-left"></i> Back </a>
    </div>
			<header class="entry-header">
		     <?php the_title( '<h2 class="blog-tittle">', '</h2>' ); ?>
	         </header>
</div>             
</div>
<div class="row">
<div class="col-sm-12 col-md-8 s-news">
 
 


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>

 
		
		<div class="news-content-deatils">
       <?php twentysixteen_post_thumbnail(); ?>


			<div class="entry-content">
			<?php the_content();?>
			</div>
		</div>

            <?php
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">'.'<i class="fa fa-long-arrow-left"></i>' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '<i class="fa fa-long-arrow-right"></i>'.'</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ',
				) );
			}

			// End of the loop.
		endwhile;
		?>

		
	 

	<?php //get_sidebar( 'content-bottom' ); ?>

 
</div>

<div class="col-sm-12 col-md-4 news-right">
	<?php get_sidebar(); ?>
	 
	<h2 class="widget-title1">Related Articles</h2>
        <?php $args = array(
           'post_type' => 'post' ,
           'order' => 'DASC' ,
           'posts_per_page' => 2,
           
            ); ?>
      <?php $query = new WP_Query($args); ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      
		<div class="col-lg-12 news-left">
			<div class="blog-img-content">
			<div class="news-img">
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
			<div class="news-content">
			<h3 class="small_colored_heading"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h3>
     	 
			<a class="links" href="<?php the_permalink();?>">read more </a>
				</div>
		      </div>
		</div>
        <?php 
endwhile;
wp_reset_postdata();  
?>

	</div>
 

</div>

</div>


</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
