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
get_header(); ?>

<?php putRevSlider( "home" ) ?>

<!-- region Black bar of Social Links -->
<div class="container blue-links-centered">
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
</div>
<!-- endregion -->

<!-- region Highlights -->
<section class="container-fluid">
<div class="highlight-container">
    <h2 class="text-center">Networking, building and keeping relationships is a key part of any successful business</h2>
    <div class="row">
        <?php $query = new WP_Query(['post_type' => 'highlight']);
            if($query->have_posts() ) while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a href="#<?php the_field("scroll_id")?>">
                        <img class="hover-box" src="<?php echo get_field('highlight_image')['url']; ?>"/>
                    </a>
                    <h3><?php the_title(); ?></h3>
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
<!--region Annoying Section-->
<section class="container-fluid" id="annoying">
    <div class="row no-gutters">
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
                                <h2><?php echo $fake_post->title; ?></h2>
                            </a>
                        <?php else: ?>
                            <h2><?php echo (isset($fake_post->title) ? $fake_post->title : ""); ?></h2>
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
<div class="container-fluid">
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

        <div class="highlight-container" id="<?php echo $term_slug; ?>">
            <h2 class="text-center"><?php echo $term->name;?></h2>
            <p class="text-center"><?php echo (isset($term->description) ? $term->description : "");?></p>
            <div class="divider-full"></div>
        <div class="row">
            <?php
                if( $_posts->have_posts() ) :
                    while ( $_posts->have_posts() ) : $_posts->the_post(); ?>
                        <div class="col-12 col-sm-2 col-lg-1 text-center">
                            <i class="fa <?php the_field("icon") ?> fa-4x"></i>
                        </div>
                        <div class="col-12 col-sm-10 col-lg-5">
                            <h2><?php the_title(); ?></h2>
                            <?php the_field("content"); ?>
                        </div>
                        <?php
                    endwhile;
                endif; ?>
        </div>

        </div>
        <?php
        wp_reset_postdata();
    endforeach;
    ?>
</div>
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

<?php get_footer(); ?>