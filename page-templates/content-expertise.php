
<?php
/**
 * Template Name: Page - Expertise
 * The template used for displaying page content in page.php
 *
 * @author Jeremy Dahl | http://pacecreative.com/
 * @package upBootWP 0.1
 */
get_header(); 

$upload_dir = wp_upload_dir(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div id="wrap">
		
	<div id="main" class="container">
		<div class="row"> <!-- Begin Hero  -->
			<div class="col-md-12">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/img_ban_04.jpg" alt="Extract more value from every step in the recovery process.">
			</div>
		</div> <!-- End Hero -->
		<div class="row">
			<div class="col-md-10" id="title_holder">
				<h1 class="entry-title">Our Expertise</h1>		
			</div>
			<div class="col-md-2" id="arrow1">
				<img src="<?php echo $upload_dir['baseurl'] ?>/2014/01/img_arr_title.jpg" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 pin-content">
				<div class="entry-content maincontent">
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
				</div><!-- .entry-content -->
	
			</div><!-- .col-md-12 -->

      <?php get_sidebar(); ?>
      
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>