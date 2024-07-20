<ul class="breadcrumb w-full px-2 py-2 mb-3 bg-[#151111] rounded-lg text-white">
    <li class="inline hover:text-yellow-400" itemprop="itemListElement" itemscope=""
        itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="/" title="Xem phim">
                <span itemprop="name">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-4 h-4 inline">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Xem phim »
                </span>
        </a>
        <meta itemprop="position" content="1">
    </li>
    <li class="inline text-gray-400" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <span itemprop="name">
                    <?php the_title(); ?>
                </span>
        </a>
        <meta itemprop="position" content="3">
    </li>
</ul>

<?php if (op_get_showtime_movies()) { ?>
<div class="mt-2.5 p-2 bg-[#1511116d] mb-1 rounded-lg text-gray-300">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
         stroke="currentColor" class="w-6 h-6 inline animate-pulse">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
    </svg>
    Lịch chiếu: <span class="text-yellow-500"><?= op_get_showtime_movies() ?></span>
</div>
<?php } ?>
<?php if (op_get_notify()) { ?>
<div class="mt-2.5 p-2 bg-[#1511116d] mb-2 rounded-lg text-gray-300">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
         stroke="currentColor" class="w-6 h-6 inline animate-pulse">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
    </svg>
    Thông báo: <span class="text-red-500"><?= op_get_notify() ?></span>
</div>
<?php } ?>
<div class="flex flex-wrap flex-grow">
    <div class="w-full sm:w-1/2 md:w-[fit-content] flex justify-center pr-0 sm:pr-3">
        <div class="max-w-xs relative overflow-hidden container bg-[#1511116d] rounded-lg w-full md:w-[15em] h-[fit-content]">
            <img class="w-full rounded-t-lg" style="aspect-ratio: 256/340" src="<?= op_get_thumb_url() ?>"
                 alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />

            <?php if (op_get_is_copyright()) { ?>
            <div class="absolute top-[7%] -left-[34%] text-white uppercase py-[4px] px-0 text-[12px] w-full text-center -rotate-45 bg-gradient-to-r from-red-500">bản quyền</div>
            <?php } ?>
            <div class="flex py-3 justify-between">
                <div class="w-full text-center space-x-2">
                    <?php if (op_get_trailer_url()) { ?>
                    <label for="trailer-modal"
                           class="modal-button bg-sky-500 hover:bg-opacity-80 text-gray-50 inline-block px-2 py-1 rounded cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline">
                            <path stroke-linecap="round"
                                  d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        Trailer
                    </label>
                    <?php } ?>
                    <?php if (watchUrl()) { ?>
                    <a class="bg-red-600 hover:bg-opacity-80 text-gray-50 inline-block px-2 py-1 rounded"
                       title="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)"
                       href="<?= watchUrl() ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                        </svg>
                        Xem phim
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (op_get_trailer_url()) {
    parse_str( parse_url( op_get_trailer_url(), PHP_URL_QUERY ), $my_array_of_vars );
    $video_id = $my_array_of_vars['v'];

    ?>
    <input type="checkbox" id="trailer-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box relative bg-black/60">
            <label for="trailer-modal"
                   class="btn btn-sm btn-circle bg-red-600 text-white absolute right-2 top-2">✕</label>

            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $video_id ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>
    </div>
    <?php     } ?>

    <div class="w-full sm:w-1/2 md:grow mt-3 sm:mt-0">
        <div class="w-full rounded-lg p-3 text-[#bbb] bg-[#1511116d]">
            <h1>
                    <span class="uppercase text-sm xl:text-xl text-[#dacb46] block font-bold">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </span>
            </h1>
            <h2>
                <span class="text-gray-300 text-base"><?= op_get_original_title() ?></span>
                <span class="text-gray-300 text-base"> (<?= op_get_years('') ?>)</span>
            </h2>
            <div class="my-1">
                <div class="flex-none lg:flex items-center">
                    <p class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>light star</title>
                            <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </p>
                    <p class="text-xs text-white align-middle">
                        (<?= op_get_rating() ?>
                        sao
                        /
                        <?= op_get_rating_count() ?> đánh giá)</p>
                </div>
            </div>
            <div class="w-auto h-[fit-content] rounded-lg text-[#bbb] bg-[#272727] text-lg">

            </div>
            <dl class="mt-1">
                <dt class="inline font-bold text-sm">Trạng thái:</dt>
                <dd class="movie-dd inline ml-1 text-sm status text-red-600"> <?= op_get_status() ?>
                </dd>
                <br>
                <dt class="inline font-bold text-sm">Thể loại:</dt>
                <dd class="movie-dd inline ml-1 text-sm dd-cat">
                    <?= op_get_genres(', ') ?>
                </dd><br>
                <dt class="inline font-bold text-sm">Quốc gia:</dt>
                <dd class="movie-dd inline ml-1 text-sm">
                    <?= op_get_regions(', ') ?>
                </dd>
                <br>
                <dt class="inline font-bold text-sm">Năm:</dt>
                <dd class="movie-dd inline ml-1 text-sm">
                    <?= op_get_years('') ?>
                </dd><br>
                <dt class="inline font-bold text-sm">Đạo diễn:</dt>
                <dd class="movie-dd inline ml-1 text-sm">
                    <?= op_get_directors(10,', ') ?>
                <dt class="inline font-bold text-sm">Diễn viên:</dt>
                <dd class="movie-dd inline ml-1 text-sm dd-actor">
                    <?= op_get_actors(100,', ') ?>
                </dd><br>
                <dt class="inline font-bold text-sm">Thời lượng:</dt>
                <dd class="movie-dd inline ml-1 text-sm"><?= op_get_runtime() ?>
                </dd><br>
                <dt class="inline font-bold text-sm">Chất lượng:</dt>
                <dd class="movie-dd inline ml-1 text-sm"><?= op_get_quality() ?></dd>
                <br>
                <dt class="inline font-bold text-sm">Ngôn ngữ:</dt>
                <dd class="movie-dd inline ml-1 text-sm"><?= op_get_lang() ?></dd>
                <br>
                <dt class="inline font-bold text-sm">Lượt xem:</dt>
                <dd class="movie-dd inline ml-1 text-sm">
                    <?= op_get_post_view() ?> lượt</dd>
            </dl>
        </div>

    </div>
</div>

<article class="mt-2.5 p-3 bg-[#1511116d] mb-3 rounded-lg">
    <h2 class="text-sm font-bold text-[#dacb46] uppercase mt-1.5 mb-3">Nội dung phim</h2>
    <div class="content text-white">
        <?php the_content() ?>
    </div>

    <br>
    <span class="mt-1.5" style="color:rgba(255,255,255,0.62);"><?= op_get_tags(', ') ?></span>

</article>

<div style="background-color: #fff" class="mt-2">
    <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
</div>


<div class="mt-2.5 p-3 bg-[#1511116d] mb-3 rounded-lg">
    <h3 class="text-sm font-bold text-[#dacb46] uppercase mt-1.5 mb-3">
        Có thể bản muốn xem
    </h3>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-2">
        <?php
        $postType = 'ophim';
        $taxonomyName = 'ophim_genres';
        $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
        if ($taxonomy) {
            $category_ids = array();
            foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
            $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 10, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
            $my_query = new wp_query($args);

            if ($my_query->have_posts()):
                while ($my_query->have_posts()):$my_query->the_post();
                include THEMETEMPLADE.'/section/section_thumb_item.php';
                endwhile;
            endif;
            wp_reset_query();
        }
        ?>
    </div>
</div>