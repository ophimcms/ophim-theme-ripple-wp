<div class="rounded mb-3">
    <div class="flex bg-[#151111] rounded-lg p-0 mb-0">
        <div class="section-heading bg-red-600 rounded-l-lg">
            <h3 class="px-2 py-1"><span
                        class="h-text text-white uppercase "><?= $title; ?></span></h3>
        </div>
    </div>
    <div class="mt-2">
        <ul class="list-movies">
            <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
                <li>
                    <a href="<?php the_permalink(); ?>"
                       class="flex bg-[#1511116d] rounded-lg w-15 h-20 my-2">
                        <img class="object-cover rounded-l-lg lazyload" style="aspect-ratio: 256 / 340"
                             data-src="<?= op_get_thumb_url() ?>" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 500 500'%3e%3c/svg%3e" alt="<?= op_get_original_title() ?> (<?= op_get_year() ?>)">
                        <div class="px-3 py-1 truncate">
                            <p
                                    class="capitalize block overflow-hidden overflow-ellipsis whitespace-nowrap text-[#44e2ff] hover:text-yellow-300">
                                <?php the_title(); ?></p>
                            <p
                                    class="text-gray-400 text-[12px] mt-[3px] italic block overflow-hidden overflow-ellipsis whitespace-nowrap">
                                <?= op_get_original_title() ?> (<?= op_get_year() ?>)</p>
                            <p class="text-gray-400 text-[12px] mt-[3px] italic"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        aria-hidden="true" class="w-4 h-4 inline">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg> <?= op_get_post_view() ?> lượt xem</p>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>