<?php
/*
 Display Template Name: Term Services Page
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
 Leading Edge Aviation Solution
 </h1>
 <div class="content_part"><?php the_title();?></div>
</div>
</div>
</div>
</div>
<?php endwhile;?> 

<div class="privacy-term-section">
 <div class="container">
 	<div class="row">
 	<?php while ( have_posts() ) : the_post(); ?>
 		<div class="col-md-8">
 			<?php the_content();?>
 		</div>
         		<div class="col-md-4"> </div>
 		<?php endwhile;?>
 	</div>
 </div>

</div>

<?php
get_footer();
?>