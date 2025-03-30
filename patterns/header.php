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
		<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<div class="grid grid-cols-2 lg:grid-cols-5 items-center w-full lg:px-14">
						<div class="flex">
							<a href="/" class="focus:outline-none">
								<img class="iykra-header-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/logo-color-black.png"/>
							</a>
						</div>
						<div class="justify-center lg:flex hidden lg:col-span-3">
							<ul class="flex flex-wrap space-x-12">
							<!-- <ul class="flex flex-wrap space-x-12 iykra-navbar"> -->
								<li>
									<div class="dropdown">
										<button class="dropbtn iykra-gs text-base px-2 py-2 justify-center flex">
											Services
											<i class="fa fa-chevron-down ml-2" style="padding-top:6px; font-size:10px;"></i>
										</button>
										<div class="dropdown-content iykra-gs text-base">
											<a href="/corporate-training" class="focus:outline-none">Corporate Training</a>
											<a href="/managed-service" class="focus:outline-none">Managed Service</a>
										</div>
									</div> 
								</li>
								<!-- <li>
									<a href="/about" class="navbar-link primary regular focus:outline-none px-2 py-2">Insight</a>
								</li> -->
								<li>
									<div class="dropdown">
										<button class="dropbtn iykra-gs text-base px-2 py-2 justify-center flex">
											Training
											<i class="fa fa-chevron-down ml-2" style="padding-top:6px; font-size:10px;"></i>
										</button>
										<div class="dropdown-content iykra-gs text-base">
											<a href="/ai-engineering-fellowship" class="focus:outline-none">AI Engineering Fellowship</a>
										</div>
									</div> 
								</li>
								<li>
									<a href="/events" class="navbar-link primary regular focus:outline-none px-2 py-2">Events</a>
								</li>
								<li>
									<a href="/about" class="navbar-link primary regular focus:outline-none px-2 py-2">Careers</a>
								</li>
								<!-- <li>
									<a href="/about" class="navbar-link primary regular focus:outline-none">About Us</a>
								</li> -->
							</ul>
						</div>
						<div class="flex justify-end lg:flex lg:col-span-2 lg:hidden">
							<button id="mobile-menu-button" class="iykra-gs text-base focus:outline-none">
								<i class="fa fa-bars text-xl"></i>
							</button>
						</div>
					</div>
				</div>

				<div id="mobile-menu" class="hidden lg:hidden wp-block-group alignwide">
					<div class="space-y-2 pb-8">
						<div class="space-y-2">
							<p class="w-full text-left iykra-gs text-base font-medium px-4">Corporate Services</p>
							<div class="space-y-2">
								<a href="/corporate-training" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-2 text-sm focus:outline-none">Corporate Training</a>
								<a href="/managed-service" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-2 text-sm focus:outline-none">Managed Service</a>
							</div>

							<p class="w-full text-left iykra-gs text-base font-medium pt-2 px-4">For Individual</p>
							<div class="space-y-2">
								<a href="/data-fellowship" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-2 text-sm focus:outline-none">Data Fellowship</a>
								<a href="/ai-engineering-fellowship" class="w-full rounded btn-menu-navbar block iykra-gs text-base px-8 py-2 text-sm focus:outline-none">AI Engineering Fellowship</a>
							</div>
							<a href="#" class="w-full rounded btn-menu-navbar block iykra-gs text-base font-medium focus:outline-none px-4 py-2">About Us</a>
						</div>
					</div>
				</div>
				<!-- /wp:group -->
			</div>
		<!-- /wp:group -->
	</nav>

<!-- /wp:group -->