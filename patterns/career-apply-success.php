<?php
/**
 * Title: Career Apply Success
 * Slug: iykra/career-apply-success-page
 * Categories: career
 * Block Types: core/template-part/career-apply-success-page
 * Description: Career apply success page.
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
                    <div class="sm:col-span-1 md:col-span-2 lg:col-span-4 content-start text-left gs_reveal py-8 lg:py-14">
                        <?php
                            $jobId = isset($_GET['job_id']) ? sanitize_text_field($_GET['job_id']) : null;

                            if ($jobId) :
                                $jobs = get_jobs_data_specific($jobId);

                                if (!empty($jobs)) :
                                    foreach ($jobs as $job) :
                        ?>

                        <div class="text-center">
                            <h2 class="iykra-sg text-3xl lg:text-4xl text-black mb-4">Terima kasih telah melamar di IYKRA</h2>
                            <p class="iykra-gs text-lg lg:text-xl text-black mb-4">Kami telah menerima lamaran Anda untuk posisi <span class="iykra-sg text-lg lg:text-xl text-black"><?php echo esc_html($job['position']); ?></span> dengan tipe <span class="iykra-sg text-lg lg:text-xl text-black"><?php echo esc_html($job['type']); ?></span>.</p>
                            <p class="iykra-gs text-lg lg:text-xl text-black mb-8">Kami akan menghubungi Anda jika ada langkah selanjutnya.</p>
                            <a href="https://iykra.com/careers/#job" class="text-sm lg:text-base btn-primary text-black rounded-full px-8 py-3 iykra-gs focus:outline-none">
                                <span>Kembali ke Karir</span>
                            </a>
                        </div>

                        <?php
                                    endforeach;
                                else :
                        ?>
                            <div class="text-center">
                                <h2 class="iykra-sg text-3xl lg:text-4xl text-black mb-4">Terima kasih telah melamar di IYKRA</h2>
                                <p class="iykra-gs text-lg lg:text-xl text-black mb-8">Kami akan menghubungi Anda jika ada langkah selanjutnya.</p>
                                <a href="https://iykra.com/careers/#job" class="text-sm lg:text-base btn-primary text-black rounded-full px-8 py-3 iykra-gs focus:outline-none">
                                    <span>Kembali ke Karir</span>
                                </a>
                            </div>
                        <?php
                                    endif;
                            else : 
                        ?>
                            <div class="text-center">
                                <h2 class="iykra-sg text-3xl lg:text-4xl text-black mb-4">Terima kasih telah melamar di IYKRA</h2>
                                <p class="iykra-gs text-lg lg:text-xl text-black mb-8">Kami akan menghubungi Anda jika ada langkah selanjutnya.</p>
                                <a href="https://iykra.com/careers/#job" class="text-sm lg:text-base btn-primary text-black rounded-full px-8 py-3 iykra-gs focus:outline-none">
                                    <span>Kembali ke Karir</span>
                                </a>
                            </div>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- /wp:group -->