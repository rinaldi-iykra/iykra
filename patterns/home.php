<?php
/**
 * Title: Home
 * Slug: iykra/home-page
 * Categories: home
 * Block Types: core/template-part/home-page
 * Description: Home page.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main>

    <div class="bg-white">
        <div class="relative isolate px-8 py-8 lg:px-14 lg:py-14">
            <div class="px-0 lg:px-14">
                <div class="flex-1 space-y-4 bg-radial-gradient-primary">
                    <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        <div class="lg:p-14 p-4 content-center space-y-2 gs_reveal gs_reveal_fromLeft">
                            <h1 class="iykra-sg text-5xl lg:text-6xl color-spectra-yellow">Preparing Indonesia’s Future Force</h1>
                            <p class="iykra-gs text-xl lg:text-2xl color-muted pb-4">by consulting and outsourcing data talents</p>
                            <button class="btn-white iykra-gs text-base rounded px-4 py-2">Find Out More</button>
                        </div>
                        <div class="lg:p-14 sm:p-4 flex justify-center lg:justify-end">
                            <div class="flex">
							    <img class="z-10" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-home-1.png"/>
                                <div class="image-decorator hidden lg:block"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-4 m-0 lg:block hidden btn-navigation-group bg-navbar " id="btn-nav-group">
        <div class="relative px-8 lg:px-14 ">
            <div class="grid gap-x-20 grid-cols-4">
                <a href="#what-we-do" class="focus:outline-none btn-navigation-transparent text-center text-gs text-base px-4 py-2">
                    What We Do
                </a>
                <a href="#testimonial" class="focus:outline-none btn-navigation-transparent text-center text-gs text-base px-4 py-2">
                    Testimonial
                </a>
                <a href="#as-seen-on" class="focus:outline-none btn-navigation-transparent text-center text-gs text-base px-4 py-2">
                    As Seen On
                </a>
                <a href="#gallery" class="focus:outline-none btn-navigation-transparent text-center text-gs text-base px-4 py-2">
                    Gallery
                </a>
            </div>
        </div>
    </div>

    <div class="bg-4 m-0" id="what-we-do">
        <div class="relative px-8 lg:px-14 pt-14">
            <div class="px-0 lg:px-14">
                <div class="flex-1 space-y-4">
                    <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        <div class="content-end space-y-2 pb-8 gs_reveal gs_reveal_fromLeft">
                            <h3 class="iykra-sg text-3xl lg:text-4xl text-black">What We Do</h3>
                            <p class="iykra-gs text-1xl lg:text-2xl text-black">Deliver a cutting edge solution through adopting a framework which focuses on talent development, artificial & business intelligence, and technology development.</p>
                        </div>
                        <div class="flex justify-center gs_reveal gs_reveal_fromRight">
                            <div class="flex">
							    <img class="rounded" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-home-2.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative px-0 lg:px-8 lg:px-14">
            <div class="px-0 lg:px-14">
                <div class="flex-1 space-y-4">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        <div class="content-center space-y-2 bg-radial-gradient-primary">
                            <div class="flex justify-center">
							    <img class="rounded" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-home-3.png"/>
                            </div>
                            <div class="flex space-x-4">
                                <div class="space-y-2 pb-8 pl-14 gs_reveal">
                                    <h3 class="iykra-sg text-3xl lg:text-4xl color-spectra-yellow">Data Fellowship</h3>
                                    <p class="iykra-gs text-lg lg:text-xl color-muted">Are you ready to challenge yourself to be the best #DataHeroes and get hired as Data Engineer? Click here to find out more about our most awaited bootcamp.</p>
                                </div>
                                <div class="pr-14 flex items-center lg:items-start">
                                    <button class="btn-primary text-primary rounded w-14 h-14 btn-rotate-45 rounded-full hover:bg-white hover:text-black">
                                        <i class="fa fa-arrow-right icon-large"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="grid justify-center">
                            <div class="bg-spectra-yellow">
							    <img class="rounded px-14 pt-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-home-4.png"/>
                                
                                <div class="flex space-x-4 pt-4">
                                    <div class="space-y-2 pb-8 pl-14 gs_reveal gs_reveal_fromRight">
                                        <h3 class="iykra-sg text-3xl lg:text-4xl text-white">Corporate Training</h3>
                                        <p class="iykra-gs text-lg lg:text-xl text-black">Build the whole big data and analytics capability needed by the great talent of an organization through solid fundamental concepts, real data projects.</p>
                                    </div>
                                    <div class="pr-14 flex items-center lg:items-start">
                                        <button class="btn-white text-primary rounded w-14 h-14 btn-rotate-45 rounded-full hover:text-white hover:bg-black">
                                            <i class="fa fa-arrow-right icon-large"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-3">
							    <img class="rounded px-14 pt-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-home-5.png"/>
                                
                                <div class="flex space-x-4 pt-4">
                                    <div class="space-y-2 pb-8 pl-14 gs_reveal gs_reveal_fromRight">
                                        <h3 class="iykra-sg text-3xl lg:text-4xl text-black">Managed Service</h3>
                                        <p class="iykra-gs text-lg lg:text-xl text-black">Through this service, we are focused on providing great executing through global standards data talents.</p>
                                    </div>
                                    <div class="pr-14 flex items-center lg:items-start">
                                        <button class="btn-primary text-primary rounded w-14 h-14 btn-rotate-45 rounded-full hover:bg-white hover:text-black">
                                            <i class="fa fa-arrow-right icon-large"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-4 m-0" id="testimonial">
        <div class="relative px-8 lg:px-14 pb-14">
            <div class="pt-14 px-0 lg:px-14">
                <div class="flex-1 space-y-4">
                    <div class="grid gap-4">
                        <div class=" content-center space-y-2 gs_reveal gs_reveal_fromLeft">
                            <h3 class="iykra-sg text-3xl lg:text-4xl text-black">Testimonial</h3>
                            <p class="iykra-gs text-lg lg:text-xl text-black">Let's hear from our partners!</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 px-0 lg:px-14">
                <div class="w-full relative">
                    <div class="swiper default-carousel swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="height: auto;">
                                <div class="h-full space-y-4 bg-spectra-yellow">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 h-full">
                                        <div class="">
                                            <img class="object-cover w-full h-auto gs_reveal" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial/iykra-testi-darman.jpg"/>
                                        </div>
                                        <div class="content-start lg:content-center lg:col-span-3 sm:col-span-1">
                                            <div class="lg:relative lg:-left-20 gs_reveal">
                                                <div class="bg-white p-4 rounded m-2">
                                                    <p class="iykra-gs text-lg lg:text-xl text-black">IYKRA is highly committed to achieving success in collaborations in the field of Data Visualization and Data Engineering, thus ensuring partners receive exceptional and high-quality outcomes.</p>
                                                </div>
                                                <div class="p-4 m-2 lg:mb-0 lg:pb-0 lg:relative lg:left-20">
                                                    <p class="iykra-sg text-lg lg:text-xl"><b>Darman Susanto S.</b></p>
                                                    <p class="iykra-gs text-lg lg:text-xl">Bank Negara Indonesia</p>
                                                    <p class="iykra-gs text-lg lg:text-xl">Team Lead - Information Delivery Department - Data Management and Analytics Division</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="height: auto;">
                                <div class="h-full space-y-4 bg-spectra-yellow">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 h-full">
                                        <div class="">
                                            <img class="object-cover w-full h-auto gs_reveal" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial/iykra-testi-ryan.jpg"/>
                                        </div>
                                        <div class="content-start lg:content-center lg:col-span-3 sm:col-span-1">
                                            <div class="lg:relative lg:-left-20 gs_reveal">
                                                <div class="bg-white p-4 rounded m-2">
                                                    <p class="iykra-gs text-lg lg:text-xl text-black">Collaborating with IYKRA on a Data Science training program using KNIME, a low-code/no-code data modeling tool, impressed me with its direct focus on data processing and insight extraction, appealing to non-technical audiences. Without delving into deep technicalities, we applied practical skills for business insights. This experience opened new avenues for our company to implement data analysis efficiently and expand this practice across our entire company group.</p>
                                                </div>
                                                <div class="p-4 m-2 lg:mb-0 lg:pb-0 lg:relative lg:left-20">
                                                    <p class="iykra-sg text-lg lg:text-xl"><b>Ryan Sosiawan</b></p>
                                                    <p class="iykra-gs text-lg lg:text-xl">ABM Investama</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="height: auto;">
                                <div class="h-full space-y-4 bg-spectra-yellow">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 h-full">
                                        <div class="">
                                            <img class="object-cover w-full h-auto gs_reveal" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial/iykra-testi-suyanto.jpg"/>
                                        </div>
                                        <div class="content-start lg:content-center lg:col-span-3 sm:col-span-1">
                                            <div class="lg:relative lg:-left-20 gs_reveal">
                                                <div class="bg-white p-4 rounded m-2">
                                                    <p class="iykra-gs text-lg lg:text-xl text-black">We are delighted to collaborate with IYKRA, as they have provided significant support for tasks at BRI, especially in Data Engineering. The expertise of IYKRA's talent has proven to be competitive and capable of easily adapting to our workflow.</p>
                                                </div>
                                                <div class="p-4 m-2 lg:mb-0 lg:pb-0 lg:relative lg:left-20">
                                                    <p class="iykra-sg text-lg lg:text-xl"><b>Suyanto</b></p>
                                                    <p class="iykra-gs text-lg lg:text-xl">Bank Rakyat Indonesia</p>
                                                    <p class="iykra-gs text-lg lg:text-xl">Manager (PIC utama Data Engineer) - Data Research Analytics Team</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center lg:justify-end justify-center lg:relative lg:bottom-7 lg:right-7">
                            <button id="slider-button-left" class="iykra-button-prev flex justify-center items-center w-14 h-14 focus:outline-none" data-carousel-prev>
                                <i class="fa fa-arrow-left text-xl"></i>
                            </button>
                            <button id="slider-button-right" class="iykra-button-next flex justify-center items-center w-14 h-14 focus:outline-none" data-carousel-next>
                                <i class="fa fa-arrow-right text-xl"></i>
                            </button>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white m-0">
        <div class="relative">
            <!-- wp:pattern {"slug":"iykra/trusted-by-page"} /-->
        </div>
    </div>

    <div class="bg-white m-0" id="as-seen-on">
        <div class="relative px-0 lg:px-14">
            <div class="pt-14 px-8 lg:px-14 ">
                <div class="flex-1 space-y-4">
                    <div class="grid gap-4">
                        <div class=" content-center space-y-2">
                            <h3 class="iykra-sg text-3xl lg:text-4xl text-black gs_reveal gs_reveal_fromLeft">As Seen On</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 relative px-8 lg:px-14 gs_reveal">
                <div>
                    <div class="flex-1">
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-5">
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-1.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-2.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-3.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-4.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-5.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center lg:justify-end lg:col-span-2">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-6.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-7.png"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="flex">
                                    <img 
                                        class="object-scale-down w-40 h-40"
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/iykra-seen-8.png"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- wp:pattern {"slug":"iykra/gallery-page"} /-->
</main>
<!-- /wp:group -->
