<?php
/**
 * Template Name: Page - Contact
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
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/img_ban_04.jpg" alt="Extract more value from every step in the recovery process."/>
				</div>
			</div> <!-- End Hero -->
			<div class="row">
				<div class="col-md-10" id="title_holder">
					<h1 class="entry-title">Contact Us</h1>		
				</div>
				<div class="col-md-2" id="arrow1">
					<img src="<?php echo $upload_dir['baseurl'] ?>/2014/01/img_arr_title.jpg" alt=""/>
				</div>
			</div>
			<div class="row pin-content">
				<div class="col-md-4">
					<div class="entry-content maincontent blog1">
						<div class="col-md-5" class="docbox">
							<div class="row contact_1">
								<h3>Main Office:</h3>
									IFP Canada<br/>
									Suite 810, 744 – 4th Avenue S.W.<br/>
									Calgary, AB T2P 3T4 <br>
								Phone: <span class="phone-number"><a href="tel:4032340342">(403) 234-0342</a><span>(403) 234-0342</span></span><br/>
								Fax: (403) 234-8597<br/>
								Email: <a href="mailto:info@ifp-canada.com">info@ifp-canada.com</a>

							</div>
							<br>
							<div class="row contact_1">
								<h3>General Manager:</h3>
									Eric Delamaide<br/>
									Phone: <span class="phone-number"><a href="tel:4032340342">(403) 234-0342</a><span>(403) 234-0342</span></span><br/>
									Email: <a href="mailto:eric.delamaide@ifp-canada.com?subject=Inquiry">Eric.Delamaide@ifp-canada.com</a>

							</div>



						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-5"></div>
						<div class="col-md-1"></div>
					</div><!-- .entry-content -->
		
				</div><!-- .col-md-12 -->

				<div class="col-md-4 docbox">
					<div class="row entry-content maincontent blog2">
						<div class="col-md-5" >
							<div class="row contact_1">							
								<h3>Sales &amp; Support:</h3>
								<p>Geology and R&amp;D<br/>
								Phone: <span class="phone-number"><a href="tel:4032340342">(403) 234-0341</a><span>(403) 234-0341</span></span><br/>
								Email: <a href="mailto:tristan.euzen@ifp-canada.com">tristan.euzen@ifp-canada.com</a></p>
								
								<p>EOR and Water Management<br/>
								Phone: <span class="phone-number"><a href="tel:5878970907 ">(587) 897-0907</a><span>(587) 897-0907</span></span><br/>
								Email: <a href="mailto:patrick.dwyer@ifp-canada.com">patrick.dwyer@ifp-canada.com</a></p>
							</div>	

							<div class="row contact_1">							
								<h3>Training:</h3>
								<p>Norm Stewart<br/>
								Phone: <span class="phone-number"><a href="tel:83248590001">(832) 485-90001</a><span>(832) 485-90001</span></span><br/>
								Email: <a href="mailto:norm.stewart@rsisimcon.com">norm.stewart@rsisimcon.com</a></p>
								
								<p>David Pathe<br/>
								Phone: <span class="phone-number"><a href="tel:7322996712">(732) 299-6712</a><span>(732) 299-6712</span></span><br/>
								Email: <a href="mailto:david.pathe@rsisimcon.com">david.pathe@rsisimcon.com</a></p>
							</div> <!-- end row contact_1 -->	 						

						</div>

					</div><!-- .entry-content -->
		
				</div><!-- .col-md-4 -->

      <?php get_sidebar(); ?>
				
			<div class="contact-form col-md-8">		
				<h3>Contact Us</h3>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
			</div>
		</div><!-- .container -->
	</div> <!-- End Wrap -->	
<?php get_footer(); ?>