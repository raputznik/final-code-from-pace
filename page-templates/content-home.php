<?php
/**
 * Template Name: Page - Home2
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

	<div id="wrap">
		
	<div id="main" class="container">
		<div class="row"> <!-- Begin Hero  -->
			<div class="col-md-12">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/img_ban_05.jpg" alt="Our Expertise">
			</div>
		</div>
		<div class="row expertise-links">
			<div class="col-md-1 our_exp_1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/img_arr_title2.jpg" alt="">
			</div>
			<div class="col-md-2 exp_head">
			<a href="<?php echo site_url(); ?>/expertise/" title=""><h3>Our Expertise</h3></a>
			</div>
			<div class="col-md-9 exp_links">
				<ul id="exp_nav">
					<li id="exp_link1"><a href="<?php echo site_url(); ?>/expertise/geology-reservoir-engineering/">Geology & Reservoir Engineering</a></li>
					<li><a href="<?php echo site_url(); ?>/expertise/eor-technologies/">EOR Technologies</a></li>
					<li><a href="<?php echo site_url(); ?>/expertise/produced-water-management/">Produced Water Management  </a> </li>
					<li><a href="<?php echo site_url(); ?>/expertise/training/">Training</a></li>
				</ul>

			</div>			
		</div> <!-- end Our expertise-links Row -->

		<div class="row">
			<div class="col-md-12 pagination-centered">
				<div class="information">
					<p>What information are you looking for?</p>
					<div class="line1"></div>
				</div>

<!-- 				<div class="divider">
				</div> -->
			</div>
		</div> <!-- End Hero -->
				
		<div class="row row2"> <!-- Begin Information -->
				<div class="col-md-3 info_panel panel1">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class="how"><p>How do I get more out of my data?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="<?php echo site_url(); ?>/expertise/geology-reservoir-engineering/">Learn more</a></div>
						</div>
					</div>
				</div> <!-- end info panel -->

				<div class="col-md-3 info_panel panel2">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class="how"><p>Are you considering an EOR project?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="<?php echo site_url(); ?>/expertise/eor-technologies/">Learn more</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-3 info_panel panel3">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class="how"><p>What is your water treatment strategy?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="<?php echo site_url(); ?>/expertise/produced-water-management/">Learn more</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-3 info_panel panel4">
					<div class="row learn-row">
						<div class="col-md-2">
							<div class="question-mark text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/img_que_01.png" alt="question mark">
							</div>
						</div>
						<div class="col-md-10 justify">
							<div class="how"><p>How can I upgrade my Operators Skills?</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="learn-more"><a class="btn btn-primary btn-large" href="<?php echo site_url(); ?>/expertise/training/">Learn more</a></div>
						</div>
					</div>
				</div>
		</div><!-- End Information -->


		<div class="row nextstep"> <!-- Begin Next Step -->
			<div class="col-md-4 proud">
				<p>Proud to be your local representative of the EOR Alliance brain trust.</p>
			</div>
			<div class="col-md-2 alliance">
				<div class="eor img-responsive">
					<img src="<?php echo get_template_directory_uri(); ?>/img/img_eor_2.png" alt="eor alliance">
				</div>
				<div class="line2"></div>
			</div>

			<div class="col-md-6 text-center book">
				<div class="row" id="take-the">
					<p>Take the next step:</p>
				</div>
				<div class="row">
					<div class="book-meeting">
						<a href="mailto:info@ifp-canada.com?subject=Book%20a%20Meeting" class="btn btn-success btn-large btn-big">Book a meeting</a>
					</div>
				</div>
			</div>

		</div> <!-- End Next Step -->

		<div class="row row3"> <!-- Begin Success/News (Large Holder Row) -->
			<div class="col-md-8 success-main">
				<div class="row success-1">
					<h3>Success Stories</h3>
				</div>
				<div class="row success-holder">
        
        				<?php 
				
					$query = new WP_Query(array(
										'cat'=>11,
										'posts_per_page'=>2,
										'orderby'=>'date',
										'post_status'=>array(
													'publish',
													'future'
												)
									));
				?>
				<?php if($query->have_posts()) : ?>
					<?php while($query->have_posts()) : $query->the_post(); ?> 		
					<div class="col-md-6 succ-content1">
						<p><strong><?php the_title(); ?></strong></p>
						<p><i><?php the_excerpt(); ?></i></p>
					</div>
					<?php endwhile; ?>					
				<?php endif; ?>
        <div style="clear: both; width: 100%; height: 1px;"></div>
        <div class="col-md-12 succ-content1" style="min-height: 1px;">
          <a href="<?php echo site_url(); ?>/category/success-stories/">More Success Stories</a>
        </div>

				</div>		


        
				<div class="row newsholder">
					<?php upbootwp_subscribe() ?>
					<div class="col-md-6 newsbox2">
						<div class="row keep-1 upcoming-1">
							<h3>Upcoming Events</h3>
						</div>
				<?php 
				
					$query = new WP_Query(array(
										'cat'=>6,
										'posts_per_page'=>2,
										'orderby'=>'date',
										'order'=>'ASC',
										'post_status'=>array(
													'publish',
													'future'
												)
									));
				?>
				<?php if($query->have_posts()) : ?>
					<!-- loop through all post entries in chronological order, and generate their content -->
					<?php while($query->have_posts()) : $query->the_post(); ?> 		
						<!-- add the full post, as this is a page -->        
				
						
						<div class="row blurb2">
							<p><i><?php the_date(); ?></i><br>
							<?php the_title(); ?>
							<?php 
							
							$url = get_post_meta(get_the_ID(),'url',true);
							
							// expiry date is set a day before conference actually ends
							$expiry = get_post_meta(get_the_ID(),'_expiration-date',true);
							$day_in_seconds = 60*60*24;
							$expiry -= $day_in_seconds;

							// get contents as variable to use in if block
							$contents = get_the_content();

							?>
							
							<?
							
							// make sure we aren't linking to blank event info
							if( !empty($contents) ) {
							?>
							<br /><a href="" id="event_<?php the_ID(); ?>" class="read_more_event">Read More</a>
							<? }
							
							// make sure we aren't linking to blank URL
							if( !empty($url) ) {
							
								// some formatting based on content
								if( !empty($contents) ) {
									echo ' | ';
								} else {
									echo '<br />';
								}
							?>
								
							<a href="<?php echo $url ?>" target="_blank">Visit Site</a>
							<? } ?>
							</p>
						</div>
						
							
						<div id="event_<?php the_ID(); ?>_popup" class="event_popup" style="display: none; font-size: 14px; font-weight: normal;" title="Event Info">
							<h4><?php the_title(); ?></h4>
							<i><?php echo get_the_date().' - '.date('M d, Y',$expiry); ?></i><br /><br />
							<?php the_content(); ?>
							<?php 
							// make sure we aren't linking to blank URL
							if( !empty($url) ) {
							?>
							<a href="<?php echo $url ?>" target="_blank">Visit Site</a>
							<?php } ?>
						</div>
						
						<!-- No metadata needed, break out of the content loop -->
					<?php endwhile; ?>
					<!-- all posts added, up to the number allowed per page as set in the WP options -->
					
				<?php endif; ?>


					</div>
				</div>				
			</div>  <!-- end success stories div -->
					
          
          <div class="col-md-4">
						<div class="row news-side news-1">
							<h3>Latest News</h3>
						</div>
						<div class="row news-links">
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
							<p><a href="<? the_permalink(); ?>" title=""><?php the_title(); ?></a></p>
							<div class="news-textside">
								<p><? the_excerpt(); ?></p>
							</div>				
							<!--<a href="<? the_permalink(); ?>" title="">View More</a>-->
						
						<!-- No metadata needed, break out of the content loop -->
					<?php endwhile; ?>
					<!-- all posts added, up to the number allowed per page as set in the WP options -->
					
				<?php endif; ?>
				
						</div> <!-- end row news-links -->
					</div>
          
          
		</div> <!-- END Success/News (Large Holder Row) -->
	</div> <!-- .container -->


<?php get_footer(); ?>