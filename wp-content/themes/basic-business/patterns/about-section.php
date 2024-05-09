<?php
/**
 * Title: About Section
 * Slug: basic-business/about-section
 * Categories: basic-business, about-section
 *
 * PHP version 7.4
 *
 * @category Basic_Business
 * @package  Basic_Business
 * @author   Prashant Deshmukh <prashant24deshmukh@gmail.com>
 * @license  GNU General Public License v3
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"180px","bottom":"180px"}}},"layout":{"type":"constrained"}} -->
<main id="about" class="wp-block-group" style="padding-top:180px;padding-bottom:180px"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0px","left":"50px"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"id":52,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/business-about.png'); ?>" alt="" class="wp-image-52" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"16px"}}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="margin-bottom:16px;font-size:35px;font-style:normal;font-weight:600">About Our Company</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"28px"}}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="margin-bottom:28px;font-size:16px">Relevant industry keywords</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1px"},"color":{"background":"#038c5c"},"spacing":{"margin":{"left":"150px","right":"150px"}}}} -->
<p class="has-background" style="background-color:#038c5c;margin-right:150px;margin-left:150px;font-size:1px"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px"}},"fontFamily":"inter"} -->
<p class="has-text-align-center has-inter-font-family" style="font-size:20px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta libero erat. Nullam at ipsum quis felis egestas vulputate nec nec ligula. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->