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
                    <div class="page_content pb-16">
                        <h2>İndirmeler</h2>
                        <div class="download_wrapper">
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                <div class="download_item flex pb-2">
                                    <div class="flex-none flex justify-center w-5/9 relative">
                                        <img src="<?= domain ?>assets/img/download_pc.webp" alt="Bilgisayar Görseli"
                                            class="block max-w-full">
                                        <div class="arrows absolute bottom-11/12 start-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 5"
                                                class="block w-20 -mb-2.5 opacity-50">
                                                <path
                                                    d="M3.3 4.7c.4.4 1 .4 1.4 0l3-3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L4 2.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4l3 3z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 5"
                                                class="block w-20 -mb-2.5 opacity-75">
                                                <path
                                                    d="M3.3 4.7c.4.4 1 .4 1.4 0l3-3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L4 2.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4l3 3z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 5"
                                                class="block w-20 -mb-2.5">
                                                <path
                                                    d="M3.3 4.7c.4.4 1 .4 1.4 0l3-3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L4 2.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4l3 3z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-none w-4/9 flex flex-col justify-center items-start">
                                        <span class="title font-bold leading-normal text-primary block mb-4.5">
                                            2023 <br>
                                            Ürün Kataloğu
                                        </span>
                                        <a href="" class="sliding_btn" download>
                                            BÜYÜT
                                            <?= getSprite("arrow_right") ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
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