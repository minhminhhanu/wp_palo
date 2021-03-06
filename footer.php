<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<i class="fa fa-search" aria-hidden="true"><?php get_search_form(); ?></i>	
			<div class="ft-description">
				<?php 
				 	global $tp_options;
					echo  $tp_options['description-above'] ;
				 ?>
			</div>
			<div class="copyright">
				<?php 
					global $tp_options;
					echo  $tp_options['copyright-ft'] ;
				?>
			</div>
			<div class="social-ft">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-icon' ) ); ?>
			</div>
		
		</div><!-- .site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->

			<?php wp_footer(); ?>
			 <!-- Compiled and minified JavaScript -->

   <script>
   		jQuery(document).ready(function($){
	      $('.carousel').carousel();
	      // Next slide
			$('.carousel').carousel('next');
			$('.carousel').carousel('next', 3); // Move next n times.
			// Previous slide
			$('.carousel').carousel('prev');
			$('.carousel').carousel('prev', 4); // Move prev n times.
			// Set to nth slide
			$('.carousel').carousel('set', 4);
	    });
   </script>
</body>
</html>
