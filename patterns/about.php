<?php
/**
 * Title: About
 * Slug: iykra/about-page
 * Categories: about
 * Block Types: core/template-part/about-page
 * Description: About page.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main>
    <div class="bg-white">
        <div class="relative py-8 lg:py-14 container mx-auto px-8 lg:px-14">
            <div class="">
                <div class="flex-1 space-y-4 bg-3">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        <div class="lg:p-14 p-4 content-center space-y-2 gs_reveal gs_reveal_fromLeft lg:my-14">
                            <h1 class="iykra-sg text-5xl lg:text-6xl">About</h1>
                            <p class="iykra-gs text-xl lg:text-2xl color-muted-2 pb-4">IYKRA specializes as a data consulting firm, concentrating on corporate training, managed services, project implementation, data engineering bootcamps, and fostering data communities</p>
                        </div>
                        <div class="flex justify-center bg-linear-gradient-secondary lg:pr-14">
                            <div class="flex w-full justify-center my-auto">
							    <img class="z-10 object-cover h-80 w-full lg:my-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-1.jpeg"/>
                                <div class="image-decorator-2 hidden lg:block"></div>
                                <div class="image-decorator-3 hidden lg:block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white m-0">
        <div class="relative container mx-auto px-8 lg:px-14 pb-14">
            <div class="">
                <div class="grid grid-cols-4 space-y-4">
                    <div class="lg:col-span-3 col-span-4 lg:pr-4 content-center space-y-2 gs_reveal gs_reveal_fromLeft">
                        <h3 class="iykra-sg text-3xl lg:text-4xl text-black">Who We Are</h3>
                        <div class="space-y-4">
                            <p class="iykra-gs text-lg lg:text-xl text-black">IYKRA’s vision is building an Artificial Intelligence (AI) Talent Ecosystem in Indonesia. IYKRA help corporates and public or individual learners answer their business questions by building better use of data.</p>
                            <p class="iykra-gs text-lg lg:text-xl text-black">Our learners will be taught by our qualified industry experts and be maintained with the fluency of business, data, and technology skill sets in both of our classroom and online class platform.</p>
                            <p class="iykra-gs text-lg lg:text-xl text-black">Upon learning, we help learners create working channel to our hiring partners and keep them up to date by maintaining the network via community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-6 m-0">
        <div class="relative py-14 container mx-auto px-8 lg:px-14">
            <div class="">
                <div class="flex-1 space-y-4">
                    <div class="gs_reveal video-wrapper">
                        <iframe 
                            src="https://drive.google.com/file/d/1ml1mekJnxvONDrszpUkqlVg-NPZKPgGL/preview" 
                            allowfullscreen=""
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="relative container mx-auto px-8 lg:px-14 pb-14">
            <div class="">
                <div class="flex-1 space-y-4">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                        <div class="content-center gs_reveal gs_reveal_fromLeft">
                            <img class="object-cover shadow-xl rounded-xl" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-2.png"/>
                        </div>

                        <div class="p-4 content-center space-y-4 gs_reveal gs_reveal_fromRight lg:my-14">
                            <h3 class="iykra-sg text-3xl lg:text-4xl">Our Values</h3>
                            <p class="iykra-gs text-xl lg:text-2xl color-harvest-gold pb-4">CRAFTED by IYKRA</p>

                            <div class="flex space-x-4 items-center">
                                <img class="object-cover h-20 w-20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-3.png"/>
                                <p class="iykra-gs text-lg lg:text-xl">Connected (Closing the loop)</p>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <img class="object-cover h-20 w-20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-4.png"/>
                                <p class="iykra-gs text-lg lg:text-xl">Relevant</p>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <img class="object-cover h-20 w-20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-5.png"/>
                                <p class="iykra-gs text-lg lg:text-xl">Future Ready (two step ahead)</p>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <img class="object-cover h-20 w-20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-6.png"/>
                                <p class="iykra-gs text-lg lg:text-xl">True-hearted</p>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <img class="object-cover h-20 w-20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/iykra-about-7.png"/>
                                <p class="iykra-gs text-lg lg:text-xl">Drive to guide (reliable)</p>
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
