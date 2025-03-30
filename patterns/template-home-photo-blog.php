<?php
/**
 * Title: Photo blog home
 * Slug: iykra/template-home-photo-blog
 * Template Types: front-page, index, home
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)">
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-text-annotation"} -->
		<h1 class="wp-block-heading has-text-align-center is-style-text-annotation"><?php esc_html_e( 'Stories', 'iykra' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Tell your story', 'iykra' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:pattern {"slug":"iykra/template-query-loop-photo-blog"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
