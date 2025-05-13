<?php
/**
 * Title: Career Apply
 * Slug: iykra/career-apply-page
 * Categories: career
 * Block Types: core/template-part/career-apply-page
 * Description: Career apply page.
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
            <div class="flex px-8 py-8 lg:px-14 lg:py-14">
                <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full">
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left gs_reveal gs_reveal_fromLeft">
                        <h1 class="iykra-sg text-5xl lg:text-6xl text-black">Karir di IYKRA</h1>
                    </div>
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left gs_reveal">
                        
                    </div>
                </div>
            </div>
            <div class="flex px-8 pb-8 lg:px-14 lg:pb-14">
                <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4  w-full">
                    <?php
                        $jobId = isset($_GET['job_id']) ? sanitize_text_field($_GET['job_id']) : null;

                        if ($jobId) :
                            $jobs = get_jobs_data_specific($jobId);

                            if (!empty($jobs)) :
                                foreach ($jobs as $job) :
                    ?>

                    <div 
                        id="cardDetailJob" 
                        data-jobdesc='<?php echo json_encode($job["jobdesc"]); ?>'
                        data-requirements='<?php echo json_encode($job["requirements"]); ?>'
                        class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left gs_reveal gs_reveal_fromLeft">
                        <div class="card bg-gray rounded-xl shadow-xl p-8">
                            <p class="iykra-sg text-2xl text-left"><?php echo esc_html($job['position']); ?></p>
                            <p class="iykra-gs text-lg text-left"><?php echo esc_html($job['type']); ?></p>
                            <div class="pt-8">
                                <h3 class="iykra-sg text-lg">Job Description</h3>
                                <ul id="detailJobDesc" class="list-disc list-inside iykra-gs text-base"></ul>
                            </div>

                            <div class="pt-8">
                                <h3 class="iykra-sg text-lg">Requirements</h3>
                                <ul id="detailJobRequirements" class="list-disc list-inside iykra-gs text-base"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-2 content-start text-left">
                        <div class="pt-8 p-4 my-auto w-full">
                            <p class="iykra-gs text-2xl">Kirimkan lamaran anda dengan melengkapi data berikut</p>
                            <form class="pt-8 flex grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                                <input type="hidden" id="id" value="<?php echo esc_html($job['id']); ?>"></input>
                                <input type="hidden" id="positionName" value="<?php echo esc_html($job['position']); ?>"></input>

                                <div class="pb-4 space-y-1 col-span-1 lg:col-span-2">
                                    <label for="name" class="iykra-sg block text-base">Nama Lengkap</label>
                                    <input type="text" id="name" placeholder="cth: John Doe" 
                                        class="iykra-gs block w-4/5 lg:w-2/3 rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-name"></small>
                                </div>

                                <div class="pb-4 space-y-1 col-span-1">
                                    <label for="email" class="iykra-sg block text-base">Email</label>
                                    <input type="email" id="email" placeholder="cth: john.doe@iykra.com"
                                        class="iykra-gs block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-email"></small>
                                </div>

                                <div class="pb-4 space-y-1 col-span-1">
                                    <label for="number" class="iykra-sg block text-base">Nomor Telepon</label>
                                    <input type="text" id="number" maxlength="14" placeholder="cth: 8123456789"
                                        class="iykra-gs block w-4/5 lg:w-2/3 rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-number"></small>
                                </div>

                                <div class="pb-4 space-y-1 col-span-1 lg:col-span-2">
                                    <label for="number" class="iykra-sg block text-base">Pendidikan</label>
                                    <div class="flex flex-col space-y-2">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="education" value="Diploma" class="form-radio text-blue-600 focus:outline-none">
                                            <span class="iykra-gs text-base ml-2 text-gray-900">Diploma (D1 - D4)</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="education" value="Bachelor" class="form-radio text-blue-600 focus:outline-none">
                                            <span class="iykra-gs text-base ml-2 text-gray-900">Bachelor Degree / S1</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="education" value="Master" class="form-radio text-blue-600 focus:outline-none">
                                            <span class="iykra-gs text-base ml-2 text-gray-900">Master Degree / S2</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="education" value="Other" class="form-radio text-blue-600 focus:outline-none">
                                            <span class="iykra-gs text-base ml-2 text-gray-900">Other</span>
                                        </label>
                                    </div>
                                    <small class="text-red-500 text-xs" id="err-education"></small>
                                </div>


                                <div class="pb-4 space-y-1">
                                    <label for="company" class="iykra-sg block text-base">Perusahaan sekarang / terakhir</label>
                                    <input type="text" id="company" placeholder="cth: IYKRA"
                                        class="iykra-gs block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-company"></small>
                                </div>

                                <div class="pb-4 space-y-1">
                                    <label for="occupation" class="iykra-sg block text-base">Posisi di Perusahaan</label>
                                    <input type="text" id="occupation" placeholder="cth: Data Engineer"
                                        class="iykra-gs block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-occupation"></small>
                                </div>

                                <div class="pb-4 space-y-1">
                                    <label for="linkedin" class="iykra-sg block text-base">LinkedIn</label>
                                    <input type="text" id="linkedin" placeholder="cth: https://linkedin.com/iykra"
                                        class="iykra-gs block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-linkedin"></small>
                                </div>

                                <div class="pb-4 space-y-1">
                                    <label for="portfolio" class="iykra-sg block text-base">Portofolio / Github</label>
                                    <input type="text" id="portfolio" placeholder="cth: https://github.com/iykra"
                                        class="iykra-gs block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-portfolio"></small>
                                </div>

                                <div class="pb-4 space-y-1">
                                    <label for="currentSalary" class="iykra-sg block text-base">Gaji saat ini</label>
                                    <input type="text" id="currentSalary" maxlength="14" placeholder="cth: 5.000.000"
                                        class="iykra-gs block w-4/5 lg:w-2/3 rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-currentSalary"></small>
                                </div>

                                <div class="pb-4 space-y-1">
                                    <label for="expectedSalary" class="iykra-sg block text-base">Gaji yang diharapkan</label>
                                    <input type="text" id="expectedSalary" maxlength="14" placeholder="cth: 7.000.000"
                                        class="iykra-gs block w-4/5 lg:w-2/3 rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-blue-900 sm:text-sm" />
                                    <small class="iykra-gs text-red-500 text-xs" id="err-expectedSalary"></small>
                                </div>

                                <div class="col-span-1 lg:col-span-2 pb-4">
                                    <label 
                                        id="dropArea" 
                                        for="selectedFile" 
                                        class='flex items-center justify-center p-8 gap-3 rounded border border-2 border-gray-300 border-dashed bg-gray-50 cursor-pointer mt-2'
                                    >
                                        <div class="space-y-2 text-center">
                                            <h4 id="fileTitle" class="text-base text-gray-700">Lampirkan CV anda disini</h4>
                                            <span id="fileSubtitle" class="text-sm text-gray-500">Hanya file dengan format PDF (max size 5MB)</span>
                                        </div> 
                                        <input 
                                            type="file" 
                                            id="selectedFile" 
                                            name="selectedFile" 
                                            accept="application/pdf" 
                                            hidden 
                                        />
                                    </label>
                                    <small class="iykra-gs text-red-500 text-xs" id="err-selectedFile"></small>
                                </div>

                                <div class="col-span-1 lg:col-span-2 pb-4">
                                    <input type="checkbox" id="agreePrivacy" class="mt-1 focus:outline-none"/>
                                    <label for="agreePrivacy" class="iykra-gs text-sm">
                                        Dengan mengunggah dokumen ini, saya memberikan persetujuan kepada IYKRA untuk memproses data pribadi saya sesuai dengan Kebijakan <a href="/privacy-policy" target="blank" class="font-semibold iykra-privacy focus:outline-none">Privasi dan Syarat & Ketentuan</a> yang berlaku.
                                    </label>
                                </div>

                                <div class="py-4 flex justify-between col-span-1 lg:col-span-2">
                                    <p></p>
                                    <!-- <button
                                        data-link="/careers"
                                        class="text-sm lg:text-base btn-primary-outline text-black rounded-full px-8 py-3 iykra-gs focus:outline-none"
                                    >
                                        Kembali
                                    </button> -->
                                    <button 
                                        id="submitJobBtn" 
                                        type="submit"
                                        class="text-sm lg:text-base btn-primary text-black rounded-full px-8 py-3 iykra-gs focus:outline-none"
                                    >
                                        Kirim Lamaran
                                    </button>
                                </div>
                            </form> 
                        </div>
                    </div>

                    <?php
                            endforeach;
                        else :
                            echo "Tidak ada pekerjaan ditemukan.";
                        endif;
                    else :
                        echo "ID pekerjaan tidak ditemukan.";
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- /wp:group -->