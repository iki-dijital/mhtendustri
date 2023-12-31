<?php
include "header.php";
?>
<main>
    <section id="home_banner" class="h-screen relative z-1 overflow-hidden">
        <div class="fade-slide-container relative h-full" id="home_fade">
            <div class="slide-wrapper bg-black h-full">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <div class="slide-item bg-black <?= $i == 1 ? 'active' : '' ?>">
                        <img src="<?= domain ?>assets/img/delete_slide_<?= $i % 3 + 1 ?>.webp" alt="" width="1920"
                            height="970" fetchpriority="high"
                            class="block w-full h-full object-cover object-center opacity-70">
                        <div class="overlay absolute top-0 start-0 w-full h-full">
                            <div class="container h-full pt-10.5 flex items-center justify-end">
                                <span class="text-end text-white font-semibold opacity-0">HER ALANDA KALİTE <br> VE GÜVEN
                                    SENİNLE</span>

                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="absolute bottom-0 left-0 w-full">
                <div class="container bottom_bar py-11.5 flex items-center justify-between">
                    <div class="slide-nav flex items-center pl-9.5">
                        <div class="prev transition-300 transition-margin">
                            <?= getSprite("arrow_right", "fill-white w-7 h-5") ?>
                        </div>
                        <div class="next transition-300 transition-margin">
                            <?= getSprite("arrow_right", "fill-white w-7 h-5") ?>
                        </div>
                    </div>
                    <nav id="banner_social_nav" class="h-full flex items-center gap-x-10">
                        <a href="" class="w-5 h-5 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("instagram", "fill-white w-5 h-5 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-5 h-5 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("youtube", "fill-white w-5 h-5 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-5 h-5 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("facebook", "fill-white w-5 h-5 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-5 h-5 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("twitter", "fill-white w-5 h-5 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-5 h-5 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("linkedin", "fill-white w-5 h-5 transition-colors transition-300") ?>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="progress_wrapper absolute top-5/11 start-10 flex flex-col items-center gap-y-3.5">
            <span id="first_page" class="text-iki-sm font-light leading-none text-white">01</span>
            <div class="progress_bar aspect-square flex items-center">
                <progress value="0" max="100" id="banner_slide_progress">Slayt durumu</progress>
            </div>
            <span id="last_page" class="text-iki-sm font-light leading-none text-white"></span>
        </div>
    </section>
    <section id="home_about" class="relative">
        <img src="<?= domain ?>assets/img/home_about_bg.webp" alt="MHT görsel"
            class="absolute z-0 top-0 start-0 w-full h-full object-cover object-right-bottom z-0">
        <div class="container relative z-1">
            <div class="row pb-24">
                <div class="col-xl-4 col-lg-5 md:hidden">
                    <div class="img relative">
                        <img src="<?= domain ?>assets/img/home_about.webp" alt="MHT Endüstri fabrika görseli"
                            width="450" height="608" class="relative z-1 transition-transform transition-300 block w-full h-auto" loading="lazy">
                        <div class="absolute bg-primary h-3/5 z-0 top-1/2 flex items-center pl-20">
                            <span class="text-white text-xl font-light leading-none spacing-8">HAKKIMIZDA</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="h-full flex flex-col justify-center items-end md:items-start paragraph_text ml-auto">
                        <h2 class="text-end md:text-start font-semibold text-5xl mt-0 mb-19 md:mb-10">
                            <strong class="text-primary">MHT</strong> ENDÜSTRİ METAL
                        </h2>
                        <p>
                            2016 yılında Skyline Merdiven ve Alia Ütü Masası ve Kurutmalık markaları ile ticari hayatına
                            başlayan MHT Endüstri, 2019 yılında yaptığı yeni yatırımlarla Alüminyum merdivenlerin
                            üretimine
                            de başlamıştır.
                        </p>
                        <p>
                            Kalite ve müşteri memnuniyeti odaklı ticari anlayışını, Ar-Ge çalışmaları ve müşteri
                            beklentileriyle bütünleştirerek büyük bir titizlik ve özveri ile üretimine de
                            yansıtmaktadır.
                        </p>
                        <p>
                            Endüstriye Merdivenler, iskele sistemleri, Profil merdivenler ve Ev tipi merdivenlerin
                            imalatı
                            ve satışı ile birlikte ütü masası ve kurutmalıkların toptan satışını da
                            gerçekleştirmektedir.
                        </p>
                        <div class="flex justify-end read_more">
                            <a href="hakkimizda.php" class="sliding_btn">
                                DEVAMI
                                <?= getSprite("arrow_right") ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bottom_bar pt-23 pb-20 md:py-10 md:gap-y-7.5">
                <div class="col-lg-4">
                    <div class="flex items-start gap-x-7.5">
                        <div class="icon flex-none flex items-start justify-center aspect-square">
                            <img src="<?= domain ?>assets/img/svg/tecrube.svg" alt="Tecrübe görsel" width="60"
                                height="60" class="block object-center object-contain" loading="lazy">
                        </div>
                        <div class="flex-1">
                            <span class="block font-semibold leading-none mb-2 text-iki-2xl">TECRÜBE</span>
                            <p class="text-sm leading-normal my-0">
                                Uzun yıllardır bu sektörde hizmet veren firmamız tecrübesini müşteri memnuniyetine
                                çevirmektedir.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="flex items-start gap-x-7.5">
                        <div class="icon flex-none flex items-start justify-center aspect-square">
                            <img src="<?= domain ?>assets/img/svg/guven.svg" alt="Güven görsel" width="60" height="60"
                                class="block object-center object-contain" loading="lazy">
                        </div>
                        <div class="flex-1">
                            <span class="block font-semibold leading-none mb-2 text-iki-2xl">GÜVEN</span>
                            <p class="text-sm leading-normal my-0">
                                Mht Endüstri ürettiği kaliteli ürünler neticesinde müşterilerine güven vermektedir.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="flex items-start gap-x-7.5">
                        <div class="icon flex-none flex items-start justify-center aspect-square">
                            <img src="<?= domain ?>assets/img/svg/kalite.svg" alt="Kalite görsel" width="60" height="60"
                                class="block object-center object-contain" loading="lazy">
                        </div>
                        <div class="flex-1">
                            <span class="block font-semibold leading-none mb-2 text-iki-2xl">KALİTE</span>
                            <p class="text-sm leading-normal my-0">
                                Firmamız kurulduğu günden bugüne kaliteye önem vermektedir. Hammaddeden üretim tekniğine
                                kaliteden ödün vermiyoruz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home_categories" class="pb-24">
        <div class="blaze-slider mb-15" id="home_categories_blaze">
            <div class="blaze-container">
                <div class="blaze-track-container">
                    <div class="blaze-track">
                        <?php
                        $categories_color_list = ["#F8BB00", "#3C424E", "#BD2026", "#9D2C88"];

                        for ($i = 1; $i <= 6; $i++): ?>
                            <a href="" class="block relative" data-color="<?= $categories_color_list[$i % 4] ?>">
                                <span class="overlay absolute top-0 start-0 w-full z-0 h-2/3"></span>
                                <span class="relative z-1 flex">
                                    <span class="img py-3.5 flex-none w-6/11 flex items-center justify-center">
                                        <img src="<?= domain ?>assets/img/delete_category_<?= $i % 3 + 1 ?>.webp"
                                            alt="Kategori görseli"
                                            class="block w-2/3 max-h-full object-contain object-center">
                                    </span>
                                    <span class="flex flex-col items-start right_col pr-15 xxl:pr-5">
                                        <span class="title text-white font-semibold leading-normal">
                                            Alüminyum Merdiven
                                            Grubu
                                        </span>
                                        <span class="sliding_btn">
                                            İNCELE
                                            <?= getSprite("arrow_right") ?>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide_tracker flex items-center justify-center gap-x-18.5">
            <div class="prev slide_prev_btn cursor-pointer flex items-center select-none">
                <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
            </div>
            <div class="flex items-center gap-x-3.5">
                <span id="first_page" class="text-iki-sm font-light leading-none text-primary">01</span>
                <progress value="0" max="100" id="categories_slide_progress">Slayt durumu</progress>
                <span id="last_page" class="text-iki-sm font-light leading-none text-primary"></span>
            </div>
            <div class="next slide_next_btn cursor-pointer flex items-center select-none">
                <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
            </div>
        </div>
    </section>
    <section id="home_media" class="mb-13.5">
        <div class="container">
            <div class="flex w-fit items-center mb-10 gap-x-8">
                <h2 class="text-iki-4xl font-semibold my-0 leading-none">MEDYA</h2>
                <div class="line"></div>
            </div>
            <div class="blaze-slider mb-11" id="home_media_blaze">
                <div class="blaze-container">
                    <div class="blaze-track-container">
                        <div class="blaze-track">
                            <?php
                            $media_color_list = ["#E52329", "#E57E23", "#7F9FAF"];
                            $media_title_list = ["İNDİRMELER", "FOTOĞRAFLAR", "DUYURULAR & BLOG"];
                            for ($i = 1; $i <= 3; $i++): ?>
                                <div class="flex slide-item" data-color="<?= $media_color_list[$i - 1] ?>">
                                    <div class="content flex flex-col items-start pt-16.5 pl-13 pr-16 md:px-5 flex-none w-1/2 md:w-3/4">
                                        <img src="<?= domain ?>assets/img/svg/delete_media_<?= $i ?>.svg"
                                            alt="İndirmeler ikonu" class="block object-contain object-top-center self-end lg:mb-10"
                                            loading="lazy">
                                        <span class="text-5xl text-white font-semibold leading-normal block mb-10">
                                            <?= $media_title_list[$i - 1] ?>
                                        </span>
                                        <p class="text-iki-base text-white leading-normal mt-0 mb-21">Ürünlerimizle alakalı
                                            tüm dokümanlara <br> bu kısımdan ulaşabilirsiniz</p>
                                        <a href="" class="sliding_btn">
                                            İNCELE
                                            <?= getSprite("arrow_right") ?>
                                        </a>
                                        <span class="counter leading-normal font-bold self-end mt-auto opacity-20">
                                            <?= $i < 10 ? '0' . $i : $i ?>
                                        </span>
                                    </div>
                                    <div class="img flex-none w-1/2 md:w-1/4 aspect-square">
                                        <img src="<?= domain ?>assets/img/delete_media_<?= $i ?>.webp"
                                            alt="İndirmeler görsel" width="705" height="705" loading="lazy"
                                            class="block w-full h-full object-cover object-center">
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide_tracker flex items-center justify-center gap-x-18.5">
            <div class="prev slide_prev_btn cursor-pointer flex items-center select-none">
                <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
            </div>
            <div class="flex items-center gap-x-3.5">
                <span id="first_page" class="text-iki-sm font-light leading-none text-primary">01</span>
                <progress value="0" max="100" id="media_slide_progress">Slayt durumu</progress>
                <span id="last_page" class="text-iki-sm font-light leading-none text-primary"></span>
            </div>
            <div class="next slide_next_btn cursor-pointer flex items-center select-none">
                <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
            </div>
        </div>
    </section>
    <section id="home_brands" class="pb-15.5">
        <div class="container">
            <div class="flex w-fit items-center mb-10 gap-x-8">
                <h2 class="text-iki-4xl font-semibold my-0 leading-none">MARKALARIMIZ</h2>
                <div class="line"></div>
            </div>
            <div class="blaze-slider relative" id="home_brands_blaze">
                <div class="blaze-container">
                    <div class="blaze-track-container">
                        <div class="blaze-track">
                            <?php for ($i = 1; $i <= 8; $i++): ?>
                                <div>
                                    <img src="<?= domain ?>assets/img/delete_brand_<?= $i % 5 + 1 ?>.webp" alt="Marka adı"
                                        loading="lazy" width="240" height="70"
                                        class="block h-18 object-contain object-left-center">
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div
                    class="slide_nav absolute top-1/2 start-1/2 flex items-center justify-between pointer-events-none select-none lg:hidden">
                    <div class="prev slide_prev_btn pointer-events-auto cursor-pointer">
                        <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
                    </div>
                    <div class="next slide_next_btn pointer-events-auto cursor-pointer">
                        <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>