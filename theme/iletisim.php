<?php include "header.php"; ?>
<main>
    <section id="page_banner" class="mb-9.5 flex items-end max-w-full bg-cover bg-no-repeat bg-center"
        style="background-image: url(<?= domain ?>assets/img/iletisim_banner.webp)">
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
    <section id="contact_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.634132879097!2d32.54853003444979!3d37.915613606430064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d0915e99e10c63%3A0xe85892b5b779476f!2sMHT%20End%C3%BCstri%20Metal%20San%20Tic%20Ltd%20Sti%20(SKYL%C4%B0NE%20MERD%C4%B0VEN)!5e0!3m2!1sen!2str!4v1703776957394!5m2!1sen!2str"
                            width="100%" height="510" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-semibold leading-tight mt-0 mb-8">İletişim Bilgileri</h2>
                    <p class="font-light leading-normal mt-0 mb-8">
                        Fevzi Çakmak Mh. <br>
                        Milenyum Sk. No:14 <br>
                        Karatay/Konya
                    </p>
                    <a href="" class="block font-semibold text-iki-2xl leading-normal text-primary mb-8">
                        +90 332 502 21 24
                    </a>
                    <p class="font-light leading-normal my-0">Faks: +90 332 502 21 24</p>
                    <p class="font-light leading-normal my-0 mb-14.5">Mail: info@mhtendustri.com</p>
                    <nav id="contact_social_nav" class="flex items-center gap-x-10">
                        <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("youtube", "w-7 h-7 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("instagram", "w-7 h-7 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("facebook", "w-7 h-7 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("linkedin", "w-7 h-7 transition-colors transition-300") ?>
                        </a>
                        <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank" rel="me">
                            <?= getSprite("twitter", "w-7 h-7 transition-colors transition-300") ?>
                        </a>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <form action="" class="contact_page_form mt-15 flex flex-wrap">
                        <span class="font-semibold leading-tight block mb-12.5">İletişim Formu</span>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="w-full block mb-2.5">
                                    <input
                                        class="w-full block py-3 bg-transparent text-black font-light text-iki-base leading-normal"
                                        type="text" id="name" name="name" placeholder="İsim" required>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="surname" class="w-full block mb-2.5">
                                    <input
                                        class="w-full block py-3 bg-transparent text-black font-light text-iki-base leading-normal"
                                        type="text" id="surname" name="surname" placeholder="Soyisim" required>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone" class="w-full block mb-2.5">
                                    <input
                                        class="w-full block py-3 bg-transparent text-black font-light text-iki-base leading-normal"
                                        type="text" id="phone" name="phone" placeholder="Telefon">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="mail" class="w-full block mb-2.5">
                                    <input
                                        class="w-full block py-3 bg-transparent text-black font-light text-iki-base leading-normal"
                                        type="text" id="mail" name="mail" placeholder="E-Posta">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="message" class="w-full block mb-9.5">
                                    <textarea
                                        class="w-full block py-3 bg-transparent text-black font-light text-iki-base leading-normal"
                                        name="message" id="message" placeholder="Notunuz"></textarea>
                                </label>
                            </div>
                            <div class="text-end w-full">
                                <button type="submit" class="sliding_btn cursor-pointer bg-transparent border-none">
                                    GÖNDER
                                    <?= getSprite("arrow_right") ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>