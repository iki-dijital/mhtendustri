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
                        <h2>Fotoğraflar</h2>
                        <div class="photo_gallery">
                            <div class="row">
                                <?php for ($i = 1; $i <= 24; $i++):
                                    $x = rand(1, 4);
                                    ?>
                                    <div class="col-lg-4">
                                        <a href="<?= domain ?>assets/img/delete_foto_<?= $x ?>.webp"
                                            class="glightbox block relative">
                                            <img src="<?= domain ?>assets/img/delete_foto_<?= $x ?>.webp"
                                                alt="Fotoğraflar başlık" width="330" height="230"
                                                class="block w-full h-auto object-cover object-center" loading="lazy">
                                            <div
                                                class="overlay absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition-opacity transition-300">
                                                <span class="sliding_btn">
                                                    BÜYÜT
                                                    <?= getSprite("arrow_right") ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
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