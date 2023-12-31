<?php include "header.php"; ?>
<main>
    <section id="page_banner" class="mb-9.5 flex items-end max-w-full bg-cover bg-no-repeat bg-center"
        style="background-image: url(<?= domain ?>assets/img/urunler_banner.webp)">
        <div class="container text-center mt-auto">
            <h1 class="text-5xl font-semibold leading-normal text-white mt-0 mb-3">Ürünler</h1>
            <nav id="page_breadcrumb" class="flex justify-center items-center">
                <p class="relative text-white text-iki-sm leading-normal select-none">
                    Ana Sayfa
                </p>
                <p class="relative text-white text-iki-sm leading-normal select-none">
                    Ürünler
                </p>
            </nav>
        </div>
    </section>
    <section id="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Alüminyum Merdiven Grubu</h2>
                    <div class="products_listing pb-25">
                            <div class="row">
                                <?php
                                $product_titles = [
                                    "SKYBEST TEK PARÇALI ALÜMİNYUM MERDİVEN",
                                    "SKYBEST İKİ PARÇALI SÜRGÜLÜ ALÜMİNYUM MERDİVEN",
                                    "SKYBEST İKİ PARÇALI A TİPİ SÜRGÜLÜ ALÜMİNYUM MERDİVEN"
                                ];
                                for ($i = 1; $i <= 12; $i++): ?>
                                    <div class="col-lg-4">
                                        <a href="" class="block relative text-black pb-7 mb-7.5">
                                            <div class="img relative z-1 border border-solid mb-6">
                                                <img src="<?= domain ?>assets/img/delete_prod_<?= rand(1, 3) ?>.webp"
                                                    alt="Ürün görseli" loading="lazy" width="330" height="430" class="block w-full h-auto object-cover object-center">
                                            </div>
                                            <span class="title relative z-3 text-iki-base font-semibold block leading-normal">
                                                <?=$product_titles[rand(0,2)]?>
                                            </span>
                                            <div
                                                class="overlay absolute z-2 top-0 left-0 w-full h-full flex justify-center items-center transition-opacity transition-300 opacity-0">
                                                <span href="" class="sliding_btn">
                                                    İNCELE
                                                    <?= getSprite("arrow_right") ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                </div>
                <div class="col-lg-3 pt-19">
                    <aside class="relative after-absolute w-full pr-3 flex flex-col justify-end">
                        <span class="text-5xl font-semibold leading-normal w-full mr-8.5">Menü</span>
                        <div class="flex flex-col items-end pr-6">
                            <a href="kalitepolitikamiz.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Alüminyum
                                Merdiven Grubu</a>
                            <a href="kvkk.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Alüminyum
                                İskele Grubu</a>
                            <a href="kvkk.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Endüstriyel
                                Platform Grubu</a>
                            <a href="kvkk.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Ev
                                Tipi Merdiven Grubu</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>