<?php include "header.php"; ?>
<main>
    <section id="page_banner" class="mb-9.5 flex items-end max-w-full bg-cover bg-no-repeat bg-center"
        style="background-image: url(<?= domain ?>assets/img/kurumsal_banner.webp)">
        <div class="container text-center mt-auto">
            <h1 class="text-5xl font-semibold leading-normal text-white mt-0 mb-3">Bizi Tanıyın</h1>
            <nav id="page_breadcrumb" class="flex justify-center items-center">
                <p class="relative text-white text-iki-sm leading-normal select-none">
                    Ana Sayfa
                </p>
                <p class="relative text-white text-iki-sm leading-normal select-none">
                    Bizi Tanıyın
                </p>
            </nav>
        </div>
    </section>
    <section id="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="page_content pb-16">
                        <h2>Hakkımızda</h2>
                        <img src="<?= domain ?>assets/img/delete_mht_fabrika.webp" alt="MHT fabrika">
                        <h3><strong>MHT</strong> ENDÜSTRİ METAL</h3>
                        <p>
                            2016 yılında Skyline Merdiven ve Alia Ütü Masası ve Kurutmalık markaları ile ticari hayatına
                            başlayan MHT Endüstri, 2019 yılında yaptığı yeni yatırımlarla Alüminyum merdivenlerin
                            üretimine de başlamıştır.
                        </p>
                        <p>
                            Kalite ve müşteri memnuniyeti odaklı ticari anlayışını, Ar-Ge çalışmaları ve müşteri
                            beklentileriyle bütünleştirerek büyük bir titizlik ve özveri ile üretimine de
                            yansıtmaktadır.
                        </p>
                        <p>
                            Endüstriye Merdivenler, iskele sistemleri, Profil merdivenler ve Ev tipi merdivenlerin
                            imalatı ve satışı ile birlikte ütü masası ve kurutmalıkların toptan satışını da
                            gerçekleştirmektedir.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 pt-19">
                    <aside class="relative after-absolute w-full pr-3 flex flex-col justify-end">
                        <span class="text-5xl font-semibold leading-normal w-full mr-8.5">Menü</span>
                        <div class="flex flex-col items-end pr-6">
                            <a href="hakkimizda.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">Hakkımızda</a>
                            <a href="kvkk.php"
                                class="inline-block text-end font-semibold text-iki-base text-black leading-normal py-3">KVKK</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>