<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package visa-web
 */

get_header();
?>

<div id="primary" class="content-area">
    <div class="container">
    <div class="row">
    <div class="col-9">

            <main id="main" class="site-main">
                <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

            </main><!-- #main -->
        <!-- #primary -->
        <div class="apply-visa container text-center">
        <a class="btn-danger" title="Apply Visa" href="apply-visa"> APPLY VISA NOW <i class="fa fa-angle-double-right"></i> </a>
    </div>
    </div>
    <div class="col-3 col-right hidden-sm">
        <div class="support-online-widget right-corner">
            <div class="title">SUPPORT ONLINE</div>
            <div class="support-content">
                <p><i>Our pleasure to support you 24/7</i></p>
                <div>
                    <label class="f14">Email</label><span class="email"><a
                            href="mailto:abc@vietnam-evisa.org">visa@vietnam-evisa.org</a></span></div>
                <div> <label class="f14">Tollfree</label><span class="email"><a>+1.800.642.1567</a></span>
                </div>
                <div> <label class="f14">Hotline</label><span class="email"><a>+84.327.117.119</a></span>
                </div>
            </div>
        </div>
        <div class="payment-online">
            <a href="#">
                <div class="title">MAKE A PAYMENT</div>
                <p>100% SECURE AND EASY-TO-USE</p>
            </a>
        </div>
        <div class="confidence-widget">
            <div class="banner"></div>
            <div class="content">
                <div class="title">
                    APPLY WITH CONFIDENCE
                </div>
                <ul>
                    <li>Safety, Fastest, Reliable</li>
                    <li>2 working days guarantee</li>
                    <li>Competitive prices</li>
                    <li>Secure 256 bit SSL encryption</li>
                    <li>Money back guarantee</li>
                </ul>
            </div>
        </div>
        <div class="service-widget">
            <div class="banner"></div>
            <div class="content">
                <div class="title">
                    EXTRA SERVICES
                </div>
                <ul>
                    <li><a href="#"><i class="passport"></i> Visa Extension &amp; Renewal</a></li>
                    <li><a href="#"><i class="airport-concierge"></i> Airport Concierge</a></li>
                    <li><a href="#"><i class="car"></i> Airport Car Pickup</a></li>
                    <li><a href="#"><i class="hotel"></i> Hotel Reservation</a></li>
                    <li><a href="#"><i class="travel"></i> Tour &amp; Travel Booking</a></li>
                    <li><a href="#"><i class="flight"></i> Vietnam Domestic Flights</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>

</div>


<?php
get_sidebar();
get_footer();