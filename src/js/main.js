import { updateDirection } from './lib/updatedirection';
import { fadeSlide } from './lib/fadeslide';
import { mobileMenu } from './lib/common';

import BlazeSlider from 'blaze-slider';
import GLightbox from 'glightbox';
import Tab from 'bootstrap/js/dist/tab';

mobileMenu();
updateDirection();

function generateRandomDuration(min, max) {
  const minMultiple = Math.ceil(min / 500);
  const maxMultiple = Math.floor(max / 500);
  const randomMultiple =
    Math.floor(Math.random() * (maxMultiple - minMultiple + 1)) +
    minMultiple;

  return randomMultiple * 500;
}

/* ------ Ana Sayfa ------ */

const homeBannerFade = document.getElementById('home_fade');

if (homeBannerFade) {
  const bannerSlideProgress = document.getElementById(
    'banner_slide_progress'
  );
  const homeBannerFade = document.getElementById('home_fade');
  const last_page = document.querySelector('#home_banner #last_page');

  homeBannerFade.addEventListener('slideInit', (e) => {
    last_page.textContent =
      e.detail.totalLength < 10
        ? `0${e.detail.totalLength}`
        : e.detail.totalLength;
    bannerSlideProgress.value =
      ((e.detail.index + 1) / e.detail.totalLength) * 100;
  });

  fadeSlide('home_fade', {
    autoplay: true,
    nav: true,
    delay: generateRandomDuration(2000, 4000),
  });

  homeBannerFade.addEventListener('slideChange', (e) => {
    bannerSlideProgress.value =
      ((e.detail.index + 1) / e.detail.totalLength) * 100;
  });
}

const homeCategoriesBlazeElem = document.getElementById(
  'home_categories_blaze'
);

if (homeCategoriesBlazeElem) {
  const nextSlide = document.querySelector('#home_categories .next');
  const prevSlide = document.querySelector('#home_categories .prev');
  const slideProgress = document.querySelector(
    '#categories_slide_progress'
  );
  let getBlaze = new BlazeSlider(homeCategoriesBlazeElem, {
    all: {
      slidesToShow: 3,
      slidesToScroll: 3,
      enableAutoplay: true,
      autoplayInterval: generateRandomDuration(3000, 5000),
      slideGap: '0px',
    },
    '(max-width: 991px)': {
      slidesToShow: 2,
      slidesToScroll: 2,
    },
  });

  document.querySelector('#home_categories #last_page').textContent =
    getBlaze.states.length < 10
      ? `0${getBlaze.states.length}`
      : getBlaze.states.length;

  slideProgress.value = (1 / getBlaze.states.length) * 100;

  getBlaze.onSlide((pageIndex) => {
    slideProgress.value =
      ((pageIndex + 1) / getBlaze.states.length) * 100;
  });

  nextSlide.addEventListener('click', () => {
    getBlaze.next();
  });

  prevSlide.addEventListener('click', () => {
    getBlaze.prev();
  });

  homeCategoriesBlazeElem
    .querySelectorAll('a')
    .forEach((slideItem) => {
      slideItem.querySelector('.overlay').style.backgroundColor =
        slideItem.dataset.color;
    });
}

const homeMediaBlazeElem = document.getElementById(
  'home_media_blaze'
);

if (homeMediaBlazeElem) {
  const nextSlide = document.querySelector('#home_media .next');
  const prevSlide = document.querySelector('#home_media .prev');
  const slideProgress = document.querySelector(
    '#media_slide_progress'
  );
  let getBlaze = new BlazeSlider(homeMediaBlazeElem, {
    all: {
      slidesToShow: 1,
      slidesToScroll: 1,
      enableAutoplay: true,
      autoplayInterval: generateRandomDuration(3000, 5000),
      slideGap: '0px',
    },
  });

  document
    .querySelectorAll('#home_media_blaze .slide-item')
    .forEach((slideItem) => {
      slideItem.querySelector('.content').style.backgroundColor =
        slideItem.dataset.color;
    });

  document.querySelector('#home_media #last_page').textContent =
    getBlaze.states.length < 10
      ? `0${getBlaze.states.length}`
      : getBlaze.states.length;

  slideProgress.value = (1 / getBlaze.states.length) * 100;

  getBlaze.onSlide((pageIndex) => {
    slideProgress.value =
      ((pageIndex + 1) / getBlaze.states.length) * 100;
  });

  nextSlide.addEventListener('click', () => {
    getBlaze.next();
  });

  prevSlide.addEventListener('click', () => {
    getBlaze.prev();
  });
}

const homeBrandsBlazeElem = document.getElementById(
  'home_brands_blaze'
);

if (homeBrandsBlazeElem) {
  const nextSlide = document.querySelector('#home_brands .next');
  const prevSlide = document.querySelector('#home_brands .prev');
  const brandsBlaze = new BlazeSlider(homeBrandsBlazeElem, {
    all: {
      slidesToShow: 4,
      slideGap: '30px',
      enableAutoplay: true,
      autoplayInterval: generateRandomDuration(3000, 5000),
    },
    '(max-width: 991px)': {
      slidesToShow: 2,
    },
  });

  nextSlide.addEventListener('click', () => {
    brandsBlaze.next();
  });
  prevSlide.addEventListener('click', () => {
    brandsBlaze.prev();
  });
}

/* ------ End Ana Sayfa ------ */

/* ------ Belgeler Sayfası ------ */

const docsWrapper = document.querySelector('.docs_wrapper');

docsWrapper && new GLightbox();

/* ------ End Belgeler Sayfası ------ */

/* ------ Foto Galeri Sayfası */

const photosWrapper = document.querySelector('.photo_gallery');

photosWrapper && new GLightbox();

/* ------ End Foto Galeri Sayfası */

/* ------ Ürün Detay ------ */

const tabList = document.querySelectorAll('#variation_tabs button');

if (tabList) {
  const blazeList = [];
  const tabBlazeElem = document.querySelectorAll(
    '.variation_sliders .blaze-slider'
  );
  tabBlazeElem.forEach((elem, index) => {
    let hrefItem = document.querySelector(`.zoom_in_${index + 1}`);
    let getlightbox = new GLightbox({
      elements: Array.from(elem.querySelectorAll('img')).map(
        (img) => ({
          href: img.src,
          type: 'image',
        })
      ),
      selector: `.glightbox_${index + 1}`,
    });
    function openLightboxWithImage(getLink) {
      hrefItem.setAttribute('href', getLink);
      getlightbox.reload();
    }

    hrefItem.addEventListener('click', (event) => {
      event.preventDefault();
      getlightbox.openAt(0);
    });
    const elemSlider = new BlazeSlider(elem, {
      all: {
        slidesToShow: 1,
        slideGap: '0px',
      },
    });
    blazeList.push(elemSlider);

    window.addEventListener('load', () => {
      const imgItem = elem.querySelector(
        'div[data-blaze-index="1"] img'
      );
      openLightboxWithImage(imgItem.src);
    });

    document.querySelector(`.last_index_${index + 1}`).textContent =
      elemSlider.states.length < 10
        ? `0${elemSlider.states.length}`
        : elemSlider.states.length;

    document
      .querySelector(`.slide_next_${index + 1}`)
      .addEventListener('click', () => {
        elemSlider.next();
      });

    document
      .querySelector(`.slide_prev_${index + 1}`)
      .addEventListener('click', () => {
        elemSlider.prev();
      });

    document.querySelector(
      `.progress_bar_${index + 1} progress`
    ).value =
      ((elemSlider.stateIndex + 1) / elemSlider.states.length) * 100;

    elemSlider.onSlide((pageIndex) => {
      document.querySelector(
        `.progress_bar_${index + 1} progress`
      ).value = ((pageIndex + 1) / elemSlider.states.length) * 100;

      const imgItem = elem.querySelector(
        `div[data-blaze-index="${pageIndex + 1}"] img`
      );
      openLightboxWithImage(imgItem.src);
    });
  });
  tabList.forEach((triggerBtn, index) => {
    const tabTrigger = new Tab(triggerBtn);

    triggerBtn.addEventListener('click', (event) => {
      event.preventDefault();
      tabTrigger.show();
    });

    triggerBtn.addEventListener('shown.bs.tab', (event) => {
      blazeList[index].refresh();
    });

    triggerBtn.addEventListener('hidden.bs.tab', (event) => {
      blazeList[index].destroy();
    });
  });
}

const productImages = document.getElementById('product_images');

productImages && new GLightbox({
  selector: '.glightbox_gallery'
});

/* ------ End Ürün Detay */
