<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="<?= get_template_directory_uri() ?>/assets/css/all.css" rel="stylesheet" type="text/css" />
</head>
<body class='bg-[#1a1a1a] font-sans leading-normal tracking-normal'>
<?php include_once THEME_URL.'/templates/header.php' ?>
<div class="w-full pt-14">
    <div class="container mx-auto px-4 md:px-8 xl:px-40 md:mt-4 mb-8 text-gray-800 leading-normal">
        <div class="flex flex-row flex-wrap flex-grow mt-2">
            <?php if(get_option('ophim_is_ads') == 'on') { ?>
                <div id=top_addd style="text-align: center"></div>
            <?php } ?>
        </div>
        <div class="flex flex-row flex-wrap flex-grow mt-2">
            <div class="w-full lg:w-3/4 xl:w-3/4">
                <div class="w-full">
