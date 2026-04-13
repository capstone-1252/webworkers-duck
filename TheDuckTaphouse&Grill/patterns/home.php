<?php 
/**
 * Title: Home
 * Slug: TheDuckTaphouse&Grill/home
 * Categories: home
 */
?>
<!-- wp:template-part {"slug":"header","theme":"TheDuckTaphouse\u0026Grill","tagName":"header","area":"uncategorized"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero","layout":{"flexWrap":"wrap","justifyContent":"left","orientation":"horizontal"}} -->
    <section class="wp-block-group hero">
        <div class="center">
            <img src="<?=get_stylesheet_directory_uri()?>/images/duck-logo.webp" alt="logo">
        </div>
        <!-- wp:group {"tagName":"section","layout":{,"justifyContent":"center","contentSize":"500px"}} -->
        <section class="wp-block-group"><!-- wp:heading {"level":1,"className":"wp-block-heading"} -->
            <h1 class="wp-block-heading">Proud to be serving<br>locals, since 1996</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>We have been serving local edmontonians and NAIT students for years and we don’t plan to stop. So, why not come by, take a seat, and enjoy our food and the festivities.</p>
            <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button btn" href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">See the Menu</a>
            </div><!-- /wp:button -->
        </div><!-- /wp:buttons -->
        </section>
    <!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"about","layout":{"type":"constrained"}} -->
<section class="wp-block-group about"><!-- wp:media-text {"mediaPosition":"right"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile"><div class="wp-block-media-text__content"><!-- wp:heading {"className":"wp-block-heading"} -->
<h2 class="wp-block-heading">About The Duck</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><p>Since the summer of 1996 The Duck has been your Go-To neighbourhood pub. Conveniently located in the heart of Alberta avenue, this local student hang out has been serving up great food and drinks at the best prices around.</p>
<p>We have the pleasure of serving nearby campus community members and strangers that quickly become friends.</p> 
<p>Connect with us for event catering, team building sessions, fundraisers, and private party needs. We can host up to 150 guests at any time! Stop by one of our open mic nights to hear local musical talent or enjoy some karaoke!</p></p>
<!-- /wp:paragraph --></div><img src="<?= get_stylesheet_directory_uri()?>/images/front-the-duck.avif" alt="An Image of the front of the tap house The Duck"></div>
<!-- /wp:media-text --></section>
<!-- /wp:group -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ripped-paper.webp" alt="" class="paper ">

<!-- wp:group {"tagName":"section","className":"what-we-have","layout":{"type":"constrained"}} -->
<section class="wp-block-group what-we-have"><!-- wp:heading {"className":"wp-block-heading"} -->
<h2 class="wp-block-heading">What we have</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"minimumColumnWidth":"15rem","columnCount":null}} -->

<div class="wp-block-group poloroid-group"><!-- wp:group {"tagName":"section","layout":{"orientation":"vertical"}} -->


<!-- Catering POLOROID CARD -->
<section class="wp-block-group catering-poloroid">
<!-- wp:group {"className":"poloroid-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group poloroid-card"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<!-- wp:image {"scale":"cover"} -->
<img alt="Several golden roasted chicken breasts." src="<?php echo get_stylesheet_directory_uri(); ?>/images/catering-poloroid.avif"  style="object-fit:cover" class="height"/>
<!-- /wp:image -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pin.png" alt="" class="pin">
<h3 class="wp-block-heading">Catering</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Enjoy our food at your events!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->




<!-- FOOD POLOROID CARD -->
<!-- wp:group {"tagName":"section","layout":{"orientation":"vertical"}} -->
<section class="wp-block-group food-poloroid">

<!-- wp:group {"className":"poloroid-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group poloroid-card"><!-- wp:heading {"level":3} -->
<!-- wp:image {"scale":"cover"} -->
<img alt="A close up photo of a seared stake topped with green onions and garlic" src="<?php echo get_stylesheet_directory_uri(); ?>/images/food-poloroid.avif" style="object-fit:cover" class="height"/>
<!-- /wp:image -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pin.png" alt="" class="pin">
<h3 class="wp-block-heading">Food</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Enjoy our variety of food!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p><a href="http://ducktaphouseandgrill.ca/menu/" data-type="link" data-id="http://ducktaphouseandgrill.ca/menu/">Go to Menu</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>



<!-- Parties and Local Live Bands POLOROID CARD -->
<!-- wp:group {"tagName":"section","layout":{"orientation":"vertical"}} -->
<section class="wp-block-group live-bands-poloroid">

<!-- wp:group {"className":"poloroid-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group poloroid-card"><!-- wp:heading {"level":3} -->
<!-- wp:image {"scale":"cover"} -->
<img alt="A full body shot of 4 members of a local band" src="<?php echo get_stylesheet_directory_uri(); ?>/images/live-bands-poloroid.avif" style="object-fit:cover" class="height"/>
<!-- /wp:image -->
 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pin.png" alt="" class="pin">
<h3 class="wp-block-heading">Live Bands</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Listen to local and live music</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->




<!-- Live Sports & Sponsorship  POLOROID CARD -->
<!-- wp:group {"tagName":"section","layout":{"orientation":"vertical"}} -->
<section class="wp-block-group sports-poloroid">

<!-- wp:group {"className":"poloroid-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group poloroid-card"><!-- wp:heading {"level":3} -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pin.png" alt="" class="pin flip-h">
<!-- wp:image {"scale":"cover"} -->
<img alt="An advertisement for a special on game nights that shows wings for $10 and medium pizzas for $11" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sports-poloroid.avif" style="object-fit:cover" class="height"/>
<!-- /wp:image -->
<h3 class="wp-block-heading">Sports</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Watch current live sports</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->


<!-- Pool & Darts   POLOROID CARD -->
<!-- wp:group {"tagName":"section","layout":{"orientation":"vertical"}} -->
<section class="wp-block-group pool-darts-poloroid">

<!-- wp:group {"className":"poloroid-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group poloroid-card"><!-- wp:heading {"level":3} -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pin.png" alt="" class="pin flip-h">
<!-- wp:image {"scale":"cover"} -->
<img alt="A group of students all grouped up for a photo infront of a pool table." src="<?php echo get_stylesheet_directory_uri(); ?>/images/pool-darts-poloroid.avif" style="object-fit:cover" class="height"/>
<!-- /wp:image --><h3 class="wp-block-heading">Pool &amp; Darts</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Play pool and darts</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->





<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group socials"><!-- wp:group {"tagName":"section","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<section class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group "><!-- wp:heading -->
<h2 class="wp-block-heading">Where the locals hang</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Join us for the fun! See what we are up to and be up to date on our events by going to our socials</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"openInNewTab":true,"size":"has-huge-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<ul class="wp-block-social-links has-huge-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/theducktaphouse","service":"facebook","label":""} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/theducktaphousegrill/","service":"instagram"} /--></ul>
<!-- /wp:social-links --></section>
<!-- /wp:group -->

<!-- wp:shortcode -->
<?= do_shortcode('[trustindex-feed-instagram]') ?>
<!-- /wp:shortcode --></section>
<!-- /wp:group -->

<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ripped-paper.webp" alt="" class="paper flip-v flip-h">
<div class="reviews">
<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group reviews-content"><!-- wp:heading -->
<h2 class="wp-block-heading">Reviews from our customer</h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
 
<?= do_shortcode('[trustindex no-registration=google]') ?>
<!-- /wp:shortcode --></section>
</div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"TheDuckTaphouse\u0026Grill","tagName":"div","area":"uncategorized"} /-->