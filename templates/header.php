<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 400px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }

    .right {
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #262020;
    }
    #result p{
        color: #FFF;
    }
</style>
<nav class="w-full fixed top-0 py-2 bg-[#151111] border-gray-200 z-30">
    <div class="container mx-auto px-4 md:px-8 xl:px-40 flex flex-wrap justify-between items-center">
        <div class="w-2/5 md:w-1/5 flex items-center">
            <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold content-center" href="/">
                <?php op_the_logo('max-width:50px') ?>
            </a>
        </div>
        <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex justify-center items-center ml-3 rounded-lg md:hidden text-gray-400 hover:text-white focus:ring-gray-500"
                aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden md:flex items-center w-full md:w-auto" id="mobile-menu">
            <div class="relative mt-2 md:mt-0 mr-0 md:mr-4">
                <form id="form-search" action="/" autocomplete="off">
                    <input type="search" name="s" placeholder="Tìm kiếm phim" id="search" onkeyup="fetch()"
                           class="focus:bg-[#2b2821] w-full bg-[#212020] text-sm md:text-md text-white transition focus:border-gray-600 focus:outline-none rounded py-2 px-2 pl-10 appearance-none leading-normal"
                           value="<?php echo "$s"; ?>" />

                    <div class="absolute search-icon" style="top:0.75rem;left:1rem"><svg
                                class="fill-current pointer-events-none text-gray-400 w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>
                </form>
                <div class="" id="result"></div>
            </div>
            <ul class="flex flex-col md:flex-row md:text-sm bg-[#151111]">
                <?php
                $menu_items = wp_get_menu_array('primary-menu');
                foreach ($menu_items as $key => $item) : ?>
                    <li class="mr-6 my-2 md:my-0 dropdown relative group">
                    <?php if (empty($item['children'])) { ?>
                        <a href="<?= $item['url'] ?>" class="flex items-center">
                            <span class="text-white"><?= $item['title'] ?></span>
                        </a>
                    <?php } else { ?>
                        <button data-dropdown-toggle="nav-dropdown-<?=$key ?>"
                                class="flex justify-between items-center py-2 pr-4 w-full font-medium text-slate-200 md:hover:text-blue-700 md:p-0 md:w-auto">
                            <?= $item['title'] ?>
                            <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="nav-dropdown-<?=$key ?>"
                             class="hidden z-20 w-[80vw] md:w-[50vw] xl:w-[35vw] font-normal divide-x shadow">
                            <ul class="py-1 text-sm text-slate-300 bg-[#151111] grid grid-cols-2 md:grid-cols-4 xl:grid-cols-5"
                                aria-labelledby="dropdownLargeButton">
                        <?php foreach ($item['children'] as $k => $child): ?>
                                <li class="inline-block p-1 truncate text-center">
                                    <a href="<?= $child['url'] ?>"
                                       class="block py-2 hover:bg-slate-800"><?= $child['title'] ?></a>
                                </li>
                        <?php endforeach; ?>
                            </ul>
                        </div>

                    <?php } ?>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>

    </div>
</nav>
