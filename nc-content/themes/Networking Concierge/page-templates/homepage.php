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
    <img src="<?php echo content_url();?>/uploads/2017/09/1-e1506662211884.jpg";>
    <div class="main-heading-text">
        <h1><span>Ashley Assists</span></h1>
        <h2>Your Personal <br/> Networking Concierge</h2>
        <div class="btn-lets-connect">
            <a class="button" href="mailto:ashley@ashleyassists.com?subject=Lets-connect-AA"><span>Let's Connect</span></a>
        </div>
    </div>
</div>


<!-- region Highlights -->
<section class="container-fluid highlights">
<div class="highlight-container">
    <h3 class="text-center">I take away the mind numbing activities of networking so you can grow your business</h3>
    <h6 class="text-center">If you are in business of any kind, networking, building and keeping relationships is a big part of your success</h6>
    <div class="row">
        <?php $query = new WP_Query(['post_type' => 'highlight']);
            if($query->have_posts() ) while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4">
                    <img class="hover-box" src="<?php echo get_field('highlight_image')['url']; ?>"/>
                    <div>
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div>
                        <p><?php the_field('highlight_overview'); ?></p>
                    </div>
                </div>
        <?php endwhile;  ?>
    </div>
</div>
</section>
<!--endregion-->

<!-- 3x3 Grid -->
<section class="main-grid container-fluid">
    <div class="grid-wrapper">
        <div class="grid-item small">
            <div class="grid-text">
                <h2>My Story</h2>
                <div class="divider"></div>
                <p>How I became a corporate refugee</p>
            </div>
        </div>
        <div class="grid-img small" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/tmp-img/7.jpg')";></div>
        <div class="grid-item small">
            <div class="grid-text">
                <h2>Virtual Assistant</h2>
                <div class="divider"></div>
                <p>Here to assist, personally</p>
            </div>
        </div>
        <div class="grid-img small" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/tmp-img/phones.jpg')";></div>
        <div class="grid-item small">
            <div class="grid-text">
                <h2>What I can do for you</h2>
                <div class="divider"></div>
                <p>If you want it, I got it.. or something like that </p>
            </div>
        </div>
        <div class="grid-img tall" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/tmp-img/main3.jpg')";></div>

        <!-- <div class="grid-img" style="background-image: url('./img/main2.jpeg')";></div> -->
        <div class="grid-item small">
            <div class="grid-text">
                <h2>Newsletter</h2>
                <div class="divider"></div>
                <p>This weekly newsletter will provide a great resource for upcoming networking opportunities to grow your network, with tips,
                    tricks and overall strategies to make the most of your time while growing your business.</p>
            </div>
        </div>
        <div class="grid-item small">
            <div class="grid-text">

            </div>
        </div>
    </div>
</section>

<!--region Premium Membership-->
<div class="container">
    <div class="icon-list-container">
        <h1>Premium Membership</h1>
        <div class="dividerFull"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-row icon-list-item">
                    <div class="p-2">
                        <i class="fa fa-envelope-o fa-4x"></i>
                    </div>
                    <div class="p-2">
                        <h3>Custom Tailored Email Messages</h3>
                        <p>Custom emails will be created based on your company’s mission statement and first impression. Option for corresponding as an employee (requires your company email) or using my email <a href="mailto:ashley@ashleyassists.com">ashley@ashleyassists.com</a> and customizing the signature with your company logo.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-row icon-list-item">
                    <div class="p-2">
                        <i class="fa fa-phone fa-4x"></i>
                    </div>
                    <div class="p-2">
                        <h3>Follow Up Calls & Emails</h3>
                        <p>After you received your business cards from a networking event orthose that pile on your desk,these contacts will be scheduled forthatface to face or conference call.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-row icon-list-item">
                    <div class="p-2">
                        <i class="fa fa-calendar fa-4x"></i>
                    </div>
                    <div class="p-2">
                        <h3>Direct Calendar Scheduling</h3>
                        <p>Shared calendar - Outlook, Gmail etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-row icon-list-item">
                    <div class="p-2">
                        <i class="fa fa-list-alt fa-4x"></i>
                    </div>
                    <div class="p-2">
                        <h3>Status Updates</h3>
                        <p>Status on the activity of each warm prospect, ie: when a meeting is scheduled, a voicemail left etc.
                            <br/>Bcc'd on all corresponding emails or bi-weekly updates.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-row icon-list-item">
                    <div class="p-2">
                        <i class="fa fa-newspaper-o fa-4x"></i>
                    </div>
                    <div class="p-2">
                        <h3>Networking Newsletter -Subscriber</h3>
                        <p>Added as a subscriberto the“Networking Newsletter”that is distributed weekly to over 100 plus members with upcoming networking opportunities,trends,tips and educational content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--endregion-->


    <!--region WhiteGlove-->
    <div class="container">
        <div class="icon-list-container">
            <h1 style="padding-bottom: 0;">White Glove</h1>
            <p style="text-align: center; padding-bottom: 40px;">(Includes all premium services)</p>
            <div class="dividerFull"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-row icon-list-item">
                        <div class="p-2">
                            <i class="fa fa-user-circle-o fa-4x"></i>
                        </div>
                        <div class="p-2">
                            <h3>On Site Strategic Partner</h3>
                            <ul>
                                <li>Going to a networking event? I will join you as a strategic partner representing you and your company.</li>
                                <li>Gathering 2x the amount of applicable business cards in 1/2 the time.</li>
                                <li>Up to four (4) events a month</li>
                                <li>Greater Philadelphia Area –*additionaltravel expenses may incur outside the greater Philadelphia Area.*</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-row icon-list-item">
                        <div class="p-2">
                            <i class="fa fa-pencil-square-o fa-4x"></i>
                        </div>
                        <div class="p-2">
                            <h3>Personalized Handwritten Letters</h3>
                                <p> Adding a personaltouch to your prospects, clients birthdays, etc. following up with something as personal as a handwritten letter does not go unnoticed.</p>
                                <strong>Signed, Sealed and Mailed.</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-row icon-list-item">
                        <div class="p-2">
                            <i class="fa fa-linkedin fa-4x"></i>
                        </div>
                        <div class="p-2">
                            <h3>Connecting Via Linkedin</h3>
                            <p>Connecting with warm prospects after a meeting or conference call is scheduled.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-row icon-list-item">
                        <div class="p-2">
                            <i class="fa fa-newspaper-o fa-4x"></i>
                        </div>
                        <div class="p-2">
                            <h3>Networking Newsletter – Spotlight Member</h3>
                            <p>Added as a Spotlight Memberto my Networking Newsletter that is distributed weekly to over 100 + subscribers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--endregion-->

    <!--region Additional Services-->
    <div class="container">
        <div class="icon-list-container">
            <h1>Additional Services</h1>
            <div class="dividerFull"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-row icon-list-item">
                        <div class="p-2">
                            <i class="fa fa-newspaper-o fa-4x"></i>
                        </div>
                        <div class="p-2">
                            <h3>Branded Newsletters</h3>
                            <ul>
                                <li>Customized use of <a target="_blank" href="https://mailchimp.com/">Mail Chimp</a></li>
                                <li>Import all applicable clients, prospects, strategic partners, etc.</li>
                                <li>Unlimited consultation of your vision and message</li>
                                <li>Importing of contacts as subscribers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-row icon-list-item">
                        <div class="p-2">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="p-2">
                            <h3>Specialty Events</h3>
                            <div><strong>Trade show or Conference?</strong></div>
                            <ul>
                                <li>Either attending or being a vendor for, I will join and manage the table while you walk around and network and vice versa.</li>
                            </ul>
                            <div><strong>Speaking Engagement/ Book Signing etc.?</strong></div>
                            <ul>
                                <li>I will gladly network on your behalf and gather business cards, applicable marketing material etc. to use for your internal distribution list.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--endregion-->


<!-- Icon list -->
<div class="container-fluid additional-services">
    <div class="row">
        <div class="col-lg-6">
            <div class="fill-image" style="background-image: url('<?php echo content_url();?>/uploads/2017/09/calendar.jpg')";></div>
            <!--<div class="fill-image" style="background-image: url('<?php /*echo get_stylesheet_directory_uri();*/?>/tmp-img/left.jpeg')";></div>-->
        </div>
        <div class="col-lg-6">
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/ashleyowens" style="max-width:100%;height:650px;"></div>
            <script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
            <!-- Calendly inline widget end -->
        </div>
        </div>
    </div>
</div>

<section class="testimonials">
    <div class="container">
        <h1>Hear What Others Have To Say</h1>
        <div class="row">
            <div class="col-lg-1">
                <i class="fa fa-quote-left fa-3x"></i>
            </div>
            <div class="col-lg-5">

                <p>"Ashley is a diligent worker, you can tell that when you first meet with her, I
                    knew this was going to be a good business relationship right away. We had a
                    quick need for some help at a small conference and Ashley pulled it together
                    like a true professional. In less than 24 hours she had a plan and was onsite
                    networking on our behalf ( did I mention she traveled 3 hours each way as well).
                    We look forward to working with Ashley and her team at Ashley Assists in the
                    future, we have seen nothing but clear positive benefits."</p>
                <h4><strong>Marty McDonald</strong><br />CoFounder/CEO of Bad Rhino</h4>
            </div>
            <div class="col-lg-1">
                <i class="fa fa-quote-left fa-3x"></i>
            </div>
            <div class="col-lg-5">
                <p>"I've spent several years speaking, writing and working to develop technology to help people to
                    learn and adopt best practices in business networking. There is SO much potential in the activity,
                    but there are few networkers who really understand HOW to do it correctly - and they waste a lot of
                    time and opportunities as a result. From the very first time I spoke with Ashley, it was clear she's
                    one ofthe ones who 'gets it'. She has the exact right attitude and approach to building networking
                    relationships and her energy is infectious. I can'tthink of a better person to have to watch your
                    back and helping to take care ofthe details as you build your network."</p>
                <h4><strong>Chris Owens</strong><br /> Founder/CEO LincSphere</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1">
                <i class="fa fa-quote-left fa-3x"></i>
            </div>
            <div class="col-lg-5">
                <p>"Wow! Ashley Owens knows how to ASSIST! I have known Ashley for a couple of years, and from
                    the very first meeting, she was incredibly outgoing, polite, friendly, and still very directin getting
                    to the point. She is goal oriented and relentless in her ability to connect people for the greater
                    good.
                    Ashley goes above and beyond in connecting referral partners, potential clients, and asking the
                    right questions to make those introductions a perfect match. If you are considering an outside
                    source like Ashley Assists,this is a no-brainer!"</p>
                <h4><strong>Todd Hesbacher</strong><br /> Home Run Office Products</h4>
            </div>
            <div class="col-lg-1">
                <i class="fa fa-quote-left fa-3x"></i>
            </div>
            <div class="col-lg-5">
                <p>"Ashley has been an amazing business partner for me since our very first meeting. She has been
                    excellent in referring several high-quality business opportunities to me which have been extremely
                    beneficial for my career growth. In addition to that, Ashley is truly a fun and engaging person to
                    work who brings excellent energy to all her professional interactions! I highly recommend working
                    with Ashley.” </p>
                <h4><strong>Colin Delaney</strong><br /> CSS TECH</h4>
            </div>
        </div>
    </div>
</section>

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

<section class="temp-footer">
    <div class="row">
<!--        <div class="col-lg-2">
            <div class="logo">
                <img src="<?php /*echo get_stylesheet_directory_uri();*/?>/tmp-img/main-logo.jpg">
            </div>
        </div>-->
        <div class="col-lg-12">
            <div><a target="_blank" href="mailto:ashley@ashleyassists.com?subject=Lets-connect-AA"><i class="fa fa-envelope-square fa-4x"></i></a></div>
            <div><a target="_blank" href="https://www.linkedin.com/in/ashowens/"><i class="fa fa-linkedin-square fa-4x"></i></a></div>
            <div><a target="_blank" href="https://www.facebook.com/ashleyassists/"><i class="fa fa-facebook-square fa-4x"></i></a></div>
            <div><a target="_blank" href="https://www.instagram.com/ashleyassists/"><i class="fa fa-instagram fa-4x"></i></a></div>
        </div>
    </div>
</section>

<!--

   A few references
  https://codepen.io/htmlr/pen/dslfL
  https://okayrelax.com/plans
  -->

<?php get_footer(); ?>