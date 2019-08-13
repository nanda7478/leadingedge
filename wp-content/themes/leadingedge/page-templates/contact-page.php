<?php
/*
 Display Template Name: Contact Page
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


<div class="contact-form-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
            <div class="c-form">
			<h2>Have A Question? Contact Us.</h2>
				<?php echo do_shortcode('[contact-form-7 id="230" title="Contact form 1"]');?>
			</div>
            </div>
		</div>
	</div>
</div>

<div class="map-section">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3016.8609819139892!2d-74.42857348453416!3d40.87492493556891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c308151cdb7815%3A0xc0dff2c11f626b10!2sLeading+Edge+Aviation+Solutions!5e0!3m2!1sen!2sin!4v1535633311187" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="addr-phone-mail-section">
	<div class="container">
		<div class="row">
		<?php
		while(have_rows('contact_details_repeater')): the_row();
		$image = get_sub_field('contact_icon');
		?>
			<div class="col-lg-4">
			<div class="icon-section">
			  <img src="<?php echo $image['url'];?>">
			</div>
			<h4><?php the_sub_field('contact_title');?></h4>
			<div class="detail-block">
				<?php the_sub_field('contact_detail');?>
			</div>
			</div>
		<?php endwhile;?>
		</div>
	</div>
</div>

<div id="careers" class="careers-contact-section">
	<div class="container">
		<div class="row">
		<?php
		while(have_rows('careers_section')): the_row();
		$image = get_sub_field('career_image');
		?>
			<div class="col-lg-6 texts">
				<h2><?php the_sub_field('career_title');?></h2>
				<?php the_sub_field('career_content');?>
			</div>
			<div class="col-lg-6 col-bg" style="background-image: url(<?php echo $image['url']; ?>);">
			</div>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php
get_footer();
?>