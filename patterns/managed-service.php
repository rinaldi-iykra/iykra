<?php
/**
 * Title: Managed Service
 * Slug: iykra/managed-service-page
 * Categories: corporate
 * Block Types: core/template-part/managed-service-page
 * Description: Managed Service page.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main>

    <div class="bg-corporate-1">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="h-screen flex isolate px-8 py-8 lg:px-14 lg:py-14">
                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <div class="content-center space-y-2 text-left lg:pr-14 space-y-4 gs_reveal gs_reveal_fromLeft">
                        <h1 class="iykra-sg text-5xl lg:text-6xl text-white">Membangun Talenta Data Berstandar Internasional</h1>
                        <p class="iykra-gs text-white pb-4 text-xl lg:text-2xl">Dapatkan talenta terbaik melalui seleksi komprehensif, dengan kendali penuh atas proses onboarding dan perekrutan.</p>
                        <button class="text-sm lg:text-base btn-primary text-black rounded-full px-14 py-3 iykra-gs">Jadwalkan Konsultasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="px-8 lg:px-14 flex">
                <div class="py-14 w-full content-center">
                    <div class="w-full relative space-y-14">
                        <div class="flex-1 space-y-14 rounded-lg">
                            <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 pb-8 gs_reveal">
                                <div class="text-left sm:col-span-1 md:col-span-1 lg:col-span-3">
                                    <h3 class="iykra-sg text-3xl lg:text-4xl">Temukan Talenta Data Terbaik yang Sesuai untuk tim Anda!</h3>
                                </div>
                                <div class="sm:col-span-1 md:col-span-1 lg:col-span-1 py-4"></div>
                                <div class="flex flex-col sm:col-span-1 md:col-span-1 lg:col-span-2">
                                    <p class="divider gray" style="margin-bottom:0px !important;"></p>
                                    <button 
                                        data-target="tab-data" 
                                        class="btn-tab iykra-gs text-xl lg:text-2xl py-2 text-left px-4 outline-none"
                                    >
                                        Data Role
                                    </button>
                                    <p class="divider gray" style="margin-bottom:0px !important;"></p>
                                    <button 
                                        data-target="tab-tech"
                                        class="btn-tab iykra-gs text-xl lg:text-2xl py-2 text-left px-4 outline-none"
                                    >
                                        Tech Role
                                    </button>
                                    <p class="divider gray" style="margin-bottom:0px !important;"></p>
                                </div>
                            </div>
                            <div id="tab-data"
                                class="tab-content grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 gs_reveal">
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Data Engineer</p>
                                    <div class="corporate-icon triangle"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Data/BI Analyst</p>
                                    <div class="corporate-icon circle"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Data Consultant</p>
                                    <div class="corporate-icon rectangle"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Data Science</p>
                                    <div class="corporate-icon octa"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">BI Developer</p>
                                    <div class="corporate-icon star"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">CRM Analyst</p>
                                    <div class="corporate-icon polygon"></div>
                                </div>
                            </div>
                            <div id="tab-tech"
                                class="tab-content hidden grid sm:grid-cols-1 md:grid-cols-3 g:grid-cols-3 gap-8 gs_reveal">
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Back End Engineer</p>
                                    <div class="corporate-icon triangle"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Front End Engineer</p>
                                    <div class="corporate-icon circle"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Full Stack Engineer</p>
                                    <div class="corporate-icon rectangle"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Technical Writer</p>
                                    <div class="corporate-icon octa"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">Software Engineer</p>
                                    <div class="corporate-icon star"></div>
                                </div>
                                <div class="content-start w-full bg-card-corporate rounded-lg h-40 text-left p-8 space-y-8">
                                    <p class="iykra-gs text-lg lg:text-xl content-center">UI/UX</p>
                                    <div class="corporate-icon polygon"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1 space-y-14 iykra-corporate-banner-2 rounded-lg h-full w-full p-14 gs_reveal">
                            <div class="grid grid-cols-3 py-8">
                                <div class="space-y-8 col-span-3 md:col-span-2 lg:col-span-1">
                                    <div class="content-center text-center md:text-left lg:text-left">
                                        <h3 class="iykra-sg text-2xl lg:text-3xl">Belum Yakin dengan Kebutuhan Anda?</h3>
                                    </div>
                                    <div class="content-center text-center md:text-left lg:text-left">
                                        <button class="btn-primary text-black iykra-gs text-sm lg:text-base rounded-full px-8 py-3 hidden lg:block">Konsultasikan Sekarang</button>
                                        <button class="btn-primary text-black iykra-gs text-sm lg:text-base rounded-full px-8 py-3 block lg:hidden mx-auto">Konsultasikan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-14"></div>
    <!-- wp:pattern {"slug":"iykra/why-iykra-page-2"} /-->
    <div class="mb-14"></div>

    <div class="bg-white m-0">
        <div class="relative">
            <!-- wp:pattern {"slug":"iykra/trusted-by-page"} /-->
        </div>
    </div>
</main>
<!-- /wp:group -->
