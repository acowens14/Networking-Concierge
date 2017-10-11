<?php
/**
 * Created by PhpStorm.
 * User: dark
 * Date: 10/11/2017
 * Time: 6:00 PM
 */

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper dark-background" >
	<div class="container" id="wrapper-footer">
		<!--TODO INJECT DYNAMICALLY?-->
		<!-- region MailChimp Signup Form -->
		<div class="row">
			<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
				<form action="//ashleyassists.us15.list-manage.com/subscribe/post?u=2e22dd63fa260f018b979f2ef&amp;id=49b8a1630c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<label for="mce-EMAIL">Subscribe to our mailing list</label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2e22dd63fa260f018b979f2ef_49b8a1630c" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
		</div>
		<!-- endregion -->
		<!-- region Social Links -->
		<div class="row justify-content-center">
			<div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
				<a target="_blank" href="mailto:ashley@ashleyassists.com?subject=Lets-connect-AA"><i class="fa fa-envelope-square fa-4x"></i></a>
			</div>
			<div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
				<a target="_blank" href="https://www.linkedin.com/in/ashowens/"><i class="fa fa-linkedin-square fa-4x"></i></a>
			</div>
			<div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
				<a target="_blank" href="https://www.facebook.com/ashleyassists/"><i class="fa fa-facebook-square fa-4x"></i></a>
			</div>
			<div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2">
				<a target="_blank" href="https://www.instagram.com/ashleyassists/"><i class="fa fa-instagram fa-4x"></i></a>
			</div>
		</div>
		<!--endregion-->

		<div class="row">
			<div class="col-md-12 text-center">
				<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf(
					/* translators:*/
						esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( // WPCS: XSS ok.
				/* translators:*/
					esc_html__( 'Custom Theme: %1$s by %2$s.', 'Networking Concierge' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://www.ashleyassists.com', 'understrap')).'">ashleyassists.com</a>' ); ?>
				(<?php printf( // WPCS: XSS ok.
				/* translators:*/
					esc_html__( 'Version: %1$s', 'Networking Concierge' ), $the_theme->get( 'Version' ) ); ?>)
			</div><!-- .site-info -->
		</div><!--col end -->
	</div><!-- container end -->
</div><!-- container end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

