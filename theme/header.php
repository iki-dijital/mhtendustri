<?php

include "components/define-domain.php";
include "components/svg-sprite.php";

$inline_css = false;

?>
<!doctype html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="MHT Endüstri Metal">
    <title>MHT Endüstri</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <style>
        @font-face {
            font-display: swap;
            font-family: 'Prompt';
            font-style: normal;
            font-weight: 200;
            src: url('<?= domain ?>assets/fonts/prompt-v10-latin-ext-200.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Prompt';
            font-style: normal;
            font-weight: 300;
            src: url('<?= domain ?>assets/fonts/prompt-v10-latin-ext-300.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Prompt';
            font-style: normal;
            font-weight: 400;
            src: url('<?= domain ?>assets/fonts/prompt-v10-latin-ext-regular.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Prompt';
            font-style: normal;
            font-weight: 600;
            src: url('<?= domain ?>assets/fonts/prompt-v10-latin-ext-600.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Prompt';
            font-style: normal;
            font-weight: 700;
            src: url('<?= domain ?>assets/fonts/prompt-v10-latin-ext-700.woff2') format('woff2');
        }
    </style>
    <?php if ($inline_css == true): ?>
        <style>
            <?php
            $css_file = file_get_contents(domain . 'assets/css/main.css');
            echo str_replace('../', domain . 'assets/', $css_file);
            ?>
        </style>
    <?php else: ?>
        <link rel="stylesheet"
            href="<?= domain ?>assets/css/main.css<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>">
    <?php endif; ?>

</head>

<body>
    <div id="lang-indicator"
        class="w-8 aspect-square flex items-center justify-center bg-black text-white text-lg fixed left-4 top-4 cursor-pointer z-10">
    </div>

    <header class="header_lg block absolute left-0 z-5 w-screen max-w-full md:hidden">
        <div class="header_container ribbon_container flex mx-auto">
            <div
                class="logo_wrapper flex items-center relative flex-none w-1/5 xxl:w-1/7 overflow-hidden bg-transparent py-3.5 pl-4">
                <a href="index.php" class="relative z-1 logo block w-5/9 xxl:w-2/3">
                    <img src="<?= domain ?>assets/img/svg/logo.svg" alt="MHT Endüstri Metal logo">
                </a>
                <div class="bevel_corner absolute z-0 end-0 bottom-0"></div>
            </div>
            <div class="nav_wrapper relative flex-1 h-full overflow-hidden flex justify-between pl-12.5 xxl:pl-5">
                <div class="absolute bevel_corner z-0 start-0 bottom-0"></div>
                <div class="lang_wrapper flex items-center relative z-1 gap-x-5">
                    <span class="block font-semibold text-iki-sm text-white opacity-50 spacing-8 lg:hidden">DİL SEÇİNİZ</span>
                    <div class="flex-none w-15 border border border-solid border-white opacity-50 xxl:hidden"></div>
                    <nav id="lang_nav" class="flex items-center gap-x-5 lg:gap-x-2">
                        <!-- aktif olunca -> opacity-100 ve font-semibold classlarını ekle, font-extralight ve opacity-50 değerini kaldır -->
                        <a href=""
                            class="block text-white text-lg min-w-5 flex items-center justify-center text-center transition-opacity transition-300 opacity-50 font-extralight active opacity-100 font-semibold">TR</a>
                        <a href=""
                            class="block text-white text-lg min-w-5 flex items-center justify-center text-center transition-opacity transition-300 opacity-50 font-extralight">EN</a>
                        <a href=""
                            class="block text-white text-lg min-w-5 flex items-center justify-center text-center transition-opacity transition-300 opacity-50 font-extralight">RU</a>
                        <a href=""
                            class="block text-white text-lg min-w-5 flex items-center justify-center text-center transition-opacity transition-300 opacity-50 font-extralight">AR</a>
                    </nav>
                </div>
                <div class="relative z-1 flex items-center gap-x-11 xxl:gap-x-5">
                    <nav id="header_nav" class="flex items-center justify-end gap-x-7 xxl:gap-x-0">
                        <a href="index.php"
                            class="p-2 text-white font-semibold text-lg leading-none block transition-300 transition-padding">Anasayfa</a>
                        <a href="hakkimizda.php"
                            class="p-2 text-white font-semibold text-lg leading-none block transition-300 transition-padding">Bizi
                            Tanıyın</a>
                        <a href="urunler.php"
                            class="p-2 text-white font-semibold text-lg leading-none block transition-300 transition-padding">Ürünlerimiz</a>
                        <a href="kalitepolitikamiz.php"
                            class="p-2 text-white font-semibold text-lg leading-none block transition-300 transition-padding">Kalite</a>
                        <a href="indirmeler.php"
                            class="p-2 text-white font-semibold text-lg leading-none block transition-300 transition-padding">Medya</a>
                    </nav>
                    <a href="iletisim.php"
                        class="header_contact flex items-center justify-center gap-x-4.5 h-full py-12.5 px-7 lg:px-3 bg-black text-white cursor-pointer select-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.762 34.401"
                            class="w-10 transition-300 transition-transform">
                            <path
                                d="M0 17.291a22.9 22.9 0 0 1 .338-3.2 5.82 5.82 0 0 1 5.376-4.378.636.636 0 0 0 .61-.436 15.761 15.761 0 0 1 12.5-9.126 15.976 15.976 0 0 1 16.724 9.186.569.569 0 0 0 .567.371 5.961 5.961 0 0 1 5.635 5.935 40.688 40.688 0 0 1-.085 4.193 5.941 5.941 0 0 1-6.718 5.116.626.626 0 0 0-.731.284 15.944 15.944 0 0 1-10.3 6.729.621.621 0 0 0-.509.4 3.473 3.473 0 0 1-3.882 1.962 3.49 3.49 0 0 1-.288-6.763 3.455 3.455 0 0 1 4.011 1.591.458.458 0 0 0 .592.27A13.614 13.614 0 1 0 7.591 13.37a13.383 13.383 0 0 0 1.3 9.119c.57 1.091.288 1.812-.873 2.208A6.009 6.009 0 0 1 .1 19.065v-1.764l-.1-.01"
                                fill="#e52329" />
                            <path
                                d="M20.93 5.563a10.56 10.56 0 0 1 1.089 21.063 11.366 11.366 0 0 1-3.464-.2 1.049 1.049 0 0 0-.657.1c-1.307.729-2.591 1.494-3.894 2.232a1.25 1.25 0 0 1-1.945-.887 1.906 1.906 0 0 1 .086-.7q.462-1.765.948-3.522a.59.59 0 0 0-.137-.6 10.177 10.177 0 0 1-1.9-10.641 10.257 10.257 0 0 1 8.613-6.783c.263-.04.531-.045.8-.061.153-.007.308 0 .463 0m-.02 11.807a1.253 1.253 0 0 0 1.272-1.228 1.26 1.26 0 1 0-2.518-.023 1.25 1.25 0 0 0 1.246 1.251m-4.184 0a1.248 1.248 0 0 0 1.256-1.24 1.259 1.259 0 1 0-2.518 0 1.25 1.25 0 0 0 1.262 1.24m8.415 0a1.25 1.25 0 0 0 1.24-1.258 1.258 1.258 0 1 0-2.516.036 1.249 1.249 0 0 0 1.276 1.222"
                                fill="#e52329" />
                        </svg>
                        <span class="text-lg font-semibold leading-none overflow-hidden whitespace-nowrap w-25">Bize
                            Ulaşın</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <header class="header_sm relative hidden md:block bg-primary z-5">
        <div class="container-lg">
            <div class="row">
                <div class="col-6 col-md-3">
                    <a href="" class="logo block">
                        <img src="<?= domain ?>assets/img/svg/logo_footer.svg" alt="MHT Endüstri Logo" class="block w-full">
                    </a>
                </div>
                <div class="col-6 col-md-9 flex items-center">
                    <div class="menuButton bg-primary relative flex flex-col items-center justify-between">
                        <span class="block w-full"></span>
                        <span class="block w-full absolute"></span>
                        <span class="block w-full"></span>
                        <span class="block w-full"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobileMenu hidden md:block fixed w-screen h-screen z-4 bg-primary">
        <nav aria-label="Mobile menu" id="nav-mobile-1"></nav>
    </div>