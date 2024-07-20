<a href="<?php the_permalink(); ?>" class="block rounded-md overflow-hidden relative group" title="<?php the_title(); ?>">
    <img
            class="rounded-md group-hover:opacity-60 transition-all duration-500 transform group-hover:scale-110 lazyload"
            data-src="<?= op_get_thumb_url() ?>"
            src="<?= op_get_thumb_url() ?>"
            alt="<?php the_title(); ?>"
    />

    <span
            class="absolute bottom-0 px-2 pb-2 pt-16 bg-gradient-to-t from-[#151111] rounded-md rounded-tl-none rounded-tr-none w-full text-white">
        <div class="font-bold text-sm overflow-hidden overflow-ellipsis whitespace-nowrap"><?php the_title(); ?>
        </div>
        <div class="text-xs text-gray-300 italic overflow-hidden overflow-ellipsis whitespace-nowrap">
            <?= op_get_original_title() ?> (<?= op_get_year() ?>)
        </div>
    </span>
    <span
            class="absolute top-0 left-0 p-0.5 bg-red-600 text-white text-sm rounded-md rounded-bl-none rounded-tr-none"><?= op_get_episode() ?></span>
    <span
            class="absolute bottom-12 right-0 p-0.5 bg-gradient-to-r from-cyan-500/50 to-blue-500/50 text-white text-sm rounded-md rounded-br-none rounded-tr-none"><?= op_get_status() ?></span>

    <?php if(op_get_featured_post()) : ?>
    <div class="absolute top-0.5 right-0.5 p-0.5 bg-red-600 text-white rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
        </svg>
        <title>Phim hot</title>
    </div>
    <?php endif ?>

    <div class="absolute hidden top-1/3 left-1/3 animate-pulse group-hover:block">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-red-600" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                  d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>
</a>
