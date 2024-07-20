<div class="owl-carousel recommend-carousel owl-theme">
    <?php $key = 0;
    while ($query->have_posts()) : $query->the_post();
        $key++ ?>
        <a href="<?php the_permalink(); ?>" class="block rounded-md overflow-hidden relative group"
           title="<?php the_title(); ?>">
            <img class="rounded-md group-hover:opacity-60 transition-all duration-500 transform group-hover:bg-opacity-60"
                 style="aspect-ratio: 16/9" src="<?= op_get_poster_url() ?>" alt="<?php the_title(); ?>"/>

            <span
                    class="absolute bottom-0 px-2 pb-2 pt-16 bg-gradient-to-t from-[#151111] rounded-md rounded-tl-none rounded-tr-none w-full text-white">
        <div class="font-bold text-sm text-[#dacb46] overflow-hidden overflow-ellipsis whitespace-nowrap"><?php the_title(); ?>
        </div>
        <div class="text-xs text-gray-300 italic overflow-hidden overflow-ellipsis whitespace-nowrap">
            <?= op_get_original_title() ?> (<?= op_get_year() ?>)
        </div>
    </span>
            <span class="absolute top-0 left-0 p-0.5 bg-red-600 text-white text-sm rounded-md rounded-bl-none rounded-tr-none"><?= op_get_episode() ?></span>

            <span class="absolute bottom-12 right-0 p-0.5 bg-gradient-to-r from-cyan-500/50 to-blue-500/50 text-white text-sm rounded-md rounded-br-none rounded-tr-none"><?= op_get_status() ?></span>

            <div class="absolute hidden top-1/4 left-1/3 animate-pulse group-hover:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-red-600" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                          d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </a>
    <?php endwhile; ?>
</div>