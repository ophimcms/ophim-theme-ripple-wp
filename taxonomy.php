<?php
get_header();
?>
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
        <a itemprop="item" href="" title="<?= single_tag_title(); ?>">
                <span itemprop="name">
                    <?= single_tag_title(); ?>
                </span>
        </a>
        <meta itemprop="position" content="2">
    </li>
</ul>
<div class="text-[#ddd] mb-3">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-3">
        <div class="block-search">
            <select name="filter[categories]" form="form-search"
                    class="bg-black border border-black text-gray-300 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                <option value="">Mọi định dạng</option>
                <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                <?php foreach($categories as $category) { ?>
                    <option value='<?php echo $category->name; ?>' ><?php echo $category->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="block-search">
            <select name="filter[genres]" form="form-search"
                    class="bg-black border border-black text-gray-300 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                <option value="">Tất cả thể loại</option>
                <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                <?php foreach($genres as $genre) { ?>
                    <option value='<?php echo $genre->name; ?>' ><?php echo $genre->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="block-search">
            <select name="filter[regions]" form="form-search"
                    class="bg-black border border-black text-gray-300 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                <option value="">Tất cả quốc gia</option>
                <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                <?php foreach($regions as $region) { ?>
                    <option value='<?php echo $region->name; ?>' ><?php echo $region->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="block-search">
            <select name="filter[years]" form="form-search"
                    class="bg-black border border-black text-gray-300 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-1">
                <option value="">Tất cả năm</option>
                <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                <?php foreach($years as $year) { ?>
                    <option value='<?php echo $year->name; ?>'><?php echo $year->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="block-search grow">
            <button type="submit" form="form-search"
                    class="w-full bg-red-600 hover:bg-opacity-80 p-2 rounded-md flex items-center justify-center">
                <svg class="fill-current pointer-events-none text-white w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path
                            d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                    </path>
                </svg>
            </button>
        </div>

    </div>
</div>

<div class="section-heading flex bg-[#151111] rounded-lg p-0 mb-2">
    <h1 class="inline p-1.5 bg-[red] rounded-l-lg h-text text-white">
        <?= single_tag_title(); ?>
    </h1>
</div>
<?php
if (have_posts()) { echo '  <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-3 mb-3">';
    while (have_posts()) {
        the_post();
        include THEMETEMPLADE.'/section/section_thumb_item.php';
    } wp_reset_postdata(); echo ' </div>'; }
else { ?>
    <div class="flex flex-row flex-wrap flex-grow h-50 mt-10">
        <p class="w-full text-center text-white">Rất tiếc, không có nội dung nào trùng khớp yêu cầu.</p>
    </div>
<?php } ?>

<?php ophim_pagination(); ?>




<?php
get_footer();
?>
