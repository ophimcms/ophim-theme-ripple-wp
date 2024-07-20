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
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div class="row" style="margin-bottom: 20px;color: #FFF">
            <div class="col-md-12 blogShort">
                <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                         alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                <br>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <article>
                    <p>
                        <?php the_excerpt(); ?>
                    </p></article>
                <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
            </div>

        </div>
    <?php }
    wp_reset_postdata();
} ?>

<?php ophim_pagination(); ?>




<?php
get_footer();
?>
