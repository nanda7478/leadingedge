<?php
/*
 Display Template Name: Client Login
*/
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('banner_header_image'); ?>
<div class="inner-pages-banner login-head" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
The Inside Edge
 </h1>

<?php if ( is_user_logged_in() ) : ?>
<div class="profile-document-button">
	<div class="profile-button">
		<a href="<?php echo site_url();?>/account/">My Profile</a>
	</div>
	<div class="document-button">
		<a href="<?php echo site_url();?>/document/">My Documents</a>
	</div>
</div>
<?php else : ?>
	<p>Everything from agreements to reports to market valuations, its available for you here at anytime. </p>
<?php endif; ?>
</div>
</div>
</div>
<?php endwhile;?>

<div class="client-login-section">
	<div class="container">
		<div class="row">
		<?php 
		while(have_posts()): the_post();
		?>
			<div class="col-lg-12">
				<?php the_content();?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>


<?php
get_footer();
?>