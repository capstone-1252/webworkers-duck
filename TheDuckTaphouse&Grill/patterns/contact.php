<?php 
/**
 * Title: Contact
 * Slug: TheDuckTaphouse&Grill/contact
 * Categories: contact
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group contact-us">
<div class="container"> 
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Contact Us</h1>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"26rem"}} -->
<section class="wp-block-group"><!-- wp:image {"scale":"cover","style":{"layout":{"rowSpan":1}}} -->
<figure class="wp-block-image"><img alt="" src="<?= get_stylesheet_directory_uri(); ?>/images/duck-opening.avif" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group poloroid-card"><!-- wp:group {"layout":{"type":"constrained"}} -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pin.png" alt="" class="pin">

<div class="wp-block-group alignleft"><!-- wp:paragraph {"fontSize":"large","fontFamily":"playfair-display"} -->
<p class="has-playfair-display-font-family has-large-font-size"><strong>Phone:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>+1 (780) - 479 - 7193</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large","fontFamily":"playfair-display"} -->
<p class="has-playfair-display-font-family has-large-font-size"><strong>Address:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>10416 - 118 Avenue, Edmonton, AB</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group hours alignleft"><!-- wp:paragraph {"fontSize":"large","fontFamily":"playfair-display"} -->
<p class="has-playfair-display-font-family has-large-font-size"><strong>Open Hours:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="">Monday - Thursday: </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>10 AM - 10 PM</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Friday - Saturday:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>10 AM - Midnight </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sunday: Closed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group form-section"><!-- wp:paragraph {"fontSize":"large","fontFamily":"playfair-display"} -->
<p class="has-playfair-display-font-family has-large-font-size"><strong>For catering please fill out the contact form below:</strong></p>
<!-- /wp:paragraph -->

</div>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ripped-paper.png" alt="" class="paper flip-h flip-v">

<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"25rem"}} -->
<section class="wp-block-group form"><!-- wp:image {"scale":"cover"} -->
<figure class="wp-block-image"><img alt="Several golden roasted chicken breasts." src="<?php echo get_stylesheet_directory_uri(); ?>/images/catering-poloroid.avif"  style="object-fit:cover"/></figure>
<!-- /wp:image -->
<?= do_shortcode('[wpforms id="48"]') ?>
<!-- wp:wpforms/form-selector {"clientId":"bdb7385b-e7e9-4df1-9cde-089f40d8487d","formId":"43","theme":"default","themeName":"Default","copyPasteJsonValue":"{\u0022displayTitle\u0022:false,\u0022displayDesc\u0022:false,\u0022theme\u0022:\u0022default\u0022,\u0022themeName\u0022:\u0022Default\u0022,\u0022fieldSize\u0022:\u0022medium\u0022,\u0022backgroundImage\u0022:\u0022none\u0022,\u0022backgroundPosition\u0022:\u0022center center\u0022,\u0022backgroundRepeat\u0022:\u0022no-repeat\u0022,\u0022backgroundSizeMode\u0022:\u0022cover\u0022,\u0022backgroundSize\u0022:\u0022cover\u0022,\u0022backgroundWidth\u0022:\u0022100px\u0022,\u0022backgroundHeight\u0022:\u0022100px\u0022,\u0022backgroundUrl\u0022:\u0022url()\u0022,\u0022backgroundColor\u0022:\u0022rgba( 0, 0, 0, 0 )\u0022,\u0022fieldBorderRadius\u0022:\u00223px\u0022,\u0022fieldBorderStyle\u0022:\u0022solid\u0022,\u0022fieldBorderSize\u0022:\u00221px\u0022,\u0022fieldBackgroundColor\u0022:\u0022#ffffff\u0022,\u0022fieldBorderColor\u0022:\u0022rgba( 0, 0, 0, 0.25 )\u0022,\u0022fieldTextColor\u0022:\u0022rgba( 0, 0, 0, 0.7 )\u0022,\u0022fieldMenuColor\u0022:\u0022#ffffff\u0022,\u0022labelSize\u0022:\u0022medium\u0022,\u0022labelColor\u0022:\u0022rgba( 0, 0, 0, 0.85 )\u0022,\u0022labelSublabelColor\u0022:\u0022rgba( 0, 0, 0, 0.55 )\u0022,\u0022labelErrorColor\u0022:\u0022#d63637\u0022,\u0022buttonSize\u0022:\u0022medium\u0022,\u0022buttonBorderStyle\u0022:\u0022none\u0022,\u0022buttonBorderSize\u0022:\u00221px\u0022,\u0022buttonBorderRadius\u0022:\u00223px\u0022,\u0022buttonBackgroundColor\u0022:\u0022#066aab\u0022,\u0022buttonTextColor\u0022:\u0022#ffffff\u0022,\u0022buttonBorderColor\u0022:\u0022#066aab\u0022,\u0022pageBreakColor\u0022:\u0022#066aab\u0022,\u0022containerPadding\u0022:\u00220px\u0022,\u0022containerBorderStyle\u0022:\u0022none\u0022,\u0022containerBorderWidth\u0022:\u00221px\u0022,\u0022containerBorderColor\u0022:\u0022#000000\u0022,\u0022containerBorderRadius\u0022:\u00223px\u0022,\u0022containerShadowSize\u0022:\u0022none\u0022,\u0022customCss\u0022:\u0022\u0022}"} /--></section>
<!-- /wp:group --></section>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ripped-paper.png" alt="" class="paper flip-h ">

<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->