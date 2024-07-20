<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div class="w-full mx-auto flex flex-wrap">
                    <div class="flex w-full">
                    <div class="px-2"><span class="font-bold text-gray-100">Giới Thiệu...</span>
                    <p class="text-gray-300 text-sm">Xem phim online chất lượng cao miễn phí với phụ đề tiếng
                    việt - thuyết minh - lồng tiếng, có nhiều thể loại phim phong phú, đặc sắc,
                    nhiều bộ phim hay nhất - mới nhất.</p>
                    <p class="text-gray-300 text-sm">Website với giao diện trực quan, thuận tiện,
                    tốc độ tải nhanh, ít quảng cáo hứa hẹn sẽ đem lại những trải nghiệm tốt cho người dùng.
                    </p>
                    </div>
                    </div>
                    <div class="flex">
                    <div class="px-2 space-x-2">
                    <a class="text-[#44e2ff] hover:text-yellow-300" href="#">Liên Hệ</a>
                    <a class="text-[#44e2ff] hover:text-yellow-300" href="/ban-quyen">Khiếu nại bản quyền</a>
                    </div>
                    </div>
                    </div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);