<?php
/**
 * Title: Header
 * Slug: iykra/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
	<nav class="fixed z-10 w-full shadow bg-navbar">
		<div class="wp-block-group px-8 lg:px-14">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
				<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 items-center w-full lg:px-14">
					<div class="flex">
						<a href="/" class="focus:outline-none">
							<img class="iykra-header-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/logo-color-black.png"/>
						</a>
					</div>
					<div class="justify-center md:flex lg:flex hidden col-span-1 md:col-span-2 lg:col-span-3">
						<ul class="flex flex-wrap space-x-12">
							<li>
								<div class="dropdown">
									<button class="dropbtn px-2 py-2 justify-center flex">
										<p class="iykra-gs text-base">Services</p>
										<i class="fa fa-chevron-down ml-2" style="padding-top:6px; font-size:10px;"></i>
									</button>
									<div class="dropdown-content iykra-gs text-base">
										<a href="/corporate-training" class="focus:outline-none">Corporate Training</a>
										<a href="/managed-service" class="focus:outline-none">Managed Service</a>
									</div>
								</div> 
							</li>
							<li>
								<div class="dropdown">
									<button class="dropbtn px-2 py-2 justify-center flex">
										<p class="iykra-gs text-base">Training</p>
										<i class="fa fa-chevron-down ml-2" style="padding-top:6px; font-size:10px;"></i>
									</button>
									<div class="dropdown-content iykra-gs text-base">
										<a href="/public-training" class="focus:outline-none">Public Training</a>
										<a href="/ai-engineering-fellowship" class="focus:outline-none">AI Engineering Fellowship</a>
									</div>
								</div> 
							</li>
							<li>
								<a href="/events" class="navbar-link iykra-gs text-base focus:outline-none px-2 py-2"><b>Events</b></a>
							</li>
							<li>
								<a href="/careers" class="navbar-link iykra-gs text-base focus:outline-none px-2 py-2"><b>Careers</b></a>
							</li>
							<li>
								<a href="/about" class="navbar-link iykra-gs text-base focus:outline-none"><b>About Us</b></a>
							</li>
						</ul>
					</div>
					<div class="flex justify-end md:hidden lg:flex lg:col-span-2 lg:hidden">
						<button id="mobile-menu-button" class="iykra-gs text-base focus:outline-none">
							<i class="fa fa-bars text-xl"></i>
						</button>
					</div>
				</div>
			</div>

			<div id="mobile-menu" class="hidden lg:hidden wp-block-group alignwide">
				<div class="space-y-2 pb-8">
					<div class="space-y-2">
						<p class="w-full text-left iykra-gs text-base font-medium px-4">Services</p>
						<div class="space-y-2">
							<a href="/corporate-training" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-3 text-sm focus:outline-none">Corporate Training</a>
							<a href="/managed-service" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-3 text-sm focus:outline-none">Managed Service</a>
						</div>

						<p class="w-full text-left iykra-gs text-base font-medium pt-2 px-4">Training</p>
						<div class="space-y-2">
							<a href="/public-training" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-3 text-sm focus:outline-none">Public Training</a>
							<a href="/ai-engineering-fellowship" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-3 text-sm focus:outline-none">AI Engineering Fellowship</a>
						</div>
						<a href="/events" class="w-full rounded btn-menu-navbar block iykra-gs text-base font-medium focus:outline-none px-4 py-3">Events</a>
						<a href="/careers" class="w-full rounded btn-menu-navbar block iykra-gs text-base font-medium focus:outline-none px-4 py-3">Careers</a>
						<a href="/about" class="w-full rounded btn-menu-navbar block iykra-gs text-base font-medium focus:outline-none px-4 py-3">About Us</a>
					</div>
				</div>
			</div>
			<!-- /wp:group -->
		</div>
	</nav>

<!-- /wp:group -->