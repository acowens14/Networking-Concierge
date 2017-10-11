<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Networking Concierge
 */
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 9/8/2017
 * Time: 8:56 PM
 */

//Reference page-templates in parent for examples.
get_header();
//Add HTML here
?>
<div class="main-heading-wrapper">
    <img src="<?php echo content_url();?>/uploads/2017/10/landing-main.jpg">
    <div class="main-heading-text">
        <h1><span>Ashley Assists</span></h1>
        <h2>Your Personal <br/> Networking Concierge</h2>
        <div class="btn-lets-connect">
            <a class="button" href="mailto:ashley@ashleyassists.com?subject=Lets-connect-AA"><span>Let's Connect</span></a>
        </div>
    </div>
</div>
<!--Black bar of stuff-->
<div class="container top-links">
    <div class="row justify-content-center">
        <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
            <a target="_blank" href="mailto:ashley@ashleyassists.com?subject=Lets-connect-AA"><i class="fa fa-envelope-square fa-4x"></i></a>
        </div>
        <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
            <a target="_blank" href="https://www.linkedin.com/in/ashowens/"><i class="fa fa-linkedin-square fa-4x"></i></a>
        </div>
        <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
            <a target="_blank" href="https://www.facebook.com/ashleyassists/"><i class="fa fa-facebook-square fa-4x"></i></a>
        </div>
        <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
            <a target="_blank" href="https://www.instagram.com/ashleyassists/"><i class="fa fa-instagram fa-4x"></i></a>
        </div>
    </div>
</div>

<!-- region Highlights -->
<section class="container-fluid">
<div class="highlight-container">
    <h3 class="text-center">Networking, building and keeping relationships is a key part of any successful business</h3>
    <div class="row">
        <?php $query = new WP_Query(['post_type' => 'highlight']);
            if($query->have_posts() ) while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a href="#<?php the_field("scroll_id")?>">
                        <img class="hover-box" src="<?php echo get_field('highlight_image')['url']; ?>"/>
                    </a>
                    <h4><?php the_title(); ?></h4>
                    <div>
                        <p><?php the_field('highlight_overview'); ?></p>
                    </div>
                </div>
        <?php endwhile;  ?>
    </div>
</div>
</section>
<!--endregion-->

<?php
//TODO will be worpdress data.
//<editor-fold desc="Annoying Section Data Load">
$post1 = (object)[
    'title' => "My Story",
    'titlelink' => "/my-story",
    'content' => "How I became a corporate refugee <br> (Coming Soon!)"
];

$post2 = (object)[
	'imageurl' => content_url() . "/uploads/2017/10/Ashley_Desk.jpg",
    'double' => false
];

$post3 = (object)[
	'title' => "Virtual Assistant",
	'content' => "Here to assist, personally",
];

$post4 = (object)[
	'imageurl' => content_url() . "/uploads/2017/10/phone-laptop.jpg",
	'double' => false
];

$post5 = (object)[
	'title' => "What I can do for you",
	'content' => "I take the added administrative mind-numbing work off your shoulders, work the room as your strategic partner, collect decisions and compile double the business cards in half the amount of time"
];

$post6 = (object)[
	'imageurl' => content_url() . "/uploads/2017/10/city.jpg",
    'double' => true
];

$post7 = (object)[
	'title' => "Newsletter",
	'content' => "This weekly newsletter will provide a great resource for upcoming networking opportunities to grow your network, with tips, tricks and overall strategies to make the most of your time while growing your business."
];

$post8 = (object)[
	'imageurl' => content_url() . "/uploads/2017/10/newsletter.jpg",
	'imagelink' => "/my-story",
	'double' => false
];

$post9 = (object)[
	//'imageurl' => content_url() . "/uploads/2017/10/city.jpg",
	'double' => true
];

$fakeposts = array($post1, $post2, $post3, $post4, $post5, $post6, $post7, $post8);
//</editor-fold>
?>
<style type="text/css">
    #annoying div.center-block{
        margin: 20%;
    }
    .img-responsive{
        min-height: 100%;
        background-size: cover;
    }
    #annoying div:nth-of-type(odd){
        background-color: #f5f5f5;
    }
    #annoying div:nth-of-type(7){
        background-color: #f4f0eb;
    }
    @media only screen and (min-width: 1200px) {
        .img-responsive-double {
            min-height: calc(200%);
        }
        #annoying [class*='col-']{
            height: 425px;
            /*height: 26.564rem;*/
        }
    }
    @media only screen and (max-width: 1199px) {
        .img-responsive-double {
            min-height: calc(100%);
        }
        #annoying [class*='col-']{
            height: 340px;
            /*height: 26.564rem;*/
        }
    }
</style>
<!--region Annoying Section-->
<section class="container-fluid" id="annoying">
    <div class="row no-gutter">
        <?php foreach($fakeposts as $fake_post): ?>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
	            <?php if(isset($fake_post->imageurl)):?>
                    <?php if(isset($fake_post->imagelink)):?>
                        <a href="<?php echo $fake_post->imagelink; ?>">
                            <div class="img-responsive<?php echo($fake_post->double ? "-double" : "");?>" style="background:url('<?php echo $fake_post->imageurl;?>') center center no-repeat;"></div>
                        </a>
		            <?php else: ?>
                        <div class="img-responsive<?php echo($fake_post->double ? "-double" : "");?>" style="background:url('<?php echo $fake_post->imageurl;?>') center center no-repeat;"></div>
                    <?php endif; ?>
	            <?php else: ?>
                    <div class="center-block">
                        <?php if(isset($fake_post->titlelink)):?>
                            <a href="<?php echo $fake_post->titlelink; ?>">
                                <h3><?php echo $fake_post->title; ?></h3>
                            </a>
                        <?php else: ?>
                            <h3><?php echo (isset($fake_post->title) ? $fake_post->title : ""); ?></h3>
                        <?php endif;?>
                        <div class="divider"></div>
                        <p><?php echo (isset($fake_post->content) ? $fake_post->content : ""); ?></p>
                    </div>
	            <?php endif ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--endregion-->

<!--region Service Pacakges-->
<?php
$_terms = get_terms( array('service_packages') );
foreach ($_terms as $term) :
	$term_slug = $term->slug;
	$_posts = new WP_Query( array(
		'post_type'         => 'service',
		'tax_query' => array(
			array(
				'taxonomy' => 'service_packages',
				'field'    => 'slug',
				'terms'    => $term_slug,
			),
		),
	)); ?>
	<div class="container-fluid">
        <div class="highlight-container" id="<?php echo $term_slug; ?>">
            <h2 class="text-center"><?php echo $term->name;?></h2>
            <p class="text-center"><?php echo (isset($term->description) ? $term->description : "");?></p>
            <div class="dividerFull"></div>
        <div class="row">
        <?php
            if( $_posts->have_posts() ) :
                while ( $_posts->have_posts() ) : $_posts->the_post(); ?>
                    <div class="col-12 col-sm-2 col-lg-1 text-center">
                        <i class="fa <?php the_field("icon") ?> fa-4x"></i>
                    </div>
                    <div class="col-12 col-sm-10 col-lg-5">
                        <h3><?php the_title(); ?></h3>
                        <?php the_field("content"); ?>
                    </div>
                    <?php
                endwhile;
            endif; ?>
        </div>
        </div>
	</div>
    <?php
	wp_reset_postdata();
endforeach;
?>
<!--endregion-->

<!-- region Testimonials -->
<section class="testimonials">
    <div class="container">
        <h2>Hear What Others Have To Say</h2>
        <div class="row">
            <?php $query = new WP_Query(['post_type' => 'testimonial']);
            if($query->have_posts() ) while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-lg-1">
                    <i class="fa fa-quote-left fa-3x"></i>
                </div>
                <div class="col-lg-5">
                    <?php the_field("client_quote"); ?>
                    <h4>
                        <strong><?php the_field("client_name"); ?></strong>
                        <br /><?php the_field("client_title");?>
                        <a href="<?php the_field("client_company_website"); ?>" target="_blank"><?php the_field("client_company"); ?></a>
                    </h4>
                </div>
            <?php endwhile;  ?>
        </div>
    </div>
</section>
<!--endregion-->

<!--TODO INJECT DYNAMICALLY-->
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
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

<!--End mc_embed_signup-->
<!--TODO MAKE WIDGET-->
<section id="footer" style="background-color: black;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
                <a target="_blank" href="mailto:ashley@ashleyassists.com?subject=Lets-connect-AA"><i class="fa fa-envelope-square fa-4x"></i></a>
            </div>
            <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
                <a target="_blank" href="https://www.linkedin.com/in/ashowens/"><i class="fa fa-linkedin-square fa-4x"></i></a>
            </div>
            <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
                <a target="_blank" href="https://www.facebook.com/ashleyassists/"><i class="fa fa-facebook-square fa-4x"></i></a>
            </div>
            <div class="col-auto col-sm-3 col-md-3 col-lg-2 col-xl-2">
                <a target="_blank" href="https://www.instagram.com/ashleyassists/"><i class="fa fa-instagram fa-4x"></i></a>
            </div>
        </div>
    </div>
</section>

<!--

   A few references
  https://codepen.io/htmlr/pen/dslfL
  https://okayrelax.com/plans
  -->

<?php get_footer(); ?>