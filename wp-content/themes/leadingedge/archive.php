<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<div class="bolg_page">
<div class="container">     
<div class="news-page">  
		  <div class="row">	
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

			?>
			<div class="col-lg-4 col-md-12 news-left">
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
        	<?php the_title( sprintf( '<h3 class="small_colored_heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		 
			<a class="links" href="'<?php the_permalink();?>">read more </a>
				</div>
		      </div>
            </div>
              <?php endwhile; ?>
            </div>
        <div class="nav-links">
        <?php
		echo paginate_links( array(
			'type'      => 'post',
			'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
		) );
		?>
		</div>
	</div>
	</div>
</div>
<?php get_footer(); ?>
