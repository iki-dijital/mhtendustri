<?php include "header.php"; ?>
<main>
    <section id="page_banner" class="mb-9.5 flex items-end max-w-full bg-cover bg-no-repeat bg-center"
        style="background-image: url(<?= domain ?>assets/img/medya_banner.webp)">
        <div class="container text-center mt-auto">
            <h1 class="text-5xl font-semibold leading-normal text-white mt-0 mb-3">Medya</h1>
            <nav id="page_breadcrumb" class="flex justify-center items-center">
                <p class="relative text-white text-iki-sm leading-normal select-none">
                    Ana Sayfa
                </p>
                <p class="relative text-white text-iki-sm leading-normal select-none">
                    Medya
                </p>
            </nav>
        </div>
    </section>
    <section id="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Duyurular & Blog</h2>
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <div class="blog_item flex gap-x-7.5 mb-7.5">
                            <div class="flex-none w-1/3">
                                <img src="<?= domain ?>assets/img/delete_blog_img.webp" alt="Blog görseli" loading="lazy"
                                    width="330" height="192" class="block w-full h-auto object-cover object-center">
                            </div>
                            <div class="flex-1 flex flex-col justify-center items-start py-3 pr-7">
                                <h3 class="mt-0 mb-1 font-semibold text-lg text-primary">
                                    2023 FUARINDA YERİMİZİ ALDIK
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua...
                                </p>
                                <a href="blogdetay.php" class="sliding_btn">
                                    BÜYÜT
                                    <?= getSprite("arrow_right") ?>
                                </a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="col-lg-3 pt-19">
                    <aside class="relative after-absolute w-full pr-3 flex flex-col justify-end">
                        <span class="text-5xl font-semibold leading-normal w-full mr-8.5">Menü</span>
                        <div class="flex flex-col items-end pr-6">
                            <a href="indirmeler.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">İndirmeler</a>
                            <a href="fotograflar.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Fotoğraflar</a>
                            <a href="blog.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Duyurular
                                & Blog</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>