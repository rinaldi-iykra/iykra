<?php
/**
 * Title: Event
 * Slug: iykra/event
 * Categories: event
 * Block Types: core/template-part/event-page
 * Description: Event page.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main>
    <div class="bg-white">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="flex isolate px-8 py-8 lg:px-14 lg:py-14">
                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5">
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left gs_reveal gs_reveal_fromLeft">
                        <h1 class="iykra-sg text-5xl lg:text-6xl text-black">IYKRA’s Event</h1>
                    </div>
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-1">

                    </div>
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left gs_reveal">
                        <p class="iykra-gs text-xl lg:text-2xl text-black pb-4">Eksplorasi ragam acara eksklusif IYKRA yang dirancang untuk menghubungkan industry leaders, experts teknologi, dan talenta terbaik dalam industri AI.</p>
                    </div>
                </div>
            </div>
            <div class="flex isolate px-8 lg:px-14">
                <div class="swiper default-carousel-event swiper-container rounded-xl">
                    <div class="swiper-wrapper rounded-xl">
                        <div class="swiper-slide rounded-xl" style="height: auto;">
                            <div class="h-full space-y-4 iykra-event-banner-1 rounded-xl">
                                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                                    <div class="col-span-1 justify-center text-white">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/talkson-logo.png" class="px-4"/>
                                        <div class="mx-14 space-y-4 pb-14">
                                            <p class="iykra-gs text-lg lg:text-xl">
                                                Seri panel diskusi yang membahas tren bisnis, strategi bisnis dan penerapan teknologi AI bersama praktisi industri.
                                            </p>
                                            <p  class="iykra-gs text-sm py-4">Dapatkan insight praktis untuk solusi bisnis Anda!</p>
                                            <a href="talkson" class="btn-primary text-gs text-sm lg:text-base rounded-full px-8 py-3 mt-4">Daftar Sekarang</a>
                                            <p  class="iykra-gs text-sm">*Jadwal lengkap tersedia di bawah</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-xl" style="height: auto;">
                            <div class="h-full space-y-4 iykra-event-banner-2  rounded-xl">
                                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                                    <div class="col-span-1 justify-center text-white py-14">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logos/berandai-logo.png" class="px-10 pb-14"/>
                                        <div class="mx-14 space-y-4">
                                            <p class="iykra-gs text-xl">
                                                Event Interaktif Industri AI yang Menghubungkan Pemimpin Bisnis, Expert AI, dan Talenta Terbaik.
                                            </p>
                                            <p  class="iykra-gs text-sm py-4">Jelajahi pameran solusi AI, diskusi bersama pakar industri, dan peluang networking strategis di BerandAI IYKRA.</p>
                                            <a href="berandai" class="btn-berandai text-gs text-sm lg:text-base rounded-full px-8 py-3">Lihat Event</a>
                                            <p  class="iykra-gs text-sm">*Jadwal lengkap tersedia di bawah</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-center"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative space-y-14">
                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5">
                            <div class="content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 gs_reveal gs_reveal_fromLeft">
                                <p class="iykra-sg text-3xl lg:text-4xl">Kilas Balik Event IYKRA</p>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-1 py-4 lg:py-0 lg:px-8">
                                
                            </div>
                            <div class="content-start w-full space-y-4 sm:col-span-1 md:col-span-2 lg:col-span-2 gs_reveal">
                                <p class="iykra-gs text-xl lg:text-2xl">Jelajahi kembali insights menarik, diskusi strategis, serta kolaborasi nyata yang tercipta dari event IYKRA sebelumnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-4 md:px-6 lg:px-10">
                <div class="">
                    <div class="w-full relative hidden sm:hidden md:block lg:block">
                        <div class="swiper default-carousel-eventHistory swiper-container rounded-xl" style="width:100% !important;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide rounded-xl px-4">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-x-8 gap-y-8">
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-1.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">BerandAI Fashion bersama Bella Clarissa (Goomah) dan Tommy Teja (Zalmon Fabric & Aico) di Neha Hub, Cilandak. 15 Februari 2025</p>
                                            </div>
                                        </div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-2.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Presentasi siswa AI Fellowship Engineering batch 1 di BerandAI Fashion, Neha Hub. 15 Februari 2025</p>
                                            </div>
                                        </div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-3.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Panel diskusi AI dalam 3 Babak, kolaborasi bersama IME FT UI. On frame: I Ketut Widya (GM FMC & Enabler CVM, Telkomsel), Ardya Dipta (Head of Data Science, Kalbe). 26 Oktober 2024 di Fakultas Teknik UI, Depok</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-x-8 gap-y-8">
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-4.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Talent IYKRA, Zalma (ex Data Engineer di BRI & BNI) mengajar di program Elektrifikasi UI by Ikatan Mahasiswa Teknik Elektro (IME) FTUI. 5 Oktober 2024</p>
                                            </div>
                                        </div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-5.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Melina Anggita, Enterprise Lead IYKRA sebagai dewan juri di Compfest UI, Fasilkom UI</p>
                                            </div>
                                        </div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-6.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">BJIR "Bersama Jalani Indahnya Ramadan" (Buka Puasa bersama tim IYKRA) di Hotel Des Indes, Jakarta Pusat. 27 Maret 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-x-8 gap-y-8">
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-7.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Talent IYKRA, Mentari (ex Data Enginner di BNI) menjadi pembicara di UMN Tech Festival</p>
                                            </div>
                                        </div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-8.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Graduation Data Fellowship 11: "Fast-Track Data Engineering Program" di kantor IYKRA</p>
                                            </div>
                                        </div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-9.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Kelas Hybrid Data Fellowship: "Fast-Track Data Engineering" di kantor IYKRA, Juli 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full relative sm:block md:hidden lg:hidden">
                        <div class="swiper default-carousel-eventHistory swiper-container rounded-xl" style="width:100% !important;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-1.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">BerandAI Fashion bersama Bella Clarissa (Goomah) dan Tommy Teja (Zalmon Fabric & Aico) di Neha Hub, Cilandak. 15 Februari 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-2.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Presentasi siswa AI Fellowship Engineering batch 1 di BerandAI Fashion, Neha Hub. 15 Februari 2025</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-3.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Panel diskusi AI dalam 3 Babak, kolaborasi bersama IME FT UI. On frame: I Ketut Widya (GM FMC & Enabler CVM, Telkomsel), Ardya Dipta (Head of Data Science, Kalbe). 26 Oktober 2024 di Fakultas Teknik UI, Depok</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-x-8 gap-y-8">
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-4.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Talent IYKRA, Zalma (ex Data Engineer di BRI & BNI) mengajar di program Elektrifikasi UI by Ikatan Mahasiswa Teknik Elektro (IME) FTUI. 5 Oktober 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-5.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Melina Anggita, Enterprise Lead IYKRA sebagai dewan juri di Compfest UI, Fasilkom UI</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-6.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">BJIR "Bersama Jalani Indahnya Ramadan" (Buka Puasa bersama tim IYKRA) di Hotel Des Indes, Jakarta Pusat. 27 Maret 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-x-8 gap-y-8">
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-7.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Talent IYKRA, Mentari (ex Data Enginner di BNI) menjadi pembicara di UMN Tech Festival</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-8.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Graduation Data Fellowship 11: "Fast-Track Data Engineering Program" di kantor IYKRA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl px-4">
                                    <div>
                                        <div class="content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4">
                                            <div class="content-center">
                                                <img class="rounded-xl h-60 w-full" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/history/history-9.png"/>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="iykra-gs text-lg">Kelas Hybrid Data Fellowship: "Fast-Track Data Engineering" di kantor IYKRA, Juli 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative space-y-14">
                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gs_reveal">
                            <div class="content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2">
                                <p class="iykra-sg text-3xl lg:text-4xl">Kalender Event IYKRA</p>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-1 py-4 lg:py-0 lg:px-8">
                                
                            </div>
                            <div class="content-start w-full space-y-4 sm:col-span-1 md:col-span-2 lg:col-span-2">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-8">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative space-y-8">
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 space-x-8">
                            <div id="month-container" class="grid grid-cols-3 gap-x-8 text-center">
                                <button class="outline-none w-full btn-semiblack text-gs text-sm lg:text-base rounded-xl py-3 transition-all duration-300 opacity-100 translate-y-0">Prev</button>
                                <button class="outline-none w-full btn-primary text-gs text-sm lg:text-base rounded-xl py-3 transition-all duration-300 opacity-100 translate-y-0">Current</button>
                                <button class="outline-none w-full btn-semiblack text-gs text-sm lg:text-base rounded-xl py-3 transition-all duration-300 opacity-100 translate-y-0">Next</button>
                            </div>
                            <div class="hidden md:block lg:block relative">
                                <input type="text" id="search-event" name="search-event" value="" placeholder="Cari disini ..." 
                                    class="px-4 pr-10 block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6"/>
                                <i class="fa fa-search absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-8">
                            <div id="event-empty-404" class="event-empty-card opacity-100 translate-y-0 scale-100 transition-all duration-300 ease-in-out content-start w-full rounded-xl sm:col-span-1 md:col-span-3 lg:col-span-6">
                                <div class="content-center flex flex-col justify-between w-full rounded-xl h-80 space-y-4 align-center py-14">
                                    <div class="space-y-4">
                                        <div class="flex justify-center">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/event-calendar-icon.png"/>
                                        </div>
                                        <p class="iykra-gs text-xl mx-8 text-center" style="font-weight: bolder;">Event tidak ditemukan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-8">
                            <!-- wp:pattern {"slug":"iykra/talkson-card"} /-->
                            <!-- wp:pattern {"slug":"iykra/fellowship-card"} /-->
                            <!-- wp:pattern {"slug":"iykra/public-training-card"} /-->
                            <!-- wp:pattern {"slug":"iykra/ai-business-camp-card"} /-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative">
                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5">
                            <div class="content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2">
                                <p class="iykra-sg text-3xl lg:text-4xl">Publikasi Media</p>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-1">
                                
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative space-y-14">
                        <div class="grid sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-x-8 gap-y-8">
                            <a target="_blank" href="https://inet.detik.com/business/d-7607964/mendorong-inovasi-dengan-next-gen-ai" class="outline-none publication-content content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4 overflow-hidden">
                                <div class="content-center w-full rounded-xl h-60 publication-content-image overflow-hidden">
                                    <img class="rounded-xl w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/publication/publication-1.png" />
                                </div>
                                <div class="space-y-2">
                                    <p class="iykra-sg text-xl">Mendorong Inovasi dengan Next Gen AI</p>
                                    <p class="iykra-gs text-sm">Liputan 6 - 2 Maret 2025</p>
                                </div>
                            </a>
                            <a target="_blank" href="https://www.jagatreview.com/2024/10/mendorong-inovasi-dengan-next-gen-ai-masa-depan-ai-di-indonesia" class="outline-none publication-content content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4 overflow-hidden">
                                <div class="content-center w-full rounded-xl h-60 publication-content-image overflow-hidden">
                                    <img class="rounded-xl w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/publication/publication-2.png" />
                                </div>
                                <div class="space-y-2">
                                    <p class="iykra-sg text-xl">Mendorong Inovasi dengan Next Gen AI: Masa Depan AI di Indonesia</p>
                                    <p class="iykra-gs text-sm">Jagat Review - 24 Oktober 2024</p>
                                </div>
                            </a>
                            <a target="_blank" href="https://www.antaranews.com/berita/4425365/adopsi-ai-di-perusahaan-dinilai…" class="outline-none publication-content content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4 overflow-hidden">
                                <div class="content-center w-full rounded-xl h-60 publication-content-image overflow-hidden">
                                    <img class="rounded-xl w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/publication/publication-3.png" />
                                </div>
                                <div class="space-y-2">
                                    <p class="iykra-sg text-xl">Adopsi AI di perusahaan dinilai jadi strategi bisnis jangka panjang</p>
                                    <p class="iykra-gs text-sm">Antara News - 27 Oktober 2024</p>
                                </div>
                            </a>
                            <a target="_blank" href="https://www.liputan6.com/showbiz/read/5940116/kreator-konten-bella-clarissa-dan-tommy-teja-mengulas-integrasi-teknologi-dalam-desain-fashion" class="outline-none publication-content content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4 overflow-hidden">
                                <div class="content-center w-full rounded-xl h-60 publication-content-image overflow-hidden">
                                    <img class="rounded-xl w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/publication/publication-4.png" />
                                </div>
                                <div class="space-y-2">
                                    <p class="iykra-sg text-xl">Kreator Konten Bella Clarissa dan Tommy Teja Mengulas Integrasi Teknologi dalam Desain Fashion</p>
                                    <p class="iykra-gs text-sm">Liputan 6 - 2 Maret 2025</p>
                                </div>
                            </a>
                            <a target="_blank" href="https://www.liputan6.com/tekno/read/4073018/tantangan-indonesia-capai-kedaulatan-data-di-era-digital" class="outline-none publication-content content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4 overflow-hidden">
                                <div class="content-center w-full rounded-xl h-60 publication-content-image overflow-hidden">
                                    <img class="rounded-xl w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/publication/publication-5.png" />
                                </div>
                                <div class="space-y-2">
                                    <p class="iykra-sg text-xl">Tantangan Indonesia Capai Kedaulatan Data di Era Digital</p>
                                    <p class="iykra-gs text-sm">Liputan 6 - 27 September 2019</p>
                                </div>
                            </a>
                            <a target="_blank" href="https://timesindonesia.co.id/tekno/230664/ceo-iykra-kedaulatan-data-sebuah-keharusan-hadapi-era-40" class="outline-none publication-content content-start w-full sm:col-span-1 md:col-span-2 lg:col-span-2 space-y-4 overflow-hidden">
                                <div class="content-center w-full rounded-xl h-60 publication-content-image overflow-hidden">
                                    <img class="rounded-xl w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event/publication/publication-6.png" />
                                </div>
                                <div class="space-y-2">
                                    <p class="iykra-sg text-xl">CEO IYKRA: Kedaulatan Data Sebuah Keharusan Hadapi Era 4.0</p>
                                    <p class="iykra-gs text-sm">Times Indonesia - 26 September 2019</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /wp:group -->
