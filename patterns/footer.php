<?php
/**
 * Title: Footer
 * Slug: iykra/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<button id="pull-up" class="focus:outline-none text-primary w-14 h-14 rounded-full bg-3 hover:bg-spectra-yellow hover:text-white shadow hide">
	<i class="fa fa-arrow-up icon-large"></i>
</button>

<div class="pageloader bg-4">
	<img class="image-pageloader" style="width:150px;"
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pageloader/iykra-animation.gif"
	/>
</div>

<div class="wp-block-group bg-footer px-4 lg:px-14" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo /-->
		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="wp-block-group alignfull">
			<div class="grid sm:grid-cols-1 md:grid-cols-5 lg:grid-cols-5 gap-4 lg:px-14">
				<div class="space-y-4 p-4 lg:pl-0 md:col-span-2 lg:col-span-2">
					<img style="width:100px;"
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/logo-color-white.png"
					/>
					<p class="iykra-gs text-lg">
						<?php echo get_bloginfo( 'description' ); ?>
					</p>
				</div>

				<div class="space-y-4 p-4">
					<p class="iykra-sg text-lg"><b>Layanan</b></p>
					<div class="grid space-y-2">
						<a class="footer-link iykra-gs text-lg focus:outline-none" href="/corporate-training">Corporate Training</a>
						<a class="footer-link iykra-gs text-lg focus:outline-none" href="/managed-service">Manage Service</a>
					</div>
				</div>
				<div class="space-y-4 p-4">
					<p class="iykra-sg text-lg"><b>Produk</b></p>
					<div class="grid space-y-2 pb-4">
						<a class="footer-link iykra-gs text-lg focus:outline-none" href="/public-training">Public Training</a>
						<a class="footer-link iykra-gs text-lg focus:outline-none" href="/ai-engineering-fellowship">AI Engineering Fellowship</a>
					</div>

					<a href="/events" class="iykra-sg text-lg footer-link focus:outline-none"><b>Event</b></a>
					<div class="grid space-y-2">
						<a class="footer-link iykra-gs text-lg focus:outline-none" href="/events/talkson">TalksON AI</a></p>
						<a class="footer-link iykra-gs text-lg focus:outline-none" href="/events/berandai">BerandAI</a></p>
					</div>
				</div>
				<div class="space-y-4 p-4 lg:pr-0">
					<p class="iykra-sg text-lg"><b>Hubungi Kami</b></p>
					<p class="iykra-gs text-lg"><b>Sopo Del Tower, 20th Floor</b><br/>Jl. Mega Kuningan Barat III, Lot 10. 1-6 Kawasan Mega Kuningan Jakarta Selatan 12950</p>
					<p class="iykra-gs text-lg">+62 812-8770-0095<br/>
					contact@iykra.com</p>
				</div>
			</div>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
