</div>
</div>
<div class="w-full lg:w-1/4 xl:w-1/4 pl-0 lg:pl-3 mt-3 lg:mt-0">
    <?php get_sidebar('ophim'); ?>
</div>
</div>
</div>
</div>
<footer class="w-full bg-[#151111] border-t border-[#2b2821] shadow">
    <div class="container mx-auto py-8 px-8 xl:px-40">
        <footer class="Footer">
            <div class="Container">
                <?php
                if ( is_active_sidebar('widget-footer') ) {
                    dynamic_sidebar( 'widget-footer' );
                } else {
                    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
                }
                ?>
            </div>
        </footer>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/flowbite@1.6.4/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); ?>
</html>