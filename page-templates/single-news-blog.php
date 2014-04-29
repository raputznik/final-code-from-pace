<?php
/**
* Template Name: NewsBlog
 * The Template for displaying all single posts.
 *
 * @author Pace Creative | http://pacecreative.com
 * @package upBootWP 0.1
 */
get_header(); 

$upload_dir = wp_upload_dir(); ?>
	<div class="container">
		<div class="row"> <!-- Begin Hero  -->
			<div class="col-md-12">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/img_ban_04.jpg" alt="Extract more value from every step in the recovery process.">
			</div>
		</div> <!-- End Hero -->
		<div class="row">
			<div class="col-md-10" id="title_holder">
				<h1 class="entry-title"><?php the_title(); ?></h1>		
			</div>
			<div class="col-md-2" id="arrow1">
				<img src="<?php echo $upload_dir['baseurl'] ?>/2014/01/img_arr_title.jpg" alt="">
			</div>
		</div> <!-- End Page Title -->
		
		<div class="row mainpost">
			<div class="col-md-8 pin-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main newsblog" role="main">
			
			<?php 
				
					$args = array(
						'post_type' => 'post',
						'orderby' => 'date', 
            'posts_per_page' => '5',
            'cat' => '4'
					);
					$query = new WP_Query( $args );
				
					while($query->have_posts()): $query->the_post();
						echo "<ul class='news-list'>";
						echo "<li>";
						echo "<span id='get-date'>";
						echo get_the_date();
						echo "</span>";
						echo "</li>";												
						echo "<li>";
						echo the_title();
						echo "</li>";
						echo "</ul>";
						echo the_excerpt();
						
					

					
					endwhile;
				
				 ?>

			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-8 -->
			

      <?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>