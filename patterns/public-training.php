<?php
/**
 * Title: Public Training
 * Slug: iykra/public-training
 * Categories: training
 * Block Types: core/template-part/public-training-page
 * Description: Public Training page.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}}} -->
<main>
    <div class="bg-white">
        <div class="mx-auto">
            <div class="h-screen">
                <div class="single-banner-text">
                    <div class="h-screen flex isolate px-8 py-8 lg:px-14 lg:py-8">
                        <div class="grid gap-14 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                            <div class="flex flex-col justify-between ">
                                <p></p>
                                <div class="py-14 text-left space-y-4 gs_reveal gs_reveal_fromLeft">
                                    <p class="iykra-sg text-lg lg:text-xl text-white">Public Training</p>
                                    <h1 class="iykra-sg text-5xl lg:text-6xl text-white">Tingkatkan Skill AI & Analytics Anda Secara Praktikal</h1>
                                    <p class="iykra-gs text-white pb-8 text-xl lg:text-2xl">Kuasai penggunaan AI untuk transformasi bisnis secara langsung dan aplikatif</p>
                                    <a href="#registration" 
                                        class="text-sm lg:text-base btn-primary text-black rounded-full px-14 py-3 iykra-gs">Registrasi</a>
                                </div>
                                <p class="iykra-gs text-base text-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper default-carousel-event swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/training/banner-1.png" class="object-cover h-screen w-screen"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/training/banner-2.png" class="object-cover h-screen w-screen"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/training/banner-3.png" class="object-cover h-screen w-screen"/>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-center"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-14 pb-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative">
                        <div class="flex grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 space-y-8 lg:space-y-0 gap-y-0 lg:gap-y-8 gap-x-14">
                            <div class="content-start">
                                <p class="iykra-sg text-3xl lg:text-4xl gs_reveal gs_reveal_fromLeft">Program Overview</p>
                            </div>
                            <div class="content-start">
                                <p class="iykra-gs text-lg lg:text-xl pb-8 gs_reveal gs_reveal_fromRight">Public Training IYKRA adalah program pelatihan intensif selama 2 hari ini dirancang khusus untuk para profesional dari berbagai divisi yang ingin memperdalam keahlian praktis dalam penggunaan alat AI dan analitik untuk mendukung pengambilan keputusan bisnis yang efektif. Melalui pelatihan luring interaktif dengan studi kasus nyata, peserta tidak hanya memperoleh pemahaman teoritis, tetapi juga keterampilan teknis nyata yang siap diaplikasikan langsung untuk mengoptimalkan kinerja bisnis melalui analytics, AI tools, serta framework bisnis berbasis data.</p>
                                <!-- <a href="https://fellowship-registration.iykra.com" target="_blank" class="text-sm lg:text-base btn-primary-outline text-black rounded-full px-8 py-3 iykra-gs">Unduh Booklet</a> -->
                            </div>
                            <p class="divider gray sm:col-span-1 md:col-span-1 lg:col-span-2 pb-4"></p>
                            <div class="content-start">
                                <p class="iykra-sg text-3xl lg:text-4xl gs_reveal gs_reveal_fromLeft">Untuk Siapa Program ini?</p>
                            </div>
                            <div class="content-start">
                                <p class="iykra-gs text-lg lg:text-xl pb-8 gs_reveal gs_reveal_fromRight">Program ini terbuka untuk peserta dari berbagai level dan latar belakang, termasuk divisi non-IT. Untuk memaksimalkan relevansi materi, kami telah menyusun jadwal batch berdasarkan fungsi bisnis tertentu.</p>
                                <a href="#registration" class="text-sm lg:text-base btn-primary text-black rounded-full px-8 py-3 iykra-gs">Registrasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-footer py-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative space-y-14">
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 space-y-8 lg:space-y-0 gap-x-14 gs_reveal">
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2">
                                <p class="iykra-sg text-3xl lg:text-4xl">Topik & Modul Pelatihan</p>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2">
                                <p class="iykra-gs text-lg lg:text-xl">Dirancang agar setiap peserta—dari berbagai fungsi bisnis—dapat langsung menerapkan AI dalam pekerjaan sehari-hari untuk meningkatkan efisiensi dan kualitas keputusan.</p>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 space-y-8 lg:space-y-0 gap-x-8">
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-1.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">Fundamental Data & Analytics</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Pelajari cara mengelola data dan mengekstrak insight untuk mendukung keputusan strategis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-2.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">Komunikasi & Presentasi</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Bangun kemampuan menyampaikan insight dan rekomendasi data secara efektif kepada stakeholder bisnis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-3.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">Otomatisasi Proses Bisnis dengan AI</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Identifikasi dan terapkan peluang otomasi dalam alur kerja rutin untuk meningkatkan efisiensi operasional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-4.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">Mentoring</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Dapatkan arahan langsung dari fasilitator untuk membantu Anda memahami konteks penerapan AI sesuai kebutuhan divisi Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-5.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">AI Agents untuk Analisis & Laporan</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Dalam menyusun laporan otomatis dan strategi berbasis data.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-6.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">Practice case & assignment</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Terapkan seluruh materi dalam dokumen practice case dan assignment berbasis kasus nyata sebagai bukti kompetensi dan alat bantu implementasi di tempat kerja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content-start w-full sm:col-span-1 md:col-span-1 lg:col-span-2 gs_reveal">
                                <div class="grid grid-cols-10 sm:col-span-1 md:col-span-1 lg:col-span-6 border-t py-8">
                                    <div class="w-full h-full rounded-l-xl flex content-start justify-center items-start p-0 lg:p-4">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/training/icon-7.png"/>
                                    </div>
                                    <div class="col-span-9 p-0 px-4 lg:px-8">
                                        <p class="iykra-sg text-lg lg:text-xl text-white">Simulasi & Studi Kasus Dunia Nyata</p>
                                        <p class="iykra-gs text-base lg:text-lg text-white">Uji kemampuan Anda dengan tantangan bisnis yang relevan dan tools nyata.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pt-14 pb-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="">
                    <div class="w-full relative">
                        <div class="flex grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 space-y-8 lg:space-y-0 gap-y-0 lg:gap-y-8 gap-x-8">
                            <div class="content-start space-y-6">
                                <p class="iykra-sg text-3xl lg:text-4xl gs_reveal gs_reveal_fromLeft">Benefit Program</p>
                                <p class="divider gray"></p>
                                <div>
                                    <p class="iykra-sg text-lg lg:text-xl">Praktik Langsung dengan Updated Tools</p>
                                    <p class="iykra-gs text-base lg:text-lg">Pelatihan yang menekankan pada penerapan nyata menggunakan AI tools yang relevan dengan kebutuhan industri.</p>
                                </div>
                                <p class="divider gray"></p>
                                
                                <div>
                                    <p class="iykra-sg text-lg lg:text-xl">Suasana Belajar Kolaboratif & Dinamis</p>
                                    <p class="iykra-gs text-base lg:text-lg">Didesain untuk mendorong diskusi strategis dan pertukaran insight antar peserta dengan format round-table discussion.</p>
                                </div>
                                <p class="divider gray"></p>
                                
                                <div>
                                    <p class="iykra-sg text-lg lg:text-xl">Pembelajaran Penuh Selama Dua Hari</p>
                                    <p class="iykra-gs text-base lg:text-lg">Disusun sebagai program intensif full-day agar peserta dapat menyelami materi secara utuh dan terstruktur.</p>
                                </div>
                                <p class="divider gray"></p>
                                
                                <div>
                                    <p class="iykra-sg text-lg lg:text-xl">Ekspansi Jaringan Profesional Anda</p>
                                    <p class="iykra-gs text-base lg:text-lg">Bertemu dengan rekan lintas industri yang memiliki minat dan tantangan serupa.</p>
                                </div>
                                <p class="divider gray"></p>
                                
                                <div>
                                    <p class="iykra-sg text-lg lg:text-xl">Pendekatan Hands-On yang Aplikatif</p>
                                    <p class="iykra-gs text-base lg:text-lg">Seluruh sesi dirancang untuk membekali Anda dengan keterampilan yang bisa langsung diterapkan di lingkungan kerja.</p>
                                </div>
                                <p class="divider gray"></p>
                            </div>
                            <div class="content-start px-0 lg:px-14 gs_reveal">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/training/content-1.png" class="object-cover h-full rounded-xl shadow-lg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="registration" class="pb-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div class="bg-spectra-yellow rounded-xl shadow-lg p-8 lg:p-14 gs_reveal">
                    <div>
                    <div class="w-full relative space-y-8">
                        <div class="flex grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-y-0 lg:gap-y-8 gap-x-8">
                            <div class="content-start space-y-2">
                                <p class="iykra-sg text-3xl lg:text-4xl">Kalendar Public</p>
                                <p class="iykra-sg text-3xl lg:text-4xl">Training IYKRA 2025</p>
                            </div>
                            <div class="content-start px-0 lg:px-14">
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-8 ignore-is-layout-flow">
                            <!-- wp:pattern {"slug":"iykra/public-training-card"} /-->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-14">
        <div class="mx-auto sm:px-0 lg:px-14">
            <div class="relative px-8 lg:px-14">
                <div>
                    <div class="w-full relative space-y-8">
                        <div class="flex grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 space-y-8">
                            <div class="content-start space-y-2 gs_reveal">
                                <p class="iykra-sg text-3xl lg:text-4xl pt-0 lg:pt-8">Investasi di Public</p>
                                <p class="iykra-sg text-3xl lg:text-4xl">Training IYKRA</p>
                            </div>
                            <div class="content-start gs_reveal gs_reveal_fromRight">
                                <div class="w-full rounded-xl shadow-xl bg-footer p-8 lg:p-14 text-center">
                                    <div class="space-y-4 flex flex-col justify-between">
                                        <p class="iykra-sg text-xl lg:text-2xl">2 Hari Pelatihan Offline (full day)</p>
                                        <p class="iykra-sg text-3xl lg:text-4xl">Rp 3.000.000*</p>
                                        <p class="iykra-gs text-base lg:text-lg">*exclude VAT</p>
                                        <div class="space-y-4 lg:space-y-0 lg:space-x-4 flex flex-col lg:flex-row mx-auto">
                                            <a href="#registration" class="btn-primary text-gs text-sm lg:text-base rounded-full px-8 py-3">Registrasi</a>
                                            <a href="https://api.whatsapp.com/send/?phone=6281298952818&text=Hai+IYKRA%2C%20saya%20tertarik%20ingin%20tahu%20lebih%20lanjut+mengenai+program+-+program+yang+tersedia.+Bisa+bantu+informasinya?&type=phone_number&app_absent=0" 
                                                target="_blank" class="btn-primary-outline text-gs text-sm lg:text-base rounded-full px-4 py-3">
                                                <i class="fa fa-whatsapp"></i>
                                                Hubungi Kami
                                            </a>
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

    <div class="bg-white">
        <div class="mx-auto sm:px-0 lg:px-14 pb-14">
            <div class="px-8 lg:px-14">
                <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left">
                        <h1 class="iykra-sg text-3xl lg:text-4xl text-black gs_reveal gs_reveal_fromLeft">Frequently Asked Question</h1>
                    </div>
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left">
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Apa itu Public Training IYKRA?</b></div>
                            <i data-target="faq-1" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-1" class="iykra-faq-content overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Public Training IYKRA adalah program pelatihan intensif selama dua hari yang dirancang untuk membekali para profesional dengan keterampilan praktis dalam penggunaan AI & analytics guna meningkatkan efisiensi kerja dan pengambilan keputusan bisnis.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Siapa saja yang bisa mengikuti program ini?</b></div>
                            <i data-target="faq-2" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-2" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Program ini terbuka untuk semua profesional, mulai dari manajer, analis, hingga staf operasional dari berbagai divisi, namun ada prerequisite yang tertera di booklet. Selain itu, setiap batch telah disesuaikan dengan fungsi bisnis tertentu, jadi silahkan pilih jadwal yang paling relevan dengan pekerjaan Anda agar pembelajaran lebih aplikatif sesuai kebutuhan.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Bagaimana cara mendaftar Public Training IYKRA?</b></div>
                            <i data-target="faq-3" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-3" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Pendaftaran dapat dilakukan melalui tombol Register pada landing page kami. Setelah memilih jadwal training, Anda akan diarahkan ke halaman pembayaran dan pengisian data peserta.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Apakah saya bisa memilih tanggal dan topik pelatihan?</b></div>
                            <i data-target="faq-4" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-4" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Ya, Anda dapat memilih dari tiga jadwal pelatihan yang tersedia sepanjang tahun 2025, masing-masing dengan tema yang berbeda dan relevan dengan kebutuhan bisnis.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Berapa biaya investasi untuk mengikuti pelatihan ini?</b></div>
                            <i data-target="faq-5" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-5" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Biaya investasi untuk mengikuti pelatihan selama dua hari penuh secara offline adalah Rp 3.000.000 (belum termasuk PPN).</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Apakah saya akan mendapatkan sertifikat?</b></div>
                            <i data-target="faq-6" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-6" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Ya, peserta akan mendapatkan sertifikat penyelesaian resmi dari IYKRA di bidang AI & analytics.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Bagaimana jika saya sudah mendaftar tapi tidak bisa hadir?</b></div>
                            <i data-target="faq-7" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-7" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Kebijakan pembatalan atau pengalihan peserta akan diinformasikan secara rinci setelah pendaftaran. Silakan hubungi tim IYKRA untuk diskusi lebih lanjut mengenai kebijakan ini.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Apa saja metode pembayaran yang tersedia?</b></div>
                            <i data-target="faq-8" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-8" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Pembayaran dapat dilakukan melalui berbagai metode seperti QRIS, kartu kredit, e-wallet, virtual account, dan lainnya.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Apakah pelatihan ini diselenggarakan secara online?</b></div>
                            <i data-target="faq-9" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-9" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Tidak. Public Training IYKRA diselenggarakan 100% secara offline di ruang meeting hotel untuk mendukung interaksi yang lebih maksimal antar peserta.</p>
                        </div>
                        <p class="pt-4 divider gray"></p>
                        <div class="w-full rounded-xl grid grid-cols-12 py-4">
                            <div class="col-span-11 iykra-gs text-xl"><b>Kapan batas waktu pendaftaran?</b></div>
                            <i data-target="faq-10" class="fa fa-plus text-black text-xl text-right content-center cursor-pointer toggle-icon"></i>
                        </div>
                        <div id="faq-10" class="iykra-faq-content hidden overflow-hidden transition-all duration-500 ease-in-out pt-4">
                            <p class="iykra-gs text-base">Pendaftaran ditutup paling lambat H-5 hari kerja sebelum pelatihan dimulai, atau lebih cepat jika kuota telah terpenuhi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /wp:group -->