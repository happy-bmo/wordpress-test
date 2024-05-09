<?php
/**
 * Title: Blog Section
 * Slug: basic-business/blog-section
 * Categories: basic-business, blog-section
 *
 * PHP version 7.4
 *
 * @category Basic_Business
 * @package  Basic_Business
 * @author   Prashant Deshmukh <prashant24deshmukh@gmail.com>
 * @license  GNU General Public License v3
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main id="blog" class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"42px","lineHeight":"1.23","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|custom-black"}}}},"textColor":"custom-black","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-black-color has-text-color has-link-color has-inter-font-family" style="font-size:42px;font-style:normal;font-weight:600;line-height:1.23">Blog</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"},"fontFamily":"inter"} -->
<div class="wp-block-group has-inter-font-family" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-featured-image {"isLink":true,"align":"left"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"15px"}},"fontFamily":"inter"} /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"26px","textDecoration":"none"}},"fontFamily":"inter"} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"15px"}},"fontFamily":"inter"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->