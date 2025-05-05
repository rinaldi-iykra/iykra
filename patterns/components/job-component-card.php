<?php
/**
 * Title: Job Component Card
 * Slug: iykra/job-component-card
 * Categories: job-component-card
 * Block Types: core/template-part/job-component-card
 * Description: Job component card.
 *
 * @package WordPress
 * @subpackage IYKRA
 * @since IYKRA 1.0
 */

?>

<div class="event-card opacity-100 translate-y-0 scale-100 transition-all duration-300 ease-in-out content-start w-full rounded-xl sm:col-span-1 md:col-span-2 lg:col-span-2">
    <div class="career-card content-center flex flex-col justify-between w-full rounded-xl h-60 bg-white space-y-4 align-center p-6">
        <div>
            <p class="iykra-sg text-2xl text-black text-left">{ name }</p>
            <p class="iykra-gs text-lg text-black text-left">{ type }</p>
        </div>
    </div>
</div>