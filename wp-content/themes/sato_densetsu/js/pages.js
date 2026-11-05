"use strict";

// =========================================
// 沿革スライダー（about-us ページ）
// =========================================

const historySlider = document.querySelector('.history__slider');
if (historySlider) {
    const slideCount = historySlider.querySelectorAll('.swiper-slide').length;

    // スライド枚数が表示枚数以下のときはスライダーUIを無効化する
    // SP: 1枚以下、PC: 3枚以下（slidesPerView の整数部分と合わせる）
    const shouldHideSliderUI = () => {
        const isPC = window.innerWidth >= 768;
        return isPC ? slideCount <= 3 : slideCount <= 1;
    };

    const swiper = new Swiper('.history__slider', {
        slidesPerView: 1.5,
        spaceBetween: 30,
        navigation: {
            prevEl: '.history__btn-prev',
            nextEl: '.history__btn-next',
        },
        scrollbar: {
            el: '.history__scrollbar',
            draggable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 3.5,
                spaceBetween: 50,
            },
        },
        on: {
            init(sw) {
                updateSliderUI(sw);
            },
            resize(sw) {
                updateSliderUI(sw);
            },
        },
    });

    // ナビ・スクロールバーの表示/非表示を切り替える
    function updateSliderUI(sw) {
        const hide = shouldHideSliderUI();
        const nav = document.querySelector('.history__nav');
        const scrollbar = document.querySelector('.history__scrollbar');

        if (nav) nav.style.display = hide ? 'none' : '';
        if (scrollbar) scrollbar.style.visibility = hide ? 'hidden' : 'visible';

        // スライダー無効時はスライドをセンタリング
        sw.wrapperEl.style.justifyContent = hide ? 'center' : 'flex-start';

        // 有効時のみ Swiper のレイアウトを再計算（無効時に呼ぶと justifyContent が上書きされる）
        if (!hide) sw.update();
    }
}

// =========================================
// FAQ アコーディオン
// =========================================

document.addEventListener('DOMContentLoaded', () => {
    const questions = document.querySelectorAll('.faq__question');

    const closeItem = (btn) => {
        const answer = btn.closest('.faq__item').querySelector('.faq__answer');
        btn.setAttribute('aria-expanded', 'false');
        answer.style.height = getComputedStyle(answer).height;
        requestAnimationFrame(() => {
            answer.style.height = '0';
        });
    };

    const openItem = (btn) => {
        const answer = btn.closest('.faq__item').querySelector('.faq__answer');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.height = answer.scrollHeight + 'px';
        answer.addEventListener('transitionend', (e) => {
            if (e.propertyName === 'height' && btn.getAttribute('aria-expanded') === 'true') {
                answer.style.height = 'auto';
            }
        }, { once: true });
    };

    questions.forEach(btn => {
        btn.addEventListener('click', () => {
            const isOpen = btn.getAttribute('aria-expanded') === 'true';

            questions.forEach(other => {
                if (other !== btn && other.getAttribute('aria-expanded') === 'true') {
                    closeItem(other);
                }
            });

            isOpen ? closeItem(btn) : openItem(btn);
        });
    });
});
