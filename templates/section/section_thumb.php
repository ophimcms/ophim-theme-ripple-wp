<div class="mb-5 ">
    <div class="section-heading flex bg-[#151111] rounded-lg p-0 mb-3 justify-between content-between">
        <h2 class="inline p-1.5 bg-red-600 to-red-600 rounded-l-lg">
            <span class="h-text text-white uppercase"><?= $title; ?></span>
        </h2>
        <a class="inline uppercase self-center pr-3" href="<?= $slug; ?>"><span
                    class="text-white hover:text-yellow-300">Xem
                        Thêm</span>
        </a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-2">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++;
            include THEMETEMPLADE.'/section/section_thumb_item.php';
        endwhile; ?>
    </div>
</div>