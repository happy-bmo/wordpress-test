<?php
/**
 * Title: Hero Section
 * Slug: basic-business/hero-section
 * Categories: basic-business, hero-section
 *
 * PHP version 7.4
 *
 * @category Basic_Business
 * @package  Basic_Business
 * @author   Prashant Deshmukh <prashant24deshmukh@gmail.com>
 * @license  GNU General Public License v3
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri() . '/assets/images/business-cover.jpg'); ?>","id":36,"dimRatio":50,"isUserOverlayColor":true,"minHeight":800,"minHeightUnit":"px","contentPosition":"top center","tagName":"main","metadata":{"name":""},"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}}},"className":"hero-section","layout":{"type":"default"}} -->
<main class="wp-block-cover has-custom-content-position is-position-top-center hero-section" style="margin-top:0px;padding-top:30px;padding-bottom:30px;min-height:800px" id="hero"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-36" alt="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/business-cover.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"bottom":"80px"},"blockGap":"0"}},"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-bottom:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:site-logo {"width":75,"shouldSyncIcon":true,"align":"left","className":"is-style-rounded","style":{"color":{"duotone":"unset"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:navigation {"ref":21,"icon":"menu","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"16px"}},"fontFamily":"inter"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"120px","bottom":"0"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:0px;margin-top:120px;margin-bottom:0;padding-bottom:0px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"layout":{"type":"constrained"}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"65px"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="font-size:65px">Company Name</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","lineHeight":"1.5"}},"fontFamily":"inter"} -->
<p class="has-inter-font-family" style="font-size:24px;line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta libero erat. Nullam at ipsum quis felis egestas vulputate nec nec ligula.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->
