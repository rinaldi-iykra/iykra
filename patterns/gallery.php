<?php
/**
 * Title: Galllery
 * Slug: iykra/gallery-page
 * Categories: gallery
 * Block Types: core/template-part/gallery-page
 * Description: Gallery page.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<div class="bg-white m-0" id="gallery">
    <div class="relative">
        <div class="pt-14">
            <div class="flex-1">
                <div class="grid gap-4 grid-cols-1 lg:grid-cols-2 px-8 lg:px-14">
                    <div class=" content-center space-y-2 pb-8 gs_reveal gs_reveal_fromLeft px-0 lg:px-14">
                        <h3 class="iykra-sg text-3xl lg:text-4xl text-black">Gallery</h3>
                        <p class="iykra-gs text-xl lg:text-2xl text-black">See our fun class and services</p>
                    </div>

                    <div class="flex items-end lg:justify-end justify-center lg:relative">
                        <button id="slider-button-left" class="iykra-button-prev slide-gallery flex justify-center items-center w-14 h-14 focus:outline-none" data-carousel-prev>
                            <i class="fa fa-arrow-left text-xl"></i>
                        </button>
                        <button id="slider-button-right" class="iykra-button-next slide-gallery flex justify-center items-center w-14 h-14 focus:outline-none" data-carousel-next>
                            <i class="fa fa-arrow-right text-xl"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full relative">
                    <div class="swiper centered-slide-carousel swiper-container relativer">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-spectra-yellow h-96 flex justify-center items-center">
                                    <img 
                                        class="object-cover w-full h-full" 
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery/iykra-gallery-1.jpg"
                                    />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-spectra-yellow h-96 flex justify-center items-center">
                                    <img 
                                        class="object-cover w-full h-full" 
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery/iykra-gallery-2.jpg"
                                    />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-spectra-yellow h-96 flex justify-center items-center">
                                    <img 
                                        class="object-cover w-full h-full" 
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery/iykra-gallery-3.jpg"
                                    />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-spectra-yellow h-96 flex justify-center items-center">
                                    <img 
                                        class="object-cover w-full h-full" 
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery/iykra-gallery-4.jpg"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
