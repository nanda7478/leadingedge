<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-top-section">
		<div class="footer-background-image">
		  <img src="<?php bloginfo('template_url');?>/images/full-bg.jpg" />
          <div class="container-fluid">
           <div class="row">
            <div class="col-lg-7 col-sm-12">
          <div class="logos">  <img src="<?php bloginfo('template_url');?>/images/logo-alt.png" /> </div>
            </div>
            <div class="col-lg-5 col-sm-12">
            <ul class="get-edge-option">
            <li><a href="<?php echo get_site_url(); ?>/offerings/analyze/">ANALYZE</a></li>
            <li><a href="<?php echo get_site_url(); ?>/offerings/buy/">Buy</a></li>
            <li><a href="<?php echo get_site_url(); ?>/offerings/sell/">Sell</a></li>
            <li><a href="<?php echo get_site_url(); ?>/offerings/technical-services/">Technical Services</a></li>
            <li><a href="<?php echo get_site_url(); ?>/offerings/consulting-services/">Consulting Services</a></li>
            <li><a href="<?php echo get_site_url(); ?>/offerings/the-edge/"><span> The Edge </span> | Benefits For Clients</a></li>
            </ul>
            </div>

           </div>
          </div>
          </div>
        </div>
        
        <div class="footer-bottom">
         <div class="container">
         <div class="row">
          <div class="col-lg-4">
           	<div class="footer-logo"> <a href="/"> <img src="<?php bloginfo('template_url');?>/images/f-logo.png" /> </a> </div>
           	<div class="leading-edge-social-icon">
           <ul>
           <li><a href=""><i class="fa fa-google-plus"></i></a></li>
           <li><a href=""><i class="fa fa-facebook"></i></a></li>
           <li><a href=""><i class="fa fa-twitter"></i></a></li>
           <li><a href=""><i class="fa fa-instagram"></i></a></li>
           </ul>
         </div>
          
          <div class="leading-edge-details">
          <?php dynamic_sidebar('sidebar-2');?>
          </div>
          </div>

        <div class="col-lg-8">
       <div class="leading-edge-footer-menu">
       	<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
         </div>

       </div>




         </div>

         <div class="row">
         <div class="col-lg-12">
         <div class="copyright-text text-center">
         <?php dynamic_sidebar('sidebar-3');?>
		</div>
		</div>
         </div>


         </div>
        </div>

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
 <script type="text/javascript">
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
   </script>
<script>
 jQuery(document).ready(function(){      
      var ww = jQuery(window).width();
      var ew = ww - 1200;
	  var bw = ew / 2; 
      var bw2 = bw + 600;
     
      jQuery(".img-right").css( 'margin-right','-'+bw+'px' );
      
      jQuery(".img-right").css( 'width',bw2+'px' );
      
     }); 
</script>

</body>
</html>
