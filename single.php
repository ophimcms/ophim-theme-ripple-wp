<?php
get_header();
?>
<?php
while ( have_posts() ) : the_post();
    ?>
    <div class="group-film" style="color: #FFF">
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <?php  the_content(); ?>
        </div>
    </div>
<?php
endwhile;
?>
<?php
get_footer();
?>
