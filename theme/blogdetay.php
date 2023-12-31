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
                        <h2>2023 FUARINDA YERİMİZİ ALDIK</h2>
                        <img src="<?= domain ?>assets/img/delete_blog_img.webp" alt="Blog görseli">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Consectetur a erat nam at. Netus et malesuada fames ac
                            turpis. Dignissim enim sit amet venenatis urna cursus eget nunc scelerisque. Felis donec et
                            odio pellentesque diam. Erat nam at lectus urna. Eu mi bibendum neque egestas congue
                            quisque. Orci a scelerisque purus semper eget duis at. Vel elit scelerisque mauris
                            pellentesque pulvinar pellentesque habitant morbi tristique. Auctor neque vitae tempus quam
                            pellentesque nec nam aliquam. Gravida neque convallis a cras. Urna porttitor rhoncus dolor
                            purus non enim praesent elementum facilisis. Non enim praesent elementum facilisis leo vel.
                            Eu non diam phasellus vestibulum lorem sed risus ultricies tristique.
                        </p>
                        <p>
                            Id semper risus in hendrerit. Id aliquet risus feugiat in ante metus dictum at tempor.
                            Condimentum vitae sapien pellentesque habitant morbi tristique senectus. Id venenatis a
                            condimentum vitae sapien pellentesque habitant morbi tristique. Aliquam ut porttitor leo a
                            diam sollicitudin tempor id eu. Blandit volutpat maecenas volutpat blandit aliquam. Viverra
                            aliquet eget sit amet tellus. Id venenatis a condimentum vitae sapien. Enim tortor at auctor
                            urna nunc id cursus metus. Proin nibh nisl condimentum id. Et molestie ac feugiat sed lectus
                            vestibulum mattis ullamcorper.
                        </p>
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