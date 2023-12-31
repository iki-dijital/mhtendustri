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
    <section id="product_detail">
        <div class="container">
            <div class="row mb-13">
                <div class="col-lg-12">
                    <div class="flex items-center justify-between">
                        <h2>6 BASAMAK SKYBEST TEK PARÇALI ALÜMİNYUM MERDİVEN</h2>
                        <a href="" class="sliding_btn go_back">
                            GERİ DÖN
                            <?= getSprite("arrow_right") ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col_left">
                    <div class="tab-content variation_wrapper ">
                        <?php for ($i = 1; $i <= 14; $i++): ?>
                            <div class="tab-pane img-pane relative <?= $i == 1 ? 'active' : '' ?>" id="prod-img-<?= $i ?>"
                                role="tabpanel" aria-labelledby="prod-tab-<?= $i ?>" tabindex="0">
                                <div class="variation_sliders">
                                    <div class="blaze-slider variation_slider_<?= $i ?>">
                                        <div class="blaze-container">
                                            <div class="blaze-track-container">
                                                <div class="blaze-track">
                                                    <?php for ($j = 1; $j <= rand(5, 12); $j++): ?>
                                                        <div data-blaze-index="<?= $j ?>">
                                                            <img src="<?= domain ?>assets/img/delete_prod_<?= $j == 1 ? $i % 3 + 1 : rand(1, 3) ?>.webp"
                                                                alt="Varyasyon görseli" loading="lazy"
                                                                class="block w-full h-full object-cover object-center">
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="var_nav absolute top-1/2 start-5 flex flex-col items-center gap-y-10 z-2">
                                    <div
                                        class="prev slide_prev_btn slide_prev_<?= $i ?> cursor-pointer flex items-center select-none">
                                        <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
                                    </div>
                                    <div
                                        class="progress_wrapper progress_wrapper_<?= $i ?> flex flex-col items-center gap-y-3.5">
                                        <span id="first_var_<?= $i ?>"
                                            class="first_index first_index_<?= $i ?> text-iki-sm font-light leading-none text-primary">01</span>
                                        <div class="progress_bar progress_bar_<?= $i ?> aspect-square flex items-center">
                                            <progress value="0" max="100">Slayt
                                                durumu</progress>
                                        </div>
                                        <span id="last_var"
                                            class="last_index last_index_<?= $i ?> text-iki-sm font-light leading-none text-primary"></span>
                                    </div>
                                    <div
                                        class="next slide_next_btn slide_next_<?= $i ?> cursor-pointer flex items-center select-none">
                                        <?= getSprite("arrow_right", "fill-black w-7 h-5") ?>
                                    </div>
                                </div>
                                <a href=""
                                    class="zoom_in zoom_in_<?= $i ?> glightbox glightbox_<?= $i ?> absolute end-5 bottom-5 w-18 aspect-square rounded-full flex flex-col justify-center items-center z-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.286 12.283"
                                        class="block w-3 h-3 ml-1">
                                        <path
                                            d="M10.625.005C9.476-.012 3.89.017 2.247.017a1.219 1.219 0 1 0-.018 2.433c1.845 0 5.9-.005 5.9-.005L.407 10.167a1.194 1.194 0 0 0-.351 1.265 1.208 1.208 0 0 0 2.062.448l7.718-7.713s-.006 4.876.007 5.955a1.206 1.206 0 0 0 1.823 1.062 1.26 1.26 0 0 0 .61-1.2c0-2.773.016-5.545.011-8.318a1.917 1.917 0 0 0-.483-1.207 1.761 1.761 0 0 0-1.179-.454" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.286 12.283"
                                        class="block w-3 h-3 mr-1">
                                        <path
                                            d="M10.625.005C9.476-.012 3.89.017 2.247.017a1.219 1.219 0 1 0-.018 2.433c1.845 0 5.9-.005 5.9-.005L.407 10.167a1.194 1.194 0 0 0-.351 1.265 1.208 1.208 0 0 0 2.062.448l7.718-7.713s-.006 4.876.007 5.955a1.206 1.206 0 0 0 1.823 1.062 1.26 1.26 0 0 0 .61-1.2c0-2.773.016-5.545.011-8.318a1.917 1.917 0 0 0-.483-1.207 1.761 1.761 0 0 0-1.179-.454" />
                                    </svg>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="col-lg-7 col_right relative before-absolute pt-5 pb-6">
                    <div class="prod_code font-semibold text-xl leading-normal pb-5">
                        Ürün Kodu:
                        <strong class="text-primary font-bold">SKY A332</strong>
                    </div>
                    <div class="content_area pt-5">
                        <span class="desc_title block font-semibold leading-normal text-iki-2xl mb-4">Açıklama</span>
                        <div class="desc_content mb-5">
                            <ul>
                                <li>Özel alaşımlı alüminyum merdiven</li>
                                <li>Kaymayı önleyen özel tasarımlı basamaklar</li>
                                <li>Endüstriyel amaçlı kullanım</li>
                                <li>Güvenli korkuluk sistemi</li>
                                <li>Tekerlekler sayesinde kolay hareket edebilme</li>
                                <li>Kolay açılıp kapanabilme özelliği</li>
                                <li>Güçlendirilmiş ayak desteği</li>
                                <li>Bağlantı noktalarında özel kilit</li>
                                <li>Uzun ömürlü paslanmaz maksimum mukavemet</li>
                            </ul>
                        </div>
                        <div class="desc_certs pb-5.5 flex items-center gap-x-7.5">
                            <img src="<?= domain ?>assets/img/tuv_gs.webp" alt="TUV GS">
                            <img src="<?= domain ?>assets/img/tse.png" alt="TSE">
                            <img src="<?= domain ?>assets/img/certificate_en131.webp" alt="Certificate EN 131 Norm">
                        </div>
                    </div>
                    <div class="pt-2.5" id="">

                        <ul class="nav nav-tabs" id="variation_tabs" role="tablist">
                            <?php for ($i = 1; $i <= 14; $i++): ?>
                                <li class="nav-item w-1/7" role="presentation">
                                    <button class="block nav-link cursor-pointer pt-2.5 px-2.5 pb-1 transition-colors transition-300 <?= $i == 1 ? 'active' : '' ?>" id="prod-tab-<?= $i ?>"
                                        data-bs-toggle="tab" data-bs-target="#prod-img-<?= $i ?>" type="button" role="tab"
                                        aria-controls="prod-img<?= $i ?>"
                                        aria-selected="<?= $i == 1 ? 'true' : 'false' ?>">
                                        <img src="<?=domain?>assets/img/delete_prod_<?=$i % 3 + 1?>.webp" alt="Varyasyon başlık" loading="lazy" width="70" height="91" class="block w-full h-auto object-cover object-center mb-1">
                                        <span class="var_steps text-iki-sm font-semibold leading-normal text-primary">6 Basamak</span>
                                        <span class="var_code text-iki-sm font-ight leading-normel">SKY A332</span>
                                    </button>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mb-3.5">
                <div class="col-lg-7 offset-lg-5">
                    <div class="prod_interaction flex justify-end items-end gap-x-7.5">
                        <a href="" class="drawing flex flex-col items-end gap-y-4.5 w-2/7">
                            <img src="<?= domain ?>assets/img/svg/teknik_resim.svg" alt="Teknik resim ikon" width="52"
                                height="52" class="block w-13 aspect-square h-auto object-contain object-center">
                            <span class="sliding_btn text-end">
                                TEKNİK RESİM
                                <?= getSprite("arrow_right") ?>
                            </span>
                        </a>
                        <a href="" class="offer flex flex-col items-end gap-y-4.5 w-2/7">
                            <img src="<?= domain ?>assets/img/svg/teklif.svg" alt="Teklif ikon" width="60" height="34"
                                class="block w-15 h-auto object-contain object-center">
                            <span class="sliding_btn text-end">
                                TEKLİF İSTE
                                <?= getSprite("arrow_right") ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_technical">
        <div class="container">
            <div class="flex w-fit items-center mb-13.5 gap-x-12.5">
                <h2 class="text-iki-4xl font-semibold my-0 leading-none">TEKNİK VERİLER</h2>
                <div class="line"></div>
            </div>
            <table class="mb-5.5">
                <colgroup>
                    <col class="w-1/6">
                    <col class="w-1/6">
                    <col class="w-1/6">
                    <col class="w-1/6">
                    <col class="w-1/6">
                    <col class="w-1/6">
                </colgroup>
                <thead>
                    <tr class="bg-primary">
                        <th class="text-white font-semibold text-iki-base text-center leading-normal py-3.5 px-10">ÜRÜN
                            KODU</th>
                        <th class="text-white font-semibold text-iki-base text-center leading-normal py-3.5 px-10">
                            BASAMAK SAYISI</th>
                        <th class="text-white font-semibold text-iki-base text-center leading-normal py-3.5 px-10">
                            MERDİVEN YÜKSEKLİĞİ (M)</th>
                        <th class="text-white font-semibold text-iki-base text-center leading-normal py-3.5 px-10">*
                            ULAŞILABİLEN YÜKSEKLİK (M)</th>
                        <th class="text-white font-semibold text-iki-base text-center leading-normal py-3.5 px-10">
                            AĞIRLIK (KG)</th>
                        <th class="text-white font-semibold text-iki-base text-center leading-normal py-3.5 px-10">
                            ÖLÇÜLER (WxLxH/cm.)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <tr>
                            <td class="text-primary font-semibold text-iki-base text-center leading-normal p-2">SKY A
                                <?= 331 + $i ?>
                            </td>
                            <td class="text-black font-light text-iki-base text-center leading-normal p-2">
                                <?= rand(6, 22) ?>
                            </td>
                            <td class="text-black font-light text-iki-base text-center leading-normal p-2">
                                <?= rand(100, 999) / 100 ?>
                            </td>
                            <td class="text-black font-light text-iki-base text-center leading-normal p-2">
                                <?= rand(100, 999) / 100 ?>
                            </td>
                            <td class="text-black font-light text-iki-base text-center leading-normal p-2">
                                <?= rand(100, 999) / 100 ?>
                            </td>
                            <td class="text-black font-light text-iki-base text-center leading-normal p-2">
                                <?= rand(10, 99) ?>x
                                <?= rand(100, 999) / 100 ?>x
                                <?= rand(10, 99) / 10 ?>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <div class="desc_content technical_content mb-20">
                <p>* Kullanıcının ulaşabildiği ortalama güvenli yükseklik</p>
                <h3>TEKNİK BİLGİLER</h3>
                <ul>
                    <li>
                        Taşıyıcı Profil Ölçüleri: 63x20 mm. (T6020,T6025), 75x25 mm. (T0030,T0035,T0040,T0045,T0050),
                        100x25 mm. (T10055,T10060)
                    </li>
                    <li>
                        Basamak Profil Ölçüleri: 30x30 mm
                    </li>
                    <li>
                        Taşıma Kapasitesi Maksimum 150 Kg.
                    </li>
                    <li>
                        3m. ve üzerindeki ürünlerde denge ayağı
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="product_description" class="mb-15">
        <div class="container">
            <div class="flex w-fit items-center mb-14 gap-x-12.5">
                <h2 class="text-iki-4xl font-semibold my-0 leading-none">ÜRÜN AÇIKLAMASI</h2>
                <div class="line"></div>
            </div>
            <div class="desc_content">
                <h3>Dikey Yükseklik Ayarı:</h3>
                <p>
                    DUO merdivenler, sürgü ve kademe kilidi sistemi sayesinde dikey yükseklik ayarı sağlayabilen pratik
                    merdivenlerdir. Bu özellik, kullanıcılara istedikleri yüksekliğe ayarlama imkanı sunar ve çeşitli
                    projelerde kullanılabilir.
                </p>
                <h3>Hafif ve Taşınabilir:</h3>
                <p>
                    Merdivenlerin hafif yapısı, taşınmasının kolay olmasını sağlar. Bu özellik, çalışma alanlarında
                    hareketlilik kazandırır ve zamandan tasarruf etmenize yardımcı olur.
                </p>
                <h3>Sağlamlık ve Yüksek Taşıma Kapasitesi:</h3>
                <p>
                    DUO merdivenlerin uzun ömürlü ve sağlam olmasının nedeni, kullanılan özel dikdörtgen formdaki
                    profilin yüksek kalitesidir. Bu profil, kaymaz desenli kare profil basamakların taşıyıcı profile
                    geçme-sıkıştırma yöntemiyle sağlam bir şekilde bağlanmasıyla güçlendirilir. Sürgülü merdivenin
                    kanalında tamamen kavrayan "U" sürgü sistemi ve sağlam, kaymaz yapılı pabuç takozları da ekstra
                    destek ve dayanıklılık sağlar.
                </p>
                <h3>Dikey Yükseklik Ayarı:</h3>
                <p>
                    DUO merdivenler, sürgü ve kademe kilidi sistemi sayesinde dikey yükseklik ayarı sağlayabilen pratik
                    merdivenlerdir. Bu özellik, kullanıcılara istedikleri yüksekliğe ayarlama imkanı sunar ve çeşitli
                    projelerde kullanılabilir.
                </p>
                <h3>Hafif ve Taşınabilir:</h3>
                <p>
                    Merdivenlerin hafif yapısı, taşınmasının kolay olmasını sağlar. Bu özellik, çalışma alanlarında
                    hareketlilik kazandırır ve zamandan tasarruf etmenize yardımcı olur.
                </p>
                <h3>Sağlamlık ve Yüksek Taşıma Kapasitesi:</h3>
                <p>
                    DUO merdivenlerin uzun ömürlü ve sağlam olmasının nedeni, kullanılan özel dikdörtgen formdaki
                    profilin yüksek kalitesidir. Bu profil, kaymaz desenli kare profil basamakların taşıyıcı profile
                    geçme-sıkıştırma yöntemiyle sağlam bir şekilde bağlanmasıyla güçlendirilir. Sürgülü merdivenin
                    kanalında tamamen kavrayan "U" sürgü sistemi ve sağlam, kaymaz yapılı pabuç takozları da ekstra
                    destek ve dayanıklılık sağlar.
                </p>
                <h3>Dikey Yükseklik Ayarı:</h3>
                <p>
                    DUO merdivenler, sürgü ve kademe kilidi sistemi sayesinde dikey yükseklik ayarı sağlayabilen pratik
                    merdivenlerdir. Bu özellik, kullanıcılara istedikleri yüksekliğe ayarlama imkanı sunar ve çeşitli
                    projelerde kullanılabilir.
                </p>
                <h3>Hafif ve Taşınabilir:</h3>
                <p>
                    Merdivenlerin hafif yapısı, taşınmasının kolay olmasını sağlar. Bu özellik, çalışma alanlarında
                    hareketlilik kazandırır ve zamandan tasarruf etmenize yardımcı olur.
                </p>
                <h3>Sağlamlık ve Yüksek Taşıma Kapasitesi:</h3>
                <p>
                    DUO merdivenlerin uzun ömürlü ve sağlam olmasının nedeni, kullanılan özel dikdörtgen formdaki
                    profilin yüksek kalitesidir. Bu profil, kaymaz desenli kare profil basamakların taşıyıcı profile
                    geçme-sıkıştırma yöntemiyle sağlam bir şekilde bağlanmasıyla güçlendirilir. Sürgülü merdivenin
                    kanalında tamamen kavrayan "U" sürgü sistemi ve sağlam, kaymaz yapılı pabuç takozları da ekstra
                    destek ve dayanıklılık sağlar.
                </p>
            </div>
        </div>
    </section>
    <section id="product_images" class="mb-19">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="flex w-fit items-center mb-14 gap-x-12.5">
                        <h2 class="text-iki-4xl font-semibold my-0 leading-none">ÜRÜN AYRINTILARI</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <div class="col-lg-3">
                        <a href="<?= domain ?>assets/img/delete_prod_img_<?= $i % 5 + 1 ?>.webp"
                            class="glightbox_gallery block relative aspect-square mb-7.5 border border-solid" data-glightbox="type:image">
                            <img src="<?= domain ?>assets/img/delete_prod_img_<?= $i % 5 + 1 ?>.webp" alt="Ürün görseli"
                                loading="lazy" class="block w-full h-full object-cover object-center">
                            <div
                                class="overlay absolute z-2 top-0 left-0 w-full h-full flex justify-center items-center transition-opacity transition-300 opacity-0">
                                <span href="" class="sliding_btn">
                                    BÜYÜT
                                    <?= getSprite("arrow_right") ?>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <section id="product_documents" class="download_wrapper mb-19">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="flex w-fit items-center mb-20 gap-x-12.5">
                        <h2 class="text-iki-4xl font-semibold my-0 leading-none">DOKÜMANLAR</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="col-lg-6">
                        <div class="download_item flex pb-2">
                            <div class="flex-none flex justify-center w-3/9 relative">
                                <img src="<?= domain ?>assets/img/download_pc.webp" alt="Bilgisayar Görseli"
                                    class="block max-w-full">
                                <div class="arrows absolute bottom-full start-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 5"
                                        class="block w-9 -mb-0.5 opacity-50">
                                        <path
                                            d="M3.3 4.7c.4.4 1 .4 1.4 0l3-3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L4 2.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4l3 3z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 5"
                                        class="block w-9 -mb-0.5 opacity-75">
                                        <path
                                            d="M3.3 4.7c.4.4 1 .4 1.4 0l3-3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L4 2.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4l3 3z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 5" class="block w-9 -mb-2.5">
                                        <path
                                            d="M3.3 4.7c.4.4 1 .4 1.4 0l3-3c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L4 2.6 1.7.3C1.3-.1.7-.1.3.3c-.4.4-.4 1 0 1.4l3 3z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-none w-6/9 flex flex-col justify-between items-start pl-7.5 pb-6">
                                <span class="title font-bold leading-normal text-primary block mb-4.5">
                                    Merdiven Kullanım Kılavuzu
                                </span>
                                <a href="" class="sliding_btn" download>
                                    BÜYÜT
                                    <?= getSprite("arrow_right") ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>