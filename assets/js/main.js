(function () {
    'use strict';

    /* Mobile nav toggle */
    var toggle = document.getElementById('nav-toggle');
    var nav = document.getElementById('main-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.classList.toggle('is-open', open);
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    /* Header shadow + back-to-top visibility on scroll */
    var header = document.getElementById('site-header');
    var backToTop = document.getElementById('back-to-top');
    window.addEventListener('scroll', function () {
        var scrolled = window.scrollY > 40;
        if (header) header.style.boxShadow = scrolled ? '0 6px 20px rgba(15,35,65,.08)' : 'none';
        if (backToTop) backToTop.classList.toggle('is-visible', window.scrollY > 500);
    });
    if (backToTop) {
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* Scroll-reveal animations (progressive enhancement — see style.css) */
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
        document.documentElement.classList.add('js-reveal-ready');
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { io.observe(el); });
    }

    /* Gallery lightbox */
    var galleryItems = Array.prototype.slice.call(document.querySelectorAll('.gallery-item'));
    if (galleryItems.length) {
        var lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML =
            '<button type="button" class="lightbox-close" aria-label="Close">&times;</button>' +
            '<button type="button" class="lightbox-nav lightbox-prev" aria-label="Previous"></button>' +
            '<figure><img src="" alt=""><figcaption></figcaption></figure>' +
            '<button type="button" class="lightbox-nav lightbox-next" aria-label="Next"></button>';
        document.body.appendChild(lightbox);

        var lbImg = lightbox.querySelector('img');
        var lbCaption = lightbox.querySelector('figcaption');
        var prevBtn = lightbox.querySelector('.lightbox-prev');
        var nextBtn = lightbox.querySelector('.lightbox-next');
        var closeBtn = lightbox.querySelector('.lightbox-close');
        var currentIndex = 0;

        function renderArrow(el, dir) {
            el.innerHTML = '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>';
        }
        renderArrow(prevBtn); renderArrow(nextBtn);
        closeBtn.innerHTML = '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="M6 6l12 12"/></svg>';

        function openLightbox(index) {
            currentIndex = index;
            var item = galleryItems[index];
            lbImg.src = item.getAttribute('data-full');
            lbImg.alt = item.getAttribute('data-caption') || '';
            lbCaption.textContent = item.getAttribute('data-caption') || '';
            lightbox.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }
        function closeLightbox() {
            lightbox.classList.remove('is-open');
            document.body.style.overflow = '';
        }
        function showRelative(delta) {
            currentIndex = (currentIndex + delta + galleryItems.length) % galleryItems.length;
            openLightbox(currentIndex);
        }

        galleryItems.forEach(function (item, index) {
            item.addEventListener('click', function () { openLightbox(index); });
        });
        closeBtn.addEventListener('click', closeLightbox);
        prevBtn.addEventListener('click', function () { showRelative(-1); });
        nextBtn.addEventListener('click', function () { showRelative(1); });
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) closeLightbox();
        });
        document.addEventListener('keydown', function (e) {
            if (!lightbox.classList.contains('is-open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showRelative(-1);
            if (e.key === 'ArrowRight') showRelative(1);
        });
    }

    /* Contact form: prevent duplicate submits */
    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function () {
            var btn = contactForm.querySelector('button[type="submit"]');
            if (btn) {
                btn.disabled = true;
                btn.style.opacity = '.7';
            }
        });
    }
})();
