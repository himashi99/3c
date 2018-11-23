<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package three-c
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="landing-page-section hero-container" >
				<div class="landing-page-contents">
					<div class="work-slider-container">
							<?php echo do_shortcode( '[slide-anything id="66"]' ); ?>
					</div>
					<div class="intro-description">
						<!-- <div class="intro-description-logo">
							<img src="http://localhost:8888/wp-content/uploads/2018/11/logo.png">
						</div> -->
						<div class="intro-description-text">
							<p>3C is a creative consultancy with a unique expertise in how people form perspective and its impact on their behaviour. <br><br>We work with companies to create desired perspective and the resulting behaviour.</p>
						</div>
						<div class="logo-portion">
							<img src="http://localhost:8888/wp-content/uploads/2018/11/3CLogo_Cut-02.png">
						</div>
					</div>
				</div>
			</div>

			<div class="landing-page-section culture-container three-c">
				<div class="culture three-c-description">
					<h3>Culture is the integrity in which agreements within your company are maintained.</h3>
					<p>Agreements are fundamental to human organization. They determine what’s acceptable. They define what’s expected. They outline the operational boarders in which people work and the impacts to doing things differently. <br><br>

						Understanding the implied and explicit agreements within your company allows the operational boarders in which your people currently work to be seen. This process reveals insights into why your people do what they do and allows you to see what new agreements are required to ensure you stay ahead. <br><br>

						Our work in the area of Culture creates results with your employees, leadership, partners and shareholders.</p>
					<div class="forward-arrow">
						<img src="http://localhost:8888/wp-content/uploads/2018/11/Asset-2.png">
					</div> <!--forward-arrow"-->
				</div> <!--culture three-c-description-->
				<div class="culture-logo-outline">
					<img src="http://localhost:8888/wp-content/uploads/2018/11/Asset-3-e1542638480275.png">
				</div> <!--culture-logo-outline-->
			</div> <!--landing-page-section culture-container three-c-->

			<div class="landing-page-section consulting-container three-c">
				<div class="consulting three-c-description">
					<h3>Consulting is the process to creating alignment inside and outside your company.</h3>
					<p>Alignment creates organizational strength. It is what defines the speed in which your company moves. It determines effectiveness. It is the structure in which performance is achieved, and the foundation for achieving what is possible.<br><br>

						Knowing the ways people are aligned with your company allows focus to be given to the ways people aren’t. Tracking the impacts to the ways your company is not aligned, makes prioritizing the areas to focus on self evident, and will allow you to stay ahead.<br><br>

						Our work in the area of Consulting creates results inside and outside of your company. </p>
					<div class="forward-arrow">
						<!-- <img src="http://localhost:8888/wp-content/uploads/2018/11/Asset-2.png"> -->
					</div> <!--forward-arrow-->
				</div> <!--consulting three-c-description-->
				<div class="consulting-logo-outline">
					<img src="http://localhost:8888/wp-content/uploads/2018/11/Asset-4.png">
				</div> <!--consulting-logo-outline-->
			</div> <!--landing-page-section consulting-container three-c-->

			<div class="landing-page-section creative-container three-c">
				<div class="creative three-c-description">
					<h3>Creative is the story your company tells to inspire people.</h3>
					<p>Inspiring people is an art. An art that has the ability to shape the ways things are perceived. An art that creates relatedness. An art that connects people to your company and causes them to want to work with you, buy from you and to be loyal to you. <br><br>

						Clarity on who you are, what your core proposition is and why you do what you do, allows the right story to be told about your company. When your story is clear, people are able to be confident in why they should choose you. The combination of clarity and confidence creates certainty. Certainty is what drives the loyalty, and resulting momentum that will cause your company to stay ahead. <br><br>

						Our work in the area of Creative inspires people to do business with you.</p>
					<div class="forward-arrow">
						<!-- <img src="http://localhost:8888/wp-content/uploads/2018/11/Asset-2.png"> -->
					</div> <!--forward-arrow-->
				</div> <!--creative three-c-description-->
				<div class="creative-logo-outline">
					<img src="http://localhost:8888/wp-content/uploads/2018/11/Asset-4.png">
				</div> <!--creative-logo-outline-->
			</div> <!--landing-page-section creative-container three-c-->

			<div class="our-work-container">
				<!-- <h2>Our Work</h2> -->
				<div class="our-work-gallery">
					<div class="outer">
					<div class="our-work-example our-work-example1">
						<!-- <img src="http://localhost:8888/wp-content/uploads/2018/11/josh-calabrese-112481-unsplash.jpg"> -->
						<p>7 Ways Digital Is Transforming Business</p>
					</div>
				</div>
					<div class="our-work-example our-work-example2">
					</div>
					<div class="our-work-example our-work-example3">
						<p>7 Ways Digital Is Transforming Business</p>
					</div>
					<div class="our-work-example our-work-example4">
						<p>7 Ways Digital Is Transforming Business</p>
					</div>

					<div class="our-work-view-more">
						<p>View All</p>
					</div> <!--our-work-view-more-->
				</div> <!--our-work-gallery-->
			</div> <!--landing-page-section our-work-container-->

			<div class="our-work-logo-section">
					<?php echo do_shortcode( '[slide-anything id="73"]' ); ?>
			</div>

			<div class="landing-page-section contact-container">
				<div class="contact-container-contents">
					<div class="contact-title">
						<h2>Stay in Touch</h2>
						<p>Email us at <a href="mailto:info@thisis3c.com">info@thisis3c.com</a></p>
						<p><a href="https://www.linkedin.com/company/3c_/about/">Linkedin</a> | <a href="https://www.instagram.com/thisis3c/?hl=en">Instagram</a></p>
					</div> <!--contact-title-->
					<div class="contact-form-container">
						<?php echo do_shortcode( '[contact-form-7 id="52" title="Contact Form"]' ); ?>
					</div> <!--contact-form-container-->
				</div> <!--contact-container-contents-->
			</div> <!--landing-page-section contact-container-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
