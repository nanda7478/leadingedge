<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
			<div class="container">
            		<header class="page-header">
					<h1 class="page-title"><span> ERROR </span> 404 </h1>
                    <h3>PAGE NOT FOUND</h3>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>The page you’re looking for isn’t visible on our radar. </p> <br />

<a class="btn-primary" href="<?php echo site_url();?>">GO BACK HOME</a>
				 
				</div><!-- .page-content -->
                </div>
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

	 

	</div><!-- .content-area -->

 
<?php get_footer(); ?>
