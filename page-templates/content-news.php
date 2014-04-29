<?php
/**
 * Template Name: Page - News
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
				<h1 class="entry-title"><?php the_title(); ?></h1>		
			</div>
			<div class="col-md-2" id="arrow1">
				<img src="<?php echo $upload_dir['baseurl'] ?>/2014/01/img_arr_title.jpg" alt="">
			</div>
		</div>
      <div class="row pin-content">
        <div class="col-md-4">
          <div row class="entry-content maincontent blog1">
            <div class="col-md-5" class="docbox">
              <div class="row news_blog">
                <h3>News</h3>
              </div>
              <div class="row news-links2">
                <div class="news-blog-format">	<!-- div just to remove leading on links -->							
                  <?php 
                  
                    $query = new WP_Query(array(
                              'cat'=>4,
                              'posts_per_page'=>2
                            ));
                  ?>
                  <?php if($query->have_posts()) : ?>
                    <!-- loop through all post entries in chronological order, and generate their content -->
                    <?php while($query->have_posts()) : $query->the_post(); ?> 		
                      <!-- add the full post, as this is a page -->        
                  
                      <p><i><?php the_date(); ?></i></p>
                        <p><?php the_title(); ?></p>
          <!-- 							<div class="news-textside">
                          <p><? the_excerpt(); ?></p>
                        </div>				
           -->							<div class="view-more"><a href="<? the_permalink(); ?>" title="">View More</a></div>
                      
                      <!-- No metadata needed, break out of the content loop -->
                    <?php endwhile; ?>
                    <!-- all posts added, up to the number allowed per page as set in the WP options -->
                    
                  <?php endif; ?>						

                  <div id="clickhere"><a href="<?php echo site_url(); ?>/news-resources/newsblog/" title=""><b>Click here for more articles</b></a></div>
                </div> <!-- end news-blog-format -->
              </div>

            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-1"></div>
          </div><!-- .entry-content -->
    
        </div><!-- .col-md-12 -->

        <div class="col-md-4 col-lg-4">
          <div class="row entry-content maincontent blog2">
            <div class="col-md-5" class="docbox">
              <div class="row news_blog">
                <h3>Documents & Resources</h3>
              </div>
              <div class="row news-links2">
                  <br>

                <a href="<?php echo site_url(); ?>/news-resources/documents-resources/#geology-a" title=""><p>Geology and R&D</p></a>
                <a href="<?php echo site_url(); ?>/news-resources/documents-resources/#eor-a" title=""><p>EOR Technologies</p></a>
                <a href="<?php echo site_url(); ?>/news-resources/documents-resources/#water-a" title=""><p>Water Treatment</p></a>
                <div id="clickhere">
                <a href="<?php echo site_url(); ?>/news-resources/documents-resources/#pub-a" title=""><b>Click here for more documents</b></a></div>

              </div>

            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-1"></div>

          </div><!-- .entry-content -->
    
        </div><!-- End of News & Blog -->


      <?php get_sidebar(); ?>
      
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>

	</div><!-- .container -->
<?php get_footer(); ?>