"use strict";

// ==============================
// FV 装飾パララックス
// ==============================
document.addEventListener('DOMContentLoaded', () => {
    const deco = document.getElementById('fv-deco');
    const fv = document.querySelector('.fv, .lower-fv');
    const banners = document.querySelector('.footer-banners');
    if (!deco || !fv || !banners) return;

    const update = () => {
        const scrollY = window.scrollY;
        const fvTop = fv.getBoundingClientRect().top + scrollY;
        const bannersBottom = banners.getBoundingClientRect().bottom + scrollY;
        const inRange = scrollY + window.innerHeight >= fvTop && scrollY <= bannersBottom;
        deco.style.visibility = inRange ? 'visible' : 'hidden';
    };

    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();
});

// ==============================
// ハンバーガーメニュー
// ==============================
document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.querySelector('#btn_spmenu');
    const closeBtn = document.querySelector('#btn_spmenu_close');
    const menu = document.querySelector('#sp-menu');
    const overlay = document.querySelector('#sp-menu-overlay');
    const menuLinks = document.querySelectorAll('#sp-menu a');

    if (!openBtn || !menu) return;

    const openMenu = () => {
        const scrollY = window.scrollY;
        menu.classList.add('is-open');
        overlay.classList.add('is-open');
        openBtn.setAttribute('aria-expanded', 'true');
        menu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollY}px`;
        document.body.style.width = '100%';
    };

    const closeMenu = () => {
        const scrollY = Math.abs(parseInt(document.body.style.top, 10) || 0);
        menu.classList.remove('is-open');
        overlay.classList.remove('is-open');
        openBtn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.width = '';
        window.scrollTo({ top: scrollY, behavior: 'instant' });
    };

    openBtn.addEventListener('click', openMenu);
    closeBtn && closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    menuLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && menu.classList.contains('is-open')) {
            closeMenu();
        }
    });
});

// ── ページトップ ──
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('page-top');
    if (!btn) return;

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    const banners = document.querySelector('.footer-banners');
    if (!banners) return;

    const defaultBottom = 5;
    const showThreshold = 300;

    const showBtn = () => {
        btn.style.opacity = '1';
        btn.style.pointerEvents = 'auto';
    };

    const hideBtn = () => {
        btn.style.opacity = '0';
        btn.style.pointerEvents = 'none';
    };

    const updatePosition = () => {
        const bannersBottom = banners.getBoundingClientRect().bottom;
        const viewportHeight = window.innerHeight;

        if (bannersBottom < viewportHeight) {
            btn.style.bottom = (viewportHeight - bannersBottom + defaultBottom) + 'px';
        } else {
            btn.style.bottom = defaultBottom + 'px';
        }

        if (window.scrollY >= showThreshold) {
            showBtn();
        } else {
            hideBtn();
        }
    };

    window.addEventListener('scroll', updatePosition, { passive: true });
    window.addEventListener('resize', updatePosition);
    hideBtn();
});

// ── カーテンオープンアニメーション ──
document.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll('.curtain-reveal');
    if (!targets.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    targets.forEach(el => observer.observe(el));
});

// ── スクロールアニメーション ──
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll('.fadeIn, .fadeInUp').forEach(function (el) {
        observer.observe(el);
    });
});
